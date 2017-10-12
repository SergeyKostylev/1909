<?php

$n = 1000;
$i = 0;

do {
    $n = $n / 2;
    $i++;
} while ($n >= 50);

echo "#12: Result: {$n}, iterations: {$i} <hr>";
echo '#13:';
echo '<table>';
$rand_i = rand(1,20);
$rand_j = rand(1,20);
for ($i = 1; $i <= $rand_i; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $rand_j; $j++) {
        $randomR = dechex(rand(0, 255));
        $randomG = dechex(rand(0, 255));
        $randomB = dechex(rand(0, 255));
        $color = $randomR . $randomG . $randomB;
        echo '<td bgcolor="#' . $color . '">' . $i * $j . '</td>';
    }
    echo '</tr>';
}

echo '</table><hr>';

// $names = ['Andy', 'Mike', 'Bob'];
// var_dump(array_search('Mike', $names));

$months = ['Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'];

echo "#17: <br>";
foreach ($months as $month) {
    if ($month == date('M')) {
        $month = "<b>{$month}</b>";
    }
    echo $month;
    echo '<br>';
}

// echo date('Y-M-d H:i:s');
echo "<hr>";

// changing values in array
// $numbers = range(1, 10);

// foreach ($numbers as & $number) {
//     $number *= 2;
// }
// unset($number);
// var_dump($numbers);

echo "#23: <br>";

$a = $b = 256652; // 2 + 5 + 6    652: 6, 60+5, 650+2
$reveresed_a = 0;
$sum = 0;

while ($a) {
    $r = $a % 10; // 6, 5, 2
    $reveresed_a = $reveresed_a * 10 + $r; //  6, 60+5, 650+2
    $sum += $r;
    $a /= 10; // 25.6, 2.5, 0.2
    $a = (int) $a; // 25, 2, 0
}

echo var_dump($b == $reveresed_a);
