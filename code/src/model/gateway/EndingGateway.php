<?php


class EndingGateway
{
    private $con;
    private $formatDate = "d/m/Y H\hi";

    public function __construct() {
        global $connectionEnding;
        $this->con = $connectionEnding;
    }

    public function findAllAnime() {
        $query = "SELECT * FROM animeending";
        $this->con->executeQuery($query, array());
        $results = $this->con->getResults();
        $listAnime = array();
        foreach ($results as $anime)
            $listAnime[] = new Ending($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink'], $anime['moyenne'], $anime['nsfw'], $anime['spoiler']);
        return $listAnime;
    }


    public function findAnimeById(int $ID) : Ending {
        $query = "SELECT * FROM animeending WHERE id=:id";
        $this->con->executeQuery($query, array(
            ':id' => array($ID, PDO::PARAM_INT)
        ));
        $results = $this->con->getResults();
        foreach ($results as $anime)
            return new Ending($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink'], $anime['moyenne'], $anime['nsfw'], $anime['spoiler']);
    }
    public function findAllAnimeByPage(int $limit, int $page) : array {
        $beginning = ($page -1) * $limit;
        $query = "SELECT * FROM animeending LIMIT :limit OFFSET :beginning";

        $this->con->executeQuery($query, array(
            ':limit' => array($limit, PDO::PARAM_INT),
            ':beginning' => array($beginning, PDO::PARAM_INT)
        ));
        $results = $this->con->getResults();
        $listAnime = array();
        foreach ($results as $anime)
            $listAnime[] = new Ending($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink'], $anime['moyenne'], $anime['nsfw'], $anime['spoiler']);
        return $listAnime;
    }



    public function findAnimeBySeason(string $season) : array {
        $query=" SELECT * FROM animeending WHERE season=:season";
        $this->con->executeQuery($query, array(
            ':season' => array($season, PDO::PARAM_STR)
        ));
        $listAnime = array();
        $results = $this->con->getResults();
        foreach ($results as $anime){
            $listAnime[] = new Ending($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink'], $anime['moyenne'], $anime['nsfw'], $anime['spoiler']);
        }
        return $listAnime;
    }


    public function findAnimeBySeasonByPage(string $season, int $limit, int $page) : array {
        $beginning = ($page -1) * $limit;
        $query=" SELECT * FROM animeending WHERE season=:season LIMIT :limit OFFSET :beginning";
        $this->con->executeQuery($query, array(
            ':season' => array($season, PDO::PARAM_STR),
            ':limit' => array($limit, PDO::PARAM_INT),
            ':beginning' => array($beginning, PDO::PARAM_INT)
        ));

        $listAnime = array();
        $results = $this->con->getResults();
        foreach ($results as $anime){
            $listAnime[] =  new Ending($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink'], $anime['moyenne'], $anime['nsfw'], $anime['spoiler']);
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
            $listAnime[] =  new Ending($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink'], $anime['moyenne'], $anime['nsfw'], $anime['spoiler']);
        }
        return $listAnime;
    }

    public function findAnimeByPageNotNoted(int $limit, int $page) : array {
        $beginning = ($page -1) * $limit;
        $query=" SELECT * FROM animeending WHERE  LIMIT :limit OFFSET :beginning";
        $this->con->executeQuery($query, array(
            ':limit' => array($limit, PDO::PARAM_INT),
            ':beginning' => array($beginning, PDO::PARAM_INT)
        ));
        $listAnime = array();
        $results = $this->con->getResults();
        foreach ($results as $anime){
            $listAnime[] =  new Ending($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink'], $anime['moyenne'], $anime['nsfw'], $anime['spoiler']);
        }
        return $listAnime;
    }



    function findAnimeByName(string $keyWord,int $limit, int $page) : array {
        $beginning = ($page -1) * $limit;
        $query = "SELECT * FROM animeending WHERE upper(name) LIKE upper(:content) LIMIT :limit OFFSET :beginning";
        $this->con->executeQuery($query, array(
            ':content' => array('%'.$keyWord.'%', PDO::PARAM_STR),
            ':limit' => array($limit, PDO::PARAM_INT),
            ':beginning' => array($beginning, PDO::PARAM_INT)
        ));
        $results = $this->con->getResults();
        $listNews=array();
        Foreach ($results as $anime)
            $listNews[] = new Ending($anime['id'], $anime['name'], $anime['malLink'], $anime['season'], $anime['miniature'],  $anime['videoLink'], $anime['moyenne'], $anime['nsfw'], $anime['spoiler']);
        return $listNews;
    }


    public function countAnime() : int {
        $query = "SELECT * FROM animeending";
        $this->con->executeQuery($query, array());
        $results = $this->con->getResults();
        return count($results);
    }

    public function findNbAnimeBySeason(string $season) : int {
        $query=" SELECT * FROM animeending WHERE season=:season";
        $this->con->executeQuery($query, array(
            ':season' => array($season, PDO::PARAM_STR)
        ));
        $results = $this->con->getResults();
        return count($results);
    }

    public function insertAnime(string $name, string $season, string $malLink, string $miniature, string $videoLink) {
        echo($name."<br/>");
        $query = "INSERT INTO animeending (name, season, malLink, miniature, videolink) VALUES(:name, :season, :malLink, :miniature, :videoLink)";

        $this->con->executeQuery($query, array(
            ':name' => array($name, PDO::PARAM_STR),
            ':season' => array($season, PDO::PARAM_STR),
            ':malLink' => array($malLink, PDO::PARAM_STR),
            ':miniature' => array($miniature, PDO::PARAM_STR),
            ':videoLink' => array($videoLink, PDO::PARAM_STR)
        ));
    }
    public function deleteAnimeById(int $ID) {
        $query = "DELETE FROM animeending WHERE id=:id";
        $this->con->executeQuery($query, array(
            ':id' => array($ID, PDO::PARAM_INT)
        ));
    }

    public function updateAnime(int $id, string $name, string $season, string $malLink, string $miniature, string $videoLink) {
        $query = "UPDATE animeending SET name=:name, season=:season, malLink=:malLink,miniature=:miniature, videoLink=:videoLink WHERE id=:id";
        $this->con->executeQuery($query, array(
            ':name' => array($name, PDO::PARAM_STR),
            ':season' => array($season, PDO::PARAM_STR),
            ':malLink' => array($malLink, PDO::PARAM_STR),
            ':miniature' => array($miniature, PDO::PARAM_STR),
            ':videoLink' => array($videoLink, PDO::PARAM_STR),
            ':id' => array($id, PDO::PARAM_INT)
        ));
    }
    public function updateAnimesMoyenne(){
        $animes = $this->findAllAnime();
        foreach ($animes as $anime) {

            $query = "SELECT * FROM noteending WHERE idAnime=:idAnime AND noteTotale > 0";
            $this->con->executeQuery($query, array(
                ':idAnime' => array($anime->getId(), PDO::PARAM_INT)
            ));
            $notes = $this->con->getResults();
            $totale = 0;
            $count = 0;
            foreach ($notes as $note) {
                $totale = $note['noteTotale'] + $totale;
                $count++;
            }

            $moyenne = $totale / $count;
            $moyenne = round($moyenne, 3);

            $query = "UPDATE animeending SET moyenne=:moyenne WHERE id=:id";
            $this->con->executeQuery($query, array(
                ':moyenne' => array($moyenne, PDO::PARAM_STR),
                ':id' => array($anime->getId(), PDO::PARAM_INT)
            ));
        }
    }
    public function updateAnimeMoyenne(int $idAnime){
        $query = "SELECT * FROM noteending WHERE idAnime=:idAnime AND noteTotale > 0";
        $this->con->executeQuery($query, array(
            ':idAnime' => array($idAnime, PDO::PARAM_INT)
        ));
        $notes = $this->con->getResults();
        $totale = 0;
        $count = 0;
        foreach ($notes as $note) {
            $totale = $note['noteTotale'] + $totale;
            $count++;
        }
        $moyenne = $totale / $count;
        $moyenne = round($moyenne, 3);
        $query = "UPDATE animeending SET moyenne=:moyenne WHERE id=:id";
        $this->con->executeQuery($query, array(
            ':moyenne' => array($moyenne, PDO::PARAM_STR),
            ':id' => array($idAnime, PDO::PARAM_INT)
        ));
    }

    public function updateNSFW(int $idAnime){
        $query = "UPDATE animeending SET nsfw = 1 WHERE id=:idAnime";
        $this->con->executeQuery($query, array(
            ':idAnime' => array($idAnime, PDO::PARAM_INT),
        ));
    }
    public function updateSpoiler(int $idAnime){
        $query = "UPDATE animeending SET spoiler = 1 WHERE id=:idAnime";
        $this->con->executeQuery($query, array(
            ':idAnime' => array($idAnime, PDO::PARAM_INT),
        ));
    }
}