<?php
require_once("../database/db.php");
abstract class Model{
    protected $db;

    public function connect(){
      
            $this->db = new Database();
    
    }
}
?>