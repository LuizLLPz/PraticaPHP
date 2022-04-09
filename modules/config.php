<?php
//Configurações do php
$env = parse_ini_file('.env');

if (!$env['PROD']) {
    return [
        'connection' => [
            'metodo' => 'mysql:host=' . $env['LOCAL_DB_HOST'] . ';',
            'dbname' => 'dbname=' . $env['LOCAL_DB_NAME'] . ';',
            'user' => $env['LOCAL_DB_USER'],
            'pwd' => $env['LOCAL_DB_PASS'],
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ],
        ]
    ];
} else {
    return [
        'connection' => [
            'metodo' => 'mysql:host=' . $env['DB_HOST'] . ';',
            'dbname' => 'dbname=' . $env['DB_NAME'] . ';',
            'user' => $env['DB_USER'],
            'pwd' => $env['DB_PASS'],
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_SSL_CA => '/etc/ssl/certs/ca-certificates.crt',
            ],
        ]
    ];
}
