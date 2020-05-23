<?php

require_once("../model/productdetails.php");
require_once("../other/compress/lib/ImageResize.php");
require_once("../other/compress/lib/ImageResizeException.php");
use \Gumlet\ImageResize;


$imgArr=[];
 if(is_array($_FILES))   
 {  foreach ($_FILES['files']['name'] as $name => $value)  
      {  
           $file_name = explode(".", $_FILES['files']['name'][$name]);  
           $allowed_ext = array("jpg", "jpeg", "png", "gif");  
           if(in_array($file_name[1], $allowed_ext))  
           {       echo"ds22a";

               $sourcePath = $_FILES['files']['tmp_name'][$name];  
               $generalname = md5(rand());
               $targetPath="../images/".$generalname; 
            
                $image = new ImageResize($sourcePath);
                $image->save($targetPath."originalphoto.jpeg");
               
                $image = new ImageResize($sourcePath);
                $image->interlace = 0;    
                $image->gamma(false);
                $image->scale(50);    
                $image->save($targetPath."grande.jpeg");
                   
                $image = new ImageResize($sourcePath);
                $image->interlace = 0;    
                $image->gamma(false);
                $image->scale(25);    
                $image->save($targetPath."large.jpeg"); 
               
                $image = new ImageResize($sourcePath);
                $image->interlace = 0;    
                $image->gamma(false);
                $image->scale(15);    
                $image->save($targetPath."small.jpeg");   
                $imgArr[]=$targetPath; 
                              
           }            
      }  
 } 
$model= new productDetails();

$model->insert($_REQUEST['productid'],$_REQUEST['productColor'],$_REQUEST['small'],$_REQUEST['Medium'],$_REQUEST['Large'],$_REQUEST['xLarge'],$_REQUEST['2xLarge'],$_REQUEST['3xLarge'],$imgArr);

?>