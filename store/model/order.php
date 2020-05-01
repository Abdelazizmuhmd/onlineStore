<?php

require_once("Model.php");


class order extends Model{
  
  private $userid;
  private $comment;
  private $status;
  private $createdtime;
  protected $array();

  function __construct ($userid,$comment,$status,$createdytime,$array()) {
    $this->connect();
        $this->userid =$userid;
        $this->comment =$comment;
        $this->status =$status;
        $this->createdytime =$createdytime;
        $this->array =$array();
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




    function setArray($array()){
      $this->array() = $array();
    }

    function getArray(){
      return $this->array();
    }

   
   function getorder($userid){
        $this->connect();
       
        $status = "pedding";
       
        $sqlOrder = "select order()";
        
        $this->db->query($sqlOrder);
        $this->db->bind(':userid,',$userid);
        $this->db->bind(':comment',$comment);
        $this->db->bind(':status',$status);

        $this->db->execute();
       
   }

   
   function makeOrder ($userid,$comment,$productsids){

        $this->connect();
       
        $status = "pedding";
       
        $sqlOrder = "INSERT INTO order (userid,comment,status) VALUES (:userid,:comment:,:status)";
        
        $this->db->query($sqlOrder);
        $this->db->bind(':userid,',$userid);
        $this->db->bind(':comment',$comment);
        $this->db->bind(':status',$status);

        $this->db->execute();


        $orderid=$this->db->lastInsertedId();
        $length = count($array);

        for ($i = 0; $i < $length; $i++) {


         $this->connect();

         $productid=$array($i);

         $sqlOrderDetails = "INSERT INTO orderdetails (orderid,productid) VALUES (:orderid ,:productid)";

           $this->db->query($sqlOrderDetails);
           $this->db->bind(':orderid',$orderid);
           $this->db->bind(':productid',$productid);

           $this->db->execute();

      }
      function readOrders ($id){
          $sql = "select comment,status,creadtedtime from order where id = :id";
          $this->db->query($sqlOrderDetails);
          $this->db->bind(':id',$id)
          $this->db->execute();
          $row = $this->db->getdata();
          $this->comment = $row[0]->comment;
          $this->status = $row[0]->status;
          $this->createdtime = $row[0]->getCreatedtime;
      }
}

?>