<?php

require_once( "../model/user.php");
require_once( "../controller/signUpController.php");

require_once("../model/menu.php");
require_once("../controller/menuController.php");
require_once("../View/menuView.php");
$model = new menu();
$controller= new menuController($model);
$controller->getAllCategoriesDetails();
$view= new menuView($model,$controller);


$model2 = new user();
$controller2 = new signUpController($model2);


 if (isset($_GET['action']) && !empty($_GET['action'])){
  $controller2->{$_GET['action']}();
    header("location:../public/login.php");
}


?>
<!doctype php>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>
Pat  
    </title>

<link rel="stylesheet" media="all" href="../css/home.css" />  
<script src="../js/j.js" type="text/javascript"></script>
  <script src="../js/s.js" type="text/javascript"></script>
  <script src="../js/home.js" type="text/javascript"></script>
  <script src="../s/j2.js" type="text/javascript"></script> 
  <script src="../js/signUp.js" type="text/javascript" ></script> 
 
    

</head>

    

    
<body >
   

  <div>
     
        <center>
 <iframe  src="../public/header.php" height="100" width="100%" style="border:none;"></iframe>
        </center>



  <div class="site-wrapper">

    <div class="grid">


            <img src="../images/logo.png" style="margin-bottom:30px; margin-left:60px; width:120px;height:120px;">

            <?php
        include("menu.php");
?>

     
<main class="main-content grid__item medium-up--four-fifths" id="MainContent" role="main">
        
          <hr class="hr--border-top small--hide">
        
        
        <!-- /templates/customers/register.liquid -->
<h1 class="small--text-center">Create Account</h1>

<div class="form-register form-vertical">
   <form method = "post" action="../public/signup.php?action=signUP" >
    <label for="FirstName" class="label--hidden">First Name</label>
    <input type="text" name="firstname" id="firstName"  placeholder="First Name" autocapitalize="words" autofocus="" maxlength="10">

    <label for="LastName" class="label--hidden">Last Name</label>
    <input type="text" name="lastname" id="lastName"  placeholder="Last Name" autocapitalize="words" maxlength="10">

    <label for="Email" class="label--hidden">Email</label>
    <input type="email" name="email" id="email"  class="" placeholder="Email" autocorrect="off" autocapitalize="off">

    <label for="CreatePassword" class="label--hidden">Password</label>
    <input type="password" name="password" id="password"  class="" placeholder="Password" maxlength="25">

    <p>
      <input type="submit" name="submit" value="Create" onclick="return validateForm()" >
    </p>
  </form> 
  
</div>

      </main>
    
   
</div>
<hr>
</div>  
    </div>
</body>
<script >


$(document).ready(function(){
   $("#email").keyup(function(){
      var mail = $("#email").val().trim();
      if(mail != ''){
         $.ajax({
            url: '../other/signUpAjax.php',
            type: 'post',
            data: {mail:mail},
            success: function(response){
                if(response > 0){
                    document.getElementById("email").value="";
                    alert("Email is taken");
                }

             }
          });
      }

    });

 });

</script> 
</html>
