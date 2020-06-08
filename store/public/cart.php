<?php
require_once("../model/menu.php");
require_once("../controller/menuController.php");
require_once("../View/menuView.php");
$model = new menu();
$controller= new menuController($model);
$controller->getAllCategoriesDetails();
$view= new menuView($model,$controller);
if(isset($_COOKIE['cook'])){  
$return=$_COOKIE['cook'];
$arr=json_decode($return, true);  
}
     
if(isset($_POST['checkout'])){
  header("location:checkout.php");
}
 if(isset($_GET["action"]))  
 { 
 if($_GET["action"] == "delete")  
      {  
          foreach($arr as $key1 => $values){  
                $id=$_GET['id'];
                $id=intval($id);
                $compare_id=$values['id'];
                if($compare_id == $id){ 
                        array_splice($arr,$key1,1);
                        $expire = time() + 60*60*24*30;                    
                    	$ar=json_encode($arr);
	                    setcookie('cook',$ar,$expire,'/');
                        header("location:../public/cart.php");
                       
                }  
           }  
      }  
    }
?>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>
Pat  
    </title>

  <link href="../css/home.css" rel="stylesheet" type="text/css" media="all" /> 

<script src="../js/j.js" type="text/javascript"></script>
 <script src="../js/home.js" type="text/javascript"></script>
  <script src="../js/j2.js" type="text/javascript"></script>
  <script src="../js/s.js" type="text/javascript"></script>
    
<style>
        @media only screen and (max-width: 600px) {
            iframe{
                height:400px;
            }
}
    </style>
</head>

    
    
    
<body >
 
  <center>
 <iframe  src="../public/header.php" height="110" width="100%" style="border:none;"></iframe>
</center>
    <div>

  
    </div>

<div class="site-wrapper">
  <div class="top-bar grid">
            
            
              <img  src="../images/logo.png" style="margin-bottom:30px; margin-left:60px; width:120px;height:120px;" >
            
            <?php
        include("menu.php");
?>

<main class="main-content grid__item medium-up--four-fifths" id="MainContent" role="main">
        
          <hr class="hr--border-top small--hide">
        
        
        <!-- /templates/cart.liquid -->

<div class="grid">
  <div class="grid__item">
    
      <h1 class="h2 visually-hidden">Shopping Cart</h1>

      <form method="post" action="checkout.php" novalidate="" class="cart pf-form-processed">
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7ZCRLW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
          <h1>Cart</h1>

<?php
if(isset($_COOKIE['cook'])){
$return=$_COOKIE['cook'];
$arr=json_decode($return, true);
$sub_total=0;
   
foreach($arr as $key1 => $values)
{ 
$total=$values['price']*$values['quantity'];
$sub_total+=$values['price']*$values['quantity'];



echo "<table class='cart-table responsive-table table--no-border'>
          <thead class='cart__row cart__header-labels small--hide'>

            <tr><th class='text-left cart__table-cell--image'></th>
            <th class='text-center cart__table-cell--meta'></th>
            <th class='text-right cart__table-cell--price'>Price</th>
            <th class='text-right cart__table-cell--quantity'>Quantity</th>
            <th class='text-right cart__table-cell--line-price'>Total</th>
          </tr></thead>
          <tbody>
            
      <tr class='cart__row responsive-table__row'>
      <td class='cart__table-cell--image small--text-center'>
                  


                    <div id='CartImageWrapper--13760170131490' class='cart__image-wrapper supports-js' style='max-width:165px; max-height:220px; '>
                      <a class='cart__image-container' href='/collections/all/products/im-fine-phr-2?variant=31415765139490' style='padding-top:100.0%;max-width:165px; max-height:220px; '>
                        <img id='CartImage--13760170131490' style='max-width:165px; max-height:220px; ' class='cart__image' src='$values[image_url]"."large.jpeg'  itemprop='image'>
                      </a>
                    </div>
                </td>
                <td class='cart__table-cell--meta text-center large-up--text-left'>
                  <p>
                    <a href='/products/im-fine-phr-2?variant=31415765139490'>Pat 2020</a>
                      <br><small>$values[color] / $values[size]</small>
                    </p><div class='hulkapps-reminder'></div>
                  <p></p>

                  <p class='txt--minor'>

                    <a href='cart.php?action=delete&id=$values[id];' class='cart__remove'style='color:red;' >Remove</a>
                  </p>
                </td>
                <td class='cart__table-cell--price medium-up--text-right' data-label='Price'><span class='hulkapps-cart-item-price' > $values[price] L.E </span>
</td>
                <td data-label='Quantity' class='medium-up--text-right cart__table-cell--quantity'>
                  <span class='hulkapps-cart-item-line-price' > $values[quantity] </span></td>


                <td data-label='Total' class='text-right cart__table-cell--line-price'><span class='hulkapps-cart-item-line-price'   >$total L.E</span></td>
              </tr>
              <hr style='margin-bottom:30px;'>             
              

          </tbody>
        </table>";

        }
}
?>
        <footer class="cart__footer">
          <div class="grid" style="margin-top:100px;">
            <div class="grid__item large-up--one-half">
              <label for="CartSpecialInstructions" class="label--block">Special instructions for seller</label>
              <textarea name="note" id="CartSpecialInstructions" class="input--block cart__note"></textarea>
            </div>
            <div class="grid__item text-center large-up--one-half large-up--text-right"><p>
                <span class="cart__subtotal-title h3">Subtotal</span>
                <span class="cart__subtotal h3"><span class="hulkapps-cart-original-total"><?php 
if(isset($_COOKIE['cook'])){  
 echo $sub_total; echo " L.E";

}else{
  echo "0.0 L.E";
}
  ?></span></span>
              </p><p class="cart__policies txt--emphasis rte">Tax included. Delivered to your door</p>
              <p>
              
                <a class="btn btn--secondary" href="../public/products.php">Continue shopping</a>
              </p>
              <p>

                  <input type="submit" name="checkout" class="btn" value="Check Out">
              </p>
            </div>
          </div>
        </footer>
      </form>
    
  </div>
</div>

      </main>
</div>
<hr>
</div>  
</body>
</html>
