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
            if($orders->getStatus() == 'pending')
             $str.="<td><a id='button' class='update' href='orders.php?action=updatestat&stat=prepared&orderid=".$orders->getId()."'>prepare</a></td>";
            else if($orders->getStatus() == 'prepared')
             $str.="<td><a id='button-finish' class='update' href='orders.php?action=updatestat&stat=finished&orderid=".$orders->getId()."'>finish</a></td>";
            else if($orders->getStatus() == 'finished')
             $str.="<td><a id='button-deliver' class='update' href='orders.php?action=updatestat&stat=delivered&orderid=".$orders->getId()."'>deliver</a></td>";
            else 
             $str.="<td></td>";
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