<?php

class AdminModel
{
    static function connection(string $pseudo, string $pass) : int {
        global $dsn, $user, $password;

        $adminG = new AdminGateway(new Connection($dsn, $user, $password));

        if ($adminG->findAdmin($pseudo, $pass) == 1) {
            $_SESSION['login'] = $pseudo;
            $_SESSION['role'] = 'admin';
            return 1;
        }
        return $adminG->findAdmin($pseudo, $pass);
    }

    static function logout() {
        session_unset();
        session_destroy();
        $_SESSION = array();
        session_start();
    }

    static function isAdmin() {
        if (isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $login = $_SESSION['login'];
            $role = $_SESSION['role'];
            return new Admin($login, $role);
        }
        else {
            return NULL;
        }
    }
}