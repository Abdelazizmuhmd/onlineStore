<?php


require_once("Controller.php");

class loginController extends Controller{

 public function login(){

     $email = $_REQUEST['email'];
     $password = $_REQUEST['password'];

     $this->model->login($email,$password);

 }







}

?>