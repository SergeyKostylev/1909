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

for ($i = 1; $i <= $employeesAmount; $i++) {
    $nameIndex = rand(0, $namesMaxIndex);
    $cityIndex = rand(0, $citiesMaxIndex);
    
    $employee = [
        'id' => $i,
        'name' => $names[$nameIndex],
        'city' => $cities[$cityIndex]
    ];
    
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
            background: #555;
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
        </tr>
        
        <?php foreach ($employees as $i => $employee) : ?> 
        
            <tr <?=$i % 2 == 0 ? " class='even' " : ''  ?> >
                <td><?=$employee['id']?></td>
                <td><?=$employee['name']?></td>
                <td><?=$employee['city']?></td>
            </tr>
        
        <?php endforeach; ?>
        
    </table>
    
</body>
</html>