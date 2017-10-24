<?php

include 'functions.php';

$message = requestGet('message');
$words = requestGet('words');

$formValues = [
    'words_1' => requestPost('words_1'),
    'words_2' => requestPost('words_2')
];


if ($_POST) {
    if (formIsValid()) {
        // do stuff
        $message = 'YAY!!';
        
        $words = getCommonWords(requestPost('words_1'), requestPost('words_2'));
        $words = implode(',', $words);
        $formValues['words_1'] = $formValues['words_2'] = null;
        
        // redirect("/form_tasks/1?words={$words}&message={$message}");
    } 
    // no else because redirect calls die();
    
    // tell user that form is invlalid
    $message = 'Form is not valid';
}

include 'layout.phtml';




