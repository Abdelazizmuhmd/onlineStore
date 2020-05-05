<?php

  require_once("../model/user.php");
  require_once("../controller/userOrder.php");
  require_once("../view/clientProducts.php");

  $model = new user();
  $controller = new userOrderController($model);
  $controller->getuser();
  $view = new clientProducts($controller, $model);

  echo $view->output();
?>