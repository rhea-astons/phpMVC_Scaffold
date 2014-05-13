<?php

// Set some usefull constants
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
set_include_path( get_include_path() . PATH_SEPARATOR . ROOT);

// Load config
require_once ('app' . DS . 'config' . DS . 'config.php');
require_once ('app' . DS . 'lib' . DS . 'shared.php');

// Load base classes
require_once ('app' . DS . 'lib' . DS . 'application.php');
require_once ('app' . DS . 'lib' . DS . 'controller.php');
require_once ('app' . DS . 'lib' . DS . 'model.php');
require_once ('app' . DS . 'lib' . DS . 'template.php');

// Run app
$app = new Application();

?>
