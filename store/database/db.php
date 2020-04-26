<?php
require_once("config.php");

class Database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    
    private $conn;
    private $result;
    public $sql;

    function __construct() {
        $this->servername = DB_SERVER;
        $this->username = DB_USER;
        $this->password = DB_PASS;
        $this->dbname = DB_DATABASE;
        $this->connect();
        
      }

   public function connect(){
    $dsn= "mysql:host=".$this->$servername.";dbname=".$this->$dbname;
    $options = array(
        PDO::ATTR_PERSISTENT => true,// if there is a connection that is already open use it.
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION//pdo will throw a pdo exception
    );
    try {
    $conn = new PDO($dsn, $username, $password,$options);
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
   }
    

    
    //prepare sql query
    public function query()
    { 
     $this->stmt = $this->dbh->prepare($sql);
    }

    //execute sql query
    public function execute()
    {
        return $this->stmt->execute();
    }

    //get all data in form of objects
    public function getdata()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //get the number of row returned
    public function numRows()
    {
        return $this->stmt->rowCount();
    }

    //get number of rows changed or affected by query
    public function lastInsertedId()
    {
        return $this->dbh->lastInsertId();
    }
}
?>