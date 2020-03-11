<!--/**-->
<!--* User: Noor Al-Dean Al-Jaberri-->
<!--* Date: 11-3-2020-->
<!--* Time: 12:00-->
<!--* File: opdracht4.4.php-->
<!--*/-->

<?php
$eendatum = date('d-m-Y', strtotime("0 days"));
$eenweek = date('w', strtotime("0 days"));

$dagNamen = array("zondag", "maandag" ,"dinsdag" ,"woensdag", "donderdag",
    "vrijdag", "zaterdag");


// hier maak ik een variable aan en een forloop
for ($eendatum = 0; $eendatum <7 ; $eendatum++)
{
    $eenweek = strtotime("+$eendatum days");
    echo "<br>";
    echo date('d-m-Y', $eenweek);
    echo " en dit is dag ";
    echo $idxweek = date('w', $eenweek);
    echo " in deze week ".$dagNamen[$idxweek];;
}

