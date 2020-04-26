<?php
  require_once(__ROOT__ . "model/Model.php");
?>
<?php 
class category extends Model
{
    private $name;
    private $id;
    private $subCategories;
    function __construct($name)
    {
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
      $sql = "SELECT * FROM categorydetails inner join subcategory where cetegoryid :id";
      $this->db->query($sql);
      $this->db->bind(':id',$id);
      $this->db->execute();
        if ($this->db->numRows > 0){
          $this->subCategories = array();
          while ($row = $this->db->getdata()) {
            array_push($this->readSubCategories, new subcategory($row["id"],$row["name"]));
          }
        }
        else {
          return false;
        }
    }
    function insertCategory($name)
    {
      $sql = "INSERT into category(name) values(:name)";
      $this->db->query($sql);
      $this->db->bind(':name',$name);
      $this->db->execute();
      if ($this->db->numRows > 0){
        return true;
      }
      else
       echo "THERE WAS AN ERROR";
    }
    function updateCategory($id,$name)
    {
      $sql = "UPDATE category set name = :name where id = :id";
      $this->db->query($sql);
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
      $sql = "delete from category where id = :id";
      $this->db->query($sql);
      $this->db->bind(':id',$id);
      $this->db->execute();
      if ($this->db->numRows > 0){
        return true;
      }
      else
       echo "THERE WAS AN ERROR";
    }
}
?>