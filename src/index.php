<?php
require_once(__DIR__.'/config/config.php');
require_once(__DIR__.'/config/Autoload.php');
require_once(__DIR__.'/config/Connection.php');
require_once(__DIR__.'/config/Validation.php');

require_once(__DIR__.'/Controller/FrontController.php');
require_once(__DIR__.'/Controller/UserController.php');
require_once(__DIR__.'/Controller/AdminController.php');

require_once(__DIR__.'/model/AdminModel.php');
require_once(__DIR__.'/model/AnimeModel.php');
require_once(__DIR__.'/model/NoteModel.php');
require_once(__DIR__.'/model/UserModel.php');

require_once(__DIR__.'/model/class/Admin.php');
require_once(__DIR__.'/model/class/Anime.php');
require_once(__DIR__.'/model/class/ListeAnime.php');
require_once(__DIR__.'/model/class/ListNote.php');
require_once(__DIR__.'/model/class/Note.php');
require_once(__DIR__.'/model/class/User.php');

require_once(__DIR__.'/model/gateway/AdminGateway.php');
require_once(__DIR__.'/model/gateway/AnimeGateway.php');
require_once(__DIR__.'/model/gateway/NoteGateway.php');
require_once(__DIR__.'/model/gateway/UserGateway.php');



$passwd = password_hash("NvASBQ^j1UeE", PASSWORD_BCRYPT);
echo ($passwd);
if(password_verify("NvASBQ^j1UeE", $passwd)){
    echo "c'est ok";
}



Autoload::charger();

/*
$cont = new FrontController();