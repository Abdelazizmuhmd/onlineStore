 <?php 
$product_id=$_REQUEST['product_id'];
$product_image=$_REQUEST['product_image1'];
$product_name=$_REQUEST['product_name1'];
$ProductPrice=$_REQUEST['product_price1'];
$color=$_REQUEST['color'];
$size=$_REQUEST['size'];
$quantity=$_REQUEST['Quantity'];

$val=array(array('id'=>$product_id,'name'=>$product_name,"image_url"=>$product_image,"color"=>$color,"size"=>$size, "quantity"=>$quantity,"price"=>$ProductPrice));

  $ar=json_encode($val);
  setcookie('cook',$ar);
   
  setcookie('cartNumbers',155);


  echo true;

  
  ?>