<?php 

require_once("../model/menu.php");
require_once("../controller/menuController.php");
require_once("../view/menuView.php");

$numRows = $_REQUEST['numRows'];
$subcategoryid= $_REQUEST['subcategoryid'];

$model = new menu();
$controller=new menuController($model);

$view =new menuView($model,$controller);
$model->getCategories()[0]->getSubcategories()[0]->readProducts($subcategoryid,$numRows);

$view->productsOutput();

?>