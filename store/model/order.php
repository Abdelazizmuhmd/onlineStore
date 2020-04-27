<?php

require_once("Model.php");


class order extends Model{
	
	private $userid;
	private $comment;
	private $status;
	private $createdytime;
	protected $array();

	function __construct ($userid,$comment,$status,$createdytime,$array()) {
		$this->connect();
        $this->userid =$userid;
        $this->comment =$comment;
        $this->status =$status;
        $this->createdytime =$createdytime;
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

	



   
   function makeOrder ($userid,$comment,$status,$createdytime,$array()){

        $sql = "INSERT INTO order (userid,comment,status,createdtime) VALUES ('$userid','$comment','$status','createdytime')";
        $this->connect();
  		$this->db->query($sql);
    	$this->db->execute();
    	$this->db->lastInsertedId();


   }


 

}

?>