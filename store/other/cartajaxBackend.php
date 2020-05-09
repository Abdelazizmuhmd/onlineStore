 <?php 
echo "khaloood"; 
$product_id=$_REQUEST['product_id'];
$product_image1=$_REQUEST['product_image1'];
$product_name1=$_REQUEST['product_name1'];
$ProductPrice1=$_REQUEST['ProductPrice1'];
$color=$_REQUEST['color'];
$size=$_REQUEST['size'];
$quantity=$_REQUEST['quantity'];

$val=array(array('id'=>$product_id,'name'=>$product_name,"image_url"=>$product_image,"color"=>$color,"size"=>$size, "quantity"=>$quantity,"price"=>"70"));

  $ar=json_encode($val);
  setcookie('cook',$ar);
   
  echo true;

  
  ?>