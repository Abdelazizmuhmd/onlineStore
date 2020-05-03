<?php
require_once("Model.php");
require_once("order.php");
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

    function __construct(){
        
    }
    function getorders($userId){
                $this->connect();

    $sql = "select id from order where userid=:userid";
    $this->db->query($sql);
    $this->db->bind(':userid',$userId,PDO::PARAM_INT);
    $this->db->execute();
    $row = $this->db->getdata();
    if ($this->db->numRows() > 0){
    foreach($row as $order){
    $this->orders[]=new order($order->id);
    }
    }
    }
    
    function makeorder($userid,$comment,$productsid){
    $order=new order($userid,$comment,$productsid);
    }
    
    
    function login($email,$password){
                $this->connect();

        $sql = "select id from user where email=:email,password=:password";
        $this->db->query($sql);
        $this->db->bind(':password',$email,PDO::PARAM_STR);
        $this->db->bind(':email',$password,PDO::PARAM_STR);        
        $this->db->execute();
        $row = $this->db->getdata();
        if ($this->db->numRows() > 0){
        $this->getuser($row[0]->id);
        }
        
    }
        
    function updateAddress($id,$address,$apartmant,$city){
                $this->connect();

        $sql = "update user set address=:address,apartmant=:apartmant,city=:city where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id,PDO::PARAM_INT);
        $this->db->bind(':address',$address,PDO::PARAM_STR);
        $this->db->bind(':apartmant',$apartmant,PDO::PARAM_STR);
        $this->db->bind(':city',$city,PDO::PARAM_STR);
        $this->db->execute();
    } 
        
    function guestsignup($firstName,$lastName,$address,$apartmant,$city,$email){
                $this->connect();

        $sql = "insert into user(firstname,lastname,address,apartmant,city,email,Usertype) values(:firstname,:lastname,:apartmant,:city,:address,:email,:usertype)";
        $this->db->query($sql);
        $this->db->bind(':firstname',$firstname,PDO::PARAM_STR);
        $this->db->bind(':lastname',$lastname,PDO::PARAM_STR);
        $this->db->bind(':address',$address,PDO::PARAM_STR);
        $this->db->bind(':email',$email,PDO::PARAM_STR);
        $this->db->bind(':usertype',"guest",PDO::PARAM_STR);
        $this->db->execute();
        $id=$this->db->lastInsertedId();
        $this->getuser($id);
    }
    function signup($firstname,$lastname,$password,$email){
        $this->connect();
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
    

    function getuser($id){
                $this->connect();

        $sql = "select * from user where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id,PDO::PARAM_INT);
        $this->db->execute();
        $row = $this->db->getdata();
        if ($this->db->numRows() > 0){
            
        $this->id = $row[0]->id;
        $this->firstname=$row[0]->firstname;
        $this->lastname=$row[0]->lastname;
        $this->email=$row[0]->email;
        $this->phone=$row[0]->phone;
        $this->address=$row[0]->address;
        $this->city=$row[0]->city;
        $this->apartmant=$row[0]->apartmant;
        $this->usertype=$row[0]->usertype;
        }
    }
    function deleteuser($id){
                $this->connect();

        $sql = "update  user set isdeleted=1 where id=:id";
        $this->db->query($sql);
        $this->db->bind(':id',$id,PDO::PARAM_INT);
        $this->db->execute();
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