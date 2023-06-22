<?php

class aanmelden
{
    protected $AanmeldId;
    protected $aanmeldVoornaam;
    protected $aanmeldAchternaam;
    protected $aanmeldEmail;
    protected $aanmeldWachtwoord;

    public function __construct($aanmeldVoornaam = NULL, $aanmeldAchternaam = NULL, $aanmeldEmail = NULL, $aanmeldWachtwoord = NULL)
    {
        $this->aanmeldVoornaam = $aanmeldVoornaam;
        $this->aanmeldAchternaam = $aanmeldAchternaam;
        $this->aanmeldEmail = $aanmeldEmail;
        $this->aanmeldWachtwoord = $aanmeldWachtwoord;
    }

    /**
     * @return mixed|null
     */
    public function getAanmeldVoornaam()
    {
        return $this->aanmeldVoornaam;
    }

    /**
     * @param mixed|null $aanmeldVoornaam
     */
    public function setAanmeldVoornaam($aanmeldVoornaam)
    {
        $this->aanmeldVoornaam = $aanmeldVoornaam;
    }

    /**
     * @return mixed|null
     */
    public function getAanmeldAchternaam()
    {
        return $this->aanmeldAchternaam;
    }

    /**
     * @param mixed|null $aanmeldAchternaam
     */
    public function setAanmeldAchternaam($aanmeldAchternaam)
    {
        $this->aanmeldAchternaam = $aanmeldAchternaam;
    }

    /**
     * @return mixed|null
     */
    public function getAanmeldEmail()
    {
        return $this->aanmeldEmail;
    }

    /**
     * @param mixed|null $aanmeldEmail
     */
    public function setAanmeldEmail($aanmeldEmail)
    {
        $this->aanmeldEmail = $aanmeldEmail;
    }

    /**
     * @return mixed|null
     */
    public function getAanmeldWachtwoord()
    {
        return $this->aanmeldWachtwoord;
    }

    /**
     * @param mixed|null $aanmeldWachtwoord
     */
    public function setAanmelWachtwoord($aanmeldWachtwoord)
    {
        $this->aanmeldWachtwoord = $aanmeldWachtwoord;
    }

    public function oplzen()
    {
        echo
            "aanmeld Voornaam = " . $this->getAanmeldVoornaam() .
            "<br> Aanmeld Achternaam = " . $this->getAanmeldAchternaam() .
            "<br> Aanmeld Email = " . $this->getAanmeldEmail() .
            "<br> Aanmled Wachtwoord = " . $this->getAanmeldWachtwoord() .
            "<br>";
    }


    public function createAanmelden()
    {
        echo "Je account is aangemaakt<br/>";
        require "Connect.php";

        $AanmeldId = NULL;
        $AanmeldVoornaam = $this->getAanmeldVoornaam();
        $AanmeldAchternaam = $this->getAanmeldAchternaam();
        $AanmeldEmail = $this->getAanmeldEmail();
        $AanmeldWachtwoord = $this->getAanmeldWachtwoord();

        $sql = $conn->Prepare
        ("
                    insert into aanmelden values
                    (:AanmeldId, :AanmeldVoornaam, :AanmeldAchternaam, :AanmeldEmail, :AanmeldWachtwoord)
        ");

        $sql->bindParam("AanmeldId", $AanmeldId);
        $sql->bindParam("AanmeldVoornaam", $AanmeldVoornaam);
        $sql->bindParam("AanmeldAchternaam", $AanmeldAchternaam);
        $sql->bindParam("AanmeldEmail", $AanmeldEmail);
        $sql->BindParam("AanmeldWachtwoord", $AanmeldWachtwoord);
        $sql->execute();

        echo "Je hebt je aangemeld <br/>";
    }

    public function readAanmelden()
    {
        require "Connect.php";
        $sql = $conn->prepare("
                                select AanmeldId, AanmeldVoornaam, AanmeldAchternaam, AanmeldEmail, AanmeldWachtwoord
                                from aanmelden
                               ");
        $sql->execute();
        foreach ($sql as $aanmelden) {

            echo $aanmelden["AanmeldenId"] . "<br>";
            $this->aanmeldVoornaam = $aanmelden["AanmeldVoornaam"] . "  ";
            $this->aanmeldAchternaam = $aanmelden["AanmeldAchternaam"] . "  ";
            $this->aanmeldEmail = $aanmelden["AanmeldEmail"] . "  ";
            $this->aanmeldWachtwoord = $aanmelden["AanmeldWachtwoord"] . "  ";
        }
    }

    public function updateAanmelden($AanmeldId)
    {
        require "Connect.php";
        $AanmeldId;
        $AanmeldVoornaam = $this->getAanmeldVoornaam();
        $AanmeldAchternaam = $this->getAanmeldAchternaam();
        $AanmeldEmail = $this->getAanmeldEmail();
        $AanmeldWachtwoord = $this->getAanmeldWachtwoord();


        $sql = $conn->prepare("
                               update aanmelden
                               set AanmeldVoornaam=:AanmeldVoornaam, AanmeldAchternaam=:AanmeldAchternaam, AanmeldEmail=:AanmeldEmail, AanmeldWachtwoord=:AanmeldWachtwoord
                               where AanmeldId=:AanmeldId
                               ");

        $sql->bindParam(":AanmeldId", $AanmeldId);
        $sql->bindParam(":AanmeldVoornaam", $AanmeldVoornaam);
        $sql->bindParam(":AanmeldAchternaam", $AanmeldAchternaam);
        $sql->bindParam(":AanmeldEmail", $AanmeldEmail);
        $sql->bindParam(":AanmeldWachtwoord", $AanmeldWachtwoord);
        $sql->execute();
    }

    public function deleteAanmelden($AanmeldId)
    {
        require "Connect.php";

        $sql = $conn->prepare("
                                delete from aanmelden where AanmeldId=:AanmeldId
                                ");

        $sql->bindParam(":AanmeldId", $AanmeldId);
        $sql->execute();
    }

    public function searchAanmelden($AanmeldId)
    {
        require "Connect.php";

        $sql = $conn->prepare("
                                select AanmeldId, AanmeldVoornaam, AanmeldAchternaam, AanmledEmail, AanmeldWachtwoord
                                from aanmelden
                                where AanmeldId=:AanmeldId
        ");

        $sql->bindParam("AanmeldId", $AanmeldId);
        $sql->execute();

        foreach ($sql as $Aanmelden) {
            $this->aanmeldVoornaam = $Aanmelden["AanmeldVoornaam"];
            $this->aanmeldAchternaam = $Aanmelden["AanmeldAchternaam"];
            $this->aanmeldEmail = $Aanmelden["AanmeldEmail"];
            $this->aanmeldWachtwoord = $Aanmelden["AanmeldWachtwoord"];

        }
    }
}
