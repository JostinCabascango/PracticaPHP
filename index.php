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
<ul>
    <?php
    // Recorrer el array de mesas y mostrar por pantalla en formato lista
    for ($j = 0; $j < count($restaurant); $j++) {
        $comensales = $restaurant[$j];
        $taulaNum = $j;
        if ($comensales == $comensalsMax) {
            $estadoTaula = "está plena";
        } elseif ($comensales == 0) {
            $estadoTaula = "está buida";
        } else {
            $estadoTaula = "tiene $comensales comensals";
        }
        ?>
        <li>La taula <?php echo $taulaNum; ?>
            <?php echo $estadoTaula; ?></li>
        <?php

    }
    ?>
</ul>

</body>

</html>