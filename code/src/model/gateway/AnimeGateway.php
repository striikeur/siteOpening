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
            $listAnime[]=new Anime($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink']);

        return $listAnime;
    }


    public function findAnimeById(int $ID) : Anime {
        $query = "SELECT * FROM anime WHERE id=:id";

        $this->con->executeQuery($query, array(
            ':id' => array($ID, PDO::PARAM_INT)
        ));

        $results = $this->con->getResults();
        foreach ($results as $anime)
            return new Anime($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink']);
    }
    public function findAllAnimeByPage(int $limit, int $page) : array {
        $beginning = ($page -1) * $limit;

        $query = "SELECT * FROM anime LIMIT :limit OFFSET :beginning";

        $this->con->executeQuery($query, array(
            ':limit' => array($limit, PDO::PARAM_INT),
			':beginning' => array($beginning, PDO::PARAM_INT)
        ));

        $results = $this->con->getResults();

        $listAnime = array();

        Foreach ($results as $anime)
            $listAnime[]=new Anime($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink']);

        return $listAnime;
    }



    public function findAnimeBySeason(string $season) : array {
        $query=" SELECT * FROM anime WHERE season=:season";

        $this->con->executeQuery($query, array(
            ':season' => array($season, PDO::PARAM_STR)
        ));
        $listAnime = array();
        $results = $this->con->getResults();
        foreach ($results as $anime){
            $listAnime[] = new Anime($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink']);
        }
        return $listAnime;

    }


    public function findAnimeBySeasonByPage(string $season, int $limit, int $page) : array {

        $beginning = ($page -1) * $limit;

        $query=" SELECT * FROM anime WHERE season=:season LIMIT :limit OFFSET :beginning";

        $this->con->executeQuery($query, array(
            ':season' => array($season, PDO::PARAM_STR),
            ':limit' => array($limit, PDO::PARAM_INT),
            ':beginning' => array($beginning, PDO::PARAM_INT)
        ));

        $listAnime = array();
        $results = $this->con->getResults();
        foreach ($results as $anime){
            $listAnime[] =  new Anime($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink']);
        }
        return $listAnime;

    }
    public function findAllAnimeByPageNotNoted(int $limit, int $page) : array {

        $beginning = ($page -1) * $limit;

        $query=" SELECT * FROM anime WHERE id = :id";

        $this->con->executeQuery($query, array(
            ':limit' => array($limit, PDO::PARAM_INT),
            ':beginning' => array($beginning, PDO::PARAM_INT)
        ));

        $listAnime = array();
        $results = $this->con->getResults();
        foreach ($results as $anime){
            $listAnime[] =  new Anime($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink']);
        }
        return $listAnime;

    }

    public function findAnimeByPageNotNoted(int $limit, int $page) : array {

        $beginning = ($page -1) * $limit;

        $query=" SELECT * FROM anime WHERE  LIMIT :limit OFFSET :beginning";

        $this->con->executeQuery($query, array(
            ':limit' => array($limit, PDO::PARAM_INT),
            ':beginning' => array($beginning, PDO::PARAM_INT)
        ));

        $listAnime = array();
        $results = $this->con->getResults();
        foreach ($results as $anime){
            $listAnime[] =  new Anime($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink']);
        }
        return $listAnime;

    }



    function findAnimeByName(string $keyWord,int $limit, int $page) : array {

        $beginning = ($page -1) * $limit;

        $query = "SELECT * FROM anime WHERE upper(name) LIKE upper(:content) LIMIT :limit OFFSET :beginning";


        $this->con->executeQuery($query, array(
            ':content' => array('%'.$keyWord.'%', PDO::PARAM_STR),
            ':limit' => array($limit, PDO::PARAM_INT),
            ':beginning' => array($beginning, PDO::PARAM_INT)
        ));

        $results = $this->con->getResults();
        $listNews=array();
        Foreach ($results as $anime)
            $listNews[] = new Anime($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink']);
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


    public function insertAnime(string $name, string $season, string $malLink, string $miniature, string $videoLink) {

        $query = "INSERT INTO anime VALUES(NULL, :name, :season, :malLink, :miniature, :videoLink)";

        $this->con->executeQuery($query, array(
            ':name' => array($name, PDO::PARAM_STR),
            ':season' => array($season, PDO::PARAM_STR),
            ':malLink' => array($malLink, PDO::PARAM_STR),
            ':miniature' => array($miniature, PDO::PARAM_STR),
            ':videoLink' => array($videoLink, PDO::PARAM_STR)
        ));
    }

    public function deleteAnimeById(int $ID) {
        $query = "DELETE FROM anime WHERE id=:id";

        $this->con->executeQuery($query, array(
            ':id' => array($ID, PDO::PARAM_INT)
        ));

    }

    public function updateAnime(int $id, string $name, string $season, string $malLink, string $miniature, string $videoLink) {
        $query = "UPDATE anime SET name=:name, season=:season, malLink=:malLink,miniature=:miniature, videoLink=:videoLink WHERE id=:id";

        $this->con->executeQuery($query, array(
            ':name' => array($name, PDO::PARAM_STR),
            ':season' => array($season, PDO::PARAM_STR),
            ':malLink' => array($malLink, PDO::PARAM_STR),
            ':miniature' => array($miniature, PDO::PARAM_STR),
            ':videoLink' => array($videoLink, PDO::PARAM_STR),
            ':id' => array($id, PDO::PARAM_INT)
        ));
    }
}