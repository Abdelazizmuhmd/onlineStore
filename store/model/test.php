<?php
require_once("../model/menu.php");
require_once("../controller/adminController.php");
require_once("../view/adminproducts.php");

  $model = new menu();
  $controller = new adminController($model);
  $controller->getAllCategories();
  $view = new adminproducts($model, $controller);
  echo $view->categoryoutput();
  echo $view->subcategoryoutput();

?>