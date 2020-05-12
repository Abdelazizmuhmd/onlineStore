 <?php 
$productdetail_id=$_REQUEST['productdetailid'];
$product_image=$_REQUEST['imageurl'];
$product_name=$_REQUEST['productname'];
$ProductPrice=$_REQUEST['productprice'];
$color=$_REQUEST['colors'];
$size=$_REQUEST['sizes'];
$quantity=$_REQUEST['quantity'];
$NewArr=array();



if(isset($_COOKIE['cook'])){
    $products= json_decode($_COOKIE['cook'],true);
    foreach($products as $product){
        $NewArr[]=$product;   
    } 
}

$productt = array('id'=>$productdetail_id,'name'=>$product_name,"image_url"=>$product_image,"color"=>$color,"size"=>$size, "quantity"=>$quantity,"price"=>$ProductPrice);


$NewArr[]=$productt;

$j=json_encode($NewArr);

$expire = time() + 60*60*24*30;

setcookie('cook',$j,$expire,'/');




header("location:../public/cart.php");


  ?>