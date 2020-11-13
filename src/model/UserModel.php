<?php
class UserModel
{
    static function connection(string $pseudo, string $pass) : int {
        global $dsn, $user, $password;

        $userGate = new UserGateway(new Connection($dsn, $user, $password));

        if ($userGate->findUser($pseudo, $pass) == 1) {
            $_SESSION['login'] = $pseudo;
            $_SESSION['role'] = 'user';
            return 1;
        }
        return $userGate->findUser($pseudo, $pass);
    }

    static function logout() {
        session_unset();
        session_destroy();
        $_SESSION = array();
        session_start();
    }
    static function isUser() {
        if (isset($_SESSION['login']) && isset($_SESSION['role'])) {
            $login = $_SESSION['login'];
            $role = $_SESSION['role'];

            return new User($login, $role);
        }
        else {
            return NULL;
        }
    }

}
