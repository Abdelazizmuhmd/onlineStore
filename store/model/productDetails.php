<?php

require_once("Model.php");


class productDetails extends Model{

  private $productid;
  private $color;
  private $s;
  private $m;
  private $xl;
  private $xxl;
  private $xxxl;
  private $sold;
  protected $array();

  function __construct ($productid,$color,$s,$m,$xl,$xxl,$xxxl,$sold,$array()) {
    $this->connect();
        $this->productid =$productid;
        $this->color =$color;
        $this->s =$s;
        $this->m =$m;
		$this->xl =$xl;
        $this->xxl =$xxl;
        $this->xxxl =$xxxl;
        $this->sold =$sold;
        $this->array =$array();

  }


  function setProductid($productid){
      $this->productid = $productid;
  }

  
  function getProductid(){
      return $this->productid;
  }




   function setColor($color){
      $this->color = $color;
  }

  
  function getColor(){
      return $this->color;
  }


   function setSmall($s){
      $this->s = $s;
  }

  
  function getSmall(){
      return $this->s;
  }


   function setXl($xl){
      $this->xl = $xl;
  }

  
  function getXl(){
      return $this->xl;
  }

   function setXxl($xxl){
      $this->xxl = $xxl;
  }

  
  function getXxl(){
      return $this->xxl;
  }

   function setXxxl($xxxl){
      $this->xxxl = $xxxl;
  }

  
  function getXxxl(){
      return $this->xxxl;
  }




   function setSold($sold()){
      $this->sold = $sold();
   }

   function getSold(){
      return $this->sold;
   }



  	function setArray($array()){
      $this->array() = $array();
  	}

  	function getArray(){
      return $this->array();
  	}

}