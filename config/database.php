<?php 

class Database{
    private $host = 'localhost';
    private $user = 'Socioo';
    private $pass = 'socioo*456';
    private $dbName = 'Socioo';

    private $conn = '';

    public function connect(){
        $this->conn = null;
        
        try{
            $this->conn = new PDO('mysql:host = ' . $this->host . ';dbname = ' . 
            $this->dbName . $this->user . $this->pass, array(
                PDO::AFTER_PRESISTENT => true
            ));

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $err){
            echo "Connection not made " . $err->getMessage();
            die();
        }
    }

}