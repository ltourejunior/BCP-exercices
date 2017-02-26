<?php

// set error displaying
ini_set('display errors', 'on');
error_reporting(E_ALL | E_STRICT);

// define where the document root is
define('DOCROOT', __DIR__);

// start the bootstrapping process
require_once(DOCROOT.'/system/project/config/boostrap.php');

// start the application

//we get the name of the controller ($_GET['page'], 'home' or 'error404')
$controller_name = router::getControllerNAme();

//we run the right controller based on it's name
router::runController($controller_name);
