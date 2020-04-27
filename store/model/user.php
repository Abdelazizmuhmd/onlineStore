<?php
class user{
    private $firstName;
    private $id;
    private $lastName;  
    private $email;
    private $phone;
    private $adress;  
    private $apartmant;
    private $city;
    private $userType;
    function __construct($id,$firstName="",$lastName="",$email="",$phone="",$adress="",$apartmant="",$city="",$userType="")
    {   
        $this->id=$id;
        $this->fristName =$firstName;
        $this->lastName =$lastName;
        $this->email =$email;
        $this->phone =$phone;
        $this->adress =$adress;
        $this->apartmant =$apartmant;
        $this->city =$city;
        $this->userType =$userType;

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