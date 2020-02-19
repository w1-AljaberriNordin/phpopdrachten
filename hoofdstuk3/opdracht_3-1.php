<!DOCTYPE html>
<html>
<head>
    <title>
        Opdracht3.1
    </title>
</head>
<body>
<header>
    <h1> <a href="../index.php">Terug</a>|PHP-opdracht 3.1</h1>
</header>
</body>
<?php
/**
 * User: Noor Al-Dean Al-Jaberri
 * Date: 5-2-2020
 * Time: 11:30
 * File: opdracht3.1.php
 */

//initialisatie van variabelen
$evenement = "Elfstedentocht ";
$Fries = "Alvestêdetocht ";
$kilometer = 200 ;
$typebaan = "Schaatstocht ";
$typeweg = "Natuurijs ";
$organisator = " Koninklijke Vereniging De Friesche Elf Steden ";
$provincie = "Friesland ";
$stad = "Leeuwarden ";
$evenementgehouden = 15 ;
$begin = 1909 ;
$perjaar = 1 ;
    
    //concateneren om het verhaal te maken, manier 1
$verhaal1 = "De $evenement (Fries: $Fries is een $kilometer kilometer
lange $typebaan over $typeweg die wordt georganiseerd door de $organisator. $stad de hoofdstad van $provincie, is start- en aankomstplaats. De $evenement is inmiddels $evenementgehouden maal verreden en werd voor het eerst in $begin gereden en wordt maximaal $perjaar keer per winter gehouden";

    //concateneren om het verhaal te maken, manier 2
$verhaal2 = "De ".$evenement."(Fries: ".$Fries."is een ".$kilometer."kilometer
lange".$typebaan."over ".$typeweg."die wordt georganiseerd door
de ".$organisator.$stad."de hoofdstad van ".$provincie.", is start- en aankomstplaats. De ".$evenement." is inmiddels ".$evenementgehouden."maal verreden en werd voor het
eerst in ".$begin."gereden en wordt maximaal ".$perjaar."keer per winter gehouden";

//tonen in de pagina
echo "<p> $verhaal1 </p>";
echo "<p> $verhaal2 </p>";


?>

</html>
