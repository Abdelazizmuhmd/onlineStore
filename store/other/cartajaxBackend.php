 <?php 
$product_id=$_REQUEST['product_id'];
$product_image=$_REQUEST['product_image1'];
$product_name=$_REQUEST['product_name1'];
$ProductPrice=$_REQUEST['product_price1'];
$color=$_REQUEST['color'];
$size=$_REQUEST['size'];
$quantity=$_REQUEST['Quantity'];
$NewArr=array();

$cartNumber=1;
if(isset($_COOKIE['cartNumber'])){
$cartNumber=$_COOKIE['cartNumber']+1;
}


if(isset($_COOKIE['cook'])){
    $products= json_decode($_COOKIE['cook'],true);
    foreach($products as $product){
        $NewArr[]=$product;   
    } 
}

$productt = array('id'=>$product_id,'name'=>$product_name,"image_url"=>$product_image,"color"=>$color,"size"=>$size, "quantity"=>$quantity,"price"=>$ProductPrice);


$NewArr[]=$productt;

$j=json_encode($NewArr);

$expire = time() + 60*60*24*30;

setcookie('cook',$j,$expire,'/');


setcookie('cartNumber',$cartNumber,$expire,'/');

header("location:khaled_Addproduct.php");



  ?>