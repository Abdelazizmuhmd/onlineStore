<?php


require_once("Controller.php");

class signUpController extends Controller{

 public function signUP(){
    $firstname = $_REQUEST['firstName']
    $lastname = $_REQUEST['lastName']
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
     $this->model->signup($firstname,$lastname,$password,$email);

 }

 public function guestSignUp(){
    $firstName = $_REQUEST['firstName']
    $lastName = $_REQUEST['lastName']
    $address = $_REQUEST['address'];
    $apartment = $_REQUEST['apartment']
    $city = $_REQUEST['city']
    $email = $_REQUEST['email'];
     

     $this->model->guestsignup($firstName,$lastName,$address,$apartment,$city,$email);

 }





}

?>