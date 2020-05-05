<?php
  require_once("Model.php");
  require_once("product.php");
?>
<?php 
class subCategory extends Model
{
    private $name;
    private $id;
    private $products;
    
    
    
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
        $this->products[]= new product();
    }
    

 
     function __construct3($id,$name,$flag)
    {   
        $this->id = $id;
        $this->name =$name;
        if($flag==1){
        $this->readProducts($this->id);        
        }
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
    function getID()
    {
      return $this->id;
    }
    function getProducts(){
        return $this->products;
    }
    
    function readOneProduct($id){  
        $this->products[]=new product($id);
        
    }
    
    function readProducts($subcategoryId)
    {   $productid=0; 
        $this->connect();
      $sql = "SELECT subcategorydetails.productid FROM subcategorydetails
        where subcategorydetails.subcategoryid = :id and isdeleted = 0";
      $this->db->query($sql);
      $this->db->bind(':id',$subcategoryId,PDO::PARAM_INT);
      $this->db->execute();
       
       
        
      if ($this->db->numRows() > 0){
                    
          $row = $this->db->getdata();

          $n = $this->db->numRows();

          for($i = 0;$i<$n;$i++)
          {   $productid=$row[$i]->productid;
           
              $this->products[]=new product($productid);
           
              
              
          }}
    }
    
   function insertSubCategory($categoryid,$name)
    { $this->connect();
      $sql = "INSERT into subcategory(name) values(:name)";
      $this->db->query($sql);
      $this->db->bind(':name',$name,PDO::PARAM_STR);
      $this->db->execute();
      $subcategoryid=$this->db->lastInsertedId();
     
      $sql = "INSERT into categorydetails(subcategoryid,categoryid) values(:subcategoryid,:categoryid)";
      $this->db->query($sql);
      $this->db->bind(':subcategoryid',$subcategoryid,PDO::PARAM_INT);
      $this->db->bind(':categoryid',$categoryid,PDO::PARAM_INT);

      $this->db->execute();
     
     
     
    
    }
    
    function updateSubCategory($id,$name)
    {
    
      $this->connect();
      $sql = "UPDATE subcategory set name = :name where id = :id";
      $this->db->query($sql);
      $this->db->bind(':id',$id,PDO::PARAM_INT);
      $this->db->bind(':name',$name,PDO::PARAM_STR);
      $this->db->execute();
     
    }
    function deleteSubCategory($subcategoryid)
    {
      $this->connect();
      $sql = "update subcategory set isdeleted=1 where id=:id";
      $this->db->query($sql);
      $this->db->bind(':id',$subcategoryid,PDO::PARAM_INT);
      $this->db->execute();
      
    }
}








?>