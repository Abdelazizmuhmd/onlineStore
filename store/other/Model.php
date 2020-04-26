<?php
require_once("../database/db.php");
require_once("../database/validation.php");

abstract class Model{
    protected $db;
    protected $validation

    public function connect(){
      
        $this->db = new Database();
        $this->validation=new validation(); 
    
    }
}
?>