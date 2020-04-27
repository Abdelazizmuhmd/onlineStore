<?php
class validation{
    
function removeSpaces($value){
    
$value=trim(preg_replace('/\s+/', ' ',$value));
    return $value;
    
}

    //accept space in it 
function validateStringWithSpace($value,$min,$max){
    
    $value=removeSpaces($value);
    validateLength($value,$min,$max);
    if(!ctype_alpha(str_replace(" ","",$value))){
        header("location: erro.html");
    }
    return $value;
    
    }
    
function validateString($value,$min,$max){
    
    $value=removeSpaces($value);
    
    validateLength($value,$min,$max);
    
    if(!ctype_alpha($value)){
        header("location: erro.html");
    }
        return $value;

}


            
function validateMixedString($value){
        
    $value=removeSpaces($value);
    validateLength($value,$min,$max);

   return $value;

}

function filterOutput($value){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

            
function validateNumber($value,$min,$max){
    
    validateLength($value,$min,$max);
    
    if(!is_numeric($value)){
        header("location: erro.html");
    }


}


            
            
function validateLength($value,$min,$max){
     $length=strlen($value);
     if($length<$min ||$length>$max){
        header("location: erro.html");
    }

}
    
    
}
?>