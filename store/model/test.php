<?php 
require_once("menu.php");

$menu = new menu();

$menu->getcategories()[0]->getSubcategories()[0]->insertSubCategory("hoodie");


$menu->fillCategoriesArray();

echo $menu->getcategories()[0]->getSubcategories()[0]->getProducts()[0]->getName();

    
    

    
 

    







?>