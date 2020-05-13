  <?php

require_once("View.php");

class ordersview extends View{

function output(){
$i=0;
$str = "";
if(count($this->model->getordersArray())>0){
foreach($this->model->getordersArray() as $orders){
  if($i>0){
            $str.="<tr>";
            $str.=   "<td>".$i."</td>";
            $str.="<td>".$orders->getComment()."</td>";
            $str.="<td>".$orders->getStatus()."</td>";
            $str.="<td>".$orders->getCreatedtime()."</td>";
            $str.="<td><a id='button' href='clientproducts.php?userid=".$orders->getUserid()."&orderid=".$orders->getId()."'>View</a></td>";
            $str.="<td><a id='button' class='Delete' onclick='return confirm('Delete this order?');' href='orders.php?action=delete&orderid=".$orders->getId()."'>Delete</a></td>";
            $str.="<tr>";
          }
            $i++;

}
}

                      return $str;

}

}

?>