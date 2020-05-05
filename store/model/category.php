<?php
  require_once("Model.php");
  require_once("subCategory.php");
?>
<?php 
class category extends Model
{
    private $name;
    private $id;
    private $subCategories;

    
      function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
    function __construct0()
    {
        
     $this->subCategories[] = new subCategory();
        
    }

    
    function __construct3($id,$name,$subcategoryid)
    {   
        $this->id=$id;
        $this->name =$name;
        $this->readSubCategories($this->id,$subcategoryid);
    }


    
    function getSubcategories(){
     return    $this->subCategories;
    }
    function setName($name)
    {
      $this->name = $name;
    }
    function getName()
    {
      return $this->name;
    }
    function setID($id)
    {
      $this->id = $id;
    }
    function getId()
    {
      return $this->id;
    }

    function readSubCategories($id,$subcategoryid)
    { 
      $this->connect();
      $sql = "SELECT subcategory.id,name FROM categorydetails inner join subcategory on categorydetails.subcategoryid = subcategory.id where categoryid = :id and subcategory.isdeleted = 0";
        
      $this->db->query($sql);
      $this->db->bind(':id',$id,PDO::PARAM_INT);
      $this->db->execute();
        if ($this->db->numRows() > 0){
          $this->subCategories = array();
          $row = $this->db->getdata(); 
          for($i=0;$i<$this->db->numRows();$i++){

              //$flag if =1 load the products if 0 don't loag products only name
              if(!$subcategoryid){
                  
              if($subcategoryid==$row[$i]->id){
              $flag=1;
              $this->subCategories[]=new subCategory($row[$i]->id,$row[$i]->name,$flag);
              }
              else{
              $flag=0;
              $this->subCategories[]=new subCategory($row[$i]->id,$row[$i]->name,$flag);
              }
              }
              else{
                  
              $flag=0;
              $this->subCategories[]=new subCategory($row[$i]->id,$row[$i]->name,$flag);
                  
              }
              
              
          }
        }

    }
    

     function insertCategory($name)
    { 
      $this->connect();
      $sql = "INSERT into category(name) values(:name)";
      $this->db->query($sql);
      $this->db->bind(':name',$name,PDO::PARAM_STR);
      $this->db->execute();
      if ($this->db->numRows() > 0){
        return true;
      }
      else
       echo "THERE WAS AN ERROR";
    }
    function  updateCategory($id,$name)
    { $this->connect();
      $sql = "UPDATE category set name = :name where id = :id";
      $this->db->query($sql);
      $this->db->bind(':name',$name,PDO::PARAM_STR);
      $this->db->bind(':id',$id,PDO::PARAM_INT);
      $this->db->execute();
     
    }
    
function deleteCategory($categoryId)   
{     
    
      $this->connect();
      $sql = "update category set isdeleted=1 where id=:id";
          $this->db->query($sql);

      $this->db->bind(':id',$categoryId,PDO::PARAM_INT);
    
      $this->db->execute();
 
}
    


    
    
    
}
    
    
    
    
    
    
    
?>