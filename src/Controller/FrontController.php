<?php


class FrontController
{
    function __construct()
    {
        global $rep, $vues;
        $dViewError = array();
        session_start();
        try {
            $listAction_Admin = array('admin', 'logout','add', 'addValidation', 'delete', 'modify', 'modifyValidation', 'searchAdmin' );

            $admin = AdminModel::isAdmin();

            if(isset($_REQUEST['action'])){
                $action = $_REQUEST['action'];
            }
            else {
                $action=NULL;
            }

            if (in_array($action, $listAction_Admin)) {
                switch ($admin) {
                    case NULL:
                        require $rep.$vues['login'];
                        break;
                    default:
                        new AdminController();;
                        break;
                }
            }
            else {
                new UserController();
            }

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