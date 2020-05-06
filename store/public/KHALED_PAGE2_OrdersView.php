<?php

  require_once("../model/user.php");
  require_once("../controller/userOrder.php");
  require_once("../view/orders.php");

  $model = new user();
  $controller = new userOrderController($model);
  $controller->getuser();
  $controller->getOrderDetails();
  $view = new ordersview($model, $controller);

  echo $view->output();
?>