
<?php
require_once("Model.php");
require_once("category.php");

class menu extends Model {
    
protected $categories;


function __construct() {
   $this->categories[]=new category();
}
    
public function getCategories(){
    return $this->categories;
}
public function getAllCategoriesDetails(){
   
    $sql="select id,name from category where isdeleted=0";
    $this->connect();
    $this->db->query($sql);
    $this->db->execute();
    if ($this->db->numRows()>0){
     $categories = $this->db->getdata();
    foreach ($categories as $value) {
        $this->categories[]=new category($value->id,$value->name);
    }
    }  
}


 public function getAllCategoriesName($id){
   
    $sql="select id,name from category where isdeleted=0";
    $this->connect();
    $this->db->query($sql);
    $this->db->execute();
    if ($this->db->numRows()>0){
     $categories = $this->db->getdata();
        $this->$this->categories[0]->readSubCategories($id);
        $this->categories[0]->getsubCategories()[0]->readProducts($id);

   $flag=0;
    foreach ($categories as $value) {
        $this->categories[]=new category($value->id,$value->name,$flag);
    }
    }  
}

    
    
    

}

?>
