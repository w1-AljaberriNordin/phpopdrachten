<!--/**-->
<!--* User: Noor Al-Dean Al-Jaberri-->
<!--* Date: 01-4-2020-->
<!--* Time: 11:25-->
<!--* File: opdracht5.2.php-->
<!--*/-->
<?php

include "../includes/Header.php";

//Hier zet ik de gegevens die in de formulier zijn ingevuld hier in
echo  $_GET["fullname"];
echo  "<br>Studentennummer: ".$_GET["studentnumber"];
echo  "<br>uitschrijving: ".$_GET["dateout"];
echo  "<br>".$_GET["reason2quit"];

// als hij in de jaar niks heeft ingevuld dan krijg je leerjaar niet gekozen
if(isset($_GET['year']))
{
echo  "<br> Leerjaar:".$_GET['year'];
}
else{
    echo "<br> Leerjaar niet gekozen";
};


// als hij niet naar de succesklas wilt gaan dan moet die laten zien dat hij daar niet naar toe wilt gaan
if ($_GET["succesclass"] == 1)
{
    echo " <br> Hij wilt naar de succes klas";
}
else
{
    echo "<br> Hij wilt niet naar de succes klas";
}


// hier geef ik aan of hij zijn gegevens wel of niet wilt laten verwijderen
if($_GET["deletedetails"] == 1)
{
    echo "Hij wilt zijn gegevens verwijderen";
}
else
{
    echo "Hij wilt niet zijn gegevens verwijderen";
}

//Hier zet ik de gegevens die in de formulier zijn ingevuld hier in
echo  "<br>Reden van de uitschrijving: ".$_GET["message"];

include "../includes/footer.php";
?>