<?php

function _if()
{
    
}

function _else()
{
    
}

function ifElse($condition, $f1, $f2)
{
    if ($condition) {
        $f1();
    } else {
        $f2();
    } 
}

// ifElse(-1 > 0, function() {
//     echo 1;
//     echo 2;
// }, function() {
//     echo 2;
//     echo 3;
// });



$arr = range(1, 10);
$arr[] = null;

var_dump($arr);

// function test(&$element)
// {
//     $element *= 2;
// }

// array_walk($arr, function($element) {
//     return $element*2;
// });


$arr = array_filter($arr, function($element) {
    return $element % 2;
});

var_dump($arr);


// function hello()
// {
//     echo 'hello';
// }

// function hello2()
// {
//     echo 'hello2';
// }



// function call($func)
// {
//     $func();
// }

// $func = function() { 
//     echo 123; 
// };

// call($func);



// p(n) = 1+2+3+...+n = (1+2+3+..+(n-1))+n 
//      = p(n-1)+n
// x^n = x^(n-1)*x

// function sumRecursive($n)
// {
//     if ($n == 1) {
//         return 1;
//     }
    
//     return sumRecursive($n - 1) + $n;
// }

// sumRecursive(4);
// sumRecursive(4): if -> false -> sumRecursive(3) + 4: 6+4=10
// sumRecursive(3): if -> false -> sumRecursive(2) + 3: 3+3=6
// sumRecursive(2): if -> False -> sumRecursive(1) + 2: 1+2=3
// sumRecursive(1): 1 



// function sum($n)
// {
//     $s = 0;
    
//     for ($i = 1; $i <= $n; $i++) {
//         $s += $i;
//     }
    
//     return $s;
// }




// function hello()
// {
    
//     hello();
// }

// hello();