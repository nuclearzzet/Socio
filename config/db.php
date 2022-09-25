<?php
class Database
{
     private $host = "remotemysql.com:3306";

     private $conn = '';

     public function __construct()
     {
          $user = getenv("db_username");
          $pass = getenv("db_password");
          $dbName = getenv("db_name");

          $this->conn = new mysqli($this->host, $user, $pass, $dbName);
     }
}
