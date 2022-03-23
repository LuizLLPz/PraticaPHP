<?php 
$args = [
    'nome' => 'Meu Website - Página inicial',
    'heading' => 'Doces',
];
$modalVisibility = false;
$doces = $db->selectValues('docinhos');
require '../components/metadata.php';
require '../components/header.php';
require '../pages/teste.php';