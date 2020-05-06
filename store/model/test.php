<?php
require_once("../model/user.php");
require_once("../controller/userorder.php");
require_once("../view/checkOutModel.php");

$model= new user();
$controller=new userOrderController($model);
$controller->getuser();
$view =new viewCheckOut($model,$controller);

$view->userdetails();


?>