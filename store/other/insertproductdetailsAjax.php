<?php

require_once("../model/productdetails.php");
require_once("../other/compress/lib/ImageResize.php");
require_once("../other/compress/lib/ImageResizeException.php");
use \Gumlet\ImageResize;



if(!isset($_FILES['files']['name']) || 
!isset($_REQUEST['productid']) || !isset($_REQUEST['productColor']) ||

!isset($_REQUEST['small']) ||!isset($_REQUEST['Medium']) ||


!isset($_REQUEST['Large']) ||!isset($_REQUEST['xLarge'])||
!isset($_REQUEST['2xLarge']) ||!isset($_REQUEST['3xLarge']) 

){
echo "There is an error with inserting products Details";
header("location:../public/adminproducts.php");


}


$imgArr=[];
 if(is_array($_FILES))   
 {  foreach ($_FILES['files']['name'] as $name => $value)  
      {  
     
           $file_name = explode(".", $_FILES['files']['name'][$name]);  
           $allowed_ext = array("jpg", "jpeg", "png", "gif");  
           if(in_array($file_name[1], $allowed_ext))  
           {  
               $sourcePath = $_FILES['files']['tmp_name'][$name];  
               $generalname = md5(rand());
               
               $targetPath="../images/".$generalname; 
               $originalPhotoTargetPath = $targetPath.'originalphoto.jpeg';
    if(move_uploaded_file($sourcePath, $originalPhotoTargetPath))  
                {  

                
                $image = new ImageResize($originalPhotoTargetPath);
                $image->interlace = 0;    
                $image->gamma(false);
                $image->resize(305, 460, $allow_enlarge = True);

                $image->save($targetPath."grande.jpeg");
                   
                $image = new ImageResize($originalPhotoTargetPath);
                $image->interlace = 0;    
                $image->gamma(false);
                $image->resize(145, 217, $allow_enlarge = True);
                $image->save($targetPath."large.jpeg"); 
                $image = new ImageResize($originalPhotoTargetPath);
                $image->interlace = 0;    
                $image->gamma(false);
                $image->resize(43, 64, $allow_enlarge = True);
                $image->save($targetPath."small.jpeg");   
                
                $imgArr[]=$targetPath;               

            }
           }            
      }  
 } 
$model= new productDetails();

$model->insert($_REQUEST['productid'],$_REQUEST['productColor'],$_REQUEST['small'],$_REQUEST['Medium'],$_REQUEST['Large'],$_REQUEST['xLarge'],$_REQUEST['2xLarge'],$_REQUEST['3xLarge'],$imgArr);

?>