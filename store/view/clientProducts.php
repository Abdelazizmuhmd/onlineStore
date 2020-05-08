<?php

require_once("../view/View.php");

class clientProducts extends View{

function userOutput(){

$orderArray = $this->model->getordersArray();
echo $this->model->getfirstName();
$str = "";
$str.="<div class='jumbotron'>";
                $str.="<div class='row'>";
                    
                      $str.= "<div class='col-md-8 col-xs-12 col-sm-6 col-lg-8'>";
                         $str.=  "<div class='container' style='border-bottom:1px solid black'>";
                          $str.=    "<h2>Name : ".$this->model->getfirstName()." ".$this->model->getlastName()."</h2>";
                          $str.= "</div>";
                          $str.=   "<hr>";
                          $str.= "<ul class='container details'>";
                $str.=  "<li><p><span class='glyphicon glyphicon-earphone one' style='width:50px;'></span>Phone : ".$this->model->getphone()."</p></li>";
                             $str.="<li><p><span class='glyphicon glyphicon-shopping-cart' style='width:50px;'></span> Number of orders : ".
                             count($orderArray)."</p></li>";
                             //$str.="<li><p><span class='glyphicon glyphicon-sort' style='width:50px;'></span>53</p></li>";
                             $str.="<li><p><span class='glyphicon glyphicon-envelope one' style='width:50px;'></span>Email : ".$this->model->getemail()."</p></li>";

                             $str.="<li><p><span class='glyphicon glyphicon-map-marker one' style='width:50px;'></span> City : ".$this->model->getcity()."</p></li>";
                           
                           $str.="</ul>";
                      $str.= "</div>";
                   $str.="</div>";
                   return $str;
}
function productoutput(){
$str ="";
$i=1;
foreach($this->model->getordersArray()[0]->getProducts() as $products){

$str.="<tr><td align='center'><br>".$i++."</td>";
$str.="<td align='center'><img width='80' height='100' src='images/t-shirt2.PNG'></td>"; //Still NEED GET HERE
$str.="<td align='center'><br>".$products->getName()."</td>";
$str.="<td align='center'><br>".$products->getCode()."</td>";
$str.="<td align='center'><br>2XL</td>"; //Still NEED GET SIZE HERE
$str.="<td align='center'><br>3</td>"; //Still NEED GET Quantity HERE
$str.="<td align='center'><br>".$products->getCost()."</td>"; //SHOULD BE HERE COLOR
$str.="<td align='center'><br>".$products->getWeight()."</td>";
$str.="<td align='center'><br>".$products->getDescription()."</td>";


}$str.="</tr>";
                      return $str;
}
function output(){
   
}
}
?>