<?php
  require_once("Model.php");
?>
<?php 
class category extends Model
{
    private $name;
    private $id;
    private $subCategories;

    function __construct($id,$name)
    {   
        $this->id=$id;
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
    
    function readSubCategories($id)
    {
      $this->connect();
      $sql = "SELECT subcategory.id,name FROM categorydetails inner join subcategory on categorydetails.subcategoryid = subcategory.id where categoryid = :id";
      $this->db->query($sql);
      $this->db->bind(':id',$id);
      $this->db->execute();
        if ($this->db->numRows() > 0){
          $this->subCategories = array();
          $row = $this->db->getdata(); 
          for($i=0;$i<$this->db->numRows();$i++){
            //array_push($this->readSubCategories, new subcategory($row["id"],$row["name"]));
            echo $row[$i]->id.$row[$i]->name;
          }
        }
        else {
          return false;
        }
    }
    function insertCategory($name)
    { $this->connect();
      $sql = "INSERT into category(name) values(:name)";
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
    function updateCategory($id,$name)
    { $this->connect();
      $sql = "UPDATE category set name = :name where id = :id";
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
    { $this->connect();
      $sql = "delete from category where id = :id";
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
$c = new category(3,'lol');
$c->readSubCategories(3);
?>