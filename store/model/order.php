<?php

require_once("../model/Model.php");
require_once("../model/product.php");
require_once("../model/orderproductdetails.php");

 //test
class order extends Model{
  private $id;
  private $userid;
  private $comment;
  private $status;
  private $createdtime;
  private $productorderdetails;
    
function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
function __construct1($id) {
      $this->id = $id;
      $this->readOrder($id);
  }
function __construct2($userid,$productsdetails) {
    $this->makeorder($userid,$productsdetails);
  }


    function setUserid($userid){
      $this->userid = $userid;
    }

    function getUserid(){
      return $this->userid;
    }




    function setComment($comment){
      $this->comment = $comment;
    }

    function getComment(){
      return $this->comment;
    }



    function setStatus($status){
      $this->status = $status;
    }

    function getStatus(){
      return $this->status;
    }
    function getId(){
      return $this->id;
    }




    function setCreatedtime($createdtime){
      $this->createdtime = $createdtime;
    }

    function getCreatedtime(){
      return $this->createdtime;
    }




    function setArray($array){
      $this->$products = $array;
    }

    function getProducts(){
      return $this->productorderdetails;
    }

   

function getorderdetails($orderid){
     $this->getvalidation();
     $this->validation->validateNumber($orderid,1,1000000);
    
    $this->connect();
    $sql="select id,productdetailid,size,quantity from orderdetails  where orderid =:orderid";
    $this->db->query($sql);
    $this->db->bind(':orderid',$orderid,PDO::PARAM_INT);
    $this->db->execute();
    $dbobjects=$this->db->getdata();
    foreach($dbobjects as $dbobject){
    $productdetailid=$dbobject->productdetailid;
    $productordersize=$dbobject->size;
    $productorderquantity= $dbobject->quantity;
    $this->productorderdetails[]=new productorderdetails($productdetailid,$productordersize,$productorderquantity);
   
    }
    
    
    
    
}


function makeOrder ($userid,$productsdetails){
        
     $this->getvalidation();
     $this->validation->validateNumber($userid,1,1000000);
            $length = count($productsdetails);

        for ($i = 0; $i < $length; $i++) {
         $this->   checkQuantity($productsdetails[$i]['id'],$productsdetails[$i]['size'],$productsdetails[$i]['quantity']);
        }
    
    
    
    
    
        $this->connect();
        $sqlOrder = "INSERT INTO `order` (userid,comment,status) VALUES (:userid,:comment,:status)";
        $this->db->query($sqlOrder);
        $this->db->bind(':userid',$userid,PDO::PARAM_INT);
        $this->db->bind(':comment',"no Comment",PDO::PARAM_STR);
        $this->db->bind(':status',"pending",PDO::PARAM_STR);
        $this->db->execute();
        $orderid=$this->db->lastInsertedId();
    
        for ($i = 0; $i < $length; $i++) {
            // assiarray
         $this->connect();
            
         $productdetailid=$productsdetails[$i]['id'];
         $productdetailsize=$productsdetails[$i]['size'];
         $productdetailquantity=$productsdetails[$i]['quantity'];
        
         $sqlOrderDetails = "INSERT INTO orderdetails (orderid,productdetailid,size,quantity) VALUES (:orderid ,:productdetailid,:size,:quantity)";
            
          $this->validation->validateNumber($orderid,1,1000000);
      

           $this->db->query($sqlOrderDetails);
           $this->db->bind(':orderid',$orderid,PDO::PARAM_INT);
           $this->db->bind(':productdetailid',$productdetailid,PDO::PARAM_INT);
           $this->db->bind(':size',$productdetailsize,PDO::PARAM_STR);
           $this->db->bind(':quantity',$productdetailquantity,PDO::PARAM_INT);
           $this->db->execute();
         
            

      }}
function checkQuantity($id,$size,$quantity){
    
    $this->getvalidation();
    $this->validation->validateNumber($id,1,1000000);
    $this->validation->validateString($size,1,40);
    $this->validation->validateNumber($quantity,1,20000);
    
    
    
    
    if($size=="Small"){
    $sql="select id from productdetails where id =:id and s < :size";
    }
    else if($size=="Medium"){
        $sql="select id from productdetails where id =:id and m <:size";
    }
      else if($size=="Large"){
        $sql="select id from productdetails where id =:id and l<:size";
    }
      else if($size=="XL"){
        $sql="select id from productdetails where id =:id and xl <:size";
    }
  else if($size=="XXL"){
        $sql="select id from productdetails where id =:id and xxl <:size";
    }
    else if($size=="XXXL"){
        $sql="select id from productdetails where id =:id and xxxl <:size";
    }else{
        header("location: ../public/error.html");
    }
   
  $this->connect();
  $this->db->query($sql);
  $this->db->bind(':id',$id,PDO::PARAM_INT);
  $this->db->bind(':size',$quantity,PDO::PARAM_INT);
          $this->db->execute();
    
   if ($this->db->numRows() > 0){
      header("location: ../public/error.html");
       die();
      }
        
        
    
}
      function readOrder($id){
     $this->getvalidation();
     $this->validation->validateNumber($id,1,1000000);
          
          $this->connect();
          $sql = "select userid,id,comment,status,createdtime from `order` where id = :id and isdeleted = 0    ";
          $this->db->query($sql);
          $this->db->bind(':id',$id,PDO::PARAM_INT);
          $this->db->execute();
          $row = $this->db->getdata();
          if($this->db->numRows()){
          $this->id=$row[0]->id;
          $this->comment = $row[0]->comment;
          $this->status = $row[0]->status;
          $this->createdtime = $row[0]->createdtime;
          $this->userid = $row[0]->userid;
          }
      }
    
    function delete ($orderid){
         $this->getvalidation();
     $this->validation->validateNumber($orderid,1,1000000);
        $this->connect();
        if($_SESSION['usertype'] == 'admin'){
        $sql = "update `order` set isdeleted=1 where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$orderid,PDO::PARAM_INT);
        $this->db->execute();
        }
        else
        {
        $sql = "select userid from `order` where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$orderid,PDO::PARAM_INT);
        $this->db->execute();
         if($this->db->getdata()[0]->userid == $_SESSION['id'] )
         {
          $sql = "update `order` set isdeleted=1 where id=:id";
          $this->db->query($sql);
          $this->db->bind(':id',$orderid,PDO::PARAM_INT);
          $this->db->execute();
         }
         else
         {
          header("location: ../public/error.html");
          die();
         }


        }
     }
     function updateStat($orderid,$status){
           $this->getvalidation();
     $this->validation->validateNumber($orderid,1,1000000);
     $this->validation->validateString($status,1,100);
         
         
      $this->connect();
      $sql = "update `order` set status=:status where id=:id";
      $this->db->query($sql);
      $this->db->bind(':id',$orderid,PDO::PARAM_INT);
      $this->db->bind(':status',$status,PDO::PARAM_STR);
      $this->db->execute();
       
     }
    
    
    
    
}
    
    
    
    

?>