<?php

require_once("../model/menu.php");
require_once("../controller/menuController.php");
require_once("../View/menuView.php");

$model = new menu();
$controller= new menuController($model);
$controller->readProduct();
$controller->getAllCategoriesDetails();
$view= new menuView($model,$controller);

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

    

</head>

    
    
<body >
  <div>
    <a href="F-tee.html" class="announcement-bar announcement-bar--link">
    <p class="announcement-bar__message site-wrapper">WELCOME TO  PAT</p>
    </a>
  

<?php
include("header.html");
?>
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
                   src="images/logo.png"
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




    

  <div class="site-wrapper">

    <div class="grid">
<?php
        include("menu.php");
?>
        

      <main class="main-content grid__item medium-up--four-fifths" id="MainContent" role="main">
        
          <hr class="hr--border-top small--hide">
        
        
        <!-- /templates/collection.liquid -->


<div id="section-collection-template" class="section"><!-- /templates/collection.liquid -->


<div data-section-id="collection-template" data-section-type="collection-template" data-sort-enabled="true" data-tags-enabled="true">
  
  <div class="grid grid--uniform" role="list">
      <?php
      $view->productsOutPut();
?>
<!--

<div class="product grid__item medium-up--one-third small--one-half slide-up-animation animated" role="listitem">
  
    <div class="supports-js" style="max-width: 600px; margin: 0 auto;">
      <a href="" class="product__image-wrapper " style="padding-top:100.0%;" title="F*ck" data-image-link>
          
        <img class="product__image "
             alt="first image"
             style="max-width: 600px; max-height: 600px;"
             src="images/d.jpg"
             data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
             data-aspectratio="1.0"
             data-sizes="auto"
             data-image>
          
      </a>
    </div>
  


  <div class="product__title product__title--card text-center">
    <a href="">sport t-shirt</a>
  </div>

  

  <div class="product__prices text-center">
    

      <span class="product__price">
        
          <span class="visually-hidden">Regular price</span>
          €15,00
        
      </span>

          <span class="badge badge--sale"><span>UP TO 50%</span></span>

  </div>
</div>
      -->
      




   
</div>
</div>
</div>
</main>
</div>
<hr>
      
</div> 

</body>

</html>
