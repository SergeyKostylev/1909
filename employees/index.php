<?php

define('EMPLOYEES_MAX_AMOUNT', 50);

$names = [
    'Terencio Eastmond',
    'Brigg Wotton',
    'Nickolaus Skain',
    'Freddy Meneur',
    'Lazaro Wyd',
    'Lusa Glisenan',
    'Vinny Chetter',
    'Benyamin Dumke',
    'Grete Kurten',
    'Angelico Verny',
    'Louisette Hylden',
    'Ebenezer Gurnee',
    'Jaynell De Rechter',
    'Frasco Choppin',
    'Gracie Jendrich',
    'Christoper Cardero',
    'Courtnay Mincher',
    'Gussi Hobgen',
    'Teriann Dawtre',
    'Rubia Haddington'
];

$cities = [
    'Kouqian',
    'Muaralabuh',
    'Woloara',
    'Hucun',
    'Xiangjia',
    'Zhushan',
    'Rio das Pedras',
    'Gotovlje',
    'Leran',
    'São Paio Merelim'
];

$namesMaxIndex = count($names) - 1;
$citiesMaxIndex = count($cities) - 1;
$employees = [];

$employeesAmount = rand(5, EMPLOYEES_MAX_AMOUNT);
$salarySum = 0;

for ($i = 1; $i <= $employeesAmount; $i++) {
    $nameIndex = rand(0, $namesMaxIndex);
    $cityIndex = rand(0, $citiesMaxIndex);
    $salary = rand(100, 1000);
    
    if ($salary > 100 && $salary < 500) {
        continue;
    }
    
    $employee = [
        'id' => $i,
        'name' => $names[$nameIndex],
        'city' => $cities[$cityIndex],
        'salary' => $salary
    ];
    
    $salarySum += $employee['salary'];
    $employees[] = $employee;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        tr.even td {
            background: #aaa;
        }
    </style>
</head>
<body>
    <h1>Employees</h1>
    <table border=1 width=100%>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>City</th>
            <th>Salary</th>
        </tr>
        
        <?php foreach ($employees as $i => $employee) : ?> 
            <tr <?=$i % 2 == 0 ? " class='even' " : ''  ?> >
                <td><?=$employee['id']?></td>
                <td><?=$employee['name']?></td>
                <td><?=$employee['city']?></td>
                <td>$ <?=$employee['salary']?></td>
            </tr>
        
        <?php endforeach; ?>
        
        <tr>
            <td colspan='3' align='right'>Total salary:</td>
            <td>$ <?=$salarySum?></td>
        </tr>    
    </table>
    
    
    
    
</body>
</html>