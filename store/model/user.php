<?php
require_once("Model.php");
?>
<?php
class user extends Model
{
    private $firstName;
    private $id;
    private $lastName;  
    private $email;
    private $phone;
    private $adress;  
    private $apartmant;
    private $city;
    private $userType;
    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
     
   function __construct0()
    {   
       

    }
    
    function login(){
        
    }
    function signup(){
        
    }
    
    function updateUser(){
        
    }

    function insertUser(){
        
    }
    
    function deleteUser(){
        
    }
    
    function updateUser(){
        
    }
    function getuser(){
        
    }
    
    function setID($id)
    {
        $this->id =$id;
    }
    function setfirstName($firstName)
    {
        $this->fristName =$firstName;
    }
    function setlastName($lastName)
    {
        $this->lastName =$lastName;
    }
    function setEmail($email)
    {
        $this->email =$email;
    }
    function setPhone($phone)
    {
        $this->phone =$phone;
    }
    function setAdress($adress)
    {
        $this->adress =$adress;
    }
    function setApartmant($apartmant)
    {
        $this->apartmant =$apartmant;
    }
    function setCity($city)
    {
        $this->city =$city;
    }
    function setuserType($userType)
    {
        $this->userType =$userType;
    }
    function getID()
    {
      return $this->id;
    }
    function getfirstName()
    {
      return $this->fristName ;
    }
    function getlastName()
    {
      return $this->lastName;
    }
    function getEmail()
    {
      return $this->email;
    }
    function getPhone()
    {
      return $this->phone;
    }
    function getAdress()
    {
      return $this->adress;
    }
    function getApartmant()
    {
      return $this->apartmant;
    }
    function getCity()
    {
      return $this->city;
    }
    function getuserType()
    {
      return $this->userType;
    }
    











}


?>