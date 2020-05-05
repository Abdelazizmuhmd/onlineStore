<?php 
require_once("Controller.php");
adminController extends Controller{
    
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
    
}
    
function  updateProduct(){
    $this->modal->getCategories()[0]->getSubcategories()[0]->getProducts()[0]->updateProduct();
    
}
function  deleteProduct(){
    $this->modal->getCategories()[0]->getSubcategories()[0]->getProducts()[0]->updateProduct();
    
} 
    

    
    
}

?>