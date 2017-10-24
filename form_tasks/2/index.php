<?php
header('Content-type: text/html; charset=utf-8');

include 'functions.php';

$message = requestGet('message');
$words = requestGet('words');

$formValues = [
    'words_1' => requestPost('words_1')
];


if ($_POST) {
    
    if (formIsValid()) {
        // do stuff
        $message = 'YAY!!';
        
        
        $words = getTopWords($formValues['words_1']);
        $words = implode(',', $words);
        
        
        $formValues['words_1'] = null;
        
        // redirect("/form_tasks/1?words={$words}&message={$message}");
    } 
    // no else because redirect calls die();
    
    // tell user that form is invlalid
    $message = 'Form is not valid';
}

include 'layout.phtml';




