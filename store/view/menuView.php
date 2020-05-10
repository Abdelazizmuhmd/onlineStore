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
        foreach($productdetails as $i=> $productdetail){
         if($i!=0){$hidden="hidden";}
         $str.='<div id="ProductImageWrapper-13801390768162" class="product-single__featured-image-wrapper supports-js" >';
         $str.=' <div class="product-single__photos" data-aspectratio="1.0"  style="padding-top: 100%; position: relative; overflow: '.$hidden.';">';
         $str.=' <img  class="product-single__photo"  src="'.$productdetail->getImages()[0].'" data-widths="[180, 360, 470, 600, 750, 940, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="1.0">'; 
         $str.='</div>';
         $str.='</div>';
            
            
        }
        
        
        echo $str;
    }
    

}

?>