<?php
require_once("../model/product.php");
$imgArr=[];
 if(is_array($_FILES))   
 {  foreach ($_FILES['files']['name'] as $name => $value)  
      {  
           $file_name = explode(".", $_FILES['files']['name'][$name]);  
           $allowed_ext = array("jpg", "jpeg", "png", "gif");  
           if(in_array($file_name[1], $allowed_ext))  
           {  
                $new_name = md5(rand()) . '.' . $file_name[1];  
                $sourcePath = $_FILES['files']['tmp_name'][$name];  
                $targetPath = "../images/".$new_name;  
                if(move_uploaded_file($sourcePath, $targetPath))  
                {  
                    $imgArr[]=$targetPath;
                }                 
           }            
      }  
 } 

$productdetail=
array("color"=>$_REQUEST['productColor'],"s"=>$_REQUEST['small'],"m"=>$_REQUEST['Medium'],"l"=>$_REQUEST['Large'],"xl"=>$_REQUEST['xLarge'],"xxl"=>$_REQUEST['2xLarge'],"xxxl"=>$_REQUEST['3xLarge'],"img"=>$imgArr);


$model = new product();
$productid=$model->insertProduct($_REQUEST['productName'],$_REQUEST['productCode'],$_REQUEST['productCost'],$_REQUEST['productProfit'],$_REQUEST['productDescription'],$_REQUEST['productWeight'],$productdetail,$_REQUEST['subcategoryid']);


echo $productid;


 ?>  