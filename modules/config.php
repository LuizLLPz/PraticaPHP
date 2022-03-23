<?php
//Configurações do php
return [
    'connection' => [
        'metodo' => 'mysql:host=localhost;',
        'dbname' => 'dbname=praticaphp',
        'user' => 'root',
        'pwd' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        ]
    ]
];