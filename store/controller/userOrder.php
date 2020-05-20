<?php
require_once("Controller.php");
class userOrderController extends Controller{
 public function getOrders(){

 	 //$userid = 1;
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
public function getOrder(){
    $orderid=$_REQUEST['orderid'];
    $this->model->getordersArray()[0]->readOrder($orderid);

}
    
public function getuser(){

    $userid=$_REQUEST['userid'];
    $this->model->getuser($userid);
    
}
public function delete(){
    
    $orderid=$_REQUEST['orderid'];

    $this->model->getordersArray()[0]->delete($orderid);
    header("location:../public/orders.php");
    
    
}
public function updatestat(){
    $orderid=$_REQUEST['orderid'];
    $status=$_REQUEST['stat'];
    $this->model->getordersArray()[0]->updateStat($orderid,$status);
    header("location:../public/orders.php");

    
}
}
?>