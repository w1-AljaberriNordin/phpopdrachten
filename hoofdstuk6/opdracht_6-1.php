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