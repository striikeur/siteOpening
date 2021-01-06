<?php
require_once(__DIR__.'/config/Autoload.php');
require_once(__DIR__.'/config/config.php');

require_once(__DIR__.'/Controller/FrontController.php');



Autoload::charger();


$cont = new FrontController();