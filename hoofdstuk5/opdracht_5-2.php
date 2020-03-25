<?php

?>
<form action="form_data51.php" method="get">
    <label>Voor en Achternaam: </label>
    <input name="fullname" type="text">

    <label>Reden van uitschrijving: </label>
    <select name="reason2quit">
        <option value="Slechte leraar">Slechte leraar</option>
        <option value="yonis is weg">yonis is weg</option>
        <option value="opleiding is kut">opleiding is kut</option>
        <option value="php sucks">php sucks</option>
    </select>

    <label>Leerjaar: </label>
    <input type="radio" name="year" value="1">1
    <input type="radio" name="year" value="2">2
    <input type="radio" name="year" value="3">3

    <input type="submit" name="verzend" value="verzend">
</form>
