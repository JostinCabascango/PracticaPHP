<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Habitaciones de Hotel</title>
    <style>
        p {
            font-size: 1rem;
            font-family: sans-serif;

        }

        ul {
            border: 5px solid black;
            border-radius: 10px;

        }

        li {
            margin: 5px;
            padding: 5px;


        }
    </style>
</head>
<body>
<h1 style="text-align: center">Gestion del Hotel</h1>
<ul>
    <?php
    // Crear el array hotel vacío
    $hotel = array();

    // Crear el hotel con 5 plantas y 10 habitaciones en cada planta
    for ($planta = 0; $planta < 5; $planta++) {
        $habitaciones = array();
        for ($habitacion = 0; $habitacion < 10; $habitacion++) {
            $clientes = rand(0, 4); // Generar aleatoriamente el número de clientes en la habitación
            array_push($habitaciones, $clientes); // Agregar el número aleatorio de clientes a la habitación
        }
        array_push($hotel, $habitaciones); // Agregar las habitaciones a la planta
    }

    // Mostrar la lista de habitaciones del hotel con el número de clientes en cada habitación
    ?>
    <?php
    foreach ($hotel as $planta => $habitaciones) {
        foreach ($habitaciones as $habitacion => $clientes) {
            ?>
            <li>
                <?php if ($clientes == 0) { ?>
                    <p>A l'Habitación <b><?= $habitacion ?></b> de la planta <b><?= $planta ?> </b> està buida.</p>
                <?php } elseif ($clientes == 4) { ?>
                    <p>A l'Habitación <b><?= $habitacion ?> </b>de la planta <b><?= $planta ?> </b>està plena.</p>
                <?php } else { ?>
                    <p>A l'Habitación <b><?= $habitacion ?> </b> de la planta <b><?= $planta ?></b> té
                        <b><?= $clientes ?></b>
                        persones.</p>
                <?php } ?>
            </li>
            <?php
        }
    }
    ?>
</ul>
</body>
</html>
