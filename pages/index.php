<?php

/* Entry file to application
it loads all modules, settings and initialize routing system and DB client */
error_reporting(E_ALL);
ini_set('display_errors','On');

require '../vendor/autoload.php';
$db = require '../modules/exec_modules.php';
$router = new Router();
?>
<style>
	<?php require '../css/main.css'?>
</style>
<?php
require '../modules/url-mapper.php';
require $router->direct(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'), $router->getMethod());