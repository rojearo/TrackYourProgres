<!doctype html>
<html>

<head>
    <title>search Aanmelden formulier 3</title>
</head>
<body>
<h1>search Aanmelden formulier 3</h1>

<?php

require "aanmelden.php";
require "connect.php";


$AanmeldId = $_POST["AanmeldId"];
$Aanmeld1 = new aanmelden();
$Aanmeld1->searchAanmelden($AanmeldId);
$Aanmeld1->oplezen();
?>

<a href="../TrackYourProgress/index.php">Terug naar het hoofdmenu</a>
</body>
</html>