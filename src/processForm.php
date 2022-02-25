<?php
include_once( __DIR__ ."./DB.php");
include_once( __DIR__ ."./dotenv.php");
include_once(__DIR__ .'./processForm.functions.php');
session_start();

// START send form data back to repopulate the contact form
$form_data = array();
foreach($_POST as $name => $value){   
    $_SESSION['form_data'][$name] = $value;
}
// END send form data back to repopulate the contact form

// START check for empty status for each required field
$errors = array();
foreach($_POST as $name => $value){
    if(empty($value)){
        if($name !="companyName"){
            array_push($errors, getRealName($name) ." is a required field and needs to be filled out.");
        }
    }
}
if (count($errors) != 0){
    $_SESSION['errors'] = $errors;
    header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"] .'/../../contact.php#error_target');
    exit;
}
// END check for empty status for each required field

// START validate the email and telephone inputs
$validation_errors = array();
$results = array();
$results['formEmail'] = filter_var($_POST['formEmail'], FILTER_VALIDATE_EMAIL);

// For some reason I can't get the preg_match() to return anything other than false. The regular expression is correct.
// and it didn't work for the filter_input_array() either with the correct syntax? Commented the check out.

// $regexp = "(?:(\(?(?:0(?:0|11)\)?[\s-]?\(?|\+?)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|\(?0)((?:\d{5}\)?[\.\s-]?\d{4,5})|(?:\d{4}\)?[\.\s-]?(?:\d{3}[\.\s-]?\d{3}))|(?:\d{4}\)?[\.\s-]?(?:\d{5}))|(?:\d{3}\)?[\.\s-]?\d{3}[\.\s-]?\d{3,4})|(?:\d{2}\)?[\.\s-]?\d{4}[\.\s-]?\d{4}))(?:[\s-]?((?:x|ext[\.\s]*|\#)\d{3,4})?)";
// $results['formTelephone'] = preg_match($regexp, $_POST['formTelephone']);

foreach($results as $name => $value){
    if($value == FALSE){
        array_push($validation_errors, "<p>". getRealName($name) ." is not the correct format please check.</p>");
    }
}

if (count($validation_errors) != 0){
    $_SESSION['errors'] = $validation_errors;
    header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"] .'/../../contact.php#error_target');
    exit;
}
// END validate the email and telephone inputs

// START Sanitize post inputs and add them to the database
$filter = array(
    "formName" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "formCompanyName" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "formEmail" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "formTelephone" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "formSubject" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "formMessage" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "formConsent" => FILTER_SANITIZE_FULL_SPECIAL_CHARS
);

$input = filter_input_array(INPUT_POST, $filter);

try{

    $db = new DB;
    $conn = $db->get_connection();
    $query = "INSERT INTO contacts (name, companyName, email, telephone, subject, message, consent) 
                VALUES(:name, :companyName, :email, :telephone, :subject, :message, :consent)";
    $result = $conn->prepare($query);
    $result->bindParam(':name', $input['formName']);
    $result->bindParam(':companyName', $input['formCompanyName']);
    $result->bindParam(':email', $input['formEmail']);
    $result->bindParam(':telephone', $input['formTelephone']);
    $result->bindParam(':subject', $input['formSubject']);
    $result->bindParam(':message', $input['formMessage']);
    ( $input['formConsent'] == 'on' ) ?  $input['formConsent'] = TRUE : $input['formConsent'] = FALSE;
    $result->bindParam(':consent', $input['formConsent']);
    if($result->execute()){
        $_SESSION['success'] = "Thank you for leaving a message. I will get back to you at my earliest convenience";
        unset($_SESSION['form_data']);
        header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"] .'/../../contact.php#success_target');
        exit;
    } else {
        $_SESSION['error'] = "Something went wrong. I'm sorry but you did not leave a message this time please try again.";
        header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"] .'/../../contact.php#error_target');
        exit;
    }

} catch (PDOException $e) {
    throw $e;
}

// END Sanitize post inputs and add them to the database