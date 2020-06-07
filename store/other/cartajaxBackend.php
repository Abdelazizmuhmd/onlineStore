 <?php 
if(!isset($_REQUEST['productdetailid']) ||!isset($_REQUEST['imageurl']) ||
	!isset($_REQUEST['productname']) ||!isset($_REQUEST['productprice']) ||
	!isset($_REQUEST['colors']) ||!isset($_REQUEST['sizes']) ||
	!isset($_REQUEST['quantity'])){
header("location:../public/products.php");


}
$productdetail_id=$_REQUEST['productdetailid'];
$product_image=$_REQUEST['imageurl'];
$product_name=$_REQUEST['productname'];
$ProductPrice=$_REQUEST['productprice'];
$color=$_REQUEST['colors'];
$size=$_REQUEST['sizes'];
$quantity=$_REQUEST['quantity'];
$NewArr=array();

$flag=0;
if(isset($_COOKIE['cook'])){
    $products= json_decode($_COOKIE['cook'],true);
    foreach($products as $product){
    	if($product['id'] == $productdetail_id && $product['size'] == $size){
    		$product['quantity']+=$quantity;
    		$flag =1;
    	}
        $NewArr[]=$product;   
    } 
}
if($flag ==1){


$j=json_encode($NewArr);

$expire = time() + 60*60*24*30;

setcookie('cook',$j,$expire,'/');



header("location:../public/cart.php");
}else{
$productt = array('id'=>$productdetail_id,'name'=>$product_name,"image_url"=>$product_image,"color"=>$color,"size"=>$size, "quantity"=>$quantity,"price"=>$ProductPrice);


$NewArr[]=$productt;

$j=json_encode($NewArr);

$expire = time() + 60*60*24*30;

setcookie('cook',$j,$expire,'/');



header("location:../public/cart.php");
}



  ?>