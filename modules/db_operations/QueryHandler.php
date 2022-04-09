<?php
include 'Modelos.php';

class QueryHandler {
  protected $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  //Prepared statement for select complete table
  public function selectValues($table) {
    $query = $this->pdo->prepare("SELECT * FROM {$table}");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, "Post"); 
  }

  //Dynamically insert values in table
  public function insertValues($table, $parameters) {
    $sql = sprintf("Insert into %s VALUES(DEFAULT, ", $table);
    $keys = array_keys($parameters);
    $end = end($keys); 
    foreach ($parameters as $key => $value) {
       if ($value == 'DEFAULT') {
         $sql .= $key != $end ? "DEFAULT, " : "DEFAULT)";
       } else {
         $sql .= $key != $end ? ":$key, " : ":$key)";
       }
    }
    $query = $this->pdo->prepare($sql);
    foreach ($parameters as $key => $value) {
      if ($value == 'DEFAULT') {
        continue;
      } else {
        $query->bindValue(":{$key}", $value);
      }
    }
    $query->execute();
  }

  

  //Select specific fields from table
  public function selectByField($table, $fields) {
    $sql = sprintf("SELECT %s from %s", implode(', :', array_keys($fields)), $table);
    $query = $this->pdo->prepare($sql);
    $query->execute($fields);
  }


  public function getPdo() {
    return $this->pdo;
  }





}