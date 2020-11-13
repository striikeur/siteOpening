<?php

class AnimeGateway {
    private $con;
    private $formatDate = "d/m/Y H\hi";

    public function __construct(Connection $con) {
        $this->con = $con;
    }

    public function findAllAnime() : array {

        $query = "SELECT * FROM anime";

        $this->con->executeQuery($query, array());

        $results = $this->con->getResults();

        $listAnime = array();

        Foreach ($results as $anime)
            $listAnime[]=new Anime($anime['id'], $anime['name'], $anime['season'], $anime['malLink'], $anime['videoLink']);

        return $listAnime;
    }


    public function findAnimeById(int $ID) : Anime {
        $query = "SELECT * FROM anime WHERE id=:id";

        $this->con->executeQuery($query, array(
            ':id' => array($ID, PDO::PARAM_INT)
        ));

        $results = $this->con->getResults();
        foreach ($results as $anime)
            return new Anime($anime['id'], $anime['name'], $anime['season'], $anime['malLink'], $anime['videoLink']);
    }



    public function findAnimeBySeason(string $season) : array {
        $query=" SELECT * FROM anime WHERE season=:season";

        $this->con->executeQuery($query, array(
            ':season' => array($season, PDO::PARAM_STR)
        ));
        $listAnime = array();
        $results = $this->con->getResults();
        foreach ($results as $anime){
            $listAnime[] = new Anime($anime['id'], $anime['name'], $anime['season'], $anime['malLink'], $anime['videoLink']);
        }
        return $listAnime;

    }



    function findAnimeByName(string $keyWord) : array {
        $query = "SELECT * FROM anime WHERE name LIKE :content";

        $this->con->executeQuery($query, array(
            ':content' => array('%'.$keyWord.'%', PDO::PARAM_STR)
        ));

        $results = $this->con->getResults();
        $listNews=array();
        Foreach ($results as $anime)
            $listNews[]=new Anime($anime['id'], $anime['name'], $anime['season'], $anime['malLink'], $anime['videoLink']);
        return $listNews;
    }


    public function findNbAnime() : int {
        $query = "SELECT * FROM anime";

        $this->con->executeQuery($query, array());

        $results = $this->con->getResults();

        return count($results);
    }

    public function findNbAnimeBySeason(string $season) : int {
        $query=" SELECT * FROM anime WHERE season=:season";

        $this->con->executeQuery($query, array(
            ':season' => array($season, PDO::PARAM_STR)
        ));

        $results = $this->con->getResults();

        return count($results);
    }


    public function insertAnime(string $name, string $season, string $malLink, string $videoLink) {

        $query = "INSERT INTO anime VALUES(NULL, :name, :season, :malLink, :videoLink)";

        $this->con->executeQuery($query, array(
            ':name' => array($name, PDO::PARAM_STR),
            ':season' => array($season, PDO::PARAM_STR),
            ':malLink' => array($malLink, PDO::PARAM_STR),
            ':videoLink' => array($videoLink, PDO::PARAM_STR)
        ));
    }

    public function deleteAnimeById(int $ID) {
        $query = "DELETE FROM anime WHERE id=:id";

        $this->con->executeQuery($query, array(
            ':id' => array($ID, PDO::PARAM_INT)
        ));

    }

    public function updateAnime(int $id, string $name, string $season, string $malLink, string $videoLink) {
        $query = "UPDATE anime SET name=:name, season=:season, malLink=:malLink, videoLink=:videoLink WHERE id=:id";

        $this->con->executeQuery($query, array(
            ':name' => array($name, PDO::PARAM_STR),
            ':season' => array($season, PDO::PARAM_STR),
            ':malLink' => array($malLink, PDO::PARAM_STR),
            ':videoLink' => array($videoLink, PDO::PARAM_STR),
            ':id' => array($id, PDO::PARAM_INT)
        ));
    }
}