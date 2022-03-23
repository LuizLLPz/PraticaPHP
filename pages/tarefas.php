<?php
/*function insert_post($conn, $titulo, 
$texto, $dia, $usuario) {
    try {
        $query = $conn->prepare(
            "INSERT INTO posts
            VALUES (
                 DEFAULT,
                '$titulo',
                '$texto',
                '$dia',
                '$usuario'
            )");
        $query->execute();
    } catch(Exception $e) {
        echo 'Erro encontrado <br>
        Detalhes do erro: '.$e->getMessage();
    }
 
} */

$tabela = 'usuarios';
$parametros = [
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];

$db->insertValues('usuarios', $parametros);


$usuarios = $db->selectValues('usuarios', 'Usuario');

foreach ($usuarios as $usuario) {
   echo '<div>';
   echo '<p>Nome:'.$usuario->nome.'</p>';
   echo '<p>Email:'.$usuario->email.'</p>';
   echo '<p>Senha:'.$usuario->senha.'</p>';
   echo '</div>';
}

#header('Location: /praticaphp/forum');
