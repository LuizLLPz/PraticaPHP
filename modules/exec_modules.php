<?php

//Inicia os modulos do servidor.
$configs = require 'config.php';
return new QueryHandler(
      Connect::create($configs['connection'])
);

