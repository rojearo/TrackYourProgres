<html>

<head>
    <title>update Aanmeld formulier 2</title>
</head>
<body>
<h1>update Aanmeld formulier 2</h1>

<?php

require "aanmelden.php";
$AanmeldId = $_POST["FilmID"];
$Aanmeld1 = new aanmelden();
$Aanmeld1->searchAanmelden($AanmeldId);

$AanmeldVoornaam = $Aanmeld1->getAanmeldVoornaam();
$AanmeldAchternaam = $Aanmeld1->getAanmeldAchternaam();
$AanmeldEmail = $Aanmeld1->getAanmeldEmail();
$AanmeldWachtwoord = $Aanmeld1->getAanmeldWachtwoord();
?>

<form action="UpdateAanmelden3.php" method="post">

    <?php echo $AanmeldId ?>

    <input type="hidden" name="AanmeldId" value="<?php echo $AanmeldId; ?> "><br/>

    <label for="AanmeldVoornaam">AanmeldVoornaam:</label><br>
    <input type="text" name="AanmeldVoornaam" value="<?php echo $AanmeldVoornaam; ?> "><br/>

    <label for="AanmeldAchternaam">AanmeldAchternaam:</label><br>
    <input type="text" name="AanmeldAchternaam" value="<?php echo $AanmeldAchternaam; ?> "><br/>

    <label for="AanmeldEmail">AanmeldEmail:</label><br>
    <input type="text" name="AanmeldEmail" value="<?php echo $AanmeldEmail; ?> "><br/><br/>

    <label for="AanmeldWachtwoord">AanmeldWachtwoord:</label><br>
    <input type="text" name="AanmeldWachtwoord" value="<?php echo $AanmeldWachtwoord; ?> "><br/><br/>

    <input type="submit"><br/><br/>
</form>

<a href="../TrackYourProgress/index.php">Terug naar het hoofdmenu</a>
</body>