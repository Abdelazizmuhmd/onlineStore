<html>
<head>
   <link href="../css/home.css" rel="stylesheet" type="text/css" media="all" /> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
    </head>

 
<body>
      <a href="" class="announcement-bar announcement-bar--link" style="text-decoration: none;">
    <p class="announcement-bar__message site-wrapper">WELCOME TO  PAT</p>
    </a>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand" style="color: ;">Bat Store</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <?php
            session_start();
      
      if(!isset($_SESSION['usertype'])||$_SESSION['usertype']=="guest"){
?>
            <a href="#" onclick="movetologin()" class="nav-item nav-link active" style="color: ;">Login</a>
            <a href="#" onclick="movetosignup()" class="nav-item nav-link" style="color: ;">Signup</a>
            <?php
         }

               else if($_SESSION['usertype']=="client"){

         ?>

            <a class="nav-item nav-link active">Welcome 
        <?php   echo $_SESSION['name']; ?></a>
            <a href="#" onclick="movetoHome()" class="nav-item nav-link active" style="color: ;">Home</a>
            <a href="#" onclick="movetoorders()" class="nav-item nav-link" style="color: ;">My Orders</a>
            <a href="#" onclick="logout()" class="nav-item nav-link active" style="color: ;">Logout</a>
<?php }







                else if($_SESSION['usertype']=="admin"){ ?>
            <a href="#" onclick="movetoHome()" class="nav-item nav-link active" style="color: ;">Home</a>
            <a href="#" onclick="movetoorders()" class="nav-item nav-link" style="color: ;">Client Orders</a>
            <a href="#" onclick="movetoadminproducts()" class="nav-item nav-link active" style="color: ;">Admin Panel</a>
            <a href="#" onclick="movetoreport()" class="nav-item nav-link active" style="color: ;">Generate Report</a>
            <a href="#" onclick="system()" class="nav-item nav-link" style="color: ;">System Logs</a>
            <a href="#" onclick="logout()" class="nav-item nav-link active" style="color: ;">Logout</a>
<?php } ?>

        </div>
        <div class="navbar-nav ml-auto">
         


         
      <a href="#" style="text-decoration: none;" onclick="movetocart()"class="nav-item nav-link" style="color: white;">
        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart" viewBox="0 0 20 20"><path fill="#444" d="M18.936 5.564c-.144-.175-.35-.207-.55-.207h-.003L6.774 4.286c-.272 0-.417.089-.491.18-.079.096-.16.263-.094.585l2.016 5.705c.163.407.642.673 1.068.673h8.401c.433 0 .854-.285.941-.725l.484-4.571c.045-.221-.015-.388-.163-.567z"/><path fill="#444" d="M17.107 12.5H7.659L4.98 4.117l-.362-1.059c-.138-.401-.292-.559-.695-.559H.924c-.411 0-.748.303-.748.714s.337.714.748.714h2.413l3.002 9.48c.126.38.295.52.942.52h9.825c.411 0 .748-.303.748-.714s-.336-.714-.748-.714zM10.424 16.23a1.498 1.498 0 1 1-2.997 0 1.498 1.498 0 0 1 2.997 0zM16.853 16.23a1.498 1.498 0 1 1-2.997 0 1.498 1.498 0 0 1 2.997 0z"/></svg>
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
