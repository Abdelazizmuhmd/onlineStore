<?php


require_once("Controller.php");

class menuController extends Controller{

 public function readProduct(){

     $productid = $_REQUEST['productid'];

     $this->model->readProduct($productid);

 }



 public function readProducts(){
   
    $subcategoryId = $_REQUEST['subcategoryId'];

    $this->model->readProducts($subcategoryId);

 }



}

?>