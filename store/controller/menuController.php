<?php
require_once("../controller/Controller.php");
class menuController extends Controller{
    
public function  getAllCategoriesDetails(){
    $this->model->getAllCategoriesDetails();
}  
    
 public function readProduct(){
    $productid = 82;

    // $productid = $_REQUEST['productid'];

    $this->model->getCategories()[0]->getSubcategories()[0]->readOneProduct($productid);

 }
 public function readProducts(){
   
     $subcategoryId=1;
    //$subcategoryId = $_REQUEST['subcategoryId'];

    $this->model->getCategories()[0]->getSubcategories()[0]->readProducts($subcategoryId);

 }



}

?>