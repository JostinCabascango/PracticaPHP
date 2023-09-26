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
    // Recorremos el array de cursos
    foreach ($cursos as $curso) {
        echo "<div style='border: 2px solid black;padding: 0.5rem'>";
        echo "<img style='height: 100px;width: 100px;' src='https://cdn-icons-png.flaticon.com/512/4762/4762311.png'>";
        echo "<h3>" . $curso[1] . "</h3>";
        echo "<p>" . $curso[2] . "</p>";
        echo "<p>El preu del llibre amb IVA : " . ($curso[3] + ($curso[3] * IVA)) . "</p>";
        echo "</div>";
    }
    ?>
    ?>




</body>

</html>