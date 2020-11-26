<?php
$rep = __DIR__.'/../';

require_once("Connection.php");


$dsn = 'mysql:host=localhost;dbname=openingBDD';
$user = 'root';
$password= '';



$vues['video']='view/video.php';
$vues['top']='view/top.php';
$vues['login']='view/login.php';




$vues['error']='view/errors/error.php';
$vues['error-418']='view/errors/error-418.php';