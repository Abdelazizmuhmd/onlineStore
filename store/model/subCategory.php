<?php
  require_once("Model.php");
?>
<?php 
class subCategory extends Model
{
    private $name;
    private $id;
    private $products;
    function __construct($id,$name)
    {   
        $this->$id = $id;
        $this->name =$name;
        $this->readProducts();
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
    
    
    function readProducts($subcategoryId)
    { $this->connect();
      $sql = "SELECT product.id,name,cost,profit,description,weight FROM subcategorydetails
       inner join product on subcategorydetails.productid = product.id where subcategorydetails.subcategoryid = :id";
      $this->db->query($sql);
      $this->db->bind(':id',$id);
      $this->db->execute();
      if ($this->db->numRows() > 0){
          $row = $this->db->getdata();
          $n = $this->db->numRows();
          for($i = 0;$i<$n;$i++)
          {
              $product = new $product($productId);
              $this->products[]=$product;
              
              
          }}
    }
    
 static  function insertSubCategory($name)
    {
      $sql = "INSERT into subcategory(name) values(:name)";
      $this->db->query($sql);
      $name = $this->validation->validateString($name,1,20);
      $this->db->bind(':name',$name);
      $this->db->execute();
      if ($this->db->numRows() > 0){
        return true;
      }
      else
       echo "THERE WAS AN ERROR";
    }
  static  function updateSubCategory($id,$name)
    {
      $sql = "UPDATE subcategory set name = :name where id = :id";
      $this->db->query($sql);
      $name = $this->validation->validateString($name,1,20);
      $this->db->bind(':name',$name);
      $this->db->bind(':id',$id);
      $this->db->execute();
      if ($this->db->numRows > 0){
        return true;
      }
      else
       echo "THERE WAS AN ERROR";
    }
 static   function deleteCategory($id)
    {
      $sql = "delete from subcategory where id = :id";
      $this->db->query($sql);
      $this->db->bind(':id',$id);
      $this->db->execute();
      if ($this->db->numRows() > 0){
        return true;
      }
      else
       echo "THERE WAS AN ERROR";
    }
}

$s = new subCategory (1,'lol');
$s->readProducts(1)
?>