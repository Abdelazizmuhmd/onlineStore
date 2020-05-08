<form method="post" action="cart.php">

	<?php 


$val=array("pat1"=>array('id'=>"1", "image_url"=>"../images/c.jpg","color_size"=>"black/xL", "quantity"=>"2","price"=>"70"),
  "pat2"=>array('id'=>"25","image_url"=>"../images/b.jpg","color_size"=>"white/3xl", "quantity"=>"4","price"=>"100"),"pat3"=>array('id'=>"10", "image_url"=>"../images/c.jpg","color_size"=>"black/xL", "quantity"=>"2","price"=>"70"));
 	$ar=json_encode($val);
	setcookie('cook',$ar);

	
	?>
	<input type="submit" name="add" value="ADD">
</form>

