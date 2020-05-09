<?php
require_once("../model/menu.php");
require_once("../controller/adminController.php");
require_once("../View/adminproducts.php");

$model = new menu();
$controller= new adminController($model);
if (isset($_GET['action']) && !empty($_GET['action'])) {
  $controller->{$_GET['action']}();
}
$controller->getAllCategories();

$view= new adminproductsView($model,$controller);

?>
<!DOCTYPE html>
<html>
  <head>
      <style>
      
      
      
      </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>
      Products
    </title>
    <link href="../css/adminProducts.css" rel="stylesheet" type="text/css" media="all" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <br />
    <div  id="contain">
      <div class="card" id="filterz">
        <div  id="orders"  class="card-header">
          <b > Menu </b>
        </div>
        <div class="card-body"  id="bod">
  

  <h4>Categories </h4> 
  <?php 
            
     echo $view->getallcategories();
            
    ?>        
            

  <button class="btn btn-primary" data-toggle="modal" data-target="#categoryEdit" style="width:140px;margin-left:50px;padding:10px;"  >Edit Category</button>
            
            
  <button class="btn btn-primary" data-toggle="modal" style="width:140px;margin-left:50px;padding:10px;" data-target="#categoryAdd">Add Category </button>
            
   <form action="../public/adminproducts.php?action=deletecategory" method="POST">
    <input type="text" id="deletecategoryid" name="deletecategoryid" value="" hidden>
  <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-primary" style="margin-left:50px;padding:10px;">Delete Category

      </button>
          </form>



        </div>
  <div class="card-body" id="bod">

  <h4 style="font-size:20px;">SubCategory </h4>
<select name="subcategory" id="subselections" class="form-control subcategory combBox">
    
</select>
 <button class="btn btn-primary" data-toggle="modal" style=" margin-left:50px;padding:10px;" data-target="#subCategoryEdit" onclick="getsubid()" > Edit SubCategory </button>
  <button class="btn btn-primary" data-toggle="modal" style="margin-left:50px;padding:10px;" data-target="#subCategoryAdd" >Add SubCategory </button>
      
      
      
  <form action="../public/adminproducts.php?action=deletesubcategory" method="POST">
  <input type="text" id="deletesubcategoryid" name="deletesubcategoryid" value="" hidden>
  <button type="submit" onclick="getsubidandconfirm()" class="btn btn-primary" style="margin-left:50px;padding:10px;">Delete SubCategory

      </button>
          </form>

</div>


<div class="card-body" id="bod">
  <h4>Product</h4>
</div>

<div class="card-body" id="bod">


   <table class="table table-bordered"><br><br>
  

   <tr>
            <td>  Name<input type="text" name="productName" class="form-control" id="" placeholder="Enter Product Name"></td>
            <td>  Code<input type="text" name="productCode" class="form-control" id="" placeholder="Enter Product Code">
</td>
      <td>profit<input type="text" name="productProfit" class="form-control" id="" placeholder="Enter Product profit"></td>

         
          </tr>

          <tr>
      <td>Description<input type="text" name="productDescription" class="form-control" id="" placeholder="Enter Product Description"></td>
      <td>Weight<input type="text" name="productWeight" class="form-control" id="" placeholder="Enter Product Weight"></td>
              <td>Cost<input type="text" name="productCost" class="form-control" id="" placeholder="Enter Product Cost"></td>

          </tr>
    </table>

</div>
    <center>
  <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal2" >Add Color</button>
   <button class="btn btn-primary" >Add Product</button></center>

<div class="card-body" id="bod">
   

</div>
      </div>
    </div>
    <br />
    <br />


    <div id="container">
      <center><b>Products</b></center>
        <div class="col-md-4 col-lg-2">
    </div>
  <!--<form action="../public/adminproducts.php?action=showproducts" method="POST">

     <input type="text" id="subproductid" name="subproductid" hidden>
          <center>  
  <button type="button" class="btn btn-primary showproducts" onclick="getsubid(1)">Show Products</button></center> 
      
        </form>
-->

    <input type="text" id="subproductid" name="subproductid" hidden>
          <center>  
  <button type="button" class="btn btn-primary showproducts" onclick="getsubid(1)">Show Products</button>
        </center> 

        
        
      <div id="table">
        <table class="table table-bordered" id="productstable"><br><br>
    <tr>
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>code</th>
            <th>description</th>
            <th>color</th>
            <th>SQ</th>
            <th>MQ</th>
            <th>LQ</th>
            <th>XLQ</th>
            <th>XXLQ</th>
            <th>XXXLQ</th>


            <th>Edit</th>
            <th>Delete</th>
    </tr>
<!--
   <tr>
            <td><label>Micheal Townly</label></td>
            <td>Jan 24, 2020</td>
            <td>Delivered</td>
            <td>pat1243</td>
            <td>76 Mohanat street, Hovebeach,NY</td>
            <td>15.00</td>
            <td>15.00</td>
            <td>15.00</td>
            <td>15.00</td>
            <td>15.00</td>
            <td>15.00</td>
            <td>15.00</td>


            <td><a id="button" href="">Edit</a></td>
            <td><a id="button" href=""><i class="fa fa-trash"></i></a></td>
          </tr>
-->             
<?php 
         echo $view->products();
          
?>
         
    </table>
      </div>
    </div>


<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="categoryAdd" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form action="../public/adminproducts.php?action=addCategory" method="POST" id="addcategoryform">
            <input type="text" name="newcategoryname"  class="form-control" placeholder="Category Name">
            </form>

        </div>
        <div class="modal-footer">
            
          <button type="submit" class="btn btn-primary"  form="addcategoryform">Add Catgory</button>
            
            
        </div>
      </div>
      
    </div>
  </div>
    
    
      <div class="modal fade" id="categoryEdit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form action="../public/adminproducts.php?action=editCategory" method="POST" id="editcategory">
            <input type="text" name="newcategoryname"  class="form-control" placeholder="New Name">
                 <input type="text" value="" id="editcatgoryid" name="editcatgoryid" hidden>
         </form>


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"  form="editcategory">Save</button>
        </div>
      </div>
      
    </div>
  </div>
    
    
    
    
    
    
    
      <div class="modal fade" id="subCategoryEdit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit SubCategory</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
      
        <form action="../public/adminproducts.php?action=editsubcategory" method="POST" id="editsubcategory">
        <input type="text" name="newsubcategoryname" class="form-control" placeholder="New Name">
        <input type="text" value="" id="editsubcatgoryid" name="editsubcatgoryid" hidden>
         </form>


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"  form="editsubcategory">Save</button>
        </div>
      </div>
      
    </div>
  </div>
    
    
    
    
    
    
    
    
      <div class="modal fade" id="subCategoryAdd" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add SubCategory</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

           <form action="../public/adminproducts.php?action=addsubcategory" method="POST" id="addsubcategoryform">
               
            <input type="text" name="subcategoryname"  class="form-control" placeholder="Category Name">
               <input type="text" id="categoryid" hidden name="categoryid">
            </form>

        </div>
        <div class="modal-footer">
            
          <button type="submit" class="btn btn-primary"  form="addsubcategoryform">Add Catgory</button>
      </div>
      
  </div>
            </div>

    
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    

   <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <center><h4><i class="fa fa-upload" aria-hidden="true"></i>
      <input type="file" id="image" name="image[]" multiple></h4></center>        <hr class="new2">

        </div>

        <div class="modal-body">

        <h4>Color</h4><input type="text" name="productColor" class="form-control" id="" placeholder="Enter Product Color">
        <table class="table table-bordered"><br>
  

   <tr>
      <h4>Sizes</h4>
      <td>Small<input class="form-control" type="Number" step="1" min="0"  id="" placeholder="Enter Small Size" name="small"></td>
      <td>  Medium<input class="form-control" type="Number" step="1" min="0"  id="" placeholder="Enter Medium Size" name="medium"></td>
      <td> Large<input class="form-control" type="Number" step="1" min="0"  id="" placeholder="Enter Large Size" name="large"></td>

         
    </tr>

    <tr>
      <td> xLarge<input class="form-control" type="Number" step="1" min="0"  id="" placeholder="Enter xlarge Size" name="xlarge"></td>
      <td> 2xLarge<input class="form-control" type="Number" step="1" min="0"  id="" placeholder="Enter 2xlarge Size" name="2xlarge"></td>
      <td>3xLarge<input class="form-control" type="Number" step="1" min="0"  id="" placeholder="Enter 3xlarge Size" name="3xlarge"></td>

    </tr>
    </table>
      <center><button id="finalProductAdd">Add</button></center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

<script>
    
    
function getsubid(i=""){
var Select = document.getElementById( "subselections" );
document.getElementById("editsubcatgoryid").value= Select.options[ Select.selectedIndex ].value ;
document.getElementById("subproductid").value= Select.options[ Select.selectedIndex ].value ; 
    if(i==1){
         showproducts();
    }

}
function getsubidandconfirm(){
if(confirm("are u sure want to delete this")){
var Select = document.getElementById( "subselections" );
document.getElementById("deletesubcategoryid").value= Select.options[ Select.selectedIndex ].value 
    }else{
        return false;
    }
  }



      
</script>

   <script >

function showproducts(){
     var subid = document.getElementById("subproductid").value;
           $.ajax({
            url: '../other/ajaxBackend.php',
            type: 'POST',
            data: {subid:subid},
            success: function(response){
            document.getElementById("productstable").innerHTML+=response;
             }
          });
       }
</script> 
 <!--
function addproductdetails(){
    <script>
var ahmed=""
var text = '{"productdetails":[' + '{"color":"red","lastName":"Doe" }' + ']}';
obj = JSON.parse(text);
document.getElementById("demo").innerHTML =
obj.productdetails[0].color + " " + obj.productdetails[0].lastName;
}      

-->
    
    
    
    
      
      </div>
      
  </body>








</html>
