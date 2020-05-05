<?php

require_once("Model.php");


class order extends Model{
  
  private $userid;
  private $comment;
  private $status;
  private $createdtime;
  private $products;
    
function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
function __construct1($id) {
      $this->readOrder($id);
  }
function __construct4($userid,$comment,$status,$productsids) {
    $this->makeorder($userid,$comment,$status,$productsids);
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




    function setCreatedtime($createdytime){
      $this->createdytime = $createdytime;
    }

    function getCreatedtime(){
      return $this->createdytime;
    }




    function setArray($array){
      $this->$products = $array;
    }

    function getProducts(){
      return $this->products;
    }

   

function gerorderdetails($orderid){
    $this->getorder();
    $sql="select  productid from orderdetails  where id =:orderid";
    $this->db->query($sql);
    $this->db->bind(':orderid,',$orderid);
    $this->db->execute();
    $this->products[]=new product($this->getdata()->id);
    
}


function makeOrder ($userid,$comment,$status,$productsids){

        $this->connect();
       
       
        $sqlOrder = "INSERT INTO `order` (userid,comment,status) VALUES (:userid,:comment,:status)";
        
        $this->db->query($sqlOrder);
        $this->db->bind(':userid',$userid,PDO::PARAM_INT);
        $this->db->bind(':comment',$comment,PDO::PARAM_STR);
        $this->db->bind(':status',$status,PDO::PARAM_STR);
        $this->db->execute();


        $orderid=$this->db->lastInsertedId();
        $length = count($productsids);

        for ($i = 0; $i < $length; $i++) {


         $this->connect();

         $productid=$productsids[$i];

         $sqlOrderDetails = "INSERT INTO orderdetails (orderid,productid) VALUES (:orderid ,:productid)";

           $this->db->query($sqlOrderDetails);
           $this->db->bind(':orderid',$orderid,PDO::PARAM_INT);
           $this->db->bind(':productid',$productid,PDO::PARAM_INT);

           $this->db->execute();

      }}

      function readOrder($id){
          $this->connect();
          $sql = "select id,comment,status,createdtime from `order` where id = :id";
          $this->db->query($sql);
          $this->db->bind(':id',$id,PDO::PARAM_INT);
          $this->db->execute();
          $row = $this->db->getdata();
          $this->id=$row[0]->id;
          $this->comment = $row[0]->comment;
          $this->status = $row[0]->status;
          $this->createdtime = $row[0]->createdtime;
      }
    
    function delete ($orderid){
        $this->connect();
        $sql = "update `order` set isdeleted=1 where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$orderid,PDO::PARAM_INT);
        $this->db->execute();
     }
    
    
    
    
}
    
    
    
    

?>