<?php

require_once("View.php");

class clientProducts extends View{

function output(){

$orderArray = $this->model->getordersArray();

$str = "";
$str.="<div class='jumbotron'>";
                $str.="<div class='row'>";
                    
                      $str.= "<div class='col-md-8 col-xs-12 col-sm-6 col-lg-8'>";
                         $str.=  "<div class='container' style='border-bottom:1px solid black'>";
                          $str.=    "<h2>".$this->model->getfirstName()." ".$this->model->getlastName()."</h2>";
                          $str.= "</div>";
                          $str.=   "<hr>";
                          $str.= "<ul class='container details'>";
                $str.=  "<li><p><span class='glyphicon glyphicon-earphone one' style='width:50px;'></span>".$this->model->getphone()."</p></li>";
                             $str.="<li><p><span class='glyphicon glyphicon-shopping-cart' style='width:50px;'></span>".
                             count($orderArray)."</p></li>";
                             $str.="<li><p><span class='glyphicon glyphicon-sort' style='width:50px;'></span>53</p></li>";
                             $str.="<li><p><span class='glyphicon glyphicon-envelope one' style='width:50px;'></span>".$this->model->getemail()."</p></li>";

                             $str.="<li><p><span class='glyphicon glyphicon-map-marker one' style='width:50px;'></span>".$this->model->getcity()."</p></li>";
                           
                           $str.="</ul>";
                      $str.= "</div>";
                   $str.="</div>";







//$products=$this->model->orders()[0]->getProducts();

$str.="<tr><td align='center'><br>1</td>";
$str.="<td align='center'><img width='80' height='100' src='images/t-shirt2.PNG'></td>";
$str.="<td align='center'><br>Pat Sport T-shirt</td>";
$str.="<td align='center'><br>P156982</td>";
$str.="<td align='center'><br>2XL</td>";
$str.="<td align='center'><br>3</td>";
$str.="<td align='center'><br>Blue</td>";
$str.="<td align='center'><br>150 grams</td>";
$str.="<td align='center'><br>A simple cotton design embellished with a crew neck, short sleeves</td>";
$str.="</tr>";


                      return $str;
}

}
?>