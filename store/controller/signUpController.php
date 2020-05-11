<?php


require_once("Controller.php");

class signUpController extends Controller{

 public function signUP(){
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $this->model->signup($firstname,$lastname,$password,$email);

 }

 public function guestSignUp(){
    $firstName = $_REQUEST['firstname'];
    $lastName = $_REQUEST['lastname'];
    $address = $_REQUEST['address'];
    $apartment = $_REQUEST['apartment'];
    $city = $_REQUEST['city'];
    $email = $_REQUEST['email']; 
    $this->model->guestsignup($firstName,$lastName,$address,$apartment,$city,$email);

 }





}

?>