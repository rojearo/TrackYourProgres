<!doctype html>
<html>

<head>
    <title>update Aanmeld formulier 3</title>
</head>
<body>
<h1>update Aanmeld formulier 3</h1>

<?php
require "aanmelden.php";

// gegevens uit de array in variabelen stoppen
$AanmeldId = $_POST["AanmeldId "];
$AanmeldVoornaam=$_POST["AanmeldVoornaam"];
$AanmeldAchternaam=$_POST["AanmeldAchternaam"];
$AanmeldEmail=$_POST["AanmeldEmail"];
$AanmeldWachtwoord=$_POST["AanmeldWachtwoord"];

// maken object ---------------------------------------------------
$Aanmeld1 = new films ($AanmeldId, $AanmeldVoornaam, $AanmeldAchternaam, $AanmeldEmail, $AanmeldWachtwoord);
$Aanmeld1->updateAanmelden($AanmeldId);
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $AanmeldId."<br/>";
$Aanmeld1->oplezen();

?>
<a href="artikelen.html">Terug naar het hoofdmenu</a>
</body>
</html>
