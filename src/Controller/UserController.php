<?php

class UserController {
    private $nbAnime;

    function __construct() {
        global $rep,$vues;
        $dViewError = array();


        $this->nbAnime = AnimeModel::findNbAnime();

        try {
            if (isset($_REQUEST['action'])) {
                $action=$_REQUEST['action'];
            }
            else {
                $action = NULL;
            }

            switch($action) {
                case NULL: //Pas d'action, appel de la page de connexion
                    $this->Login();
                    break;
                case 'top': // Utilisateur connecté le top peut start
                    $this->Top();
                    break;
                case "search": //Appel de la page du top, mais avec les résultats de la recherche comme anime
                    $this->Search($dViewError);
                    break;
                case "admin": //
                    $this->LoginAdmin();
                    break;
                case "connection": //
                    $this->Connection($dViewError);
                    break;
                case "coffee":
                    $this->Coffee(); //Easter egg avec l'erreur http 418
                    break;
                case "bamboozled":
                    $this->Bamboozled();
                    break;
                case "updateNote":
                    $this->UpdateNotes();
                    break;

                default: //mauvaise action
                    $dViewError[] =	"Erreur d'appel php.";
                    require ($rep.$vues['error']);
                    break;
            }

        } catch (PDOException $e) {


            $dViewError[] =	($e->getFile().' '.$e->getLine().' '.$e->getMessage());
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


        $user = UserModel::isUser();
        $user->setNote(new ListNote(NoteModel::findAllNotesByUser($_SESSION['login'])));
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

        $user = UserModel::isUser();

        if ($user == NULL) {
            require ($rep.$vues['login']);
        }

        else {
            $user->setNote(new ListNote(NoteModel::findAllNotesByUser($_SESSION['login'])));
            $nbAnime = AnimeModel::findNbAnime();
            $listAnime = AnimeModel::getAnimeByName($keyWord);
            require ($rep.$vues['top']);
        }
    }

    function Login() {
        global $rep,$vues;

        $user = UserModel::isUser();


        if ($user == NULL) {
            require ($rep.$vues['login']);
        }
        else {
            $user->setNote(new ListNote(NoteModel::findAllNotesByUser($_SESSION['login'])));
            $nbAnime = AnimeModel::findNbAnime();
            $listAnime = AnimeModel::getAllAnime();
            require ($rep.$vues['top']);
        }
    }


    function LoginAdmin() {
        global $rep,$vues;

        $user = UserModel::isUser();

        if ($user == NULL) {
            require ($rep.$vues['login']);
        }
        else {
            $listNews = AnimeModel::getAllAnime();
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
            $isUser = UserModel::connection($pseudo, $password);

            switch($isUser) {
                case 1:
                    header('Location: ?action=top');
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

    function Bamboozled(){
        global $rep,$vues;
        $dViewError[] = "You just got Bamboozled";
        require($rep.$vues['error']);

    }
    function UpdateNotes(){
        if( isset($_POST['noteMusique']) && isset($_POST['noteVideo']) && isset($_POST['noteFinale']) && isset($_POST['idAnime']) ){

            NoteModel::updateNote($_POST['noteVideo'], $_POST['noteMusique'],$_POST['noteFinale'], $_POST['idAnime']);

        }
    }

    function Coffee() {
        global $rep,$vues;

        require ($rep.$vues['error-418']);
    }
}
