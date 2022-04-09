<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

require '../vendor/autoload.php';
$db_client = require '../modules/exec_modules.php';
$router = new Router();
?>
<style>
	<?php require '../css/main.css'?>
</style>
<?php

//Define as rotas para execução
require '../modules/routes.php';
echo '<pre>',var_dump($router->routes),'</pre>';
//Carrega um arquivo view com base na rota definida
require $router->direct(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'), $_SERVER['REQUEST_METHOD']);