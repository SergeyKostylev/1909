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

$max = 100;
$range = range(1, $max);

// for ($i = 1; $i <= $max; $i++) {
//     if (isPrime($i)) {
//         $result[] = $i;
//     }
// }

$result = array_filter($range, 'isPrime');

var_dump($result);

// array_push, array_pop, array_shift, array_unshift