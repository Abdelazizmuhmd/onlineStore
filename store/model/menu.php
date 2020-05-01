
<?php
require_once("Model.php");
require_once("category.php");

class menu extends Model {
    
protected $categories;


function __construct() {
   $this->categories[]=new category();
}
    
public function getcategories(){
    return $this->categories;
}
public function getAllCategoriesDetails($subcategoryid=""){
    $this->categories = array();
    $sql="select id,name from category where isdeleted=0";
    $this->connect();
    $this->db->query($sql);
    $this->db->execute();
    if ($this->db->numRows()>0){
     $categories = $this->db->getdata();
    foreach ($categories as $value) {
        $this->categories[]=new category($value->id,$value->name,$subcategoryid);
    }
    }  
}


    
    
    
    

}

?>
