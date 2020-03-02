<?php
date_default_timezone_set ("Europe/Amsterdam");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd hier in Nederland is: $vandaag";

date_default_timezone_set ("Asia/Tokyo");
$vandaag2 = date("d-m-Y H:i");
echo "<br> De datum en tijd hier in Japan is: $vandaag2";

date_default_timezone_set ("EST");
$vandaag3 = date("d-m-Y H:i");
echo "<br> De datum en tijd hier in Amerika is: $vandaag3";
?>


