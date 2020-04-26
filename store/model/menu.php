
<?php
require_once("Model.php");
class menu extends Model {
protected $categories;


function __construct() {
}
    

public function getCategories(){
    $this->categories = array();
    $sql="select id,name from category";
    $this->connect();
    $this->db->query($sql);
    $this->db->execute();
    if ($this->db->numRows()>0){
    while($row = $this->db->getdata()){
    array_push($this->categories, new category($row["id"],$row["name"]));
        }
    }    
    
}
    
    
   
}

?>
