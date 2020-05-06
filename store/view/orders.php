<?php

require_once("View.php");

class ordersview extends view{

function output(){

$i=1;
foreach($this->model->getordersArray() as $orders){
  $str = "";
            $str.=   "<td>".$i++."</td>";
            $str.="<td>".$orders->getComment()."</td>";
            $str.="<td>".$orders->getStatus()."</td>";
            $str.="<td>".$orders->getCreatedtime()."</td>";
            $str.="<td><a id='button' href=''>View</a></td>";

}


                      return $str;

}

}

?>