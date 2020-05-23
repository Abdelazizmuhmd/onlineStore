<?php
require_once("../controller/Controller.php");
class menuController extends Controller{

public function  getAllCategoriesDetails(){
    $this->model->getAllCategoriesDetails();
}

 public function readOneProduct(){

   $productid = $_REQUEST['productid'];

    $this->model->getCategories()[0]->getSubcategories()[0]->readOneProduct($productid);

 }
 public function readProducts(){
    $subcategoryId = $_REQUEST['subcategoryId'];
    $this->model->getCategories()[0]->getSubcategories()[0]->readProducts($subcategoryId,1);

 }



}

?>
