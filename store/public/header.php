



<html>
<head>
    
     <link href="../css/home.css" rel="stylesheet" type="text/css" media="all" /> 

    
    </head>
<body>
      <a href="" class="announcement-bar announcement-bar--link">
    <p class="announcement-bar__message site-wrapper">WELCOME TO  PAT</p>
    </a>
    <div class="site-wrapper">
        

  <div class="top-bar grid">

<?php
            session_start();
      
      if(!isset($_SESSION['usertype'])||$_SESSION['usertype']=="guest"){
?>   
      <div class="grid__item medium-up--two-fifths small--hide" style="margin-left: 140px;">

        <span class="customer-links small--hide">

            
        <button onclick="movetologin()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_login_link">
                Log in</a></button>
            <span class="vertical-divider"></span>
            <button onclick="movetosignup()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_register_link">Sign up</a>
          </button>
        </span>
      </div>
      <?php
         }
      else if($_SESSION['usertype']=="client"){
      ?>
      <div class="grid__item medium-up--two-fifths small--hide" style="margin-left: 140px;">

        <span class="customer-links small--hide">
            
      <span style=" font-size:20px;color:#44BB09;font-weight:bold" >Welcome 
        <?php   echo $_SESSION['name']; ?>
            </span>
            
            <span class="vertical-divider"></span>
            <button onclick="movetoHome()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_login_link">
                Home</a></button>
                        <span class="vertical-divider"></span>

            <button onclick="movetoorders()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_register_link">myOrders</a>
          </button>

            <button onclick="logout()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_login_link">
                logout</a></button>
         
            
            
        </span>
      </div>
      
      <?php }else if($_SESSION['usertype']=="admin"){ ?>
      
     <div class="grid__item medium-up--two-fifths small--hide" style="margin-left: 140px;">

        <span class="customer-links small--hide">
            
 <button onclick="movetoHome()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_login_link">
                Home</a></button>

        <button onclick="movetoorders()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_login_link">
                Client Orders</a></button>
            <button onclick="movetoadminproducts()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_register_link">AdminPanel</a>
          </button>
        </span>
            <button onclick="movetoreport()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_register_link">Generate Report</a>
          </button>  
      

         
          <button onclick="logout()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_login_link">
                logout</a></button>
         
      </div>
      
      <?php }
                       ?>
      
      
      <?php 
            if(isset($_SESSION['usertype'])){
            if($_SESSION['usertype']=="admin"){ 
                
               ?>
      
 <div class="grid__item  medium-up--two-fifths  small--one-half text-right">
        <button onclick="system()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
            <a href="" id="customer_login_link">
                System Logs</a></button>
   
          <?php  }}
         ?>    <button onclick="movetocart()" style=" background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;">
         
      <a onclick="" class="site-header__cart">
        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart" viewBox="0 0 20 20"><path fill="#444" d="M18.936 5.564c-.144-.175-.35-.207-.55-.207h-.003L6.774 4.286c-.272 0-.417.089-.491.18-.079.096-.16.263-.094.585l2.016 5.705c.163.407.642.673 1.068.673h8.401c.433 0 .854-.285.941-.725l.484-4.571c.045-.221-.015-.388-.163-.567z"/><path fill="#444" d="M17.107 12.5H7.659L4.98 4.117l-.362-1.059c-.138-.401-.292-.559-.695-.559H.924c-.411 0-.748.303-.748.714s.337.714.748.714h2.413l3.002 9.48c.126.38.295.52.942.52h9.825c.411 0 .748-.303.748-.714s-.336-.714-.748-.714zM10.424 16.23a1.498 1.498 0 1 1-2.997 0 1.498 1.498 0 0 1 2.997 0zM16.853 16.23a1.498 1.498 0 1 1-2.997 0 1.498 1.498 0 0 1 2.997 0z"/></svg>
        <span class="small--hide">
          Cart
    (<span id="CartCount"><?php if(isset($_COOKIE['cook'])){
    
$a=$_COOKIE['cook'];
$arr=json_decode($a, true);  
    echo(count($arr));    
    
}else{
    echo 0;
}  ?></span>)
        </span>
      </a>
         </button>
    </div>
     </div>
       

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
        
      <hr class="small--hide hr--border">
    </div>
</body>

</html>
