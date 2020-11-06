<?php

class UserController {
    private $nbAnime;
    private $nbComment;
    private $nbCommentUser;

    function __construct() {
        global $rep,$vues;
        $dViewError = array();

        $this->nbAnime = AnimeModel::findNbAnime();

        try {
            if (isset($_REQUEST['action'])) {
                $action=$_REQUEST['action'];
            }
            else {
                $action=NULL;
            }

            switch($action) {
                case NULL: //Pas d'action, appel de la page d'accueil du blog avec toutes les news
                    $this->Top();
                    break;
                case "search": //Appel de la page d'accueil du blog, mais avec les résultats de la recherche comme news
                    $this->Search($dViewError);
                    break;
                case "login": //Appel de la page d'accueil du blog, mais avec les résultats de la recherche comme news
                    $this->Login();
                    break;
                case "connection": //Appel de la page d'accueil du blog, mais avec les résultats de la recherche comme news
                    $this->Connection($dViewError);
                    break;
                case "coffee":
                    $this->Coffee(); //Easter egg avec l'erreur http 418
                    break;
                default: //mauvaise action
                    $dViewError[] =	"Erreur d'appel php.";
                    require ($rep.$vues['error']);
                    break;
            }

        } catch (PDOException $e) {
            $dViewError[] =	"Erreur inattendue avec la base de données !";
            require ($rep.$vues['error']);
        }
        catch (Exception $e)
        {
            $dViewError[] =	"Erreur inattendue !";
            require ($rep.$vues['error']);
        }

        exit(0);
    }


    function Top() {
        global $rep,$vues;

        if (isset($_REQUEST['page'])) {
            $page = $_REQUEST['page'];
        }
        else {
            $page = 1;
        }

        Validation::val_page($page);

        $nbAnime = AnimeModel::findNbAnime();
        $listAnime = AnimeModel::getAllAnime();
        require ($rep.$vues['top']);
    }


    function Search($dViewError) {
        global $rep,$vues;

        if (isset($_POST['search'])) {
            $keyWord=$_POST['search'];
        }
        else {
            $keyWord='';
        }

        Validation::val_search($keyWord, $dViewError);

        $listNews = AnimeModel::getAnimeByName($keyWord);
        require ($rep.$vues['top']);
    }

    function Login() {
        global $rep,$vues;

        $admin = AdminModel::isAdmin();

        if ($admin == NULL) {
            require ($rep.$vues['login']);
        }
        else {
            $listNews = NewsModel::getAllNews();
            require ($rep.$vues['admin']);
        }
    }

    function Connection($dViewError) {
        global $rep,$vues;

        if (isset($_POST['pseudo'])) {
            $pseudo=$_POST['pseudo'];
        }
        else {
            $pseudo='';
        }

        if (isset($_POST['password'])) {
            $password=$_POST['password'];
        }
        else {
            $password='';
        }

        Validation::val_connection($pseudo, $password, $dViewError);

        if (count($dViewError) == 0) {
            $isAdmin = AdminModel::connection($pseudo, $password);

            switch($isAdmin) {
                case 1:
                    header('Location: ?action=admin');
                    break;
                case 0:
                    $dViewError[] =	"Le pseudo et le mot de passe ne correspondent pas ou l'administrateur n'est pas dans notre base de donnée.";
                    require ($rep.$vues['login']);
                    break;
                default:
                    $dViewError[] = "Erreur avec la base de donnée.";
                    require($rep . $vues['error']);
                    break;
            }
        }
        else {
            require ($rep.$vues['login']);
        }
    }

    function Coffee() {
        global $rep,$vues;

        require ($rep.$vues['error-418']);
    }
}
