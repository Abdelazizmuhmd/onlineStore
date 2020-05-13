<?php
require_once("../model/user.php");
require_once("../controller/checkoutController.php");
require_once("../view/checkout.php");
session_start();

$model = new user();

$controller = new checkOutController($model);

if(isset($_SESSION['id'])){
    $controller->getuser($_SESSION['id']);
}

$view=new viewCheckOut($model,$controller);
if (isset($_GET['action']) && !empty($_GET['action'])) {
    
    if(isset($_SESSION['id'])){
        
      $controller->makeorderclient();
        
    }else{
        
        $controller->makeorderguest();
    }
    header("location:../public/recepit.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js desktop page--no-banner page--logo-main page--show page--show card-fields">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, user-scalable=0">

    <title>    Information - Checkout</title>



  <link rel="stylesheet" media="all" href="../css/checkoutcss.css" />


  

<script src="js/checkout.js"></script>
<script src="../js/check_Out.js" type="text/javascript" ></script> 

    </head>
<body>


<!--look later-->
    <aside role="complementary">
  <button class="order-summary-toggle order-summary-toggle--show shown-if-js" data-trekkie-id="order_summary_toggle" aria-expanded="false" aria-controls="order-summary" data-drawer-toggle="[data-order-summary]">
    <span class="wrap">
      <span class="order-summary-toggle__inner">
        <span class="order-summary-toggle__icon-wrapper">
          <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__icon">
            <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z" />
          </svg>
        </span>
        <span class="order-summary-toggle__text order-summary-toggle__text--show">
          <span>Show order summary</span>
          <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="#000"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z" /></svg>
        </span>
        <span class="order-summary-toggle__text order-summary-toggle__text--hide">
          <span>Hide order summary</span>
          <svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="#000"><path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z" /></svg>
        </span>
        <span class="order-summary-toggle__total-recap total-recap" data-order-summary-section="toggle-total-recap">
          <span class="total-recap__final-price" data-checkout-payment-due-target="3000">€30,00</span>
        </span>
      </span>
    </span>
  </button>
</aside>



    <div class="content" data-content>
      <div class="wrap">
        <div class="main">
          <header class="main__header" role="banner">


<h1 class="visually-hidden">
  Information
</h1>


                  <nav aria-label="Breadcrumb">
    <ul class="breadcrumb ">

          <li class="breadcrumb__item breadcrumb__item--current" aria-current="step">
          <span class="breadcrumb__text">Information</span>
            <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false"> <use xlink:href="#chevron-right" /> </svg>
        </li>
          <li class="breadcrumb__item breadcrumb__item--blank">
          <span class="breadcrumb__text">Shipping</span>
            <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false"> <use xlink:href="#chevron-right" /> </svg>
        </li>
          <li class="breadcrumb__item breadcrumb__item--blank">
          <span class="breadcrumb__text">Payment</span>
            <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false"> <use xlink:href="#chevron-right" /> </svg>
        </li>
          <li class="breadcrumb__item breadcrumb__item--blank">
          <span class="breadcrumb__text">Review</span>
        </li>
    </ul>
  </nav>



                <div class="shown-if-js" data-alternative-payments>
</div>



          </header>
          <main class="main__content" role="main">
            

<div class="step" data-step="contact_information" data-last-step="false">
  


  <?php
$view->userdetails();
  ?>
</div>


          </main>
            
            
    
            

        </div>
          
          
        <aside class="sidebar" role="complementary">
          <div class="sidebar__header">
              


<h1 class="visually-hidden">
  Information
</h1>


          </div>
          <div class="sidebar__content">
                <div id="order-summary" class="order-summary order-summary--is-collapsed" data-order-summary>
  <h2 class="visually-hidden-if-js">Order summary</h2>

  <div class="order-summary__sections">
    <div class="order-summary__section order-summary__section--product-list">
  <div class="order-summary__section__content">

      <?php
if(isset($_COOKIE['cook'])){
$return=$_COOKIE['cook'];
$arr=json_decode($return, true);
$sub_total=0;
foreach($arr as $key1 => $values)
{
    
    
    
    
    
  //echo $key1.' : '.$values.'<br>';
$total=$values['price']*$values['quantity'];
$sub_total+=$values['price']*$values['quantity'];

          echo"
    <table class='product-table'>
      <caption class='visually-hidden'>Shopping cart</caption>
      <thead class='product-table__header'>
        <tr>
          <th scope='col'><span class='visually-hidden'>Product image</span></th>
          <th scope='col'><span class='visually-hidden'>Description</span></th>
          <th scope='col'><span class='visually-hidden'>Quantity</span></th>
          <th scope='col'><span class='visually-hidden'>Price</span></th>
        </tr>
      </thead>

<tbody data-order-summary-section='line-items'>
      
          <tr class='product' data-product-id='4396731957282' data-variant-id='31415765139490' data-product-type='Sweater' data-customer-ready-visible>
          <td class='product__image'>
            <div class='product-thumbnail'>
  <div class='product-thumbnail__wrapper'>
    <img alt=''class='product-thumbnail__image' src='$values[image_url]' />
  </div>
    <span class='product-thumbnail__quantity' aria-hidden='true'>$values[quantity]</span>
</div>

          </td>
          <th class='product__description' scope='row'>
            <span class='product__description__name order-summary__emphasis'>$values[name] </span>
            <span class='product__description__variant order-summary__small-text'>$values[color] / $values[size]</span>


          </th>
          <td class='product__quantity visually-hidden'>
            1
          </td>
          <td class='product__price'>
            <span class='order-summary__emphasis'>$total L.E</span>
          </td>
        </tr>

      </tbody>
    </table>";
}
}
     ?>


    <div class="order-summary__scroll-indicator" aria-hidden="true" tabindex="-1">
      Scroll for more items
      <svg aria-hidden="true" focusable="false" class="icon-svg icon-svg--size-12"> <use xlink:href="#down-arrow" /> </svg>
    </div>
  </div>
</div>


      <div class="order-summary__section order-summary__section--discount" data-reduction-form="update">
        <h3 class="visually-hidden">Discount</h3>
        <form class="edit_checkout" action="" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="" />
  <input type="hidden" name="step" value="contact_information" />
</form>
<form class="edit_checkout" action="" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="" />
  <input type="hidden" name="step" value="contact_information" />
  <div class="fieldset">
    <div class="field ">
      <label class="field__label" for="checkout_reduction_code">Discount code</label>
      <div class="field__input-btn-wrapper">
        <div class="field__input-wrapper">
          <input placeholder="Discount code" class="field__input" id="checkout_reduction_code" data-discount-field="true" data-trekkie-id="reduction_code_field" autocomplete="off" aria-required="true" size="30" type="text" name="checkout[reduction_code]" maxlength='20'  />
        </div>

        <button name="button" type="submit" class="field__input-btn btn btn--disabled" data-trekkie-id="apply_discount_button" aria-busy="false">
              <span class="btn__content visually-hidden-on-mobile" aria-hidden="true">
                Apply
              </span>
              <span class="visually-hidden">
                Apply Discount Code
              </span>
              <svg class="icon-svg icon-svg--size-16 btn__icon shown-on-mobile" aria-hidden="true" focusable="false"> <use xlink:href="#arrow" /> </svg>
              <svg class="icon-svg icon-svg--size-18 btn__spinner icon-svg--spinner-button" aria-hidden="true" focusable="false"> <use xlink:href="#spinner-button" /> </svg>
</button>      </div>

    </div>
  </div>
</form>

      </div>

    <div class="order-summary__section order-summary__section--total-lines" data-order-summary-section="payment-lines">
      <table class="total-line-table">
  <caption class="visually-hidden">Cost summary</caption>
  <thead>
    <tr>
      <th scope="col"><span class="visually-hidden">Description</span></th>
      <th scope="col"><span class="visually-hidden">Price</span></th>
    </tr>
  </thead>
    <tbody class="total-line-table__tbody">
      <tr class="total-line total-line--subtotal">
  <th class="total-line__name" scope="row">Subtotal</th>
  <td class="total-line__price">
    <span class="order-summary__emphasis" data-checkout-subtotal-price-target="3000">
    
    <?php 

if(isset($_COOKIE['cook'])){  
 echo $sub_total; echo " L.E";

}else{
  echo "0.0 L.E";
}
  ?>
    </span>
  </td>
</tr>


        <tr class="total-line total-line--shipping">
  <th class="total-line__name" scope="row">
    <span>
      Shipping
    </span>
      <a aria-haspopup="dialog" data-modal="policy-shipping-policy" data-title-text="Shipping policy" data-close-text="Close" data-iframe="true" href="">
            <span class="visually-hidden">Shipping costs</span>
            <svg class="icon-svg icon-svg--color-adaptive-lighter icon-svg--size-14 icon-svg--inline-after icon-svg--clickable" role="presentation" aria-hidden="true" focusable="false"> <use xlink:href="#question" /> </svg>
</a>  </th>
  <td class="total-line__price">
    <span class="order-summary__small-text" data-checkout-total-shipping-target="0">
      Calculated at next step
    </span>
  </td>
</tr>



      

    </tbody>
  <tfoot class="total-line-table__footer">
    <tr class="total-line">
      <th class="total-line__name payment-due-label" scope="row">
        <span class="payment-due-label__total">Total</span>
          <span class="payment-due-label__taxes order-summary__small-text hidden" data-checkout-taxes>
            Including <span data-checkout-total-taxes-target="0">€0,00</span> in taxes
          </span>
      </th>
      <td class="total-line__price payment-due">
        <span class="payment-due__price" data-checkout-payment-due-target="3000">
       <?php   

if(isset($_COOKIE['cook'])){  
  
 echo $sub_total; echo " L.E";

}else{
  echo "0.0 L.E";
}
  ?>
        </span>
      </td>
    </tr>
  </tfoot>
</table>

    </div>
  </div>
</div>

<div class="visually-hidden" data-order-summary-section="accessibility-live-region">
  <div aria-live="polite" aria-atomic="true" role="status">
    Updated total price:
    <span data-checkout-payment-due-target="3000">
      €30,00
    </span>
  </div>
</div>



          </div>
        </aside>
      </div>
      </div>
    </body>
    </html>
