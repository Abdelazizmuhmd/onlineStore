<?php

require_once("../model/productdetails.php");
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
$model= new productDetails();

$model->insert($_REQUEST['productid'],$_REQUEST['productColor'],$_REQUEST['small'],$_REQUEST['Medium'],$_REQUEST['Large'],$_REQUEST['xLarge'],$_REQUEST['2xLarge'],$_REQUEST['3xLarge'],$imgArr);



?>