
<?php
require_once("Model.php");
require_once("productdetails.php");
class product extends model{
protected $productid;
protected $name;
protected $code;
protected $cost;
protected $profit;
protected $description;
protected $weight;
protected $productDetails;

    
function getName(){
    return $this->name;
}
    
function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
function __construct0(){
$this->productDetails=new productDetails();
}    
    
    
function __construct1($productId){
 $this->readProduct($productId);
}    
    
    
    
function getProductDetails(){
    return $this->productDetails;
}
    
 function insertProduct($name,$code,$cost,$profit,$description,$weight,$productDetails,$subcategoryid){

      $this->connect();
      $sql = "INSERT into product(name,code,cost,profit,description,weight) values(:name,:code,:cost,:profit,:description,:weight)";
      $this->db->query($sql);
      $this->db->bind(':name',$name,PDO::PARAM_STR);
      $this->db->bind(':code',$code,PDO::PARAM_STR);
      $this->db->bind(':cost',$cost,PDO::PARAM_INT);
      $this->db->bind(':profit',$profit,PDO::PARAM_INT);
      $this->db->bind(':description',$description,PDO::PARAM_STR);
      $this->db->bind(':weight',$weight,PDO::PARAM_INT);
      $this->db->execute();
      $productid=$this->db->lastInsertedId();
     
     
      foreach($productDetails as $productdetail){     
        $this->productDetails[0]->insert($productid,$productdetail['color'],$productdetail['s'],$productdetail['m'],$productdetail['l'],$productdetail['xl'],$productdetail['xxl'],$productdetail['xxxl'],$productdetail['img']);
       
      }
     
      $sql = "INSERT into subcategoryid(subcategoryid,categoryid) values(:subcategoryid,:productid)";
      $this->db->query($sql);
      $this->db->bind(':subcategoryid',$subcategoryid,PDO::PARAM_INT);
      $this->db->bind(':productid',$productid,PDO::PARAM_INT);
      $this->db->execute();
     
     
    
}    
    
//delete()
   
    
    
     function update($productid,$productdetailid,$name,$code,$cost,$profit,$description,$weight,$color,$s,$m,$l,$xl,$xxl,$xxxl,$imageurls){

      $this->connect();
      $sql = "update product  set name= :name ,code= :code ,cost=:cost ,profit=:profit,description=:description,weight=:weight where id = :id";
                  $this->db->query($sql);

      $this->db->bind(':name',$name,PDO::PARAM_STR);

      $this->db->bind(':code',$code,PDO::PARAM_STR);

         
      $this->db->bind(':cost',$cost,PDO::PARAM_INT);

      $this->db->bind(':profit',$profit,PDO::PARAM_INT);


         
      $this->db->bind(':description',$description,PDO::PARAM_STR);
      $this->db->bind(':weight',$weight,PDO::PARAM_INT);
      $this->db->bind(':id',$productid,PDO::PARAM_INT);

         
      $this->db->execute();
        
      $this->productDetails[0]->update($productdetailid,$color,$s,$m,$l,$xl,$xxl,$xxxl,$imageurls);
        
     
         
    
}   
    
//update()
    
function readProduct($productid){
    $this->connect();
     $sql="select * from product where id = :id and isdeleted = 0" ;
     $this->db->query($sql);
     $this->db->bind(':id',$productid,PDO::PARAM_INT);
     $this->db->execute();
     if ($this->db->numRows() > 0){
     $product = $this->db->getdata();
     $this->id = $product[0]->id;
     $this->name = $product[0]->name;
     $this->code = $product[0]->code;
     $this->cost = $product[0]->cost;
     $this->profit =$product[0]->profit;
     $this->description =$product[0]->description;
     $this->weight =$product[0]->weight;
     }
    $sql="select * from productdetails where productid = :id and isdeleted = 0 ";
    $this->db->query($sql);
    $this->db->bind(':id',$productid,PDO::PARAM_INT);
    $this->db->execute();
    if ($this->db->numRows() > 0){
    $productDetailsObject = $this->db->getdata();
    foreach ($productDetailsObject as $value){
    $productdetails = new productdetails($value->id,$value->productid,$value->color,$value->s,$value->m,$value->l,$value->xl,$value->xxl,$value->xxxl,$value->sold,$value->imageUrl);
    $this->productDetails[] = $productdetails;
    }     
         
    }
    
    
    
    
}
    
    
function deleteProduct($productID){
     $this->connect();
      $sql = "update product set isdeleted=1 where id=:id";
          $this->db->query($sql);

      $this->db->bind(':id',$productID,PDO::PARAM_INT);
      $this->db->execute();
    
     $sql = "update subcategorydetails set isdeleted=1 where productid=:id";
          $this->db->query($sql);
      $this->db->bind(':id',$productID,PDO::PARAM_INT);
      $this->db->execute();


}


    
    
    
    
}
    
    
    
?>