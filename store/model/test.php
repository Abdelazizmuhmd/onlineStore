<?php 
require_once("user.php");
$user =new user();
var_dump($user);
echo $user->makeorder(1,"commeant","pedding",array(81));
?>