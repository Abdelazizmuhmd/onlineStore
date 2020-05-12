<?php
require_once("../controller/Controller.php");
class checkOutController extends Controller{
    
function getuser($userid){
        
$this->model->getuser($userid);
        
}
function makeorderclient(){
    $firstname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $address=$_REQUEST['address'];
    $apartmant=$_REQUEST['apartmant'];
    $city=$_REQUEST['city'];
    $phone=$_REQUEST['phone'];

$this->model->updateAddress($firstname,$lastname,$address,$apartmant,$city,$phone);
$this->makeorder();
}

function makeorderguest(){
    $firstname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $address=$_REQUEST['address'];
    $apartmant=$_REQUEST['apartmant'];
    $email=$_REQUEST['email'];
    $city=$_REQUEST['city'];
    $phone=$_REQUEST['phone'];
$this->model->guestsignup($firstname,$lastname,$email,$address,$apartmant,$city,$phone);
$this->makeorder();
}
    
    
    
    
    
function makeorder(){
 if(isset($_COOKIE['cook'])){
     $productdetails=array();
$products=json_decode($_COOKIE['cook'], true);
    foreach($products as $i=>$product){
 $productdetails[]=array("id"=>$product['id'],"size"=>$product['size'],"quantity"=>$product['quantity']);   
    }
$this->model->makeOrder($productdetails);
}
    
}}
    ?>