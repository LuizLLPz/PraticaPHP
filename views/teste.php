<?php 

$args['nome'] = 'Prática PHP';  
require '../components/metadata.php';
require '../components/header.php';
 
$pdo = $db_client->getPdo();
$query->execute();


echo '<pre>',var_dump($query->fetchAll()),'</pre>';
?>