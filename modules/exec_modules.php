<?php

//Inicia os modulos do servidor.
$config = require 'config.php';

return new QueryHandler(
      Connect::createConnection($config['connection'])
);