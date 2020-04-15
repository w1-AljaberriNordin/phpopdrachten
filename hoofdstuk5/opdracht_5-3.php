<?php
include "../includes/Header.php";
?>

// hier maak ik de formulier aan
<form action="opdracht_5-3.php" method="post">
    <label>Stoplicht kleur </label>
    <input type="radio" name="trafficLightColor" value="red"> Rood
    <input type="radio" name="trafficLightColor" value="green"> Groen
    <input type="radio" name="trafficLightColor" value="orange"> Orangje
    <br>
    <label>Komt er een ambulance aan</label>
    <input type="radio" name="ambulanceComing" value="ja"> Ja
    <input type="radio" name="ambulanceComing" value="nee"> nee

    <input type="submit" name="submit" value="submit">
</form>



<?php



//de action is hetzelfde script als het formulier, eerst testen of het formulier
//verzonden is
if (isset($_POST['submit'])) {
    echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
    //Een van de of beide radiobuttons is/zijn niet aangevinkt
    if (isset($_POST['trafficLightColor']) == false || isset($_POST['ambulanceComing']) == false) {
        echo "De ambulance of de stoplicht kleur niet aangevinkt";
    }
 else
 {
     $trafficLightColor = $_POST['trafficLightColor'];
 $ambulanceComing = $_POST['ambulanceComing'];
 echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een
ambulance aan.";
 //Bepalen of je wel of niet mag doorrijden
 if ($trafficLightColor <> "green" || $ambulanceComing == 'ja')
 {
     echo "<div class='Rood'>Je moet stoppen</div>";
 }
 else
 {
     echo " <div class='groen'>Je mag doorrijden</div>";
 }
 }
 echo "</div>";
 }
