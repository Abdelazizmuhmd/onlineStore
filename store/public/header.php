<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
    </head>

 
<body>
    
<nav class="navbar navbar-expand-md navbar-light bg-success">
    <a href="#" class="navbar-brand" style="color: white;">Bat Store</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <?php
            if (session_status() == PHP_SESSION_NONE) {

            session_start();
            }
      
      if(!isset($_SESSION['usertype'])||$_SESSION['usertype']=="guest"){
?>
            <a href="#" onclick="movetologin()" class="nav-item nav-link active" style="color: white;">Login</a>
            <a href="#" onclick="movetosignup()" class="nav-item nav-link" style="color: white;">Signup</a>
            <?php
         }

               else if($_SESSION['usertype']=="client"){

         ?>

            <a class="nav-item nav-link active">Welcome 
        <?php   echo $_SESSION['name']; ?></a>
            <a href="#" onclick="movetoHome()" class="nav-item nav-link active" style="color: white;">Home</a>
            <a href="#" onclick="movetoorders()" class="nav-item nav-link" style="color: white;">My Orders</a>
            <a href="#" onclick="logout()" class="nav-item nav-link active" style="color: white;">Logout</a>
<?php }







                else if($_SESSION['usertype']=="admin"){ ?>
            <a href="#" onclick="movetoHome()" class="nav-item nav-link active" style="color: white;">Home</a>
            <a href="#" onclick="movetoorders()" class="nav-item nav-link" style="color: white;">Client Orders</a>
            <a href="#" onclick="movetoadminproducts()" class="nav-item nav-link active" style="color: white;">Admin Panel</a>
            <a href="#" onclick="movetoreport()" class="nav-item nav-link active" style="color: white;">Generate Report</a>
            <a href="#" onclick="system()" class="nav-item nav-link" style="color: white;">System Logs</a>
            <a href="#" onclick="logout()" class="nav-item nav-link active" style="color: white;">Logout</a>
<?php } ?>

        </div>
        <div class="navbar-nav ml-auto">
         

      <a href="#" style="text-decoration: none;  " onclick="movetocart()"class="nav-item nav-link fa fa-shopping-cart"  >
       
          Cart
    (<span id="CartCount"><?php if(isset($_COOKIE['cook'])){
    
$a=$_COOKIE['cook'];
$arr=json_decode($a, true);  
    echo(count($arr));    
    
}else{
    echo 0;
}  ?></span>)
      </a>
        </div>
    </div>
</nav>
</body>
<script>
           
            function movetoreport(){
                window.top.location.href = "http://localhost/onlineStore/store/public/report.php"; 
            }
            function logout(){
                window.top.location.href = "http://localhost/onlineStore/store/public/logout.php"; 
                
            }
             function movetoHome(){
                window.top.location.href = "http://localhost/onlineStore/store/public/products.php"; 

            }
            function movetocart(){
                window.top.location.href = "http://localhost/onlineStore/store/public/cart.php"; 

            }
             function movetoadminproducts(){
                window.top.location.href = "http://localhost/onlineStore/store/public/adminproducts.php"; 

            }
            function movetoorders(){
                window.top.location.href = "http://localhost/onlineStore/store/public/orders.php"; 

            }
            function movetologin(){
                window.top.location.href = "http://localhost/onlineStore/store/public/login.php"; 

            } function movetosignup(){
                window.top.location.href = "http://localhost/onlineStore/store/public/signup.php"; 

            }
             function system(){
                 window.top.location.href = "http://localhost/onlineStore/store/other/errormasseges.php"; 
            }
        </script>

</html>
