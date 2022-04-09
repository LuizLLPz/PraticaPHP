<?php

//Simple schema for mapping the columns fetched from the database
class Post {
    public $titulo;
    public $corpo;
    public $dia;
    protected $created_at;
    protected $updated_at;
    protected $nome;
    
}

class Usuario {
    protected $nome;
    protected $email;
    protected $senha;
}

