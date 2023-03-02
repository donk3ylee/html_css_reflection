<?php
include_once($_SERVER['DOCUMENT_ROOT'] ."/src/DB.php");
include_once($_SERVER['DOCUMENT_ROOT'] ."/src/dotenv.php");

// selecting
try{

    $db = new DB;
    $conn = $db->get_connection();
    $query = "SELECT * FROM authors";
    $data = $conn->query($query);

} catch (PDOException $e) {
    throw $e;
}

foreach($data as $row){
    echo "<h4>". $row['name'] ."</h4>";
    echo "<img src=\"". $row['portrait_url'] ."\" />";
}



// inserting
// $name = "Joe Bloggs";
// $url = "someimage.jpg";

// try{

//     $query = "INSERT INTO authors (name, portrait_url) VALUES(:name, :portrait_url)";
//     $result = $conn->prepare($query);
//     $result->bindParam(':name', $name);
//     $result->bindParam(':portrait_url', $url);
//     if($result->execute()){
//         echo "row inserted";
//     }

// } catch (PDOException $e) {

//     throw $e;
    
// }
