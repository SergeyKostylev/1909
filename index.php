<?php

$a = rand(-5, 5);
$b = rand(0, 1);

// switch ($a) {
//     case -2: echo 'minus two'; break 
//     case 2: 
//         echo 'two'; 
//         break
//     case 5: echo 'five'; break
//     default: // ...
// }


// if ($a == -2) {
//     // ...
// } elseif ($a == 2) {
//     // ...
// } elseif ($a == 5) {
//     // ...
// } else {
//     // ...
// }

if ($b) {
    $c = $a / $b;
}

// $output = isset($c) ? 'a/b = ' . $c : 'Division by zero';

if (isset($c)) {
    $output = "a/b = {$c}";
} else {
    $output = 'Division by zero';
}

// $a = 1;
// while ($a <= 20) {
//     if ($a % 2 == 1) {
//         echo $a . '<br>';    
//     }
    
//     $a++;    
// }


$human = [
    // 'name' => 'Andy',
    'age' => 27,
    'city' => 'Kyiv'
];

// echo $human['name'];
//echo isset($human['name']) ? $human['name'] : null ;


$en = ['one', 'two', 'three'];
$ge = ['einz', 'zwei', 'drei'];
$ua = ['odyn', 'dwa', 'try'];

// echo $en;


$langs = ['en' => $en, 'ge' => $ge, 'ua' => $ua];
// $langs = array_values($langs);

// $length = count($langs);
// for ($i = 0; $i < $length ; $i++) {
//     $lang = $langs[$i];
//     $langCount = count($lang);
    
//     for ($j = 0; $j < $langCount; $j++) {
//         echo $lang[$j] . ' ';
//     }
//     echo '<br>';
// }

// unset($human['name'])

foreach ($langs as $key => $lang) {
    var_dump($key, $lang);
}








die('Bye');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Calculator</h1>
    
    a = <?=$a ?>
    <br>
    b = <?=$b ?>
    <hr>
    Result: <?=$output ?>
    
</body>
</html>