
<?php
require_once("Modal.php")
require_once(prod)
class product extents modal{
protected $name;
protected $code;
protected $cost;
protected $profit;
protected $description;
protected $productDetails;

    
 function __construct($name="",$code="",$cost="",$profit="",$description="",$weight="",$productDetailsArray=[]){
    $this->name = $name;
    $this->code = $code;
    $this->cost = $cost;
    $this->profit = $profit;
    $this->description = $description;
    $this->weight = $weight;
    $this->productDetailsArray =array();
    $this->productDetailsArray = $productDetailsArray;

  }    
    

    
function getspecificproduct($id){
     sql="select * from product where id = :id";
     $this->db->query($sql);
     $this->db->bind(':id',$id);
     $this->db->execute();
     if ($this->db->numRows() > 0){
     $product = $this->db->getdata()
     $this->name = $product->name;
     $this->code =$product->code;
     $this->cost = $product->cost;
     $this->profit =$product->profit;
     $this->description =$product->description;
     $this->weight =$product->weight;
         
     sql="select * from productdetails where id = :id";
     $this->db->query($sql);
     $this->db->bind(':id',$id);
     $this->db->execute();
     if ($this->db->numRows() > 0){
     $productdetails = $this->db->getdata()
     foreach ($productdetails as $value) {
         
     sql="select url from image where id = :id";
     $this->db->query($sql);
     $this->db->bind(':id',$value->id);
     $this->db->execute();
     if ($this->db->numRows() > 0){  
         
     $urls=$this->db->getdata();
         
     foreach($urls as $url){
         $d= array();
         $d= $this->db->getdata();
         
    
             
        }
         
         
         
      $productdetails = new productdetails($value->productid,$value->color,$value->s,$value->m,$value->l,$value->xl,$value->xxl,$value->xxxl,$value->sold);
         
         
     }
         
         
         
         
         
         
     }
    
}
    


}
?>