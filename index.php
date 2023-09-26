<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÀCTICA 2 - PERSONA i llista cursos en PHP</title>
</head>

<body>
    <?php
    // Definicion de la constante IVA
    define("IVA", 0.21);
    // Definicion de los cursos en un array bidimensional
    $cursos = array(
        array(1, "PHP", "Introducció a PHP", "15.5"),
        array(2, "Laravel", "Laravel per experts", "30"),
        array(3, "Django", "Dominant Django", "10")
    );
    // llista de cursos
    echo "<h1>Llista de cursos</h1>";
    //Numero de cursos apuntats
    echo "<h2>Numero de cursos apuntats: " . count($cursos) . "</h2>";

    ?>




</body>

</html>