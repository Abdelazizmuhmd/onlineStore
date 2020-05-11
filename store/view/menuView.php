<?php
require_once("../view/View.php");

class menuView extends View{
    
    function MenuOutput(){
    $str="";
    $categories = $this->model->getCategories();
    foreach($categories as $i=>$category){
    if ($i>0) {
    $subCategories = $category->getSubcategories();
          $str.='<li class="site-nav--has-submenu site-nav__item">';
          $str.='<button class="site-nav__link btn--link site-nav__expand" aria-expanded="false" aria-controls="Collapsible-'.$i.'">';
          $str.=''.$category->getName().'';
          $str.='<span class="site-nav__link__text" aria-hidden="true">+</span>';
          $str.='</button>';
          $str.='<ul id="Collapsible-'.$i.'" class="site-nav__submenu site-nav__submenu--collapsed" aria-hidden="true" style="display: none;">';
          if(is_iterable($subCategories)){
          foreach($subCategories as $k=>$subcategory){
          $str.='<li>';
          $str.='<a href="../public/products.php?action=readProducts&subcategoryId='.$subcategory->getID().'" class="site-nav__link">'.$subcategory->getName().'</a>';
          $str.='</li>';}};
          $str.='</ul></li>';
    
}
    }
    echo $str;
    }
    

    function productsOutput(){
     $str=""; 
     $products=$this->model->getCategories()[0]->getSubcategories()[0]->getProducts();
       foreach($products as $i=>$product){
       if ($i>0){
        
       $productDetails = $product->getProductDetails();
       foreach($productDetails as $k=>$productdetail){
       $imageArray=$productdetail->getImages();
     $str.='<div class="product grid__item medium-up--one-third small--one-half slide-up-animation animated" role="listitem">';
     $str.=' <div class="supports-js" style="max-width: 600px; margin: 0 auto;">';
     $str.=' <a href="../public/product.php?action=readOneProduct&productid='.$product->getId().'" class="product__image-wrapper " style="padding-top:100.0%;"  data-image-link>';   
     $str.='<img class="product__image "
                 alt="first image"
                 style="max-width: 600px; max-height: 600px;"
                 src="'.$imageArray[0].'"
                 data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                 data-aspectratio="1.0"
                 data-sizes="auto"
                 data-image>    
      </a>';
     $str.=' </div>';
     $str.=' <div class="product__title product__title--card text-center">';
     $str.=' <a href="">'.$product->getName().'</a>';
     $str.=' </div>'; 
     $str.='  <div class="product__prices text-center">';
     $str.=' <span class="product__price">';
     $str.=' <span class="visually-hidden">Regular price</span>'.(int)($product->getprofit()+$product->getcost()).' L.e</span>';
     $str.=' <span class="badge badge--sale"></span>';
     $str.=' </div>';
     $str.=' </div>';
       }}
        echo $str;
    }
    }

    
    function readOneProduct(){
        $str="";
        $product= $this->model->getCategories()[0]->getSubcategories()[0]->getProducts()[0];
        $productdetails = $product->getProductDetails();
        $hidden="";
        $display="";
        foreach($productdetails as $i=> $productdetail){
         if($i!=0){$hidden="hidden";$display='display:none';}
  
         $str.='<div id="ProductImageWrapper-13801390768162" class="product-single__featured-image-wrapper supports-js" value= '.$productdetail->getColor().'  style='.$display.'>';
         $str.=' <div class="product-single__photos" data-aspectratio="1.0"  style="padding-top: 100%; position: relative; overflow: '.$hidden.';">';
         $str.='<div style =""class="slideshow-container">';
         $c=1;
         foreach($productdetail->getImages() as $img){
         $str.='<div style="position:relative; bottom:500px" class="mySlides'.$productdetail->getColor().' fade">';
         $str.='<div class="numbertext">'.$c.' / '.count($productdetail->getImages()).'</div>';
         $str.=' <img  class="product-single__photo" src="'.$img.'" data-widths="[180, 360, 470, 600, 750, 940, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0">'; 
         $str.='<div class="text"></div>';
         $str.='</div>';
         $c++;
         }
         $str.='<a style = " margin-bottom:250px; height:50px" class="prev but'.$productdetail->getColor().'" onclick="plusSlides(-1)">&#10094;</a>
         <a  style = "margin-bottom:250px;height:50px"class="next but'.$productdetail->getColor().'" onclick="plusSlides(1)">&#10095;</a>
         </div>
         <br>';
         $str.='<div style="text-align:center">';
         for($i=1;$i<=count($productdetail->getImages());$i++)          
         $str.='<span class="dot col'.$productdetail->getColor().'" onclick="currentSlide('.$i.')"></span>';
         $str.='</div>';
         $str.='</div>';
         $str.='</div>';
         }
         $str.=' </div>
        
         <div class="grid__item medium-up--one-half">
             <div class="product-single__meta small--text-center">
             
                 <h1 id =  class="product-single__title" itemprop="name">'.$product->getName().'</h1>';
                 $display ='';
                 foreach($productdetails as $i=> $productdetail){
                  if($i!=0){$hidden="hidden";$display='display:none';}
                  
                $str.= '<div id = '.$productdetail->getColor().' style='.$display.'>

                
                     <p class="product-single__prices">
                         <span id="ProductPrice" class="product-single__price" value="30.0">'.$product->getCost().'.$</span>
                     </p>

                     <div class="product-single__policies rte">Tax included. Delevered to your Door.



                     </div>
                     <form method="post" action="/cart/add" id="product_form_4404356317218"
                         accept-charset="UTF-8" class="product-form" enctype="multipart/form-data">

                         <div class="selector-wrapper">
                            <label for="ProductSelect-product-template-option-0"> Color</label>
                             <select class="single-option-selector decider" data-option="option1"
                                 id="ProductSelect-product-template-option-0">';
                                 foreach($productdetails as $pro){
                                   if($productdetail->getColor() == $pro->getColor())
                                     $str.='<option selected = "selected" value="'.$pro->getColor().'">'.$pro->getColor().'</option>';
                                   else
                                     $str.='<option value="'.$pro->getColor().'">'.$pro->getColor().'</option>';
                                  }
                            $str.=' </select>
                         </div>
                         <div class="selector-wrapper">
                             <label for="ProductSelect-product-template-option-1">Size</label>
                             <select class="single-option-selector" data-option="option2"
                                 id="ProductSelect-product-template-option-1">';
                                 
                                  if($productdetail->getSmall() != 0)
                                    $str.='<option value="">Small</option>';
                                  if($productdetail->getMedium() != 0)
                                    $str.='<option value="">Meduim</option>';
                                  if($productdetail->getXl() != 0)
                                    $str.='<option value="">XL</option>';
                                  if($productdetail->getXxl() != 0)
                                    $str.='<option value="">XXL</option>';
                                  if($productdetail->getXxxl() != 0)
                                    $str.='<option value="">XXXL</option>';
                           $str.='</select></div>
                                 

                         <div class="product-single__quantity">
                             <label for="Quantity">Quantity</label>
                             <input type="number" id="Quantity" name="quantity" value="1" min="1">
                         </div>


                         <div class="product-single__cart-submit-wrapper  product-form--full">
                             <button type="submit" name="add" id="AddToCart"
                                 class="btn product-single__cart-submit btn--full  btn--secondary">
                                 <span id="AddToCartText">Add to Cart</span>
                             </button>




                         </div>

                     </form>

                 </div>';



                                }

                $str.= '<div class="product-single__description rte" itemprop="description">
                     '.$product->getName().'<br>
                     <br>
                     <br>
                     '.$product->getDescription().'
                     
                  ';
        
            
            
        
        
        
        echo $str;
    }
    

}

?>