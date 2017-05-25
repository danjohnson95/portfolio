<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
date_default_timezone_set('Europe/London');
error_reporting(E_ALL);

require "vendor/autoload.php";

function base_dir(){
	return __DIR__;
}

/*
 * Route Stuff
 */

$Router = new App\Router;
require "routes.php";
$Router->dispatch();
