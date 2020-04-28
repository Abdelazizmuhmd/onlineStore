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
  protected $Imagearray();
    
  function __construct ($productid,$color,$s,$m,$xl,$xxl,$xxxl,$sold,$Imagearray) {
        $this->productid =$productid;
        $this->color =$color;
        $this->s =$s;
        $this->m =$m;
		$this->xl =$xl;
        $this->xxl =$xxl;
        $this->xxxl =$xxxl;
        $this->sold =$sold;
        $this->Imagearray =unserialize($Imagearray());
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



  	function setArray($Imagearray()){
      $this->Imagearray() = $Imagearray();
  	}

  	function getArray(){
      return $this->Imagearray();
  	}

  	


function insert($productid,$color,$s,$m,$xl,$xxl,$xxxl,$Imagearray){

  		$this->connect();

     /* controller
     
  		$countfiles = count($_FILES['Imagearray']['name']);
  		
    $countfiles = count($_FILES['Imagearray']['name']);
 		$result_arr = [];
 		
 		
 		for($i=0;$i<$countfiles;$i++){// Looping all files

  				$filename = $_FILES['Imagearray']['name'][$i];
  				array_push($result_arr, $filename);

  				
  				move_uploaded_file($_FILES['Imagearray']['tmp_name'][$i],'../images/'.$filename);// Upload file

 		}*/

  $Imagearray=serialize($Imagearray);
  $query = "INSERT INTO productdetails (productid,color,s,m,l,xl,xxl,xxxl,imageUrl) VALUES(:productid,:color,:s,:m,:xl,:xxl,:xxxl,:imageUrls)";
 		


        $this->db->query($query);
        $this->db->bind(':productid,',$productid);
        $this->db->bind(':color',$color);
        $this->db->bind(':s',$s);
        $this->db->bind(':m',$m);
        $this->db->bind(':xl',$xl);
        $this->db->bind(':xxl',$xxl);
        $this->db->bind(':xxxl',$xxxl);
        $this->db->bind(':imageUrls',$Imagearray);

        $this->db->execute();

  	}


    function update($productid,$color,$s,$m,$xl,$xxl,$xxxl,$sold,$Imagearray){

      $this->connect();
      $queryUpdate = "UPDATE productdetails set productid = :productid, color = :color, s=:s, m=:m,xl=:xl,xxl=:xxl,xxxl=:xxxl,xxxl=:xxxl,sold=:sold,imageUrl=:imageUrls where productid =:productid";
    


        $this->db->query($queryUpdate);
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



}