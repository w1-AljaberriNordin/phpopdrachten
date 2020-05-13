<!--/**-->
<!--* User: Noor Al-Dean Al-Jaberri-->
<!--* Date: 05-5-2020-->
<!--* Time: 11:25-->
<!--* File: opdracht6.2.php-->
<!--*/-->
<?php
include '../includes/Header.php';
?>
<form id="gameFrm" method="get" action="opdracht_6-2.php">
    <div class="float"><input type="radio"
                              onchange="document.getElementById('gameFrm').submit();" name="keuze"
                              value="steen"><img src="steen.jpg"></div>
    <div class="float"><input type="radio"
                              onchange="document.getElementById('gameFrm').submit();" name="keuze"
                              value="papier"><img src="papier.jpg"></div>
    <div class="float"><input type="radio"
                              onchange="document.getElementById('gameFrm').submit();" name="keuze"
                              value="schaar"><img src="schaar.jpg"></div>
    
</form>
<?php
if (isset($_GET['keuze'])) {
    echo "Jij koos: <img src='{$_GET['keuze']}.jpg'>";
}
//Wat kiest de computer
//Random wordt er een getal tussen 0 en 2 gekozen
$opties = array("steen","papier","schaar");
$computerkeuzegetal = rand(0,2);
$computerkeuze = $opties[$computerkeuzegetal];
echo "&nbsp;&nbsp;De computer koos: <img src='{$computerkeuze}.jpg'>";

if (!isset($_SESSION['stand'])) {
    $_SESSION['stand'] = array(0,0);
}

if ($_GET['keuze'] == 'papier' && $computerkeuze == 'steen') {
    //$_SESSION['stand'][0] +=1;
    $_SESSION['stand'][1] +=1;
}
if ($_GET['keuze'] == 'schaar' && $computerkeuze == 'steen') {
    $_SESSION['stand'][0] +=1;
   // $_SESSION['stand'][1] +=1;
}
if ($_GET['keuze'] == 'steen' && $computerkeuze == 'papier') {
    $_SESSION['stand'][0] +=1;
    //$_SESSION['stand'][1] +=1;
}
if ($_GET['keuze'] == 'steen' && $computerkeuze == 'schaar') {
   // $_SESSION['stand'][0] +=1;
    $_SESSION['stand'][1] +=1;
}
if ($_GET['keuze'] == 'schaar' && $computerkeuze == 'papier') {
    $_SESSION['stand'][0] +=1;
    //$_SESSION['stand'][1] +=1;
}
if
($_GET['keuze'] == 'papier' && $computerkeuze == 'schaar') {
   // $_SESSION['stand'][0] +=1;
    $_SESSION['stand'][1] +=1;
}
if
($_GET['keuze'] == 'papier' && $computerkeuze == 'papier') {
    $_SESSION['stand'][0] +=1;
    $_SESSION['stand'][1] +=1;
}
if
($_GET['keuze'] == 'schaar' && $computerkeuze == 'schaar') {
    $_SESSION['stand'][0] +=1;
    $_SESSION['stand'][1] +=1;
}
if
($_GET['keuze'] == 'steen' && $computerkeuze == 'steen') {
    $_SESSION['stand'][0] +=1;
    $_SESSION['stand'][1] +=1;
}

include '../includes/footer.php';

// alleen als iemande de 5 punten heeft gescoord
if ($_SESSION['stand'][0] >= 5 or $_SESSION['stand'][1] >= 5) {
    session_destroy();
}
