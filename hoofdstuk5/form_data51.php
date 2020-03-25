<?php
//echo "<pre>";
//print_r( $_GET );
//echo "</pre>";

echo  $_GET["fullname"];
echo  "<br>".$_GET["reason2quit"];

if(isset($_GET['year']))
{
echo  "<br> Leerjaar:".$_GET['year'];
}
else{
    echo "<br> Leerjaar niet gekozen";
}