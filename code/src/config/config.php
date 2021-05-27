<?php
$rep = __DIR__.'/../';

require_once("Connection.php");


$dsn = 'mysql:host=localhost;dbname=openingBDD';
$user = 'root';
$password= '';

$connection = new Connection($dsn, $user, $password);

$dsnEnding = 'mysql:host=localhost;dbname=endingbdd';
$userEnding = 'root';
$passwordEnding= '';
$connectionEnding = new Connection($dsnEnding, $userEnding, $passwordEnding);

$vues['video']='view/video.php';
$vues['video720']='view/video720.php';
$vues['top']='view/top.php';
$vues['topEnding']='view/topEnding.php';
$vues['login']='view/login.php';
$vues['admin']='view/admin.php';





$vues['error']='view/errors/error.php';
$vues['error-418']='view/errors/error-418.php';