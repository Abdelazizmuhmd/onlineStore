<?php
require_once("../model/Model.php");
require_once("../model/order.php");
require_once("../model/report.php");

?>
<?php
class user extends Model
{
    
    private $firstName;
    private $id;
    private $lastName;  
    private $email;
    private $phone;
    private $address;  
    private $apartmant;
    private $city;
    private $userType;
    private $orders;
    private $report;
    function __construct()
    {   $this->orders[]=new order();
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

function __construct0() {
  }
 function __construct1($id)
    { 
   $this->getuser($id);        
    }
    //test
function getordersArray(){
    return $this->orders;
}

   //test

    function getorders($userId){
        $this->getvalidation();
         $this->validation->validateNumber($userId,1,100000);
    $this->connect();
    if($this->userType=="client" || $this->userType=="guest" ){
    $sql = "select id from `order` where userid=:userid and isdeleted = 0";
    $this->db->query($sql);
    $this->db->bind(':userid',$userId,PDO::PARAM_INT);
        }else{
       
     $sql = "select id from `order`where isdeleted = 0 ";
     $this->db->query($sql);
        }
            $this->db->execute();

        
    $row = $this->db->getdata();
    if ($this->db->numRows() > 0){
        
    foreach($row as $order){
    $this->orders[]=new order($order->id);
    }
    }
    }
    
     //test
    function getorderdetails($orderid){
     $this->orders[]= new order($orderid);
     $this->orders[0]->getorderdetails($orderid);
    }
    //test
    function makeorder($productdetails){
    $order=new order($this->id,$productdetails);
    }
    
    
    function login($email,$password){
          $this->getvalidation();
          $this->validation->validateLength($password,1,300);
         $this->validation->validateEmail($email,1,250);

        
        $password=sha1($password);
        
        $this->connect();
        $sql = "select id from user where email=:email and password=:password";
        $this->db->query($sql);
        $this->db->bind(':password',$password,PDO::PARAM_STR);
        $this->db->bind(':email',$email,PDO::PARAM_STR);       
        $this->db->execute();
        $row = $this->db->getdata();
        if ($this->db->numRows() > 0){
        $this->getuser($row[0]->id);
            session_start();
            $_SESSION["usertype"]=$this->userType;
            $_SESSION['name']=$this->firstName;
            $_SESSION['id']=$this->id;

            
        }
    }
        
    function updateAddress($firstname,$lastname,$address,$apartmant,$city,$phone){
          $this->getvalidation();
          $this->validation->validateString($firstname,1,100);
          $this->validation->validateString($lastname,1,100);
          $this->validation->validateMixedString($address,1,400);
          $this->validation->validateMixedString($apartmant,1,300);
          $this->validation->validateString($city,1,100);
          $this->validation->validateNumber($phone,1,100);
 
                $this->connect();

        $sql = "update user set firstname=:firstname,lastname=:lastname,phone=:phone,  address=:address,apartmant=:apartmant,city=:city where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$this->id,PDO::PARAM_INT);
        $this->db->bind(':address',$address,PDO::PARAM_STR);
        $this->db->bind(':firstname',$firstname,PDO::PARAM_STR);
        $this->db->bind(':lastname',$lastname,PDO::PARAM_STR);
        $this->db->bind(':phone',$phone,PDO::PARAM_STR);
        $this->db->bind(':apartmant',$apartmant,PDO::PARAM_STR);
        $this->db->bind(':city',$city,PDO::PARAM_STR);
        $this->db->execute();
    } 
        
    function guestsignup($firstName,$lastName,$email,$address,$apartment,$city,$phone){
           $this->getvalidation();
          $this->validation->validateString($firstName,1,100);
          $this->validation->validateString($lastName,1,100);
        
          $this->validation->validateEmail($email,1,400);
        
          $this->validation->validateMixedString($address,1,400);
        
          $this->validation->validateMixedString($apartmant,1,300);
        
          $this->validation->validateString($city,1,100);
          $this->validation->validateNumber($phone,1,100);
        
        $this->connect();
        $sql = "insert into user(firstname,lastname,address,apartmant,city,email,usertype,phone) values(:firstname,:lastname,:address,:apartmant,:city,:email,:usertype,:phone)";
        $this->db->query($sql);
        $this->db->bind(':firstname',$firstName,PDO::PARAM_STR);
        $this->db->bind(':lastname',$lastName,PDO::PARAM_STR);
        $this->db->bind(':address',$address,PDO::PARAM_STR);
        $this->db->bind(':apartmant',$apartment,PDO::PARAM_STR);
        $this->db->bind(':city',$city,PDO::PARAM_STR);
        $this->db->bind(':email',$email,PDO::PARAM_STR);
        $this->db->bind(':phone',$phone,PDO::PARAM_STR);
        $this->db->bind(':usertype',"guest",PDO::PARAM_STR);
        $this->db->execute();
        $id=$this->db->lastInsertedId();
        $this->getuser($id);
    }
    function signup($firstname,$lastname,$password,$email){
          $this->getvalidation();
          $this->validation->validateString($firstname,1,100);
          $this->validation->validateString($lastname,1,100);
          $this->validation->validateLength($password,1,300);
          $this->validation->validateEmail($email,1,100);

        $this->connect();

        $query = "select * from user where email=:email";
        $this->db->query($query);
        $this->db->bind(':email',$email,PDO::PARAM_STR);
       
        $this->db->execute();
        
        if($this->db->numRows()<=0) 
        {
        $password=sha1($password);
        $sql = "insert into user(firstname,lastname,password,email,Usertype) values(:firstname,:lastname,:password,:email,:usertype)";
        $this->db->query($sql);
        $this->db->bind(':firstname',$firstname,PDO::PARAM_STR);
        $this->db->bind(':lastname',$lastname,PDO::PARAM_STR);
        $this->db->bind(':password',$password,PDO::PARAM_STR);
        $this->db->bind(':email',$email,PDO::PARAM_STR);
        $this->db->bind(':usertype',"client",PDO::PARAM_STR);
        $this->db->execute();
        $id=$this->db->lastInsertedId();
        $this->getuser($id);
}
    }
    

    function getuser($id){
         $this->getvalidation();
          $this->validation->validateNumber($id,1,100000);
        
                $this->connect();
        $sql = "select * from user where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id,PDO::PARAM_INT);
        $this->db->execute();
        $row = $this->db->getdata();
        if ($this->db->numRows() > 0){

        $this->id = $row[0]->id;
        $this->firstName=$row[0]->firstname;
        $this->lastName=$row[0]->lastname;
        $this->email=$row[0]->email;
        $this->phone=$row[0]->phone;
        $this->address=$row[0]->address;
        $this->city=$row[0]->city;
        $this->apartmant=$row[0]->apartmant;
        $this->userType=$row[0]->usertype;
        }
    }
    function deleteuser($id){
         $this->getvalidation();
          $this->validation->validateNumber($id,1,100000);
                $this->connect();

        $sql = "update  user set isdeleted=1 where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id,PDO::PARAM_INT);
        $this->db->execute();
    }
    function checkEmail($email){
        $this->connect();
        $query = "select * from user where email=:email";
        $this->db->query($query);
        $this->db->bind(':email',$email,PDO::PARAM_STR);
       
        $this->db->execute();
        return $this->db->numRows();

        }
    function generateReport(){
        $this->report=new report();
    }
function getreport(){
    return $this->report;
}
    
    function setID($id)
    {
        $this->id =$id;
    }
    function setfirstName($firstName)
    {
        $this->firstName =$firstName;
    }
    function setlastName($lastName)
    {
        $this->lastName =$lastname;
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
      return $this->firstName;
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
    function getAddress()
    {
      return $this->address;
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