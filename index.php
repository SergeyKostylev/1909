<?php

$a = rand(-5, 5);
$b = rand(0, 1);

if ($b) {
    $c = $a / $b;
}

// $output = isset($c) ? 'a/b = ' . $c : 'Division by zero';

if (isset($c)) {
    $output = "a/b = {$c}";
} else {
    $output = 'Division by zero';
}

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
    
    a =  <?=$a ?>
    <br>
    b =  <?=$b ?>
    <hr>
    Result: <?=$output ?>
    
</body>
</html>