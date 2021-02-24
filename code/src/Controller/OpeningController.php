<?php


class OpeningController
{
    function __construct() {
        global $rep,$vues;
        $dViewError = array();

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
                case "Winter":
                    $this->season("Winter");
                    break;
                case "Spring":
                    $this->season("Spring");
                    break;
                case "Summer":
                    $this->season("Summer");
                    break;
                case "Fall":
                    $this->season("Fall");
                    break;
                case "notNoted":
                    $this->notNoted();
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
        $_SESSION['origine'] = 'top';
        if (isset($_REQUEST['page'])) {
            $page = $_REQUEST['page'];
        }
        else {
            $page = 1;
        }
        $user = UserModel::isUser();
        if($user == NULL){
            require ($rep.$vues['login']);
        } else {
            $this->setView($user, $rep, $vues, $page);
        }
    }


    function Search($dViewError) {
        global $rep,$vues;
        $_SESSION['origine'] = 'search';
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
            if (isset($_REQUEST['page'])) {
                $page = $_REQUEST['page'];
            } else {
                $page = 1;
            }
            $user->setNote(new ListNote(NoteModel::findAllNotesByUser($_SESSION['login'])));
            $user->setNbAnimePage(UserModel::getUserNbAnimePage($_SESSION['login']));
            $listAnime = AnimeModel::getAnimeByName($keyWord, $user->getNbAnimePage(), $page);
            $nbAnime = count($listAnime);
            $nbPages = ceil($nbAnime / $user->getNbAnimePage());
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
            if(isset($_SESSION['origine'])){
                switch ($_SESSION['origine']){
                    case 'top':
                        $_SESSION['origine'] = null;
                        $this->Top();
                        break;
                    case 'season' :
                        $_SESSION['origine'] = null;
                        $this->season($_SESSION['season']);;
                        break;
                    case 'notNoted':
                        $_SESSION['origine'] = null;
                        $this->notNoted();
                        break;
                    case 'search':
                        $dViewError = array();
                        $_SESSION['origine'] = null;
                        $this->Search($dViewError);
                        break;
                }
            }
            else {
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                } else {
                    $page = 1;
                }
                $this->setView($user, $rep, $vues, $page);
            }
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
                    $dViewError[] =	"Le pseudo et le mot de passe ne correspondent pas ou l'utilisateur n'est pas dans notre base de données.";
                    require ($rep.$vues['login']);
                    break;
                default:
                    $dViewError[] = "Erreur avec la base de données.";
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
    /**
     * @param User $user
     */
    public function setView(User $user, $rep, $vues, $page)
    {
        if(NoteModel::countNotesByUser($_SESSION['login']) != AnimeModel::countAnime()){
            NoteModel::createNotes($_SESSION['login']);
        }
        $user->setNote(new ListNote(NoteModel::findAllNotesByUser($_SESSION['login'])));

        $user->setNbAnimePage(UserModel::getUserNbAnimePage($_SESSION['login']));
        $nbAnime = AnimeModel::countAnime();
        $nbPages = ceil($nbAnime / $user->getNbAnimePage());
        $listAnime = AnimeModel::getAllAnimeByPage($user->getNbAnimePage(), $page);
        require ($rep.$vues['top']);
    }

    public function season(string $season){
        $_SESSION['origine'] = 'season';
        $_SESSION['season'] = $season;
        global $rep,$vues;
        $user = UserModel::isUser();
        if($user == NULL){
            require ($rep.$vues['login']);
        } else {
            if (isset($_REQUEST['page'])) {
                $page = $_REQUEST['page'];
            } else {
                $page = 1;
            }
            $user->setNote(new ListNote(NoteModel::findAllNotesByUser($_SESSION['login'])));
            $user->setNbAnimePage(UserModel::getUserNbAnimePage($_SESSION['login']));
            $nbAnime = AnimeModel::findNbAnimeBySeason($season);
            $nbPages = ceil($nbAnime / $user->getNbAnimePage());
            $listAnime = AnimeModel::findAllAnimeBySeasonByPage($season, $user->getNbAnimePage(), $page);
            require($rep . $vues['top']);
        }
    }

    public function notNoted(){
        global $rep,$vues;
        $_SESSION['origine'] = 'notNoted';
        $user = UserModel::isUser();
        if($user == NULL){
            require ($rep.$vues['login']);
        } else {
            if (isset($_REQUEST['page'])) {
                $page = $_REQUEST['page'];
            } else {
                $page = 1;
            }
            $user->setNote(new ListNote(NoteModel::findAllNotesByUserNotNoted($_SESSION['login'])));
            $user->setNbAnimePage(UserModel::getUserNbAnimePage($_SESSION['login']));
            $nbAnime = count($user->getNote()->getLesNotes());
            $nbPages = ceil($nbAnime / $user->getNbAnimePage());
            $index = $user->getNbAnimePage() * ($page - 1);
            for ($i = $index; $i < $index + 3; $i++) {
                if ($i < count($user->getNote()->getLesNotes())) {
                    $note = $user->getNote()->getLesNotes()[$i];
                    $listAnime[] = AnimeModel::getAnimeById($note->getAnimeId());
                }
            }
            require($rep . $vues['top']);
        }
    }

}