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

$countryName = "België";
$currentAge = 16;

if($countryName == "België"&& $currentAge >=16 )
{
    echo "jij woont in België en je leeftijd is ".$currentAge;
    echo "<br>je mag hier alleen zwakke alcohol drinken ";
}
else if($countryName == "België"&& $currentAge >=18 )
{
    echo "jij woont in België en je leeftijd is ".$currentAge;
    echo "<br>je mag hier alle alcohol drinken ";
}
else if($countryName == "Bulgarije"&& $currentAge >=18 )
{
    echo "jij woont in België en je leeftijd is ".$currentAge;
    echo "<br>je mag hier alle alcohol drinken ";
}
else if($countryName == "Cyprus"&& $currentAge >=17 )
{
    echo "jij woont in Cyprus en je leeftijd is ".$currentAge;
    echo "<br>je mag hier alle alcohol drinken ";
}
else if($countryName == "Nederland"&& $currentAge >=18 )
{
    echo "jij woont in Nederland en je leeftijd is ".$currentAge;
    echo "<br>je mag hier alle alcohol drinken ";
}
else if($countryName == "Zweden"&& $currentAge >=18 )
{
    echo "jij woont in Zweden en je leeftijd is ".$currentAge;
    echo "<br>je mag hier alleen zwakke alcohol drinken";
}
else if($countryName == "Zweden"&& $currentAge >=20 )
{
    echo "jij woont in Zweden en je leeftijd is ".$currentAge;
    echo "<br>je mag hier alleen zwakke alcohol drinken";
}
else
{
    echo "jij mag niet drinken";
}

?>
</body>
</html>
