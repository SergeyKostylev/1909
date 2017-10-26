<?php

include 'functions.php';

$message = requestGet('message');
$securityNumber = rand(1000, 9999);


if (requestGet('action') == 'delete' && requestGet('id')) {
    die('delete ' .  requestGet('id'));
    // $result = deleteComment($id);
    // $message = $result === false ? 'Error deleting' : 'Deleted';
        
    // redirect('/form?message=' . $message);
}

if ($_POST) {
    if (formIsValid()) {
        $comment = createComment($_POST);
        $result = save($comment);
        $message = $result === false ? 'Error saving' : 'Saved';
        
        redirect('/form?message=' . $message);
    } 
    // no else because redirect calls die();
    
    // tell user that form is invlalid
    $message = 'Form is not valid';
}

$comments = loadComments();

include 'layout.phtml';




