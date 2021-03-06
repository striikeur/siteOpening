<?php


class EndingNoteGateway
{
    private $con;
    public function __construct()
    {
        global $connectionEnding;
        $this->con = $connectionEnding;
    }

    public function findAllNotes(): array {
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 'admin') {
                return  null;
            }
        }
        $query = "SELECT * FROM noteending";

        $this->con->executeQuery($query, array());
        $listeNote = array();
        $results = $this->con->getResults();

        foreach ($results as $note){
            $listeNote[]=new Note($note['id'], $note['idAnime'], $note['idUser'], $note['noteVideo'], $note['noteMusique'], $note['noteTotale']);
        }
        return $listeNote;

    }
    public function createNotes(string $username){
        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($username, PDO::PARAM_STR)
        ));

        $user = $this->con->getResults();
        if(count($user) != 1 ){
            return -1;
        }
        $query = "SELECT * FROM animeending";
        $this->con->executeQuery($query, array());
        $animes = $this->con->getResults();

        foreach ($animes as $anime) {
            $query = "SELECT COUNT(*) FROM noteending where idAnime=:idAnime AND idUser=:idUser";
            $this->con->executeQuery($query, array(
                ':idAnime' => array($anime['id'], PDO::PARAM_INT),
                ':idUser' => array($user[0]['id'], PDO::PARAM_INT)
            ));
            $count = $this->con->getResults();
            if($count[0][0] == '0'){
                $this->createNote($anime['name'], $username);
            }
        }

    }


    public function findAllNotesByUser(string $pseudo) {
        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));

        $user = $this->con->getResults();
        if(count($user) != 1 ){
            return -1;
        }
        $query = "SELECT * FROM noteending WHERE idUser=:idUser";

        $this->con->executeQuery($query, array(
            ":idUser" => array($user[0]['id'], PDO::PARAM_INT)
        ));

        $listeNote = array();
        $results = $this->con->getResults();

        foreach ($results as $note){
            $listeNote[]=new Note($note['id'], $note['idAnime'], $note['idUser'], $note['noteVideo'], $note['noteMusique'], $note['noteTotale']);
        }
        return $listeNote;

    }

    public function countNotesByUser(string $pseudo){
        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));

        $user = $this->con->getResults();
        if(count($user) != 1 ){
            return -1;
        }
        $query = "SELECT COUNT(*) FROM noteending WHERE idUser=:idUser";

        $this->con->executeQuery($query, array(
            ":idUser" => array($user[0]['id'], PDO::PARAM_INT)
        ));

        $results = $this->con->getResults();
        return $results;
    }

    public function findAllNotesByUserNotNoted(string $pseudo) {

        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));

        $user = $this->con->getResults();
        if(count($user) != 1 ){
            return -1;
        }

        $query = "SELECT * FROM noteending WHERE idUser=:idUser AND noteTotale = -1";

        $this->con->executeQuery($query, array(
            ":idUser" => array($user[0]['id'], PDO::PARAM_INT)
        ));

        $listeNote = array();
        $results = $this->con->getResults();

        foreach ($results as $note){
            $listeNote[]=new Note($note['id'], $note['idAnime'], $note['idUser'], $note['noteVideo'], $note['noteMusique'], $note['noteTotale']);
        }
        return $listeNote;

    }
    public function findAllNotesByUserPaged(string $pseudo, int $limit, int $page) {
        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));

        $user = $this->con->getResults();
        if(count($user) != 1 ){
            return -1;
        }


        $beginning = ($page - 1) * $limit;
        $query = "SELECT * FROM noteending WHERE idUser=:idUser LIMIT :limit OFFSET :beginning";

        $this->con->executeQuery($query, array(
            ':idUser' => array($user[0]['id'], PDO::PARAM_INT),
            ':limit' => array($limit, PDO::PARAM_INT),
            ':beginning' => array($beginning, PDO::PARAM_INT)
        ));

        $listeNote = array();
        $results = $this->con->getResults();

        foreach ($results as $note){
            $listeNote[]=new Note($note['id'], $note['idAnime'], $note['idUser'], $note['noteVideo'], $note['noteMusique'], $note['noteTotale']);
        }
        return $listeNote;

    }

    public function findAllNotesByAnime(string $animeName) {
        $query = "SELECT * FROM animeending WHERE name=:name";
        $this->con->executeQuery($query, array(
            ':name' => array($animeName, PDO::PARAM_STR)
        ));
        $result = $this->con->getResults();
        if(count($result) != 1 ){
            return -1;
        }
        $query = "SELECT * FROM noteending WHERE idAnime=:idAnime";
        $this->con->executeQuery($query, array(
            ":idAnime" => array($result['id'], PDO::PARAM_INT)
        ));
        $listeNote = array();
        $results = $this->con->getResults();
        foreach ($results as $note){
            $listeNote[]=new Note($note['id'], $note['idAnime'], $note['idUser'], $note['noteVideo'], $note['noteMusique'], $note['noteTotale']);
        }
        return $listeNote;
    }

    public function findNoteByAnimePseudo(string $animeName, string $pseudo)
    {
        $query = "SELECT * FROM animeending WHERE name = :name";
        $this->con->executeQuery($query, array(
            ':name' => array($animeName, PDO::PARAM_STR)
        ));
        $anime = $this->con->getResults();
        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));
        $user = $this->con->getResults();
        $query = "SELECT * FROM noteending WHERE idAnime=:idAnime AND idUser=:idUser ";
        $this->con->executeQuery($query, array(
            ":idAnime" => array($anime[0]['id'], PDO::PARAM_INT),
            ":idUser" => array($user[0]['id'], PDO::PARAM_INT)
        ));
        $notes = $this->con->getResults();
        foreach ($notes as $note) {
            return new Note($note['id'], $note['idAnime'], $note['idUser'], $note['noteVideo'], $note['noteMusique'], $note['noteTotale']);
        }
    }


    public function checkNoteByPseudo(int $animeId, string $pseudo)
    {
        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));
        $user = $this->con->getResults();
        $query = "SELECT * FROM noteending WHERE idAnime=:idAnime AND idUser=:idUser ";
        $this->con->executeQuery($query, array(
            ":idAnime" => array($animeId, PDO::PARAM_INT),
            ":idUser" => array($user[0]['id'], PDO::PARAM_INT)
        ));
        $notes = $this->con->getResults();
    }

    public function updateNote(float $noteVideo, float $noteMusique, float $noteTotale, int $idAnime, string $pseudo){
        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));
        $user = $this->con->getResults();
        $query = "UPDATE noteending SET noteVideo=:noteVideo, noteMusique=:noteMusique, noteTotale=:noteTotale WHERE idUser=:idUser AND idAnime=:idAnime";
        $this->con->executeQuery($query, array(
            ':noteVideo' => array($noteVideo, PDO::PARAM_STR),
            ':noteMusique' => array($noteMusique, PDO::PARAM_STR),
            ':noteTotale' => array($noteTotale, PDO::PARAM_STR),
            ':idUser' => array($user[0]['id'], PDO::PARAM_INT),
            ':idAnime' => array($idAnime, PDO::PARAM_INT)
        ));
        $results = $this->con->getResults();
    }

    public function createNote(string $animeName, string $pseudo)
    {
        $query = "SELECT * FROM animeending WHERE name = :name";
        $this->con->executeQuery($query, array(
            ':name' => array($animeName, PDO::PARAM_STR)
        ));
        $anime = $this->con->getResults();
        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));
        $user = $this->con->getResults();
        $query = "INSERT INTO noteending (idUser, idAnime) VALUES (:idUser, :idAnime)";
        $this->con->executeQuery($query, array(
            ':idUser' => array($user[0]['id'], PDO::PARAM_INT),
            ':idAnime' => array($anime[0]['id'], PDO::PARAM_INT)
        ));
    }

}