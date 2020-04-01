<!--/**-->
<!--* User: Noor Al-Dean Al-Jaberri-->
<!--* Date: 01-4-2020-->
<!--* Time: 11:25-->
<!--* File: opdracht5.2.php-->
<!--*/-->
<?php

?>
<h1>
    Uitschrijfformulier KW1C
</h1>
<hr>
<form action="form_data51.php" method="get">
    <label>Voor en Achternaam: </label>
    <input name="fullname" type="text"><br>
    <label>Studentennummer </label>
    <input name="studentnumber" type="text"><br>
    <label>Datum van uitschrijving: </label>
    <input name="dateout" type="date"><br>

    <label>Reden van uitschrijving: </label>
    <select name="reason2quit">
        <option value="Slechte leraar">Slechte leraar</option>
        <option value="yonis is weg">yonis is weg</option>
        <option value="opleiding is kut">opleiding is kut</option>
        <option value="php sucks">php sucks</option>
    </select><br>

    <label>Leerjaar: </label>
    <input type="radio" name="year" value="1">1
    <input type="radio" name="year" value="2">2
    <input type="radio" name="year" value="3">3<br>

    <input  name="succesclass" type="checkbox" value="1">
    <label> Ik wil me aanmelden bij de succesklas </label><br>
    <input name="deletedetails" type="checkbox" value="1">
    <label > Verwijder mijn gegevens uit het systeem</label><br>

    <textarea name="message" rows="5" cols="40"></textarea><br>
    <input type="submit" name="verzend" value="verzend">
</form>
