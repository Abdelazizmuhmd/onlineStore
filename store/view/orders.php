  <?php

require_once("View.php");

class ordersview extends View{

function output(){
$i=1;
if(count($this->model->getordersArray())>0){
foreach($this->model->getordersArray() as $orders){
  $str = "";
            $str.=   "<td>".$i++."</td>";
            $str.="<td>".$orders->getComment()."</td>";
            $str.="<td>".$orders->getStatus()."</td>";
            $str.="<td>".$orders->getCreatedtime()."</td>";
            $str.="<td><a id='button' href='clientproducts.php?userid=".$orders->getUserid()."&orderid=".$orders->getId()."'>View</a></td>";
            $str.="<td><a id='button' href='orders.php?action=delete&orderid=".$orders->getId()."'>Delete</a></td>";

}
}

                      return $str;

}

}

?>