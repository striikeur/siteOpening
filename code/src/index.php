<?php
require_once(__DIR__.'/config/Autoload.php');
require_once(__DIR__.'/config/config.php');

require_once(__DIR__.'/Controller/FrontController.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


Autoload::charger();


$cont = new FrontController();

