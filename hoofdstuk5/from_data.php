<!--/**-->
<!--* User: Noor Al-Dean Al-Jaberri-->
<!--* Date: 25-3-2020-->
<!--* Time: 12:00-->
<!--* File: opdracht5.1.php-->
<!--*/-->

<!--Hier haal ik de gegevens op wat in die input is ingevuld-->
<?php
include "../includes/Header.php";

echo  "Bedrijfsnaam: ".$_GET["companyname"];
echo  "<br>Voornaam: ".$_GET["firstname"];
echo  "<br>Achternaam: ".$_GET["lastname"];
echo  "<br>Telefoon: ".$_GET["Phonenumber"];
echo  "<br>E-Mail: ".$_GET["e-mail"];
echo  "<br>Bericht: ".$_GET["message"];

include "../includes/footer.php";
?>