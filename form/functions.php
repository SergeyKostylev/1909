<?php

define('COMMENTS_STORAGE', 'comments.txt');


function loadComments()
{
    $contents = @file_get_contents(COMMENTS_STORAGE);
    
    if ($contents === false) {
        // may throw some error
        return [];
    }
    
    if (empty($contents)) {
        return [];
    }
    
    $comments = @unserialize($contents);
    
    if ($comments === false) {
        http_response_code(500);
        die('System error');
    }
    
    return $comments;
}

function save(array $comment) 
{
    $comments = loadComments();
    $comments[] = $comment;
    
    $str = serialize($comments);
    
    return file_put_contents(
        COMMENTS_STORAGE, 
        $str
    );
}

function getValue(array $array, $key)
{
    if (isset($array[$key])) {
        return $array[$key];
    }
    
    return null;
}

function createComment(array $data)
{
    return [
        'id' => rand(10000, 99999),
        'name' => getValue($data, 'name'), // $data['name']
        'email' => getValue($data, 'email'),
        'message' => getValue($data, 'message'),
        'created' => date('Y-m-d H:i:s')
    ];
}

function formIsValid() 
{
    return !empty($_POST['name']) && 
           !empty($_POST['email']) && 
           !empty($_POST['message'])
    ;  
}

function redirect($to)
{
    header("Location: {$to}");
    die;
}

function requestPost($key)
{
    return getValue($_POST, $key);
}

function requestGet($key)
{
    return getValue($_GET, $key);
}