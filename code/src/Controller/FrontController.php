<?php
require_once (__DIR__.'/UserController.php');

class FrontController
{
    function __construct()
    {
        global $rep, $vues;
        $dViewError = array();
        session_start();
        try {
            new UserController();
        } catch (PDOException $e) {

            $dViewError[] =	$e->getMessage();
            require ($rep.$vues['error']);
        } catch (Exception $e)
        {
            $dViewError[] =	"Erreur inattendue !";
            require ($rep.$vues['error']);
        }


        exit(0);
    }
}