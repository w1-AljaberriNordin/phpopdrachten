<!DOCTYPE html>
<html>
<head>
    <title>
        Opdracht3.2
    </title>
    <link href="Opdracht3.2.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <h1> <a href="../index.php">Terug</a>|PHP-opdracht 3.2</h1>
</header>

<?php
/**
 * User: Noor Al-Dean Al-Jaberri
 * Date: 5-2-2020
 * Time: 11:30
 * File: opdracht3.2.php
 */
$trafficLightColor = "groen";
$ambulanceComing = false;

if($trafficLightColor== "groen"&& $ambulanceComing == false)
{
    echo("<p id='groen'>U mag doorrijden </p>");
}
else
{
    echo("<p id = rood>U moet stoppen</p>");
}


?>
</body>
</html>
