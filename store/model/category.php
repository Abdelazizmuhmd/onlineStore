<?php
  require_once(__ROOT__ . "model/Model.php");
?>
<?php 
class category extends Model
{
    private $name;
    private $id;
    private $subCategories;
    function __construct()
    {
        $this->db->connect();
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
          while ($row = $this->db->fetch()) {
            array_push($this->readSubCategories, new subcategory($row["id"],$row["name"]));
          }
        }
        else {
          return false;
        }
    }
}
?>