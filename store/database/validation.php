<?php
class validation{
  private static $instance = null;
  private function __construct()
  {
  }
 public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new validation();
    }
 
    return self::$instance;
  }
function removeSpaces($value){
    
    
$value=trim(preg_replace('/\s+/', '',$value));
    return $value;
    
}

    //accept space in it 
function validateStringWithSpace($value,$min,$max){
    
    $this->validateLength($value,$min,$max);
    
    if(!ctype_alpha(str_replace(" ","",$value))){
        header("location: error.html");
         die();
    }
    
    }
    
function validateString($value,$min,$max){
    
    
   $this->validateLength($value,$min,$max);
    
    if(!ctype_alpha($value)){
        header("location: error.html");
        die();
      
    }

}


            
function validateMixedString($value,$min,$max){
        
 $this->validateLength($value,$min,$max); 
 if(!preg_match("/^[a-zA-Z0-9 ]*$/",$value)){
    
      header("location: error.html");
      die();
 }

}
function validateEmail($email,$min,$max){
    $this->validateLength($email,$min,$max); 

       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location: error.html");
        die();
        }
        
        
    }
   /* 
function validateImageName($image){
    if(!preg_match("/^[a-zA-Z0-9 _.\/]*$/",$image)){
         header("location: error.html");
         die();
    }
}*/

function filterOutput($value){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

            
function validateNumber($value,$min,$max){
    
   $this->validateLength($value,$min,$max);
    $value=trim($value);
    if(!is_numeric($value)){
        header("location: error.html?a=".$value);
         die();
    }


}


               
function validateLength($value,$min,$max){
  
     $length=strlen($value);
       $min=$min-1;
     if($length<$min ||$length>$max){
        header("location: erro.html");
          die();
    }
    
}
    
    
}
?>