<?php
class Database
{
     private $host = "remotemysql.com";

     private $conn = '';

     public function __construct()
     {
          $user = getenv("db_username");
          $pass = getenv("db_password");
          $dbName = getenv("db_name");
          $this->conn = null;

          try {
               $this->conn = new PDO('mysql:host = ' . $this->host . ';dbname = ' .
                    $dbName . $user . $pass);
          } catch (PDOException $err) {
               echo "Connection not made " . $err->getMessage();
               die();
          }
     }
}
