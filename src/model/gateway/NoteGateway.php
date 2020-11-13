<?php

class NoteGateway
{
    private $con;

    /**
     * NoteGateway constructor.
     * @param $con
     */
    public function __construct(Connection $con)
    {
        $this->con = $con;
    }

    public function findAllNotes(): array {
        if(isset($_SESSION['role'])){
            if($_SESSION['role'] != 'admin') {
                return  null;
            }
        }
        $query = "SELECT * FROM note";

        $this->con->executeQuery($query, array());
        $listeNote = array();
        $results = $this->con->getResults();

        foreach ($results as $note){
            $listeNote[]=new Note($note['id'], $note['idAnime'], $note['idUser'], $note['noteVideo'], $note['noteMusique'], $note['noteTotale']);
        }
        return $listeNote;

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
        $query = "SELECT * FROM note WHERE idUser=:idUser";

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

    public function findAllNotesByAnime(string $animeName) {
        $query = "SELECT * FROM anime WHERE name=:name";
        $this->con->executeQuery($query, array(
            ':name' => array($animeName, PDO::PARAM_STR)
        ));

        $result = $this->con->getResults();
        if(count($result) != 1 ){
            return -1;
        }



        $query = "SELECT * FROM note WHERE idAnime=:idAnime";

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
        $query = "SELECT * FROM anime WHERE name = :name";
        $this->con->executeQuery($query, array(
            ':name' => array($animeName, PDO::PARAM_STR)
        ));

        $anime = $this->con->getResults();

        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));

        $user = $this->con->getResults();



        $query = "SELECT * FROM note WHERE idAnime=:idAnime AND idUser=:idUser ";

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


        $query = "SELECT * FROM note WHERE idAnime=:idAnime AND idUser=:idUser ";

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




        $query = "UPDATE note SET noteVideo=:noteVideo, noteMusique=:noteMusique, noteTotale=:noteTotale WHERE idUser=:idUser AND idAnime=:idAnime";
        $this->con->executeQuery($query, array(
            ':noteVideo' => array($noteVideo, PDO::PARAM_STR),
            ':noteMusique' => array($noteMusique, PDO::PARAM_STR),
            ':noteTotale' => array($noteTotale, PDO::PARAM_STR),
            ':idUser' => array($user[0]['id'], PDO::PARAM_INT),
            ':idAnime' => array($idAnime, PDO::PARAM_INT)
        ));



    }
    public function createNote(string $animeName, string $pseudo)
    {

        $query = "SELECT * FROM anime WHERE name = :name";
        $this->con->executeQuery($query, array(
            ':name' => array($animeName, PDO::PARAM_STR)
        ));

        $anime = $this->con->getResults();

        $query = "SELECT * FROM user WHERE pseudo=:pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));

        $user = $this->con->getResults();

        $query = "INSERT INTO `note` (`idUser`, `idAnime`) VALUES (:idUser, :idAnime)";

        $this->con->executeQuery($query, array(
            ':idUser' => array($user[0]['id'], PDO::PARAM_INT),
            ':idAnime' => array($anime[0]['id'], PDO::PARAM_INT)
        ));


    }

}
