<?php
  require_once("../other/Model.php");
?>
<?php 
class subCategory extends Model
{
    private $name;
    private $id;
    private $products;
    function __construct($id,$name)
    {   $this->connect();
        $this->$id = $id;
        $this->name =$name;
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
    
    function readProducts($id)
    {
      $sql = "SELECT product.id,name FROM subcategorydetails inner join product on productdetails.productid = product.id where productid = :id";
      $this->db->query($sql);
      $this->db->bind(':id',$id);
      $this->db->execute();
        if ($this->db->numRows() > 0){
          $this->products = array();
          while ($row = $this->db->getdata()) {
            //array_push($this->readSubCategories, new subcategory($row["id"],$row["name"]));
            echo $row['id'].$row['name'];
          }
        }
        else {
          return false;
        }
    }
    function insertProduct($name)
    {
      $sql = "INSERT into product(name) values(:name)";
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
    function updateProduct($id,$name)
    {
      $sql = "UPDATE product set name = :name where id = :id";
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
    function deleteCategory($id)
    {
      $sql = "delete from product where id = :id";
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

$s = subCategory (1,'lol');
$s->readProducts(1)
?>