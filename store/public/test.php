<?php
require_once("../model/menu.php");
require_once("../controller/menuController.php");
require_once("../View/menuView.php");


$model = new menu();
$controller= new menuController($model);
$controller->getAllCategoriesDetails();
$view= new menuView($model,$controller);




?>