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
<center>
 <iframe  src="../public/header.php" height="100" width="100%" style="border:none;"></iframe>
</center>

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
  <h4>Add Product</h4>
</div>

<div class="card-body" id="bod">


   <table class="table table-bordered"><br><br>
  
                <input type="text" name="productid" id="productid" value="" hidden>
   <tr>
       
            <td>  Name<input type="text" id="productName"  class="form-control"  placeholder="Enter Product Name"></td>
            <td>  Code<input type="text" id="productCode"  class="form-control"  placeholder="Enter Product Code">
</td>
      <td>profit<input type="text" id="productProfit"  class="form-control"  placeholder="Enter Product profit"></td>

         
          </tr>

          <tr>
      <td>Description<input type="text" id="productDescription"  class="form-control" placeholder="Enter Product Description"></td>
      <td>Weight<input type="text" id="productWeight"  class="form-control"  placeholder="Enter Product Weight"></td>
              <td>Cost<input type="text"   id="productCost" class="form-control"  placeholder="Enter Product Cost" ></td>

          </tr>
    </table>

</div>
    <center>
        <label style="font-size:20px;">Colors Added:</label>
        <select name="colors" id="colors" style="width:100px;height:30px;">
              <option value="volvo" disabled selected>none</option>

        
        </select>
  <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal2" onclick="resetcolor()" >Add Color</button><br><br>
   <button class="btn btn-primary" onclick="reset()">Reset For New Product</button></center>

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
          <h4 class="modal-title">New product Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <center><h4><i class="fa fa-upload" aria-hidden="true"></i>
      <input type="file"  onchange="loadFile(event)" id="image" name="image[]" multiple></h4></center>        <hr class="new2">

        </div>

        <div class="modal-body">

        <h4>Color</h4><input type="text" id="productColor" class="form-control"  placeholder="Enter Product Color">
        <table class="table table-bordered"><br>
  

   <tr>
      <h4>Sizes</h4>
      <td>Small<input class="form-control"  type="Number" step="1" min="0"   placeholder="Enter Small Size" id="small"></td>
      <td>  Medium<input class="form-control"  type="Number" step="1" min="0"   placeholder="Enter Medium Size" id="Medium"></td>
      <td> Large<input class="form-control" type="Number" step="1" min="0"  placeholder="Enter Large Size" id="Large"></td>

         
    </tr>

    <tr>
      <td> xLarge<input class="form-control"  type="Number" step="1" min="0"   placeholder="Enter xlarge Size" id="xLarge"></td>
      <td> 2xLarge<input class="form-control" type="Number" step="1" min="0"   placeholder="Enter 2xlarge Size" id="2xLarge"></td>
      <td>3xLarge<input class="form-control" type="Number" step="1" min="0"   placeholder="Enter 3xlarge Size" id="3xLarge"></td>

    </tr>
    </table>
      <center><button onclick="addcolor()" id="finalProductAdd" data-dismiss="modal">Add</button></center>
        </div>
       
      </div>
      
    </div>
  </div>
  <p>
      <script>
      

      </script>
   

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
            url: '../other/showproductsAjax.php',
            type: 'POST',
            data: {subid:subid},
            success: function(response){
            document.getElementById("productstable").innerHTML+=response;
             }
          });
       }
</script> 
    
    <script>
var formData =new FormData();
var loadFile = function(event) {
formData =new FormData();
$.each($("input[type=file]"), function (i, obj) {
     $.each(obj.files, function (j, file) { 
       formData.append('files[]', file);      
});
    })
};
function addcolor(){
    var insertproductid=document.getElementById("productid").value;


    if(insertproductid==""){
     formData.append("productName",document.getElementById("productName").value);
     formData.append("productCode",document.getElementById("productCode").value);
     formData.append("productProfit",document.getElementById("productProfit").value);
     formData.append("productDescription",document.getElementById("productDescription").value);
     formData.append("productWeight",document.getElementById("productWeight").value);
     formData.append("productCost",document.getElementById("productCost").value);
     formData.append("productColor",document.getElementById("productColor").value);
     formData.append("small",document.getElementById("small").value);
     formData.append("Medium",document.getElementById("Medium").value);
     formData.append("Large",document.getElementById("Large").value);
     formData.append("xLarge",document.getElementById("xLarge").value);
     formData.append("2xLarge",document.getElementById("2xLarge").value);
     formData.append("3xLarge",document.getElementById("3xLarge").value);           
     var Select = document.getElementById( "subselections" );
     formData.append("$subcategoryid",Select.options[ Select.selectedIndex ].value) ;
      $.ajax({
            url: '../other/insertproductsAjax.php',
            type: 'POST',
            data:formData,
            contentType: false,
            processData: false,
            success: function(response){
                document.getElementById("productid").value=response;
                
                document.getElementById("productName").disabled = true;
                document.getElementById("productCode").disabled = true;
                document.getElementById("productProfit").disabled = true;
                document.getElementById("productDescription").disabled = true;
                document.getElementById("productWeight").disabled = true;
                document.getElementById("productCost").disabled = true;
                var x = document.getElementById("colors");
                var option = document.createElement("option");
                option.text = document.getElementById("productColor").value;
                option.selected=true;
                x.add(option);       
                document.getElementById("colors").remove(0);
                document.getElementById("catselection").disabled = true;
                document.getElementById("subselections").disabled = true;
 
            }
    });            
        }else{
     formData.append("productid",document.getElementById("productid").value);
     formData.append("productColor",document.getElementById("productColor").value);
     formData.append("small",document.getElementById("small").value);
     formData.append("Medium",document.getElementById("Medium").value);
     formData.append("Large",document.getElementById("Large").value);
     formData.append("xLarge",document.getElementById("xLarge").value);
     formData.append("2xLarge",document.getElementById("2xLarge").value);
     formData.append("3xLarge",document.getElementById("3xLarge").value);   
            
     var Select = document.getElementById( "subselections" );
     formData.append("$subcategoryid",Select.options[ Select.selectedIndex ].value);
            
            $.ajax({
            url: '../other/insertproductdetailsAjax.php',
            type: 'POST',
            data:formData,
            contentType: false,
            processData: false,
            success: function(response){
                var x = document.getElementById("colors");
                var option = document.createElement("option");
                option.text = document.getElementById("productColor").value;
                option.selected=true;
                x.add(option);       
            }
    });            
            
            
            
        }
        
    }

    
    
    </script>

      
      
      <script>
        function  resetcolor(){
            document.getElementById("productColor").value="";
              document.getElementById("small").value="";
              document.getElementById("Medium").value="";
              document.getElementById("Large").value="";
              document.getElementById("xLarge").value="";
              document.getElementById("2xLarge").value="";
              document.getElementById("3xLarge").value="";
              document.getElementById('image').value = "";
            
        }
          function reset(){
              var select = document.getElementById("colors");

              var length = select.options.length;
              for (i = length-1; i >= 0; i--) {
                  select.options[i] = null;
                }
              var option = document.createElement("option");
              option.text = "none";
              option.selected=true;      
              select.add(option); 
              document.getElementById("catselection").disabled = false;
              document.getElementById("subselections").disabled = false;
              document.getElementById("productName").disabled = false;
              document.getElementById("productCode").disabled = false;
              document.getElementById("productProfit").disabled = false;
              document.getElementById("productDescription").disabled = false;
              document.getElementById("productWeight").disabled = false;
              document.getElementById("productCost").disabled = false;
              document.getElementById("productid").value="";
              
              document.getElementById("productName").value="";
              document.getElementById("productCode").value="";
              document.getElementById("productProfit").value="";
              document.getElementById("productDescription").value="";
              document.getElementById("productWeight").value="";
              document.getElementById("productCost").value="";
              
              document.getElementById("productColor").value="";
              document.getElementById("small").value="";
              document.getElementById("Medium").value="";
              document.getElementById("Large").value="";
              document.getElementById("xLarge").value="";
              document.getElementById("2xLarge").value="";
              document.getElementById("3xLarge").value="";
              document.getElementById('image').value = "";
 


              
          }

      
      </script>
    <script>
      
      
      
      
      
      
      
      
      
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
md5($filename . microtime())
https://makitweb.com/how-to-upload-multiple-image-files-with-jquery-ajax-and-php/
https://www.geeksforgeeks.org/how-to-select-and-upload-multiple-files-with-html-and-php-using-http-post/
-->
    
    
    
    
      
      </div>
      
  </body>








</html>
