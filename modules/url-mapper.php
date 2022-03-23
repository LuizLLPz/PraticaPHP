<?php
//Arquivo para gerar padrões de rota para o sistema
$router->get('praticaphp', '../views/index-map.php',);
$router->get('praticaphp/forum', '../views/forum-map.php',);
$router->get('praticaphp/sobre', '../views/sobre-map.php',);
$router->get('praticaphp/contato', '../views/contato-map.php',);
$router->get('praticaphp/login', '../views/login-map.php',);
$router->get('praticaphp/registrar', '../views/registrar-map.php',);
$router->get('praticaphp/teste', '../views/teste-map.php',);



$router->post('praticaphp/tarefas', '../pages/tarefas.php',);