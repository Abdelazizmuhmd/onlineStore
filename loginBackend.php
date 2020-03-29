 <?php   
 session_start();  
 $conn = mysqli_connect("localhost", "root", "", "patstore");

  if (isset($_POST['signin'])) {
        
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $query = "SELECT * FROM user WHERE email=? and password=?";
  
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt -> get_result();
    if($row=$result->fetch_assoc()){ //fetching the contents of the row {
    $_SESSION['login_user'] = $email;
    header("location: products.html");
    }else{
        echo "wrong password back to test again  ";
    }
  }
 ?>