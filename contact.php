<?php 
session_start();
include_once( __DIR__ .'/header.php');


function display_errors(){
    if(isset($_SESSION['errors'])){
        echo '<div class="errors" id="error_target">';
        foreach($_SESSION['errors'] as $error){
            echo '<p>'. $error .'</p>';
        }
        echo'</div>';
    }
}

function paste_value($name){
    if(isset($_SESSION['form_data'])){
        return $_SESSION['form_data'][$name];
    }
}

function display_success(){
    if(isset($_SESSION['success'])){
        echo '<div class="success" id="success_target"><p>'. $_SESSION['success'] .'</p></div>';
    }
}
session_destroy();
?>
<main>
    <div class="contact-page-wrapper">
        <div class="page">
            <h1 class="main-title">Our Offices</h1>
            <div class="office-card-container">
                <div class="card">
                    <img class="image" src="img/contact_page/cambridge.jpg">
                    <div class="content">
                        <h2 class="title">Cambridge Office</h2>
                        <pre class="address">
Unit 1.28,
St John's Innovation Centre,
Cowley Road, Milton,
Cambridge,
CB4 0WS
                        </pre>
                        <div class="telephone">
                        01223 37 57 72
                        </div>
                        <button type="submit" class="submit">View More</button>
                    </div>
                    <div class="map" id="cambridge-map"></div>
                </div>
                <div class="card">
                    <img class="image" src="img/contact_page/wymondham.jpg">
                    <div class="content">
                        <h2 class="title">Wymondham Office</h2>
                        <pre class="address">
Unit 15,
Penfold Drive,
Gateway 11 Business Park,
Wymondham, Norfolk,
NR18 0WZ
                        </pre>
                        <div class="telephone">
                        01603 70 40 20
                        </div>
                        <button type="submit" class="submit">View More</button>
                    </div>
                    <div class="map" id="wymondham-map"></div>
                </div>
                <div class="card">
                    <img class="image" src="img/contact_page/yarmouth-2.jpg">
                    <div class="content">
                        <h2 class="title">Yarmouth Office</h2>
                        <pre class="address">
Suite F23,
Beacon Innovation Centre,
Beacon Park, Gorleston,
Great Yarmouth, Norfolk,
NR31 7RA
                        </pre>
                        <div class="telephone">
                        01493 60 32 04
                        </div>
                        <button type="submit" class="submit">View More</button>
                    </div>
                    <div class="map" id="yarmouth-map"></div>
                </div>
            </div>
            <div class="form-container">
                <form class="form" id="form_target" action="src/processForm.php" method="post">
                    
                    <?= display_errors() ?>
                    <?= display_success() ?>

                    <label for="form-name" class="dynamic-width">Your Name<span class="required">*</span><br>
                    <input type="text" name="formName" id="form-name" value="<?= paste_value('formName') ?>">
                    <!-- required email tel taken out to allow server side validation-->
                    </label>

                    <label for="form-companyName" class="dynamic-width">Company Name<br>
                    <input type="text" name="formCompanyName" id="form-companyName" value="<?= paste_value('formCompanyName') ?>">
                    </label>

                    <label for="form-email" class="dynamic-width">Your Email<span class="required">*</span><br>
                    <input type="text" name="formEmail" id="form-email" value="<?= paste_value('formEmail') ?>">
                    </label>

                    <label for="form-telephone" class="dynamic-width">Your Telephone Number<span class="required">*</span><br>
                    <input type="text" name="formTelephone" id="form-telephone" value="<?= paste_value('formTelephone') ?>">
                    </label>

                    <label for="form-subject">Subject<span class="required">*</span><br>
                    <input type="text" name="formSubject" id="form-subject" value="<?= paste_value('formSubject') ?>">
                    </label>

                    <label for="form-message">Message<span class="required">*</span><br>
                    <textarea name="formMessage" id="form-message" ><?= paste_value('formMessage') ?></textarea>
                    </label><br>
        
                    <label for="marketing-consent" class="make-pretty-checkbox">
                        <input type="checkbox" id="marketing-consent" name="formConsent"></input>
                        <span class="checkmark"></span>
                        <span class="description">
                            Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data.
                        </span>
                    </label>
        
                    <input type="submit" id="form-submit" value="Send Enquiry">
                </form>
            </div>
        </div>
    </div>
    <?php include_once( __DIR__ .'./newsletterSignup.php') ?>
</main>
<?php include_once( __DIR__ .'./footer.php') ?>