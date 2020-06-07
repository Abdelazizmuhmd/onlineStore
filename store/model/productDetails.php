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
 function getLarge(){
     return $this->l;
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
      return $this->Imagearray;
  	}
    function getid(){
        return $this->id;
    }

  	


  function insert($productid,$color,$s,$m,$l,$xl,$xxl,$xxxl,$Imagearray){
        $check=$this->checkcolor($productid,$color);
      if($check==0){
         $this->getvalidation();
         $this->validation->validateString($color,1,100);
      
         $this->validation->validateNumber($productid,1,10000);
         $this->validation->validateNumber($s,1,30000);
         $this->validation->validateNumber($m,1,30000);
         $this->validation->validateNumber($l,1,30000);
         $this->validation->validateNumber($xl,1,30000);
         $this->validation->validateNumber($xxl,1,30000);
         $this->validation->validateNumber($xxxl,1,30000);

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

  	}

   
    function checkcolor($productid,$color){
        $sql="select id from productdetails where color = :color and productid=:productid ";
        $this->connect();
        $this->db->query($sql);
        $this->db->bind(':productid',$productid,PDO::PARAM_INT);
        $this->db->bind(':color',$color,PDO::PARAM_STR);
        $this->db->execute();
        if ($this->db->numRows() > 0){        
          return 1;
       }else{
          return 0;
      }
    }
    function checkcolordup($productid,$color,$productdetailid){
        $sql="select id from productdetails where color = :color and productid=:productid and id <> :productdetailsid ";
        $this->connect();
        $this->db->query($sql);
        $this->db->bind(':productid',$productid,PDO::PARAM_INT);
        $this->db->bind(':color',$color,PDO::PARAM_STR);
        $this->db->bind(':productdetailsid',$productdetailid,PDO::PARAM_INT);
        $this->db->execute();
        if ($this->db->numRows() > 0){        
          return 1;
       }else{
          return 0;
      }
    }
    

    function update($productdetailid,$color,$s,$m,$l,$xl,$xxl,$xxxl,$Imagearray){
         $this->getvalidation();
         $this->validation->validateString($color,1,100);
         $this->validation->validateNumber($productdetailid,1,100000);
         $this->validation->validateNumber($s,1,30000);
         $this->validation->validateNumber($m,1,30000);
         $this->validation->validateNumber($l,1,30000);
         $this->validation->validateNumber($xl,1,30000);
         $this->validation->validateNumber($xxl,1,30000);
         $this->validation->validateNumber($xxxl,1,30000);
         $this->connect();
         $sql ="select productid from productdetails where id = :id";
         $this->db->query($sql);
         $this->db->bind(':id',$productdetailid,PDO::PARAM_INT);
         $this->db->execute();
         $x = $this->db->getdata();
         $pid = $x[0]->productid;
      if($Imagearray ==''){
        if($this->checkcolordup($pid,$color,$productdetailid)==0)
        {
        $queryUpdate = "UPDATE productdetails set  color = :color, s=:s, m=:m,l=:l,xl=:xl,xxl=:xxl,xxxl=:xxxl,xxxl=:xxxl where id =:productdetailsid";
          $this->db->query($queryUpdate);
          $this->db->bind(':productdetailsid',$productdetailid,PDO::PARAM_INT);
          $this->db->bind(':color',$color,PDO::PARAM_STR);
          $this->db->bind(':s',$s,PDO::PARAM_INT);
          $this->db->bind(':m',$m,PDO::PARAM_INT);
          $this->db->bind(':xl',$xl,PDO::PARAM_INT);
          $this->db->bind(':xxl',$xxl,PDO::PARAM_INT);
          $this->db->bind(':xxxl',$xxxl,PDO::PARAM_INT);
          $this->db->bind(':l',$l,PDO::PARAM_INT);  
          $this->db->execute();
        }
      }
      else{
          
      $Imagearray=serialize($Imagearray);
      $this->connect();
      $queryUpdate = "UPDATE productdetails set  color = :color, s=:s, m=:m,xl=:xl,xxl=:xxl,xxxl=:xxxl,xxxl=:xxxl,imageUrl=:imageUrls where id =:productdetailsid";
   

        $this->db->query($queryUpdate);
        
        $this->db->bind(':productdetailsid',$productdetailid,PDO::PARAM_INT);
        
        $this->db->bind(':color',$color,PDO::PARAM_STR);
        $this->db->bind(':s',$s,PDO::PARAM_INT);
        $this->db->bind(':m',$m,PDO::PARAM_INT);
        $this->db->bind(':xl',$xl,PDO::PARAM_INT);
        $this->db->bind(':xxl',$xxl,PDO::PARAM_INT);
        $this->db->bind(':xxxl',$xxxl,PDO::PARAM_INT);
        $this->db->bind(':imageUrls',$Imagearray,PDO::PARAM_STR);

        $this->db->execute();
      }

    }

    

    
    function delete($productDetailid){
         $this->getvalidation();

         $this->validation->validateNumber($productDetailid,1,100000);
      $this->connect();
      $sql = "update productdetails set isdeleted=1 where id=:id";
      $this->db->query($sql);
      $this->db->bind(':id',$productDetailid,PDO::PARAM_INT);
      $this->db->execute();
    }
    
    
    
    
    
    



}