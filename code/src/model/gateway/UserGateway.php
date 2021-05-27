<?php

class UserGateway {
    private $con;

    /**
     * UserGateway constructor.
     * @param $con
     */
    public function __construct()
    {
        global $connection;
        $this->con = $connection;
    }


    public function findUser(string $pseudo, string $password): int{
        global $rep, $vues;

        $query = "SELECT * FROM user WHERE pseudo = :pseudo";

        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));

        $results = $this->con->getResults();
        switch(count($results)) {
            case 1: //Un résultat => il y a bien un user avec ce pseudo
                $hash = $results[0];
                if (password_verify($password, $hash['password'])) { //On vérifie le mot de passe
                    return 1;
                }
                return 0;
                break;
            case 0: //Aucun résultat => ce n'est pas un user enregistre
                return 0;
                break;
            default: //mauvaise action (ex: plusieurs résultats)
                return -1;
                break;
        }

    }

    public function getUserNbAnimePage(string $pseudo) :int {

        $query = "SELECT nbAnimePage FROM user WHERE pseudo = :pseudo";
        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));

        $results = $this->con->getResults();

        foreach($results as $res){
            return $res['nbAnimePage'];
        }
    }
    public function getUserById(int $id) {
        $query = "SELECT * FROM `user` WHERE id = :id";
        $this->con->executeQuery($query, array(
            ':id' => array($id, PDO::PARAM_INT)
        ));
        $results = $this->con->getResults();
        foreach($results as $res){
            return new User($res['pseudo']);
        }
    }

    public function getUsers(){
        $query = "SELECT * FROM user";
        $this->con->executeQuery($query, array(
        ));
        $users = [];
        $results = $this->con->getResults();
        foreach($results as $res){
            $users[] = new User($res['pseudo']);
        }
        return $users;
    }


}
