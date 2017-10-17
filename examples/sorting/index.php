<?php

include 'functions.php';


// getDirectionByField('title', 'asc');

function getDirectionByField($field)
{
    $currentField = requestGet('sort_by');
    $currentDirection = requestGet('direction');
    
    if ($field != $currentField) {
        return 'asc';
    }

    if ($currentDirection == 'asc') {
        return 'desc';
    } 
    
    return 'asc';
}


$direction = requestGet('direction'); // $_GET['direction']


var_dump(getDirectionByField('id'));
var_dump(getDirectionByField('title'));
var_dump(getDirectionByField('price'));


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
    
    
    <table width=100% border=1>
        <tr>
            <th><a href="?sort_by=id&direction=asc">Id</a></th>
            <th><a href="?sort_by=title&direction=asc">Title</a></th>
            <th><a href="?sort_by=price&direction=asc">Price</a></th>
        </tr>
        
        <tr>
            <td>2</td>
            <td>Carrie</td>
            <td>1421.50</td>
        </tr>
        
        <tr>
            <td>1</td>
            <td>Shining</td>
            <td>1331.75</td>
        </tr>
        
        <tr>
            <td>3</td>
            <td>Under the dome</td>
            <td>1221.75</td>
        </tr>
    </table>
    
    
</body>
</html>


