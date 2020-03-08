
<?php
$greeting = "";
$year = date('Y');
$name = "Nordin";



//Hier maak ik de groet functie

$hournow = date("G");

if ($hournow > 5 && $hournow < 12)
{
    $greeting = "goedemorgen vriend";
}
elseif ($hournow > 11 && $hournow < 18 )
{
    $greeting = "Goedenmiddag vriend";
}
elseif ($hournow > 17 && $hournow < 24 )
{
    $greeting = "Goedenavond vriend";
}
elseif ($hournow > 0 && $hournow < 6 )
{
    $greeting = "Goedennacht vriend";
}

?>

