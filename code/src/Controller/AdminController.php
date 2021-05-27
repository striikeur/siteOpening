<?php

require_once(__DIR__.'/../model/class/UserNote.php');
require_once(__DIR__.'/../model/class/AnimeUserNote.php');
require_once(__DIR__.'/../model/AnimeUserNoteModel.php');
require_once(__DIR__.'/../model/class/UserMoyenne.php');
class AdminController
{

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        global $rep,$vues;
        $animeUserNotes = AnimeUserNoteModel::createAnimeUser();
        $userMoy = AnimeUserNoteModel::createUserMoyenne();
        require($rep.$vues['admin']);
        exit(0);
    }
}