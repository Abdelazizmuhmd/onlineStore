
<?php
require_once("Modal.php")
require_once("productdetails.php");
class product extents modal{
protected $productid
protected $name;
protected $code;
protected $cost;
protected $profit;
protected $description;
protected $productDetails;

    
function __construct($productId){
 $this->readProduct($productId);
}    
    
    
static function insert($name,$code,$profit,$description,$productDetails){
      $this->connect();
      $sql = "INSERT into product(name,code,cost,profit,description,weight) values(:name,:code,:cost,:profit,:description,:weight)";
      $this->db->bind(':name',$name);
      $this->db->bind(':code',$code);
      $this->db->bind(':$profit',$profit);
      $this->db->bind(':description,',$description);
      $this->db->bind(':weight,',$weight);
    
      $this->db->query($sql);
      $this->db->execute();
      $productid=$this->lastInsertedId();
      foreach($productDetails as $productdetail){
        productdetails::insert($productid,$productdetail->color,$productdetail->s,$productdetail->m,$productdetail->l,$productdetail->xl,$productdetail->xxl,$productdetail->xxxl,$productdetail->imageArray);
       
      }
    
}    
    
//delete()
    
    
    static function update($productid,$productdetailid,$name,$code,$profit,$description,$weight,$color,$s,$m,$l,$xl,$xxl,$xxxl,$imageurls){
      $this->connect();
      $sql = "update product  set name= :name ,code= :code ,cost=:cost ,profit=:profit,description=:description,weight=:weight  where id = :id";
     $this->db->bind(':name',$name);
     $this->db->bind(':code',$code);
     $this->db->bind(':$profit',$profit);
     $this->db->bind(':description,',$description);
     $this->db->bind(':weight,',$weight);
     $this->db->bind(':id,',$productid);
     productDetails::update($productdetailid,,$color,$s,$m,$l,$xl,$xxl,$xxxl,$imageurls);


    
        
      $this->db->query($sql);
      $this->db->execute();
      $productid=$this->lastInsertedId();
      foreach($productDetails as $productdetail){
        productdetails::insert($productid,$productdetail->color,$productdetail->s,$productdetail->m,$productdetail->l,$productdetail->xl,$productdetail->xxl,$productdetail->xxxl,$productdetail->imageArray);
       
      }
    
}   
    
//update()
    
function readProduct($productid){
    
     sql="select * from product where id = :id";
     $this->db->query($sql);
     $this->db->bind(':id',$productid);
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
    $sql="select * from productdetails where productid = :id"
    $this->db->query($sql);
    $this->db->bind(':id',$productid);
    $this->db->execute();
    if ($this->db->numRows() > 0){
    $productDetailsObject = $this->db->getdata()
    foreach ($productDetailsObject as $value){
    $productdetails = new productdetails($value->id,$value->productid,$value->color,$value->s,$value->m,$value->l,$value->xl,$value->xxl,$value->xxxl,$value->sold,$value->imageurls)
    $this->productDetails[] = $productdetails;
    }     
         
    }
    
    
    
    
    
    
}
    
    
function deleteProduct($productid){
    sql="DELETE FROM productdetails WHERE productid=:productid";
    $this->db->query($sql);
    $this->db->bind(':productid',$productid);
    $this->db->execute();
    productDetails::delete($productid);



}


    
    
    
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    


}
?>