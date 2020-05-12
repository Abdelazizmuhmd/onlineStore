<?php
require_once("../database/db.php");
require_once("../database/validation.php");

abstract class Model{
    protected $db;
    protected $validation; 

     public function getvalidation(){
       $this->validation=validation::getInstance(); 

     }
    public function connect(){
      
        $this->db = new Database();

    
    }
}
?>