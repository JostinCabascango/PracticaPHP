<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÀCTICA 3 - GESTIÓ HOTEL
    </title>
</head>

<body>
<?php

$taules = 10;
$comensalsMax = 5;
$restaurant = [];
// Llenar el array de mesas con un número aleatorio de comensales (entre 1 y 5) en cada mesa
for ($i = 0; $i < $taules; $i++) {
    $valor = rand(1, $comensalsMax);
    array_push($restaurant, $valor);
}


?>


</body>

</html>