<?php

class films
{
    protected $filmNaam;
    protected $filmBeschrijving;
    protected $filmRating;
    protected $filmBanner;

    public function __construct($filmNaam = NULL, $filmBeschrijving = NULL, $filmRating = NULL, $filmBanner = NULL)
    {
        $this->filmNaam = $filmNaam;
        $this->filmBeschrijving = $filmBeschrijving;
        $this->filmRating = $filmRating;
        $this->filmBanner = $filmBanner;
    }

    /**
     * @return mixed|null
     */
    public function getFilmNaam()
    {
        return $this->filmNaam;
    }

    /**
     * @param mixed|null $filmNaam
     */
    public function setFilmNaam($filmNaam)
    {
        $this->filmNaam = $filmNaam;
    }

    /**
     * @return mixed|null
     */
    public function getFilmBeschrijving()
    {
        return $this->filmBeschrijving;
    }

    /**
     * @param mixed|null $filmBeschrijving
     */
    public function setFilmBeschrijving($filmBeschrijving)
    {
        $this->filmBeschrijving = $filmBeschrijving;
    }

    /**
     * @return mixed|null
     */
    public function getFilmRating()
    {
        return $this->filmRating;
    }

    /**
     * @param mixed|null $filmRating
     */
    public function setFilmRating($filmRating)
    {
        $this->filmRating = $filmRating;
    }

    /**
     * @return mixed|null
     */
    public function getFilmBanner()
    {
        return $this->filmBanner;
    }

    /**
     * @param mixed|null $filmBanner
     */
    public function setFilmBanner($filmBanner)
    {
        $this->filmBanner = $filmBanner;
    }

    public function oplezen()
    {
        echo
            "film naam = " . $this->getFilmNaam() .
            "<br> Film Rating = " . $this->getFilmRating() .
            "<br> Film Beschrijving = " . $this->getFilmBeschrijving() .
            "<br> Film Banner = " . $this->getFilmBanner() .
            "<br>";
    }


    public function createFilm()
    {
        echo "dit is een createFilm()<br/>";
        require "Connect.php";

        $FilmID = NULL;
        $FilmNaam = $this->getFilmNaam();
        $FilmBeschrijving = $this->getFilmBeschrijving();
        $FilmRating = $this->getFilmRating();
        $filmBanner = $this->getFilmBanner();

        $sql = $conn->Prepare
        ("
                    insert into film values
                    (:FilmID, :FilmNaam, :FilmBeschrijving, :FilmRating, :FilmBanner)
        ");

        $sql->bindParam("FilmID", $FilmID);
        $sql->bindParam("FilmNaam", $FilmNaam);
        $sql->bindParam("FilmBeschrijving", $FilmBeschrijving);
        $sql->bindParam("FilmRating", $FilmRating);
        $sql->BindParam("FilmBanner", $filmBanner);
        $sql->execute();

        echo "de film is toegevoegd <br/>";
    }

    public function readFilm()
    {
        require "connect.php";
        $sql = $conn->prepare("
                                select FilmID, FilmNaam, FilmBeschrijving, FilmRating, FilmBanner
                                from film
                               ");
        $sql->execute();
        foreach ($sql as $Film) {

            echo $Film["FilmID"] . "<br>";
            $this->filmNaam = $Film["FilmNaam"] . "  ";
            $this->filmBeschrijving = $Film["FilmBeschrijving"] . "  ";
            $this->filmRating = $Film["FilmRating"] . "  ";
            $this->filmBanner = $Film["FilmBanner"] . "  ";
        }
    }

    public function updateFilm($FilmID)
    {
        require "connect.php";
        $FilmID;
        $FilmNaam = $this->getFilmNaam();
        $FilmBeschrijving = $this->getFilmBeschrijving();
        $FilmRating = $this->getFilmRating();
        $FilmBanner = $this->getFilmBanner();


        $sql = $conn->prepare("
                               update film 
                               set FilmBeschrijving=:FilmBeschrijving, FilmRating=:FilmRating, filmBanner=:FilmBanner
                               where FilmID=:FilmID
                               ");

        $sql->bindParam(":FilmID", $FilmID);
        $sql->bindParam(":Filmnaam", $FilmNaam);
        $sql->bindParam(":FilmBeschrijving", $FilmBeschrijving);
        $sql->bindParam(":FilmRating", $FilmRating);
        $sql->bindParam(":FilmBanner", $FilmBanner);
        $sql->execute();
    }

    public function deleteFilm($FilmId)
    {
        require "connect.php";

        $sql = $conn->prepare("
                                delete from film where FilmdId=:FilmId
                                ");

        $sql->bindParam(":FilmId", $FilmId);
        $sql->execute();
    }

    public function searchFilm($FilmID)
    {
        require "connect.php";

        $sql = $conn->prepare("
                                select FilmId, FilmNaam, Filmbeschrijving, FilmRating, filmBanner
                                from film
                                where FilmId=:FilmdID
        ");

        $sql->bindParam("FilmID", $FilmID);
        $sql->execute();

        foreach ($sql as $Film) {
            $this->FilmNaam = $Film["FilmNaam"];
            $this->FilmBeschrijving = $Film["FilmBeschrijving"];
            $this->FilmRating = $Film["FilmRating"];
            $this->FilmBanner = $Film["FilmBanner"];

        }
    }
}
