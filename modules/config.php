<?php
//Configurações do php
$env = parse_ini_file('.env');

return [
    'connection' => [
        'metodo' => 'mysql:host='.$env['DB_HOST'].';',
        'dbname' => 'dbname='.$env['DB_NAME'],
        'user' => $env['DB_USER'],
        'pwd' => $env['DB_PASS'],
        'ssl' => '{}',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::MYSQL_ATTR_SSL_CA => '/etc/ssl/certs/ca-certificates.crt',
        ],
    ]
];