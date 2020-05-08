<?php
require_once( "../model/user.php");
require_once( "../controller/loginController.php");


$model = new user();
$controller = new loginController($model);
if(isset($_GET['action'])==='false'){
    echo"bana says hi";
}

else if (isset($_GET['action']) && !empty($_GET['action'])){
$controller->{$_GET['action']}();
 header("location:orders.php");

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

  <link href="../../css/home.css" rel="stylesheet" type="text/css" media="all" /> 
  <script src="../../js/j.js" type="text/javascript"></script>
  <script src="../../js/s.js" type="text/javascript"></script>
  <script src="../../js/home.js" type="text/javascript"></script>
  <script src="../../js/j2.js" type="text/javascript"></script>
  <script src="../../js/login.js" type="text/javascript"></script>


    

</head>

    
    
    
<body >
  <div>
    <a href="" class="announcement-bar announcement-bar--link">
    <p class="announcement-bar__message site-wrapper">WELCOME TO  PAT</p>
    </a>
  


<div class="site-wrapper">
  <div class="top-bar grid">

      <div class="grid__item medium-up--two-fifths small--hide" style="margin-left: 140px;">
        <span class="customer-links small--hide">
            <a href="" id="customer_login_link">Log in</a>
            <span class="vertical-divider"></span>
            <a href="" id="customer_register_link">Sign up</a>
          
        </span>
      </div>
    

    <div class="grid__item  medium-up--two-fifths  small--one-half text-right">
      <a href="" class="site-header__cart">
        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart" viewBox="0 0 20 20"><path fill="#444" d="M18.936 5.564c-.144-.175-.35-.207-.55-.207h-.003L6.774 4.286c-.272 0-.417.089-.491.18-.079.096-.16.263-.094.585l2.016 5.705c.163.407.642.673 1.068.673h8.401c.433 0 .854-.285.941-.725l.484-4.571c.045-.221-.015-.388-.163-.567z"/><path fill="#444" d="M17.107 12.5H7.659L4.98 4.117l-.362-1.059c-.138-.401-.292-.559-.695-.559H.924c-.411 0-.748.303-.748.714s.337.714.748.714h2.413l3.002 9.48c.126.38.295.52.942.52h9.825c.411 0 .748-.303.748-.714s-.336-.714-.748-.714zM10.424 16.23a1.498 1.498 0 1 1-2.997 0 1.498 1.498 0 0 1 2.997 0zM16.853 16.23a1.498 1.498 0 1 1-2.997 0 1.498 1.498 0 0 1 2.997 0z"/></svg>
        <span class="small--hide">
          Cart
          (<span id="CartCount">0</span>)
        </span>
      </a>
    </div>
      
  </div>
  <hr class="small--hide hr--border">
    
  <header style="height:115px;">
          <div id="HeaderLogoWrapper" class="supports-js" style="height:115px;">
            <a href="" itemprop="url" style="padding-top:19.601328903654487%;  display: block;width:100px;height:100px;">
              <img id="HeaderLogo" 
                   src="../../images/logo.png"
                   data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                   data-aspectratio=""
                   data-sizes="auto"
                   alt="Pat"
                   itemprop="logo"
                   style="width:90px;height:90px;"
                   >
            </a>
          </div>
 
  </header>
</div>




</div>

    

  <div class="site-wrapper">

    <div class="grid">

      <div id="section-sidebar" class="section"><div data-section-id="sidebar" data-section-type="sidebar-section">
  <nav class="grid__item small--text-center medium-up--one-fifth" role="navigation">
    <hr class="hr--small medium-up--hide">
    <button id="ToggleMobileMenu" class="mobile-menu-icon medium-up--hide" aria-haspopup="true" aria-owns="SiteNav">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
      <span class="icon__fallback-text">Menu</span>
    </button>
    <div id="SiteNav" class="site-nav" role="menu">
      <ul class="list--nav">
        
<!-- repeat all that to add section-->
            <li class="site-nav--has-submenu site-nav__item">
              <button class="site-nav__link btn--link site-nav__collapse" aria-expanded="true" aria-controls="Collapsible-2">
                menu
                <span class="site-nav__link__text" aria-hidden="true">-</span>
              </button>
              <ul id="Collapsible-2" class="site-nav__submenu site-nav__submenu--expanded" aria-hidden="false">
                  <li class="site-nav--active">
                      <a href="tee" class="site-nav__link" aria-current="page">Tee</a>
                    </li>
                  
                
                  
                    <li >
                      <a href="sweater" class="site-nav__link">Sweater</a>
                    </li>
                  
                
                  
                    <li >
                      <a href="hoodie" class="site-nav__link">Hoodie</a>
                    </li>
                  
                
                  
                    <li >
                      <a href="bag" class="site-nav__link">Bag</a>
                    </li>
                  
                
              </ul>
                
            </li>
          

      </ul>
      <ul class="list--inline social-links">
        
          <li>
            <a href="" title=" Facebook">
              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 20 20"><path fill="#444" d="M18.05.811q.439 0 .744.305t.305.744v16.637q0 .439-.305.744t-.744.305h-4.732v-7.221h2.415l.342-2.854h-2.757v-1.83q0-.659.293-1t1.073-.342h1.488V3.762q-.976-.098-2.171-.098-1.634 0-2.635.964t-1 2.72V9.47H7.951v2.854h2.415v7.221H1.413q-.439 0-.744-.305t-.305-.744V1.859q0-.439.305-.744T1.413.81H18.05z"/></svg>
              <span class="icon__fallback-text">Facebook</span>
            </a>
          </li>
        
        
        
        
          <li>
            <a href="" title=" Instagram">
              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewBox="0 0 512 512"><path d="M256 49.5c67.3 0 75.2.3 101.8 1.5 24.6 1.1 37.9 5.2 46.8 8.7 11.8 4.6 20.2 10 29 18.8s14.3 17.2 18.8 29c3.4 8.9 7.6 22.2 8.7 46.8 1.2 26.6 1.5 34.5 1.5 101.8s-.3 75.2-1.5 101.8c-1.1 24.6-5.2 37.9-8.7 46.8-4.6 11.8-10 20.2-18.8 29s-17.2 14.3-29 18.8c-8.9 3.4-22.2 7.6-46.8 8.7-26.6 1.2-34.5 1.5-101.8 1.5s-75.2-.3-101.8-1.5c-24.6-1.1-37.9-5.2-46.8-8.7-11.8-4.6-20.2-10-29-18.8s-14.3-17.2-18.8-29c-3.4-8.9-7.6-22.2-8.7-46.8-1.2-26.6-1.5-34.5-1.5-101.8s.3-75.2 1.5-101.8c1.1-24.6 5.2-37.9 8.7-46.8 4.6-11.8 10-20.2 18.8-29s17.2-14.3 29-18.8c8.9-3.4 22.2-7.6 46.8-8.7 26.6-1.3 34.5-1.5 101.8-1.5m0-45.4c-68.4 0-77 .3-103.9 1.5C125.3 6.8 107 11.1 91 17.3c-16.6 6.4-30.6 15.1-44.6 29.1-14 14-22.6 28.1-29.1 44.6-6.2 16-10.5 34.3-11.7 61.2C4.4 179 4.1 187.6 4.1 256s.3 77 1.5 103.9c1.2 26.8 5.5 45.1 11.7 61.2 6.4 16.6 15.1 30.6 29.1 44.6 14 14 28.1 22.6 44.6 29.1 16 6.2 34.3 10.5 61.2 11.7 26.9 1.2 35.4 1.5 103.9 1.5s77-.3 103.9-1.5c26.8-1.2 45.1-5.5 61.2-11.7 16.6-6.4 30.6-15.1 44.6-29.1 14-14 22.6-28.1 29.1-44.6 6.2-16 10.5-34.3 11.7-61.2 1.2-26.9 1.5-35.4 1.5-103.9s-.3-77-1.5-103.9c-1.2-26.8-5.5-45.1-11.7-61.2-6.4-16.6-15.1-30.6-29.1-44.6-14-14-28.1-22.6-44.6-29.1-16-6.2-34.3-10.5-61.2-11.7-27-1.1-35.6-1.4-104-1.4z"/><path d="M256 126.6c-71.4 0-129.4 57.9-129.4 129.4s58 129.4 129.4 129.4 129.4-58 129.4-129.4-58-129.4-129.4-129.4zm0 213.4c-46.4 0-84-37.6-84-84s37.6-84 84-84 84 37.6 84 84-37.6 84-84 84z"/><circle cx="390.5" cy="121.5" r="30.2"/></svg>
              <span class="icon__fallback-text">Instagram</span>
            </a>
          </li>

      </ul>
    </div>
    <hr class="medium-up--hide hr--small ">
  </nav>
</div>

</div>
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
      <form method="post" action="orders.php?action=login" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">

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
