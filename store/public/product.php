<?php
require_once("../model/menu.php");
require_once("../controller/menuController.php");
require_once("../View/menuView.php");
$model = new menu();
$controller= new menuController($model);
if (isset($_GET['action']) && !empty($_GET['action'])) {
 if(method_exists($controller,$_GET['action'])){
    $controller->{$_GET['action']}();
    }else{
     header("location: ../public/products.php");
 }
}
//$_REQUEST['productdetailid'] = $_GET['productdetailid'];
//echo $_REQUEST['productdetailid'];
$controller->getAllCategoriesDetails();
$view= new menuView($model,$controller);

?>
<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>
        Pat
    </title>

    <link href="../css/home.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/slider.css" rel="stylesheet" type="text/css" media="all" />
      <script src="../js/j.js" type="text/javascript"></script>

    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
     <script src="../js/s.js" type="text/javascript"></script>
    <script src="../js/home.js" type="text/javascript"></script>
 <script src="../js/j2.js" type="text/javascript"></script>

    <script src="../js/product.js" type="text/javascript"></script>


</head>

<body>
    
        
        <center>
 <iframe  src="../public/header.php" height="100" width="100%" style="border:none;"></iframe>
        </center>

    
    <div>
    
  
       
    </div>



    <div class="site-wrapper">

        <div class="grid">




            <img src="../images/logo.png" style="margin-bottom:30px; margin-left:60px; width:120px;height:120px;">

            <?php
        include("menu.php");
?>


            <main class="main-content grid__item medium-up--four-fifths" id="MainContent" role="main">

                <hr class="hr--border-top small--hide">




                <div class="grid product-single">

                   
                    <div class="grid__item medium-up--one-half" id="sthalf">
                        <?php
$view->readOneProduct();

      ?>
 


                    </div>







                    <!-- /snippets/social-sharing.liquid -->




                </div>
            </main>
        </div>
        <hr>
    </div>
    <script src="../js/slider.js" type="text/javascript"></script>
  
</body>
  <script>
   function addToCart() {
/* 
            var id = document.getElementById("product_id").value;
            var name = document.getElementById("product_name").value;// get product name
            var cost = document.getElementById("product_cost").value;  // get quantity
            var img= document.getElementById("product_img").value;
            var color=document.getElementById("ProductSelect-product-template-option-0").value;
            var size=document.getElementById("ProductSelect-product-template-option-1").value;
            var quantity=document.getElementById("Quantity").value;
     var flag = 0 ;
       var data = [];
if (localStorage.getItem("products") === null) {
}else{
var products = localStorage.getItem("products");
    
products = JSON.parse(products);
    
products.forEach(breakProduct);
    
function breakProduct(item,index){
  if(item.id==id){
      item.quantity = parseInt(item.quantity)+parseInt(quantity);
      flag=1;
  }
  data.push(item);
}
}  
if(flag==0){
var feed = {"id":id,"name":name,"cost":cost,"img":img,"color":color,"size":size,"quantity":quantity};
data.push(feed);
}
final_data=JSON.stringify(data);

localStorage.setItem("products", final_data);
alert(final_data);

            
        */
   }    </script>
</html>