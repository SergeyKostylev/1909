<?php

function isPrime($number)
{   
    if (in_array($number, [1, 2, 3])) {
        return true;
    }
    
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

function formIsValid() 
{
    // get value
    $number = requestPost('number');
    
    $notEmpty = !empty($number);
    $isNumber = is_numeric($number);
    
    return $notEmpty && $isNumber;
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