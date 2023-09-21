<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PracticaPHP</title>
</head>

<body>
    <?php
    $name = "Kurt";
    $last_name="Cagle";
    $age = 40;
    $date = new Datetime();
    $date->setDate(1983, 5, 12);
    $phones = [654332211, 933332211];
    $street = "Carrer de turin, 15";
    $email = "kurt.cagle@example.com";
    $isJob = true;
    $height = "1,67";
    echo "<h1>Descrivint a $name $last_name</h1>";
    echo "<h2>Les dades de $name son :</h2>";
    echo "<ul>";

    echo "<li>Es diu: $name</li>";
    echo "<li>Te $age anys</li>";
    echo "<li>Va neixer l'any: " . "<b>" . $date->format('Y-m-d') . "</b>";
    echo "<li>El seus telefons son: " . $phones[0] . " - " . $phones[1] . "</li>";
    echo "<li>Viu a: " . $street . "</li>";
    echo "<li>El seu email és: $email</li>";
    if ($isJob == true) {
        echo "<li>Treballa: Si</li>";
    } else {
        echo "<li>Treballa: No</li>";
    }
    echo "<li>I medeix: $height</li>";
    echo "</ul>";
    ?>



</body>

</html>