<?php

include 'functions.php';

$message = requestGet('message');

if ($_POST) {
    if (formIsValid()) {
        // do stuff
        $message = 'YAY!!';
        redirect('/form?message=' . $message);
    } 
    // no else because redirect calls die();
    
    // tell user that form is invlalid
    $message = 'Form is not valid';
}

include 'layout.phtml';




