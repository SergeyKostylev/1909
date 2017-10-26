<?php

define('COMMENTS_STORAGE', 'comments.txt');

function save(array $comment) 
{
    $str = serialize($comment);
    
    return file_put_contents(
        COMMENTS_STORAGE, 
        $str, 
        FILE_APPEND
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

$comment = createComment([
    // 'name' => 'Mike', 
    'email' => 'mike@email.com',
    'message' => 'Awesome site!'
]);

var_dump($comment);




// $arr = [
//     'name' => 'Mike',
//     'age' => 30
// ];

// echo $s = serialize($arr);

// var_export(unserialize($s));

// $contents = file_get_contents('');
// echo $contents;

// file_put_contents('file.txt', 'New string', FILE_APPEND);

// $fp = fopen('file.txt', 'w');
// fwrite($fp, 'Some string' . PHP_EOL);
// // fseek($fp, 5);
// // rewind($fp);
// fwrite($fp, 'Some string2' . PHP_EOL);
// fwrite($fp, 'Some string3' . PHP_EOL);
// fclose($fp);

// $fp = fopen('file.txt', 'r+');

// // $content = fread($fp, '6'); 
// // echo $content;

// fwrite($fp, 'test');

// // $content = fread($fp, filesize('file.txt')); 
// // echo $content;