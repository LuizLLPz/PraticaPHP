<?php

//Class for returning a new PDO connection
class Connect {
    
    public static function createConnection($info) {
        try {
        $conn = new PDO(
            $info['metodo'].
            $info['dbname'],
            $info['user'],
            $info['pwd'],
            $info['options']
        );
        return $conn;
        } 
        catch(PDOException $e) {
            echo 'Deu merda! ' . $e->getMessage();
        }}
     

}