<?php 
session_start();
if(!isset($session['usertype'])){
     header("location: ../public/logout.php");   
    die();
    
    
}else{
    if($_SESSION['usertype']=="admin"){
        header("location: ../public/logout.php");
        die();
    }
}

?>