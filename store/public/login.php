<?php
require_once( "../model/user.php");
require_once( "../controller/loginController.php");

require_once("../model/menu.php");
require_once("../controller/menuController.php");
require_once("../View/menuView.php");
$model = new menu();
$controller= new menuController($model);
$controller->getAllCategoriesDetails();
$view= new menuView($model,$controller);




$model2 = new user();
$controller2 = new loginController($model2);

if(isset($_GET['action']) && !empty($_GET['action'])){
$controller2->{$_GET['action']}();
if($model2->getID()!=""){
    header("location:../public/products.php");
}else{
    alert("Wrong user");
}
     
}

?>
<!doctype html>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>
Pat  
    </title>

  <link href="../css/home.css" rel="stylesheet" type="text/css" media="all" /> 
  <script src="../js/j.js" type="text/javascript"></script>
  <script src="../js/s.js" type="text/javascript"></script>
  <script src="../js/home.js" type="text/javascript"></script>
  <script src="../js/j2.js" type="text/javascript"></script>
  <script src="../js/login.js" type="text/javascript"></script>


    

</head>

    
    
    
<body >
  <div>

     
        <center>
 <iframe  src="../public/header.php" height="100" width="100%" style="border:none;"></iframe>
        </center>


    </div>



    <div class="site-wrapper">

        <div class="grid">




            <img src="../images/logo.png" style="margin-bottom:30px; margin-left:60px; width:120px;height:120px;">

 <?php
        include("menu.php");
?>

     
 <main class="main-content grid__item medium-up--four-fifths" id="MainContent" role="main">
        
      <hr class="hr--border-top small--hide">
        

  <div class="grid grid--uniform" role="list">

<main class="main-content grid__item medium-up--four-fifths" id="MainContent" role="main">
        
        
        
<div class="grid">

  <div class="grid__item">
    <div class="form--success hide" id="ResetSuccess">
      We've sent you an email with a link to update your password.
    </div>

    <div id="CustomerLoginForm" class="form-vertical">
      <form method="post" action="../public/login.php?action=login" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">

        <h1 class="small--text-center">Login</h1>


        <label for="CustomerEmail" class="label--hidden">Email</label>
        <input type="email" name="email" id="CustomerEmail" class="" placeholder="Email" autocorrect="off" autocapitalize="off" autofocus="">

        
          <label for="CustomerPassword" class="label--hidden">Password</label>
          <input type="password" value="" name="password" id="CustomerPassword" class="" placeholder="Password">
                 <?php  if(isset($_GET['check'])){ echo"<P> Invalid Passsword </P>";   }
          ?>

         
        <p>
          <input type="submit" name="signin" class="btn" value="Log IN" onclick="return validateForm()">
        </p>
        <p><a href="/account/register" id="customer_register_link">Sign up</a></p>
        
          <p><a href="#recover" id="RecoverPassword">Forgot your password?</a></p>
        

      </form>
    </div>

    
    <div id="RecoverPasswordForm" class="hide">

      <h2 class="small--text-center">Reset your password</h2>
      <p>We will send you an email to reset your password.</p>

      <div class="form-vertical">
        <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password"><input type="hidden" name="utf8" value="✓">

          <label for="RecoverEmail" class="label--hidden">Email</label>
          <input type="email" value="" name="email" id="RecoverEmail" placeholder="Email" autocorrect="off" autocapitalize="off">

          <p>
            <input type="submit" class="btn" value="Submit">
          </p>

          <button type="button" id="HideRecoverPasswordLink" class="btn--link">Cancel</button>
        </form>
      </div>

    </div>

    
    
  </div>

</div>

      </main>

    
   
</div>
</main>
</div>
<hr>
</div>  
</body>
</html>
