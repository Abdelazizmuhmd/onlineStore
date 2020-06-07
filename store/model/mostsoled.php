<?php 
require_once("../model/model.php");
class mostsoled extends model{
   private $salename;
   private $image;
    

    
    function getSelled(){
$this->getSell();
        return $this->salename;
    }
    function getImage(){
        $this->getPhoto();
                return $this->image;
            }

    
  function getSell(){
    $this->connect();
    $query ="SELECT name from product INNER JOIN productdetails ON product.id=productdetails.productID ORDER BY sold DESC limit 3 ";     
    $this->db->query($query);
     $this->db->execute();
     if ($this->db->numRows() > 0){
     $row = $this->db->getdata();
      foreach($row as $value){
          $this->salename[]=(string)$value->name;

      }
         
         
  }
    
}

function getPhoto(){
    $this->connect();
    $query ="SELECT imageUrl from productdetails ORDER BY sold DESC limit 3 ";     
    $this->db->query($query);
     $this->db->execute();
     if ($this->db->numRows() > 0){
     $row = $this->db->getdata();
      foreach($row as $value){
          $this->image[]=(string)$value->imageUrl;

      }
         
         
  }
    
}
}



?>