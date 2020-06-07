<?php

require_once("../model/menu.php");
require_once("../controller/menuController.php");
require_once("../View/menuView.php");

$model = new menu();

$controller= new menuController($model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    if(method_exists($controller,$_GET['action'])){
    $controller->{$_GET['action']}();
    }
}



$controller->getAllCategoriesDetails();


$view= new menuView($model,$controller);

?>

<!doctype html>
<html >
<head>
  <meta charset="utf-8">
      <link href="../css/home.css" rel="stylesheet" type="text/css" media="all" /> 
      <link href="../css/products.css" rel="stylesheet" type="text/css" media="all" /> 

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>
Pat  
    </title>

  <script src="../js/j.js" type="text/javascript"></script>
  <script src="../js/s.js" type="text/javascript"></script>
  <script src="../js/home.js" type="text/javascript"></script>
  <script src="../js/j2.js" type="text/javascript"></script>



</head>

    
    
<body >
  <div>
 
      <!--header here  -->
<center>
 <iframe  src="../public/header.php" height="100" width="100%" style="border:none;"></iframe>
</center>


    

  <div class="site-wrapper">

    <div class="grid">
    <img  src="../images/logo.png" style="margin-bottom:30px; margin-left:60px; width:120px;height:120px;" >

<?php

        include("menu.php");
?>
        

      <main class="main-content grid__item medium-up--four-fifths" id="MainContent" role="main">
        
          <hr class="hr--border-top small--hide">
        
        
        <!-- /templates/collection.liquid -->


<div id="section-collection-template" class="section"><!-- /templates/collection.liquid -->


<div data-section-id="collection-template" data-section-type="collection-template" data-sort-enabled="true" data-tags-enabled="true">
  
  <div class="grid grid--uniform"  id="products" role="list">
<?php

      $view->productsOutput();
?>
      </div>

      <button onclick="loadMoreProducts()"  id="loadmore" value="loadMore" class="buttonn buttonn1">loadMore</button>
    
      <input type="text" value="10"  id="numRows" name="numRows" hidden>
            <input type="text" value=""  id="subcategoryid" name="subcategoryid" hidden>

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
      
<?php if(isset($_GET['subcategoryId'])){
?>    <script>
      document.getElementById("subcategoryid").value= <?php echo $_GET['subcategoryId']; ?>;
      </script>
      <?php } 
    ?>      
<script>  
    if(document.getElementById("1").href!=""&&window.location.href=="http://localhost/onlineStore/store/public/products.php"){
        window.location.href=document.getElementById("1").href;
    }
    
    function loadMoreProducts(){
    var subcategoryid = document.getElementById("subcategoryid").value;
    var numRows = document.getElementById("numRows").value;
    $.ajax({
          url: '../other/requestproductsajax.php',
          type: 'POST',
          data: {subcategoryid:subcategoryid,numRows:numRows},
          success: function(response) {
             if(response==0){
               document.getElementById("loadmore").style.visibility="hidden";
               }
              document.getElementById("numRows").value = parseInt(document.getElementById("numRows").value)+10;

           var moreProducts = document.getElementById('products');
            moreProducts.insertAdjacentHTML('beforeend', response);
          }
        });
    }
    
    
</script>


   
</div>
</div>
</main>
</div>
<hr>
      
</div> 
  
    </div>

</body>

</html>
