<?php
namespace App\Models;

use PDO;
use Exception;

Class Model{
    protected $connection = null;

    public function __construct(){
        $this->connection  = $this->connect();	
    }
  
    public function connect(){
      try{
            $connection = new PDO("mysql:host=".constant('DB_HOST').";dbname=".constant('DB_NAME').";", constant('DB_USER'), constant('DB_PASS'));
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $connection;
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }
    }
  
    // Insert a row into Database
    public function insert( $statement = "" , $parameters = [] ){
        try{
    
            $this->executeStatement( $statement , $parameters );
            return $this->connection->lastInsertId();
    
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }
  
    // Select from Database 
    public function select( $statement = "" , $parameters = [] ){
        try{
    
            $stmt = $this->executeStatement( $statement , $parameters );
            return $stmt->fetchAll();
    
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }	
    
    // execute statement
    private function executeStatement( $statement = "" , $parameters = [] ){
        try{
            $stmt = $this->connection->prepare($statement);
            $stmt->execute($parameters);
            return $stmt;
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }
}