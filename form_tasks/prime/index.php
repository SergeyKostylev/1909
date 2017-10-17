<?php

include 'functions.php';

$message = requestGet('message');

if ($_POST) {
    if (formIsValid()) {
        
        $res = isPrime(requestPost('number'));
        $message = requestPost('number') . " is ";
        
        $message .= $res ? 'prime' : 'not prime';
        redirect('/form_tasks/prime?message=' . $message);
    } 
    // no else because redirect calls die();
    
    // tell user that form is invlalid
    $message = 'Form is not valid';
}

include 'layout.phtml';




