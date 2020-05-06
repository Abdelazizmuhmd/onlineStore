<?php
require_once("../model/Model.php");


class productDetails extends Model{
  protected $id;
  private $productid;
  private $color;
  private $s;
  private $m;
  private $l;
  private $xl;
  private $xxl;
  private $xxxl;
  private $sold;
  protected $Imagearray;
    
function __construct()
{
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
}
    
function __construct0(){
    
}    
    

function __construct11($id,$productid,$color,$s,$m,$l,$xl,$xxl,$xxxl,$sold,$Imagearray) {
        $Imagearray=unserialize($Imagearray);
        $this->id = $id;
        $this->productid =$productid;
        $this->color =$color;
        $this->s =$s;
        $this->m =$m;
        $this->l=$l;
		$this->xl =$xl;
        $this->xxl =$xxl;
        $this->xxxl =$xxxl;
        $this->sold =$sold;
        $this->Imagearray =$Imagearray;
}

    
function getImages(){
    return $this->Imagearray;
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
  function setMedium($m){
    $this->s = $m;
}


function getMedium(){
    return $this->m;
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
      
        $this->db->bind(':productid',$productid,PDO::PARAM_INT);
        $this->db->bind(':color',$color,PDO::PARAM_STR);
        $this->db->bind(':s',$s,PDO::PARAM_INT);
        $this->db->bind(':m',$m,PDO::PARAM_INT);
        $this->db->bind(':l',$l,PDO::PARAM_INT);
        $this->db->bind(':xl',$xl,PDO::PARAM_INT);
        $this->db->bind(':xxl',$xxl,PDO::PARAM_INT);
        $this->db->bind(':xxxl',$xxxl,PDO::PARAM_INT);
        $this->db->bind(':sold',$soldini,PDO::PARAM_INT);
        $this->db->bind(':imageUrls',$Imagearray,PDO::PARAM_STR);
        $this->db->execute();


  	}

   
    
    

    function update($productdetailid,$color,$s,$m,$xl,$xxl,$xxxl,$sold,$Imagearray){
      $Imagearray=serialize($Imagearray);
      $this->connect();
      $queryUpdate = "UPDATE productdetails set  color = :color, s=:s, m=:m,xl=:xl,xxl=:xxl,xxxl=:xxxl,xxxl=:xxxl,sold=:sold,imageUrl=:imageUrls where id =:productdetailsid";
   

        $this->db->query($queryUpdate);
        
        $this->db->bind(':productdetailsid',$productdetailid,PDO::PARAM_INT);
        
        $this->db->bind(':color',$color,PDO::PARAM_STR);
        $this->db->bind(':s',$s,PDO::PARAM_INT);
        $this->db->bind(':m',$m,PDO::PARAM_INT);
        $this->db->bind(':xl',$xl,PDO::PARAM_INT);
        $this->db->bind(':xxl',$xxl,PDO::PARAM_INT);
        $this->db->bind(':xxxl',$xxxl,PDO::PARAM_INT);
        $this->db->bind(':sold',$sold,PDO::PARAM_INT);
        $this->db->bind(':imageUrls',$Imagearray,PDO::PARAM_STR);

        $this->db->execute();

    }

    

    
    function delete ($productDetails){
      $this->connect();
      $sql = "update productdetails set isdeleted=1 where id=:id";
      $this->db->query($sql);
      $this->db->bind(':id',$productDetails,PDO::PARAM_INT);
      $this->db->execute();
    }
    
    
    
    
    
    



}