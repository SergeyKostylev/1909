<?php

session_start();

include 'functions.php';
$counter = countVisit();
// $message = requestGet('message');
$securityNumber = rand(1000, 9999);
$editMode = null;

if (requestGet('action') == 'delete' && requestGet('id')) {
    die('delete ' .  requestGet('id'));
    // $result = deleteComment($id);
    // $message = $result === false ? 'Error deleting' : 'Deleted';
        
    // redirect('/form?message=' . $message);
}

if (requestGet('action') == 'edit' && requestGet('id')) {
    $editMode = requestGet('id');
    
    if ($_POST) {
        var_dump($_POST);
        die('saving message');
    }
    
    // die('edit ' .  requestGet('id'));
    // $result = deleteComment($id);
    // $message = $result === false ? 'Error deleting' : 'Deleted';
        
    // redirect('/form?message=' . $message);
}

if ($_POST) {
    if (formIsValid()) {
        $comment = createComment($_POST);
        removeSwearing($comment);
        $result = save($comment);
        $message = $result === false ? 'Error saving' : 'Saved';
        setFlash($message);
        
        redirect('/form');
    } 
    // no else because redirect calls die();
    
    // tell user that form is invlalid
    $message = 'Form is not valid';
    setFlash($message);
}

$comments = loadComments();

include 'layout.phtml';




