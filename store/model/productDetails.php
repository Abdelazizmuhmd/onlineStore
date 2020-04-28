<?php

require_once("Model.php");


class productDetails extends Model{
  protected $id;
  private $productid;
  private $color;
  private $s;
  private $m;
  private $xl;
  private $xxl;
  private $xxxl;
  private $sold;
  protected $Imagearray;
    
  function __construct ($id,$productid,$color,$s,$m,$xl,$xxl,$xxxl,$sold,$Imagearray) {
        $this->id = $id;
        $this->productid =$productid;
        $this->color =$color;
        $this->s =$s;
        $this->m =$m;
		$this->xl =$xl;
        $this->xxl =$xxl;
        $this->xxxl =$xxxl;
        $this->sold =$sold;
        $this->Imagearray =$Imagearray;
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




   function setSold($sold){
      $this->sold = $sold;
   }

   function getSold(){
      return $this->sold;
   }



  	function setArray($Imagearray){
      $this->Imagearray = $Imagearray;
  	}

  	function getArray(){
      return $this->Imagearray();
  	}

  	


  function insert($productid,$color,$s,$m,$l,$xl,$xxl,$xxxl,$Imagearray){
  $this->connect();
  $Imagearray=serialize($Imagearray);
      $soldini=0;
  $query = "INSERT INTO productdetails (productid,color,s,m,l,xl,xxl,xxxl,sold,imageUrl) VALUES(:productid,:color,:s,:m,:l,:xl,:xxl,:xxxl,:sold,:imageUrls)";
 		
        $this->db->query($query);
      
        $this->db->bind(':productid',$productid);
        $this->db->bind(':color',$color);
        $this->db->bind(':s',$s);
        $this->db->bind(':m',$m);
        $this->db->bind(':l',$l);
        $this->db->bind(':xl',$xl);
        $this->db->bind(':xxl',$xxl);
        $this->db->bind(':xxxl',$xxxl);
        $this->db->bind(':sold',$soldini);
        $this->db->bind(':imageUrls',$Imagearray);
        $this->db->execute();


  	}


   static function update($productdetailid,$color,$s,$m,$xl,$xxl,$xxxl,$sold,$Imagearray){
      $Imagearray=serialize($Imagearray);
      $this->connect();
      $queryUpdate = "UPDATE productdetails set  color = :color, s=:s, m=:m,xl=:xl,xxl=:xxl,xxxl=:xxxl,xxxl=:xxxl,sold=:sold,imageUrl=:imageUrls where id =:productdetailsid";
   

        $this->db->query($queryUpdate);
        $this->db->bind(':id,',$id);
        $this->db->bind(':productid,',$productid);
        $this->db->bind(':color',$color);
        $this->db->bind(':s',$s);
        $this->db->bind(':m',$m);
        $this->db->bind(':xl',$xl);
        $this->db->bind(':xxl',$xxl);
        $this->db->bind(':xxxl',$xxxl);
        $this->db->bind(':sold',$sold);
        $this->db->bind(':imageUrls',$Imagearray);

        $this->db->execute();

    }




   static function delete ($productid){
       $this->connect();
      $queryDelete = "DELETE FROM productdetails where productid = :id";

        $this->db->query($queryDelete);
        $this->db->bind(':productid',$productid);

        $this->db->execute();

    }



}