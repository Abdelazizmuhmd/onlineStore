<?php 
require_once("../controller/Controller.php");
class adminController extends Controller{
    
    
    
function getAllCategories(){
    $this->model->getAllCategoriesDetails();
}
    
function insertCategory(){
    $categoryName = $_REQUEST['Categoryname'];
    $this->modal->getCategories[0]->insertCategory($categoryName);
    
}    
function updateCategory(){
    $categoryName = $_REQUEST['Categoryname'];
    $categoryId = $_REQUEST['categoryid'];

    $this->modal->getCategories[0]->updateCategory($categoryId,$categoryName);
    
}    
function deleteCategory(){
    $categoryId = $_REQUEST['categoryid'];
    $this->modal->getCategories[0]->deleteCategory($categoryId);
    
}
    
    
    
function insertSubCategory(){
    $subCategoryName = $_REQUEST['subcategoryname'];
    $categoryId = $_REQUEST['categoryid'];
     $this->modal->getCategories()[0]->getSubcategories()[0]->insertSubCategory($categoryId,$subCategoryName);
    
}function deleteSubCategory(){
    $subCategoryId = $_REQUEST['subcategoryid'];
    $this->modal->getCategories()[0]->getSubcategories()[0]->deleteSubCategory($subCategoryId);
    
    
}function updateSubCategory(){
    $subCategoryName = $_REQUEST['subcategoryname'];
    $subCategoryId = $_REQUEST['subcategoryid'];
    $this->modal->getCategories()[0]->getSubcategories()[0]->deleteSubCategory($subCategoryId,$subCategoryName);
}
    

function readProducts(){
    $subCategoryId = $_REQUEST['subcategoryid'];
    $this->modal->getCategories()[0]->getSubcategories()[0]->readProducts($subCategoryId);
}
    

function  insertProduct(){
    
    $this->modal->getCategories()[0]->getSubcategories()[0]->getProducts()[0]->insertProduct();

    $name = $_REQUEST['name'];
    $code = $_REQUEST['code'];
    $cost = $_REQUEST['cost'];
    $profit = $_REQUEST['profit'];
    $description = $_REQUEST['description'];
    $weight = $_REQUEST['weight'];
    $productDetails = $_REQUEST['productDetails'];
    $subcategoryid = $_REQUEST['subcategoryid'];
    $this->modal->getCategories()[0]->getSubcategories()[0]->getProducts()[0]->insertProduct($name,$code,$cost,$profit,$description,$weight,$productDetails,$subcategoryid);
    
}
function showproducts(){
$subcategoryid=$_REQUEST['subcategoryid'];
$this->model->getCategories()[0]->getSubcategories()[0]->readProducts($subcategoryid);
}
    
function  updateProduct(){

    $productid = $_REQUEST['productid'];

    $productdetailid = $_REQUEST['productdetailid'];
    $name = $_REQUEST['name'];
    $code = $_REQUEST['code'];
    $cost = $_REQUEST['cost'];
    $profit = $_REQUEST['profit'];
    $description= $_REQUEST['description'];
    $weight= $_REQUEST['weight'];
    $color= $_REQUEST['color'];
    $s= $_REQUEST['s'];
    $m= $_REQUEST['m'];
    $l= $_REQUEST['l'];
    $xl= $_REQUEST['xl'];
    $xxl= $_REQUEST['xxl'];
    $xxxl= $_REQUEST['xxxl'];
    $imageurls= $_REQUEST['imageurls'];
    $this->modal->getCategories()[0]->getSubcategories()[0]->getProducts()[0]->updateProduct($productid,$productdetailid,$name,$code,$cost,$profit,$description,$weight,$color,$s,$m,$l,$xl,$xxl,$xxxl,$imageurls);
    
}
function  deleteProduct(){

    $productID = $_REQUEST['productID'];
    $this->modal->getCategories()[0]->getSubcategories()[0]->getProducts()[0]->updateProduct($productID);
    
} 
    

    
    
}

?>