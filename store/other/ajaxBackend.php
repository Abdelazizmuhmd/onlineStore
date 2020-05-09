<?php

require_once("../model/menu.php");
require_once("../controller/adminController.php");
require_once("../View/adminproducts.php");
$subid=$_REQUEST['subid'];
$model = new menu();
$controller= new adminController($model);
$controller->showproducts($subid);
$view = new adminproductsView($model,$controller);
echo $view->products();
?>