<?php 
require_once("menu.php");

$menu = new menu();
echo"<br>";
echo $menu->getcategories()[0]->getSubcategories()[0]->getProducts()[0]->getName();





?>