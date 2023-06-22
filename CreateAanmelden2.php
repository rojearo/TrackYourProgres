<!doctype html>
<html lang="eng">
<head>
    <title>Create Aanmelden 2</title>
</head>
<body>
<h1>Aanmelden2</h1>

<div class="container">
    <?php

    require "aanmelden.php";
    require "Connect.php";

    $AanmeldId = NULL;

    $AanmeldVoornaam = $_POST["AanmeldVoornaam"];

    $AanmeldAchternaam = $_POST["AanmeldAchternaam"];

    $AanmeldEmail = $_POST["AanmeldEmail"];

    $AanmeldWachtwoord = $_POST["AanmeldWachtwoord"];

    $aanmelden = new aanmelden($AanmeldVoornaam, $AanmeldAchternaam, $AanmeldEmail, $AanmeldWachtwoord);
    $aanmelden->createAanmelden();
    ?>
</div>
<a href="index.php">Terug</a>
</body>
</html>
