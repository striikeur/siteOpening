<?php

class AdminGateway {
    private $con;

    public function __construct(Connection $con) {
        $this->con = $con;
    }

    public function findAdmin(string $pseudo, string $password) : int {
        global $rep, $vues;

        $query = "SELECT password FROM admin WHERE pseudo=:pseudo";

        $this->con->executeQuery($query, array(
            ':pseudo' => array($pseudo, PDO::PARAM_STR)
        ));

        $results = $this->con->getResults();

        switch(count($results)) {
            case 1: //Un résultat => il y a bien un administrateur avec ce pseudo
                $hash = $results[0];
                if (password_verify($password, $hash['password'])) { //On vérifie le mot de passe
                    return 1;
                }
                return 0;
                break;
            case 0: //Aucun résultat => ce n'est pas un administrateur
                return 0;
                break;
            default: //mauvaise action (ex: plusieurs résultats)
                return -1;
                break;
        }
    }
}