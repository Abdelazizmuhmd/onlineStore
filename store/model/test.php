<?php 
require_once("menu.php");

$menu = new menu();
echo"<br>";
echo $menu->getcategories()[0]->getSubcategories()[2]->getProducts()[0]->getName();





?>