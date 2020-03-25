<!--/**-->
<!--* User: Noor Al-Dean Al-Jaberri-->
<!--* Date: 25-3-2020-->
<!--* Time: 12:00-->
<!--* File: opdracht5.1.php-->
<!--*/-->
<?php
include "../includes/Header.php";

?>
<h1>
    Restaria Kees Kroket
</h1>
<p>
    Visstraat 12<br>
    5211 DN 's-Hertogenbosch<br>
    073 613 6720<br>
    info@restariakeeskroket.nl

</p>

<!--hier maak ik de formulier aan en stuur de gegevens door naar de form_data.php bestand-->
<form action="from_data.php" method="get">
    <label>Bedrijfsnaam: </label><br>
    <input name="companyname" type="text"><br>
    <label>Voornaam: </label><br>
    <input name="firstname" type="text"><br>
    <label>Achternaam: </label><br>
    <input name="lastname" type="text"><br>
    <label>Telefoon: </label><br>
    <input name="Phonenumber" type="text"><br>
    <label>E-mail: </label><br>
    <input name="e-mail" type="text"><br>
    <label>Bericht: </label><br>
    <br>
    <textarea name="message" rows="5" cols="40"></textarea>
    <br><br>
    <input type="submit" name="verzend" value="verzend">
</form>

<?php
include "../includes/footer.php";
?>