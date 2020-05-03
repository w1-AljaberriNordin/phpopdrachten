<?php
include '../hoofdstuk3/variabelen.php'; ?>

<footer>
<?php
session_start();

$bezoeker = "";




    if (isset($_SESSION['username'])) {
        $bezoeker = $_SESSION['username']. "&nbsp;<a
href='../hoofdstuk6/loguit.php'>Loguit</a>";
    }
    else {
        $bezoeker = "onbekende bezoeker". "&nbsp;<a
href='../hoofdstuk6/opdracht_6-1.php'>Login</a>";
    }
echo $bezoeker.$year." ".$greeting;
    ?>
</footer>
</body>
</html>

