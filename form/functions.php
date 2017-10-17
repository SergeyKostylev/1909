<?php

function formIsValid() 
{
    return !empty($_POST['last_name']) && 
           !empty($_POST['first_name']) && 
           !empty($_POST['email'])
    ;  
}

function redirect($to)
{
    header("Location: {$to}");
    die;
}

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    
    return null;
}

function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }
    
    return null;
}