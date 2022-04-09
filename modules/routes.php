<?php
//Arquivo para gerar padrões de rota para o sistema

//Rota principal para o site, deve ser alterada dependendo da estrutura de arquivos
define ("MAIN" , 'praticaphp');

$router->get(MAIN, '../views/index.php',);
$router->get(MAIN.'/forum', '../views/forum.php',);
$router->get(MAIN.'/sobre', '../views/sobre.php',);
$router->get(MAIN.'/contato', '../views/contato.php',);
$router->get(MAIN.'/login', '../views/login.php',);
$router->get(MAIN.'/registrar', '../views/registrar.php',);
$router->get(MAIN.'/teste', '../views/teste.php',);
$router->get('404', '../views/404.php',);

$router->post('praticaphp/api/post', '../views/api/post.php',);