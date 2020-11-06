<?php

class AdminController {
    private $nbNews;
    private $nbComment;
    private $nbCommentUser;

    function __construct() {
        global $rep, $vues;
        $dViewError = array ();

        $this->nbNews = NewsModel::getNbNews();
        $this->nbComment = CommentModel::getNbComment();

        try {
            if (isset($_REQUEST['action'])) {
                $action=$_REQUEST['action'];
            }
            else {
                $action=NULL;
            }

            switch($action) {
                case "admin": //Pas d'action, appel de la page d'accueil de l'administration avec toutes les news (ne sera normalement jamais appelé => pas d'action = UserController)
                    $this->Admin();
                    break;
                case "add": //Appel de la page pour ajouter une news
                    $this->AddNews();
                    break;
                case "addValidation": //Validation du formulaire d'ajout et retour à l'accueil de l'administration
                    $this->AddValidationNews($dViewError);
                    break;
                case "delete": //Suppression d'une news
                    $this->DeleteNews($dViewError);
                    break;
                case "modify": //Appel de la page pour modifier une news (page d'ajout mais avec les cases pleines et un bouton "mise à jour"
                    $this->ModifyNews($dViewError);
                    break;
                case "modifyValidation": //Validation du formulaire de mise à jour et retour à l'accueil de l'administration
                    $this->ModifyValidationNews($dViewError);
                    break;
                case "searchAdmin": //Appel de la page d'accueil de l'administration, mais avec les résultats de la recherche comme news
                    $this->Search($dViewError);
                    break;
                case "logout": //Déconnexion, retour à l'accueil du blog
                    $this->Logout();
                    break;
                default: //mauvaise action
                    $dViewError[] =	"Erreur d'appel php";
                    require ($rep.$vues['error']);
                    break;
            }

        } catch (PDOException $e) {
            $dViewError[] =	"Erreur inattendue avec la base de donnée !";
            require ($rep.$vues['error']);
        }
        catch (Exception $e)
        {
            $dViewError[] =	"Erreur inattendue !";
            require ($rep.$vues['error']);
        }

        exit(0);
    }


    function Admin() {
        global $rep,$vues,$limit;

        if (isset($_REQUEST['page'])) {
            $page = $_REQUEST['page'];
        }
        else {
            $page = 1;
        }

        Validation::val_page($page);

        $nbNews = NewsModel::getNbNews();
        $nbPages = ceil($nbNews / $limit);

        $admin = AdminModel::isAdmin();
        $listNews = NewsModel::getAllNews($limit, $page);
        require ($rep.$vues['admin']);
    }

    function AddNews() {
        global $rep,$vues;

        $admin = AdminModel::isAdmin();
        require ($rep.$vues['adminNews']);
    }

    function AddValidationNews(array $dViewError) {
        global $rep,$vues;

        if (isset($_POST['title'])) {
            $title=$_POST['title'];
        }
        else {
            $title='';
        }
        if (isset($_POST['image'])) {
            $image=$_POST['image'];
        }
        else {
            $image='';
        }
        if (isset($_POST['content'])) {
            $content=$_POST['content'];
        }
        else {
            $content='';
        }
        if (isset($_POST['publishedNews'])) {
            $publishedNews=1;
        }
        else {
            $publishedNews=0;
        }

        Validation::val_news($title, $image, $content, $dViewError);

        if (count($dViewError) == 0) {
            NewsModel::insertNews($title, $image, $content, $publishedNews);
            header('Location: ?action=admin');
        }
        else {
            $admin = AdminModel::isAdmin();
            require ($rep.$vues['adminNews']);
        }
    }

    function DeleteNews($dViewError) {
        global $rep,$vues;

        if (isset($_REQUEST['newsID'])) {
            $newsID = $_REQUEST['newsID'];
        }
        else {
            $newsID = '';
        }

        Validation::val_idNews($newsID, $dViewError);

        if (count($dViewError) != 0) {
            $this->nbNews = NewsModel::getNbNews();
            $listNews = NewsModel::getAllNews();
            $admin = AdminModel::isAdmin();
            require($rep . $vues['admin']);
        }
        else {
            NewsModel::deleteNews($newsID);
            header('Location: ?action=admin');
        }
    }

    function ModifyNews($dViewError) {
        global $rep,$vues;

        if (isset($_REQUEST['newsID'])) {
            $newsID = $_REQUEST['newsID'];
        }
        else {
            $newsID = '';
        }

        Validation::val_idNews($newsID, $dViewError);

        if (count($dViewError) != 0) {
            $this->nbNews = NewsModel::getNbNews();
            $listNews = NewsModel::getAllNews();
            $admin = AdminModel::isAdmin();
            require($rep . $vues['admin']);
        }
        else {
            $admin = AdminModel::isAdmin();
            $news = NewsModel::getNewsById($newsID);
            require($rep . $vues['adminNews']);
        }
    }

    function ModifyValidationNews(array $dViewError) {
        global $rep,$vues;

        if (isset($_POST['title'])) {
            $title=$_POST['title'];
        }
        else {
            $title='';
        }
        if (isset($_POST['image'])) {
            $image=$_POST['image'];
        }
        else {
            $image='';
        }
        if (isset($_POST['content'])) {
            $content=$_POST['content'];
        }
        else {
            $content='';
        }
        if (isset($_POST['publishedNews'])) {
            $publishedNews=1;
        }
        else {
            $publishedNews=0;
        }
        if (isset($_POST['newsID'])) {
            $newsID = $_POST['newsID'];
        }
        else {
            $newsID = '';
        }

        Validation::val_idNews($newsID, $dViewError);
        Validation::val_news($title, $image, $content, $dViewError);

        if (count($dViewError) == 0) {
            NewsModel::modifyNews($newsID, $title, $image, $content, $publishedNews);
            header('Location: ?action=admin');
        }
        elseif ($newsID == NULL) {
            require ($rep.$vues['error']);
        }
        else {
            $admin = AdminModel::isAdmin();
            $news = NewsModel::getNewsById($newsID);
            require ($rep.$vues['adminNews']);
        }
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

        $listNews = NewsModel::getNewsByTitleContent($keyWord);
        $admin = AdminModel::isAdmin();
        require ($rep.$vues['admin']);
    }

    function Logout() {
        global $rep,$vues;

        AdminModel::logout();

        header('Location: ?action=');
    }
}
