<?php

class Validation {
    static function val_action($action) {
        if (!isset($action)) {
            throw new Exception("Aucune action");
        }
    }

    static function val_idNews(string &$newsID, array &$dViewError) {
        if (!isset($newsID)||$newsID==""||!filter_var($newsID, FILTER_VALIDATE_INT)) {
            $dViewError[] =	"L'ID de la news doit être indiqué.";
            $newsID="";
        }
    }

    static function val_page(string &$page) {
        if ($page==""||!filter_var($page, FILTER_VALIDATE_INT)) {
            $page=1;
        }
    }

    static function val_comment(string &$pseudo, string &$content, string &$newsID, array &$dViewError) {
        if (!isset($pseudo) || $pseudo=="") {
            $dViewError[] =	"Le pseudo doit être renseigné.";
            $pseudo="";
        }

        if (!isset($content)||$content=="") {
            $dViewError[] =	"Un commentaire doit être renseigné.";
            $content="";
        }

        if ($pseudo != filter_var($pseudo, FILTER_SANITIZE_STRING) || $content != filter_var($content, FILTER_SANITIZE_STRING))
        {
            $pseudo=filter_var($pseudo, FILTER_SANITIZE_STRING);
            $content=filter_var($content, FILTER_SANITIZE_STRING);
        }

        if (!isset($newsID)||$newsID==""||!filter_var($newsID, FILTER_VALIDATE_INT)) {
            $dViewError[] =	"L'ID de la news correspondante doit être indiqué.";
            $newsID=-1;
        }
    }

    static function val_search(string &$keyWord, array &$dViewError) {
        if ($keyWord=="") {
            $dViewError[] =	"Le nom de l'anime doit être renseigné.";
            $keyWord="";
        }

        if ($keyWord != filter_var($keyWord, FILTER_SANITIZE_STRING))
        {
            $keyWord=filter_var($keyWord, FILTER_SANITIZE_STRING);
        }
    }

    static function val_connection(string &$pseudo, string &$password, array &$dViewError) {
        if ($pseudo=="") {
            $dViewError[] =	"Le pseudo doit être renseigné.";
            $pseudo="";
        }

        if ($password=="") {
            $dViewError[] =	"Un mot de passe doit être renseigné.";
            $password="";
        }

        if ($pseudo != filter_var($pseudo, FILTER_SANITIZE_STRING) || $password != filter_var($password, FILTER_SANITIZE_STRING))
        {
            $pseudo=filter_var($pseudo, FILTER_SANITIZE_STRING);
            $password=htmlspecialchars($password);
        }
    }

    static function val_news(string &$title, string &$image, string &$content, array &$dViewError) {
        if ($title=="") {
            $dViewError[] =	"Le titre doit être renseigné.";
            $title="";
        }

        if ($image != NULL && !filter_var($image, FILTER_VALIDATE_URL))
        {
            $dViewError[] =	"L'url n'est pas valide.";
            $image="";
        }

        if ($content=="") {
            $dViewError[] =	"L'article ne peut pas être vide.";
            $content="";
        }

        if ($title != filter_var($title, FILTER_SANITIZE_STRING) || $content != filter_var($content, FILTER_SANITIZE_STRING))
        {
            $title=filter_var($title, FILTER_SANITIZE_STRING);
            $content=filter_var($content, FILTER_SANITIZE_STRING);
        }
    }

    static function val_cookie_nbCommentUser(int $nbComment, string &$nbCommentUser) {
        if (!isset($nbComment)||$nbCommentUser==""|| $nbCommentUser < $nbComment ||!filter_var($nbCommentUser, FILTER_VALIDATE_INT)) {
            $nbCommentUser=0;
        }
    }
}
