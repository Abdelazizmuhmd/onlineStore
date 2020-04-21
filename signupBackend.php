<?php

if (isset($_POST['submit'])) {
 
if(strlen($_POST['firstname'])<5){
        echo"firstname is to short";
}
else if(strlen($_POST['firstname'])>20)
{       echo"firstname is to long";
       
}else if(!ctype_alpha($_POST['firstname'])){
        echo"firstname  should be alphabet only";
    
} else if(empty($_POST['firstname'])){
       echo"firstname can not  be empty";
}
    
//////////////////////////////////////////////////////////////
else if(strlen($_POST['lastname'])<5){
        echo"lastname is to short";
}
else if(strlen($_POST['lastname'])>20)
{       echo"lastname is to long";
       
}else if(!ctype_alnum($_POST['lastname'])){
        echo"lastname is should be alphabet and numbers only";
    
} else if(empty($_POST['lastname'])){
       echo"lastname can not  be empty";
}
    
/////////////////////////////////////////////////////////////////////
 
else if (empty($_POST["email"])) {
   echo"email can not  be empty";
  } 
else if (!filter_var( $_POST["email"], FILTER_VALIDATE_EMAIL)){
    echo"email is invalid";
    
}
    /////////////////////////////////////////////
else if(strlen($_POST['password'])<5){
        echo"password is to short";
}
else if(strlen($_POST['password'])>25)
{       echo"password is to long";
       
}else if(!ctype_alnum($_POST['password'])){
        echo"password is should be alphabet only";
    
}else if(empty($_POST['password'])){
       echo"password can not  be empty";
};
    $conn= mysqli_connect("localhost","root","","patstore");
    
       $_POST['firstname']=filter_var($_POST['firstname'],FILTER_SANITIZE_STRING);
       $_POST['lastname']=filter_var($_POST['lastname'],FILTER_SANITIZE_STRING);
       $_POST['password']=sha1(filter_var($_POST['password'],FILTER_SANITIZE_STRING));
       $_POST['email']=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    
     echo $_POST['firstname'];

    $stmt = $conn->prepare("INSERT INTO user(firstname,lastname,password,email)values(?,?,?,?)");
    $stmt->bind_param("ssss",$_POST['firstname'],$_POST['lastname'], $_POST['password'],$_POST['email']);
    $stmt->execute();
    $c=$stmt->execute(); 
    if($c===false){
echo"sadasd";
    }

    $stmt->close();

   header("location: login.php");
    
}


?>
