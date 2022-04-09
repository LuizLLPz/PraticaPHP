<?php
$args = [
    'nome' => 'Meu Fórum',
    'heading' => 'Fórum',
];

require '../components/metadata.php';
?>

<style>
    <?php require '../css/forum.css' ?>
</style>

<?php
require '../components/header.php';
$posts = $db->selectValues('Post');
require '../pages/forum.php';
?>

