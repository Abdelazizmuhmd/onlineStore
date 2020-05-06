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
  <script src="js/j.js" type="text/javascript"></script>
  <script src="js/s.js" type="text/javascript"></script>
  <script src="js/home.js" type="text/javascript"></script>
  <script src="js/j2.js" type="text/javascript"></script>

    

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
            <a href="-tee.html" itemprop="url" style="padding-top:19.601328903654487%;  display: block;width:100px;height:100px;">
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
</div>




</div>

    

  <div class="site-wrapper">

    <div class="grid">

      <div id="shopify-section-sidebar" class="shopify-section"><div data-section-id="sidebar" data-section-type="sidebar-section">
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
                Menu
                <span class="site-nav__link__text" aria-hidden="true">-</span>
              </button>
              <ul id="Collapsible-2" class="site-nav__submenu site-nav__submenu--expanded" aria-hidden="false">
                  <li class="site-nav--active">
                      <a href="-tee" class="site-nav__link" aria-current="page">Tee</a>
                    </li>
                  
                
                  
                    <li >
                      <a href="-sweater" class="site-nav__link">Sweater</a>
                    </li>
                  
                
                  
                    <li >
                      <a href="-hoodie" class="site-nav__link">Hoodie</a>
                    </li>
                  
                
                  
                    <li >
                      <a href="-bag" class="site-nav__link">Bag</a>
                    </li>
                  
                
              </ul>
                
            </li>
          

      </ul>
      <ul class="list--inline social-links">
        
          <li>
            <a href="" title=" on Facebook">
              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 20 20"><path fill="#444" d="M18.05.811q.439 0 .744.305t.305.744v16.637q0 .439-.305.744t-.744.305h-4.732v-7.221h2.415l.342-2.854h-2.757v-1.83q0-.659.293-1t1.073-.342h1.488V3.762q-.976-.098-2.171-.098-1.634 0-2.635.964t-1 2.72V9.47H7.951v2.854h2.415v7.221H1.413q-.439 0-.744-.305t-.305-.744V1.859q0-.439.305-.744T1.413.81H18.05z"/></svg>
              <span class="icon__fallback-text">Facebook</span>
            </a>
          </li>
        
        
        
        
          <li>
            <a href="" title=" on Instagram">
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
        
        

  <style>
  

  @media screen and (min-width: 750px) { 
    #ProductImage-13801390768162 {
      max-width: 720px;
      max-height: 720.0px;
    }
    #ProductImageWrapper-13801390768162 {
      max-width: 720px;
    }
   } 

  
    
    @media screen and (max-width: 749px) {
      #ProductImage-13801390768162 {
        max-width: 720px;
        max-height: 720px;
      }
      #ProductImageWrapper-13801390768162 {
        max-width: 720px;
      }
    }
  
</style>
    <style>
  

  @media screen and (min-width: 750px) { 
    #ProductImage-13801391030306 {
      max-width: 720px;
      max-height: 720.0px;
    }
    #ProductImageWrapper-13801391030306 {
      max-width: 720px;
    }
   } 

  
    
    @media screen and (max-width: 749px) {
      #ProductImage-13801391030306 {
        max-width: 720px;
        max-height: 720px;
      }
      #ProductImageWrapper-13801391030306 {
        max-width: 720px;
      }
    }
  
</style>
  
<div class="grid product-single">

    <div class="grid__item medium-up--one-half">
      <?php
$view->readOneProduct();

      ?>
        
        


        <ul class="product-single__thumbnails grid grid--uniform" id="ProductThumbs">
            
            <li class="grid__item small--one-third medium-up--one-third">
                <!--click here to put the img up -->
              <a href="images/logo.png" class="product-single__thumbnail" >
                <img src="../images/logo.png" alt="Hmm">
              </a>
            </li>
     
          

        </ul>
      

      
    </div>

    <div class="grid__item medium-up--one-half">
      <div class="product-single__meta small--text-center">
        <h1 class="product-single__title" itemprop="name">Hmm</h1>

        

        <div >


          <p class="product-single__prices">
            <span id="ProductPrice" class="product-single__price" value="30.0">€30,00</span>
          </p>
            
            <div class="product-single__policies rte">Tax included. Delevered to your Door. 
                
                
                
</div>
            <form method="post" action="/cart/add" id="product_form_4404356317218" accept-charset="UTF-8" class="product-form" enctype="multipart/form-data">
             
            <div class="selector-wrapper">
                <label for="ProductSelect-product-template-option-0"> Color</label>
                <select class="single-option-selector" data-option="option1" id="ProductSelect-product-template-option-0">
                    <option value="White">White</option>
                    <option value="Black">Black</option>
                    <option value="Dark Heather">Dark Heather</option>
                    <option value="Navy">Navy</option>
                    <option value="Sport Grey">Sport Grey</option>
                    <option value="Indigo Blue">Indigo Blue</option>
                    <option value="Maroon">Maroon</option>
                    <option value="Light Blue">Light Blue</option>
                    <option value="Light Pink">Light Pink</option>
                    <option value="Red">Red</option>
                </select>
                </div>
                <div class="selector-wrapper">
                    <label for="ProductSelect-product-template-option-1">Size</label>
                    <select class="single-option-selector" data-option="option2" id="ProductSelect-product-template-option-1">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="2XL">2XL</option>
                        <option value="3XL">3XL</option>
                        <option value="4XL">4XL</option>
                        <option value="5XL">5XL</option>
                    </select></div>
                
            
              <div class="product-single__quantity">
                <label for="Quantity">Quantity</label>
                <input type="number" id="Quantity" name="quantity" value="1" min="1">
              </div>
            

          <div class="product-single__cart-submit-wrapper  product-form--full">
              <button type="submit" name="add" id="AddToCart" class="btn product-single__cart-submit btn--full  btn--secondary" >
                <span id="AddToCartText">Add to Cart</span>
              </button>
              
              
             
              
            </div>
             
          </form>

        </div>

        

  
    
      <div class="product-single__description rte" itemprop="description">
        "Hmm" -Geralt of Rivia<br>
<br>
<br>
Unisex Sweatshirt<br>
<br>
A sturdy and warm sweatshirt bound to keep you warm in the colder months. A pre-shrunk, classic fit sweater that's made with air-jet spun yarn for a soft feel and reduced pilling.<br>
<br>
• 50% cotton, 50% polyester<br>
• Pre-shrunk<br>
• Classic fit with no center crease<br>
• 1x1 athletic rib knit collar with spandex<br>
• Air-jet spun yarn with a soft feel and reduced pilling<br>
• Double-needle stitched collar, shoulders, armholes, cuffs, and hem<p><strong class="size-guide-title">Size guide</strong></p><div class="table-responsive dynamic" data-unit-system="metric"><div class="rte__table-wrapper"><table cellpadding="5"><tbody>
<tr>
<td>&nbsp;</td>
<td><strong>S</strong></td>
<td><strong>M</strong></td>
<td><strong>L</strong></td>
<td><strong>XL</strong></td>
<td><strong>2XL</strong></td>
<td><strong>3XL</strong></td>
<td><strong>4XL</strong></td>
<td><strong>5XL</strong></td>
</tr>
<tr>
<td><strong>Length (cm)</strong></td>
<td>69</td>
<td>71</td>
<td>74</td>
<td>76</td>
<td>79</td>
<td>81</td>
<td>84</td>
<td>86</td>
</tr>
<tr>
<td><strong>Width (cm)</strong></td>
<td>51</td>
<td>56</td>
<td>61</td>
<td>66</td>
<td>71</td>
<td>76</td>
<td>81</td>
<td>86</td>
</tr>
</tbody></table></div></div>
      </div>
    
  


        

        
          <!-- /snippets/social-sharing.liquid -->

        
      </div>
    </div>

 
</div>
      </main> 
</div>
<hr>
</div>  
</body>
</html>
