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

  function __construct ($productid,$color,$s,$m,$xl,$xxl,$xxxl,$sold,$Imagearray()) {
    $this->connect();
        $this->productid =$productid;
        $this->color =$color;
        $this->s =$s;
        $this->m =$m;
		$this->xl =$xl;
        $this->xxl =$xxl;
        $this->xxxl =$xxxl;
        $this->sold =$sold;
        $this->Imagearray =$Imagearray();

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

  	


  	function insert($productid,$color,$s,$m,$xl,$xxl,$xxxl,$Imagearray()){

  		$this->connect();


  		$countfiles = count($_FILES['Imagearray']['name']);
 		$result_arr = [];
 		
 		// Looping all files
 		for($i=0;$i<$countfiles;$i++){

  				$filename = $_FILES['Imagearray']['name'][$i];
  				array_push($result_arr, $filename);

  				// Upload file
  				move_uploaded_file($_FILES['Imagearray']['tmp_name'][$i],'../images/'.$filename);

 		}
  


  $s=serialize($result_arr);
  $query = "INSERT INTO productdetails (productid,color,s,m,l,xl,xxl,xxxl,imageUrl) VALUES(:productid,:color,:s,:m,:xl,:xxl,:xxxl,:imageUrl)";

        
        $this->db->query($query);
        $this->db->bind(':productid,',$productid);
        $this->db->bind(':color',$color);
        $this->db->bind(':s',$s);
        $this->db->bind(':m',$m);
        $this->db->bind(':xl',$xl);
        $this->db->bind(':xxl',$xxl);
        $this->db->bind(':xxxl',$xxxl);
        $this->db->bind(':imageUrl',$s);

        $this->db->execute();

  	}



}