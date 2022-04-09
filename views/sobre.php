<?php
$args = [
    'nome' => 'Sobre - Meu Website',
    'heading' => 'Sobre',
];

require '../components/metadata.php';
require '../components/header.php';

$posts = $db->selectPosts();
require '../pages/forum.php';