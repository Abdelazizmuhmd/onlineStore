<?php
require_once("Controller.php");
class userOrder extends Controller{
 public function getOrders(){
     $userid = $_REQUEST['userid'];
     $this->model->getorders($userid);
 }
 public function getOrderDetails(){
    $orderid = $_REQUEST['orderid'];
    $this->model->getorderdetails($orderid);
}
public function updateOrder(){
    $orderid = $_REQUEST['orderid'];
    $status = $_REQUEST['status'];
    $this->model->updateorder($orderid,$status);
}
    
public funtion getuser(){
    $userid=$_REQUEST['userid'];
    $this->modal->getuser($userid);
    
}
}
?>