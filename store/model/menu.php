
<?php
require_once("Model.php");
class menu extends Model {
protected $categories;


function __construct() {
}
    
public function getcategories(){
    return $categories();
}
public function fillCategoriesArray(){
    $this->categories = array();
    $sql="select id,name from category";
    $this->connect();
    $this->db->query($sql);
    $this->db->execute();
    if ($this->db->numRows()>0){
     categories = $this->db->getdata();
    foreach (categories as $value) {
    array_push($this->categories, new category($value->id,$value->name));
    }
    }  
    
    

}
    
    
   
}

?>
