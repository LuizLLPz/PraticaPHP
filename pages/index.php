<?php
require '../vendor/autoload.php';
$db_client = require '../modules/exec_modules.php';
error_reporting(E_ALL);
ini_set('display_errors','On');
$router = new Router();
require '../modules/routes.php'; //Define as rotas para execução
?>


<style>
	<?php require '../css/main.css'?>
</style>
<?php


//Carrega um arquivo view com base na rota definida
require $router->direct(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'), $_SERVER['REQUEST_METHOD']);