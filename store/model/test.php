<?php 
require_once("menu.php");

$menu = new menu();
$menu->getcategories()[0]->getSubcategories()[0]->getProducts()[0]->insertProduct("poloo","42","22","23","this is top","42",array(
    array(
    'color' => "blue",
    's'=>"2",
    'm'=>"3",
    'l'=> "2",
    'xl'=>"2",
    'xxl'=>"22",
    'xxxl'=>"22",
    'img'=>array("2")
 )));







?>