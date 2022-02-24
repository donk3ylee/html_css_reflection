<?php

function getRealName($name){
    switch ($name){
    case 'formName':
        return "Your Name";

    case 'formCompanyName':
        return "Company Name";
    
    case 'formEmail':
        return "Your Email";
    
    case 'formTelephone':
        return "Your Telephone";

    case 'formSubject':
        return "The Subject Line";
    
    case 'formMessage':
        return "Message";
    default:
        return null;
    }

}