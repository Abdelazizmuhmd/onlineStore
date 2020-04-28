
<?php
require_once("Modal.php")
require_once(prod)
class product extents modal{
protected product $id
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
    $this->productDetails =array();
    $this->productDetails= $productDetailsArray;

  }    
    
function readProduct($productid){
    
     sql="select * from product where id = :id";
     $this->db->query($sql);
     $this->db->bind(':id',$id);
     $this->db->execute();
     if ($this->db->numRows() > 0){
     $product = $this->db->getdata()
     $this->id = $product->id;
     $this->name = $product->name;
     $this->code = $product->code;
     $this->cost = $product->cost;
     $this->profit =$product->profit;
     $this->description =$product->description;
     $this->weight =$product->weight;
     }
    $sql="select * from productdetails where id = :id"
    $this->db->query($sql);
    $this->db->bind(':id',$id);
    $this->db->execute();
    if ($this->db->numRows() > 0){
    $productDetailsObject = $this->db->getdata()
    foreach ($productDetailsObject as $value){
    $productdetails = new productdetails($value->id,$value->productid,$value->color,$value->s,$value->m,$value->l,$value->xl,$value->xxl,$value->xxxl,$value->sold,$value->imageurls)
    $this->productDetails[] = $productdetails;
    }     
         
    }
    
}

    
    
    
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    


}
?>