<?php
require_once(__DIR__.'/gateway/UserGateway.php');
require_once(__DIR__.'/class/User.php');
class UserModel
{
    static function connection(string $pseudo, string $pass) : int {
        $userGate = new UserGateway();

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

    static function getUserNbAnimePage(string $pseudo) : int{
        $userGate = new UserGateway();
        return $userGate->getUserNbAnimePage($pseudo);
    }
}
