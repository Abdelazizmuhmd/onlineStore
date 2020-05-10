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
function __construct4($userid,$comment,$status,$productsdetails) {
    $this->makeorder($userid,$comment,$status,$productsdetails);
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


function makeOrder ($userid,$comment,$status,$productsdetails){
        $this->connect();
        $sqlOrder = "INSERT INTO `order` (userid,comment,status) VALUES (:userid,:comment,:status)";
        $this->db->query($sqlOrder);
        $this->db->bind(':userid',$userid,PDO::PARAM_INT);
        $this->db->bind(':comment',$comment,PDO::PARAM_STR);
        $this->db->bind(':status',$status,PDO::PARAM_STR);
        $this->db->execute();
        $orderid=$this->db->lastInsertedId();
    
        $length = count($productsdetails);
        echo $length;
        for ($i = 0; $i < $length; $i++) {
            // assiarray
         $this->connect();
            
         $productdetailid=$productsdetails[$i]['id'];
         $productdetailsize=$productsdetails[$i]['size'];
         $productdetailquantity=$productsdetails[$i]['quantity'];
            
         $sqlOrderDetails = "INSERT INTO orderdetails (orderid,productdetailid,size,quantity) VALUES (:orderid ,:productdetailid,:size,:quantity)";
            
           $this->db->query($sqlOrderDetails);
           $this->db->bind(':orderid',$orderid,PDO::PARAM_INT);
           $this->db->bind(':productdetailid',$productdetailid,PDO::PARAM_INT);
           $this->db->bind(':size',$productdetailsize,PDO::PARAM_STR);
           $this->db->bind(':quantity',$productdetailquantity,PDO::PARAM_INT);
           $this->db->execute();

      }}

      function readOrder($id){
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
        $this->connect();
        $sql = "update `order` set isdeleted=1 where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$orderid,PDO::PARAM_INT);
        $this->db->execute();
     }
     function updateStat($orderid,$status){
      $this->connect();
      $sql = "update `order` set status=:status where id=:id";
      $this->db->query($sql);
      $this->db->bind(':id',$orderid,PDO::PARAM_INT);
      $this->db->bind(':status',$status,PDO::PARAM_STR);
      $this->db->execute();
       
     }
    
    
    
    
}
    
    
    
    

?>