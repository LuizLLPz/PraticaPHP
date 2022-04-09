<?php
//Arquivo para gerar padrões de rota para o sistema
$i = 'praticaphp';

$router->get($i, '../views/index.php',);
$router->get($i.'/forum', '../views/forum.php',);
$router->get($i.'/sobre', '../views/sobre.php',);
$router->get($i.'/contato', '../views/contato.php',);
$router->get($i.'/login', '../views/login.php',);
$router->get($i.'/registrar', '../views/registrar.php',);
$router->get($i.'/teste', '../views/teste.php',);
$router->get('404', '../views/404.php',);


$router->post('praticaphp/tarefas', '../pages/tarefas.php',);