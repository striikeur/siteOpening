<?php
require_once(__DIR__.'/../model/class/ListNote.php');
require_once (__DIR__.'/OpeningController.php');
require_once (__DIR__.'/EndingController.php');
require_once(__DIR__.'/../model/EndingModel.php');

class UserController
{
    function __construct() {
        global $rep,$vues;
        $dViewError = array();
        try {
            if (isset($_REQUEST['opening'])) {
                new OpeningController();
            } else if(isset($_REQUEST['ending'])){
                new EndingController();
            } else {
                header('Location: /?action=top&opening');
                exit();
            }
        }
        catch (Exception $e)
        {
            $dViewError[] =	"Erreur inattendue !";
            require ($rep.$vues['error']);
        }
        exit(0);
    }
}