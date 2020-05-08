<?php





if (isset($_POST['add'])) {
	$val=array(array('id'=>"1", "image_url"=>"../images/c.jpg","color_size"=>"black/xL", "quantity"=>"2","price"=>"70"),
  array('id'=>"35","image_url"=>"../images/b.jpg","color_size"=>"white/3xl", "quantity"=>"4","price"=>"100"));
 	$ar=json_encode($val);
	setcookie('cook',$ar);
	header("location:checkout.php");
}

//echo $_COOKIE["cook"];
?>
<form method="post" action="checkout.php">
	<input type="submit" name="add" value="ADD">
</form>

