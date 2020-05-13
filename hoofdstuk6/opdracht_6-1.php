<!--/**-->
<!--* User: Noor Al-Dean Al-Jaberri-->
<!--* Date: 05-5-2020-->
<!--* Time: 11:25-->
<!--* File: opdracht6.1.php-->
<!--*/-->
<?php
include "../includes/Header.php";
?>
<form method="post" action="checklogin.php">
    <label>Username </label>
    <input name="username" type="text"><br>
    <label>Password </label>
    <input name="password" type="password"><br>
    <input type="submit" name="verzend" value="verzend">
</form>
<?php

include "../includes/footer.php";