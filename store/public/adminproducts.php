<?php
require_once("../model/menu.php");
require_once("../controller/adminController.php");
require_once("../View/adminproducts.php");
include_once("../other/session.php");

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
          <link href="../css/products.css" rel="stylesheet" type="text/css" media="all" /> 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="../js/adminproduct.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../js/editProduct.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <center>
        <iframe src="../public/header.php" height="100" width="100%" style="border:none;"></iframe>
    </center>

    <br />
    <div id="contain">
        <div class="card" id="filterz">
            <div id="orders" class="card-header">
                <b> Menu </b>
            </div>
            <div class="card-body" id="bod">


                <h4>Categories </h4>
                <?php 
            
     echo $view->getallcategories();
    
            
    ?>

<div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#categoryEdit"
                    style="margin-left: 7px;  overflow: hidden;">Edit Category</button>


                <button class="btn btn-primary" data-toggle="modal" style="margin-left: 7px;  overflow: hidden;"
                    data-target="#categoryAdd">Add Category </button>
</div>
                
                
                <form action="../public/adminproducts.php?action=deletecategory" method="POST">
                    <input type="text" id="deletecategoryid" name="deletecategoryid" value="" hidden>
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');"
                        class="btn btn-primary" style="margin-left: 7px;  overflow: hidden;">Delete Category
                    </button>
                </form>

                
                


            </div>
            <div class="card-body" id="bod">

                <h4 style="font-size:20px;">SubCategory </h4>
                <select name="subcategory" id="subselections" class="form-control subcategory combBox">

                </select>

                <div>
                <button class="btn btn-primary" data-toggle="modal" style="margin-left: 7px;  overflow: hidden;"
                    data-target="#subCategoryEdit" onclick="getsubid()"> Edit SubCategory </button>
                    
                <button class="btn btn-primary" data-toggle="modal" style="margin-left: 7px;  overflow: hidden;"
                    data-target="#subCategoryAdd">Add SubCategory </button>
</div>


                <form action="../public/adminproducts.php?action=deletesubcategory" method="POST">
                    <input type="text" id="deletesubcategoryid" name="deletesubcategoryid" value="" hidden>
                    <button type="submit" onclick="getsubidandconfirm()" class="btn btn-primary"
                        style="margin-left: 1px;  overflow: hidden;">Delete SubCateg

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

                        <td> Name<input type="text" id="productName" value="test" class="form-control"
                                placeholder="Enter Product Name" maxlength="50" required>
                                <p id="Name" style="color:red;"></p>
                                </td>
                        <td> Code<input type="text" id="productCode" value="22" class="form-control"
                                placeholder="Enter Product Code" maxlength="50" required>
                                <p id="Code" style="color:red;"></p>

                        </td>
                        <td>profit<input type="text" value="22"id="productProfit" class="form-control"
                                placeholder="Enter Product profit" maxlength="50" required>
                                <p id="Profit" style="color:red;"></p>
                                </td>


                    </tr>

                    <tr>
                        <td>Description<input type="text" value="test"id="productDescription" class="form-control"
                                placeholder="Enter Product Description" maxlength="50" required>
                                <p id="Description" style="color:red;"></p>
                                </td>
                        <td>Weight<input type="text" value="22"id="productWeight" class="form-control"
                                placeholder="Enter Product Weight" maxlength="50" required>
                                <p id="Weight" style="color:red;"></p>
                                </td>

                        <td>Cost<input type="text"value="22" id="productCost" class="form-control"
                                placeholder="Enter Product Cost" maxlength="50" required>
                                <p id="Cost" style="color:red;"></p>
                                </td>

                    </tr>
                </table>

            </div>
            <center>
                <label style="font-size:20px;">Colors Added:</label>
                <select name="colors" id="colors" style="width:100px;height:30px;">
                    <option value="volvo" disabled selected>none</option>


                </select>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2" onclick="">Add
                    Color</button><br><br>
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
                    <th>id</th>
                    <th>detailId</th>
                    <th>name</th>
                    <th>cost</th>
                    <th>profit</th>
                    <th>code</th>
                    <th>description</th>
                    <th>color</th>
                    <th>SQ</th>
                    <th>MQ</th>
                    <th>LQ</th>
                    <th>XLQ</th>
                    <th>XXLQ</th>
                    <th>XXXLQ</th>
                    <th>Weight</th>
                    <th>Delete</th>
                </tr>
                                    <tbody id="productst">

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
                </tbody>

            </table>
               <button onclick="getsubid(1)"  id="loadmore" value="loadMore" class="buttonn buttonn1" style="visibility:hidden" >loadMore</button>

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
                        <form action="../public/adminproducts.php?action=addCategory" method="POST"
                            id="addcategoryform">
                            <input type="text" name="newcategoryname" id="newcategoryname" class="form-control"
                                placeholder="Category Name" maxlength="50" required>
                                <p id="CategoryName" style="color:red;"></p>

                        </form>

                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary" form="addcategoryform"
                            onclick="return addcategoryvalidate()">Add Catgory</button>


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
                            <input type="text" name="newcategoryname" id="editcategoryname" class="form-control"
                                placeholder="New Name" maxlength="50" required>
                                <p id="CategoryEdit" style="color:red;"></p>

                            <input type="text" value="" id="editcatgoryid" name="editcatgoryid" hidden>
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" form="editcategory"
                            onclick="return editcategoryvalidate()">Save</button>
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

                        <form action="../public/adminproducts.php?action=editsubcategory" method="POST"
                            id="editsubcategory">
                            <input type="text" name="newsubcategoryname" id="editsubcategoryname" class="form-control"
                                placeholder="New Name" maxlength="50" required>
                                <p id="SubCategoryEdit" style="color:red;"></p>

                            <input type="text" value="" id="editsubcatgoryid" name="editsubcatgoryid" hidden>
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" form="editsubcategory"
                            onclick="return editsubcategoryvalidate()">Save</button>
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

                        <form action="../public/adminproducts.php?action=addsubcategory" method="POST"
                            id="addsubcategoryform">

                            <input type="text" name="subcategoryname" id="newsubcategoryname" class="form-control"
                                placeholder="Category Name" maxlength="50" required>
                                <p id="SubCategoryName" style="color:red;"></p>

                            <input type="text" id="categoryid" hidden name="categoryid">
                        </form>

                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary" form="addsubcategoryform"
                            onclick="return newsubcategoryvalidate()">Add Catgory</button>
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

                        <center>
                            <h4><i class="fa fa-upload" aria-hidden="true"></i>
                                <input type="file"  id="image" name="image[]" onchange="loadFile(event)" multiple></h4>
                        </center>
                        <hr class="new2">

                    </div>

                    <div class="modal-body">

                        <h4>Color</h4><input type="text" value="test" id="productColor" class="form-control"
                            placeholder="Enter Product Color" maxlength="50" required>
                            <p id="Color" style="color:red;"></p>

                        <table class="table table-bordered"><br>


                            <tr>
                                <h4>Sizes</h4>
                                <td>Small<input class="form-control" value="22"type="Number" step="1" min="0"
                                        placeholder="Enter Small Size" id="small"></td>
                                <td> Medium<input class="form-control"value="222" type="Number" step="1" min="0"
                                        placeholder="Enter Medium Size" id="Medium"></td>
                                <td> Large<input class="form-control" value="22"type="Number" step="1" min="0"
                                        placeholder="Enter Large Size" id="Large"></td>


                            </tr>

                            <tr>
                                <td> xLarge<input class="form-control" value="22"type="Number" step="1" min="0"
                                        placeholder="Enter xlarge Size" id="xLarge"></td>
                                <td> 2xLarge<input class="form-control"value="222" type="Number" step="1" min="0"
                                        placeholder="Enter 2xlarge Size" id="2xLarge"></td>
                                <td>3xLarge<input class="form-control" value="222"type="Number" step="1" min="0"
                                        placeholder="Enter 3xlarge Size" id="3xLarge"></td>

                            </tr>
                            
                        </table>
                           

                        <center>
                            <button onclick="addcolor()" id="finalProductAdd" data-dismiss="modal">Add</button>
                        </center>
                    </div>

                </div>

            </div>
        </div>
        <p>
                  <input type="text" value="1"  id="numRows" name="numRows" hidden>
                  <input name="oldsubid" type="text" id="oldsubid" hidden>
                         <script>


            </script>


            <script>
            var p=0;
            function getsubid(i = "") {
                var Select = document.getElementById("subselections");
                document.getElementById("editsubcatgoryid").value = Select.options[Select.selectedIndex].value;
                document.getElementById("subproductid").value = Select.options[Select.selectedIndex].value;
               if (i == 1) {
                    if(p==0){
                        document.getElementById("oldsubid").value=document.getElementById("subproductid").value;
                         document.getElementById("numRows").value=1;
                        p=1;
                    }
                    
                    if(document.getElementById("oldsubid").value==document.getElementById("subproductid").value){
                    showproducts();
                    }else{
                        document.getElementById("oldsubid").value=document.getElementById("subproductid").value;
                        var new_tbody = document.createElement('tbody');
                         document.getElementById('productst').innerHTML="";
                        document.getElementById("loadmore").style.visibility="hidden";
                        document.getElementById("numRows").value=1;
                        showproducts();
                        p=0;
                      
                    }
                }
            }

            function getsubidandconfirm() {
                if (confirm("are u sure want to delete this")) {
                    var Select = document.getElementById("subselections");
                    document.getElementById("deletesubcategoryid").value = Select.options[Select.selectedIndex].value
                } else {
                    return false;
                }
            }
            </script>

            <script>
                
                
                
            function showproducts() {
               var subcategoryid = document.getElementById("subproductid").value;
               var numRows = document.getElementById("numRows").value;
                $.ajax({
                      url: '../other/showproductsAjax.php',
                      type: 'POST',
                      data: {subcategoryid:subcategoryid,numRows:numRows},
                      success: function(response) {
                          document.getElementById("loadmore").style.visibility="initial";
                      if(response==0){
                           document.getElementById("loadmore").style.visibility="hidden";
                                     }
                     document.getElementById("numRows").value = parseInt(document.getElementById("numRows").value)+9;
                     var moreproducts = document.getElementById('productst');
                     moreproducts.insertAdjacentHTML('beforeend', response);
                          
                      }
          
        });


            }
                
                
                
            </script>

            <script>
            var formData = new FormData();
            var loadFile = function(event) {
                formData = new FormData();
                $.each($("input[type=file]"), function(i, obj) {
                    $.each(obj.files, function(j, file) {
                        formData.append('files[]', file);
                    });
                })
            };

            function addcolor() {
                var productName = document.getElementById("productName").value;
                var productCode = document.getElementById("productCode").value;
                var productProfit = document.getElementById("productProfit").value;
                var productDescription = document.getElementById("productDescription").value;
                var productWeight = document.getElementById("productWeight").value;
                var productCost = document.getElementById("productCost").value;
                //----------------------------------------------------
                if (productName == "") {
                    document.getElementById("Name").innerHTML = "Name is empty";
                    document.getElementById("productName").style.borderColor = "red";
                    return false;

                } else if (productName.length < 3) {
                    document.getElementById("Name").innerHTML = "Name is to short";
                    document.getElementById("productName").style.borderColor = "red";
                    return false;
                }


                else if (!productName.match(/^[a-zA-Z]+$/)) {
                    document.getElementById("Name").innerHTML = "Name must be Letters only";

                    document.getElementById("productName").style.borderColor = "red";
                    return false;
                }
                else
                {
                    document.getElementById("Name").innerHTML = "";
                    document.getElementById("productName").style.borderColor = "Green";

    
                }
                //---------------------
                //code
                if (productCode == "") {
                    document.getElementById("Code").innerHTML = "Code is empty";
                    document.getElementById("productCode").style.borderColor = "red";
                    return false;

                } else if (productCode.length < 1) {
                    document.getElementById("Code").innerHTML = "Code is to short";
                    document.getElementById("productCode").style.borderColor = "red";
                    return false;
                }


               else if (!productCode.match(/^\d*\.?\d*$/)) {
                    document.getElementById("Code").innerHTML = "Code must be  numbers only";
                    return false;
                }
                else
                {
                    document.getElementById("Code").innerHTML = "";
                    document.getElementById("productCode").style.borderColor = "Green";

    
                }
                //-----------------------------
                //weight
                if (productWeight == "") {
                    document.getElementById("Weight ").innerHTML = "Weight  is empty";
                    document.getElementById("productWeight").style.borderColor = "red";
                    return false;

                } else if (productWeight.length < 1) {
                    document.getElementById("Weight ").innerHTML = "Weight  is to short";
                    document.getElementById("productWeight").style.borderColor = "red";
                    return false;
                }


                else if (!productWeight.match(/^\d*\.?\d*$/)) {
                    document.getElementById("Weight ").innerHTML = "Weight  must be numbers only";
                    return false;
                }
                else
                {
                    document.getElementById("Weight").innerHTML = "";
                    document.getElementById("productWeight").style.borderColor = "Green";

    
                }
                //-------------------------------------------
                //cost
                if (productCost == "") {
                    document.getElementById("Cost").innerHTML = "Cost  is empty";
                    document.getElementById("productCost").style.borderColor = "red";
                    return false;

                } else if (productCost.length < 1) {
                    document.getElementById("Cost").innerHTML = "Cost  is to short";
                    document.getElementById("productCost").style.borderColor = "red";
                    return false;
                }


                else if (!productCost.match(/^\d*\.?\d*$/)) {
                    document.getElementById("Cost").innerHTML = "Cost only numbers are allowed";
                    return false;
                }
                else
                {
                    document.getElementById("Cost").innerHTML = "";
                    document.getElementById("productCost").style.borderColor = "Green";

    
                }
                //---------------------------------------
                //description
                productDescription
                if (productDescription == "") {
                    document.getElementById("Description").innerHTML = "Description is empty";
                    document.getElementById("productDescription").style.borderColor = "red";
                    return false;

                } else if (productDescription.length < 1) {
                    document.getElementById("Description").innerHTML = "Description is to Short";
                    document.getElementById("productDescription").style.borderColor = "red";
                    return false;
                }



               else if (!productDescription.match(/^[A-Za-z0-9 ]+$/)) {
                    document.getElementById("Description").innerHTML = "Description only letters and number are allowed";
                    return false;
                }
                else
                {
                    document.getElementById("Description").innerHTML = "";
                    document.getElementById("productDescription").style.borderColor = "Green";

    
                }
                //--------------------
                //profit
                if (productProfit == "") {
                    document.getElementById("Profit").innerHTML = "Profit is empty";
                    document.getElementById("productProfit").style.borderColor = "red";
                    return false;

                } else if (productProfit.length < 1) {
                    document.getElementById("Profit").innerHTML = "Profit is Short";
                    document.getElementById("productProfit").style.borderColor = "red";
                    return false;
                }


                else if (!productProfit.match(/^\d*\.?\d*$/)) {
                    document.getElementById("Profit").innerHTML = "Profit only numbers are allowed";
                    document.getElementById("productProfit").style.borderColor = "red";

                    return false;
                }
                else
                {
                    document.getElementById("Profit").innerHTML = "";
                    document.getElementById("productProfit").style.borderColor = "Green";

    
                }
//-------------------------------------------------------------------------------------------------------------

                var productColor = document.getElementById("productColor").value;

                //-----------------------------------------
                if (productColor == "") {

                    document.getElementById("Color ").innerHTML = "Color  is empty";
                    document.getElementById("productColor").style.borderColor = "red";
                    return false;

                } else if (productColor.length < 1) {
                    document.getElementById("Color ").innerHTML = "Color  is to short";
                    document.getElementById("productColor").style.borderColor = "red";
                    return false;
                }


               else if (!productColor.match(/^[a-zA-Z]+$/)) {
                    document.getElementById("Color ").innerHTML = "Color  only letters are allowed";
                    document.getElementById("productColor").style.borderColor = "red";
                    return false;
                }
                else
                {
                    document.getElementById("Color").innerHTML = "";
                    document.getElementById("productColor").style.borderColor = "Green";

    
                }



                var insertproductid = document.getElementById("productid").value;

                if (insertproductid == "") {

                    formData.append("productName", document.getElementById("productName").value);
                    formData.append("productCode", document.getElementById("productCode").value);
                    formData.append("productProfit", document.getElementById("productProfit").value);
                    formData.append("productDescription", document.getElementById("productDescription").value);
                    formData.append("productWeight", document.getElementById("productWeight").value);
                    formData.append("productCost", document.getElementById("productCost").value);
                    formData.append("productColor", document.getElementById("productColor").value);
                    formData.append("small", document.getElementById("small").value);
                    formData.append("Medium", document.getElementById("Medium").value);
                    formData.append("Large", document.getElementById("Large").value);
                    formData.append("xLarge", document.getElementById("xLarge").value);
                    formData.append("2xLarge", document.getElementById("2xLarge").value);
                    formData.append("3xLarge", document.getElementById("3xLarge").value);
                    var Select = document.getElementById("subselections");
                    formData.append("subcategoryid", Select.options[Select.selectedIndex].value);
                    $.ajax({
                        url: '../other/insertproductsAjax.php',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            document.getElementById("productid").value = response;

                            document.getElementById("productName").disabled = true;
                            document.getElementById("productCode").disabled = true;
                            document.getElementById("productProfit").disabled = true;
                            document.getElementById("productDescription").disabled = true;
                            document.getElementById("productWeight").disabled = true;
                            document.getElementById("productCost").disabled = true;
                            var x = document.getElementById("colors");
                            var option = document.createElement("option");
                            option.text = document.getElementById("productColor").value;
                            option.selected = true;
                            x.add(option);
                            document.getElementById("colors").remove(0);
                            document.getElementById("catselection").disabled = true;
                            document.getElementById("subselections").disabled = true;

                        }
                    });
                } else {
                    formData.append("productid", 
                    document.getElementById("productid").value);
                    formData.append("productColor", document.getElementById("productColor").value);
                    formData.append("small", document.getElementById("small").value);
                    formData.append("Medium", document.getElementById("Medium").value);
                    formData.append("Large", document.getElementById("Large").value);
                    formData.append("xLarge", document.getElementById("xLarge").value);
                    formData.append("2xLarge", document.getElementById("2xLarge").value);
                    formData.append("3xLarge", document.getElementById("3xLarge").value);
                    var Select = document.getElementById("subselections");
                    formData.append("subcategoryid", Select.options[Select.selectedIndex].value);
                    
             /*       
                    alert(document.getElementById("productid").value);
                    alert(document.getElementById("productColor").value);
                    alert(document.getElementById("small").value);
                    alert(document.getElementById("Medium").value);
                    alert(document.getElementById("Large").value);
                    alert(document.getElementById("xLarge").value);
                    alert(document.getElementById("2xLarge").value);
                    alert(document.getElementById("productid").value);
                    alert(document.getElementById("3xLarge").value);

                    
                    
                    */
                    $.ajax({
                        url: '../other/insertproductdetailsAjax.php',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            var x = document.getElementById("colors");
                            var option = document.createElement("option");
                            option.text = document.getElementById("productColor").value;
                            option.selected = true;
                            x.add(option);
                        }
                    });



                }

            }
            </script>



            <script>
            function resetcolor() {


                //----------------------
                document.getElementById("productColor").value = "";
                document.getElementById("productColor").value = "";
                document.getElementById("small").value = "";
                document.getElementById("Medium").value = "";
                document.getElementById("Large").value = "";
                document.getElementById("xLarge").value = "";
                document.getElementById("2xLarge").value = "";
                document.getElementById("3xLarge").value = "";
                document.getElementById('image').value = "";
            }

            function reset() {

                var select = document.getElementById("colors");

                var length = select.options.length;
                for (i = length - 1; i >= 0; i--) {
                    select.options[i] = null;
                }
                var option = document.createElement("option");
                option.text = "none";
                option.selected = true;
                select.add(option);
                document.getElementById("catselection").disabled = false;
                document.getElementById("subselections").disabled = false;
                document.getElementById("productName").disabled = false;
                document.getElementById("productCode").disabled = false;
                document.getElementById("productProfit").disabled = false;
                document.getElementById("productDescription").disabled = false;
                document.getElementById("productWeight").disabled = false;
                document.getElementById("productCost").disabled = false;
                document.getElementById("productid").value = "";

                document.getElementById("productName").value = "";
                document.getElementById("productCode").value = "";
                document.getElementById("productProfit").value = "";
                document.getElementById("productDescription").value = "";
                document.getElementById("productWeight").value = "";
                document.getElementById("productCost").value = "";

                document.getElementById("productColor").value = "";
                document.getElementById("small").value = "";
                document.getElementById("Medium").value = "";
                document.getElementById("Large").value = "";
                document.getElementById("xLarge").value = "";
                document.getElementById("2xLarge").value = "";
                document.getElementById("3xLarge").value = "";
                document.getElementById('image').value = "";




            }
            </script>
            <script>
               

function deleteRow(rowIndex,productdetailid){
if (confirm("are u sure want to delete this")) {            
     $.ajax({
       url: '../public/adminproducts.php?action=deleteProduct',
       type: 'POST',
       data:{productdetailid:productdetailid},
       success: function(response) {
      $('#' + rowIndex).remove();
          }});
  }else{
  alert("can't be deleted");
}
    
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
md5($filename . microtime())
https://makitweb.com/how-to-upload-multiple-image-files-with-jquery-ajax-and-php/
https://www.geeksforgeeks.org/how-to-select-and-upload-multiple-files-with-html-and-php-using-http-post/
-->





    </div>

</body>








</html>