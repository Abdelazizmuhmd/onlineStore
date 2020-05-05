<?php 
require_once("View.php");
class adminproducts extends View{

function categoryoutput(){
  $str = "";
  $catarr = $this->model->getcategories();
  for($i = 1;$i<count($catarr);$i++)
   $str .= "<option>".$catarr[$i]->getName()."</option>";
  return $str;
}

function subcategoryoutput(){
  $str = "";
  $subarr = $this->model->getcategories()[0]->getsubcategories();
  for($i = 1;$i<count($subarr);$i++)
   $str .= "<option>".$subarr[$i]->getName()."</option>";
  return $str;
}

function products(){
  $productarr = $this->model->getcategories()[0]->getsubcategories()[0]->getproducts();
  $str ="";
  for ($i = 1;$i<count($productarr);$i++)
  {  $details = $productarr[$i]->getProductDetails();
     //$img = $details->getArray()[0];
    for($j = 0;$j<count($details);$j++)
     {
         $str .= "<tr>
            <td><img src=".$details[$j]->getArray()[0]." style='width
            :50px;height:50px;position: relative;'></td>
            <td><label>".$productarr[$i]->getName()."</label></td>
            <td>".$productarr[$i]->getCost()."</td>
            <td>".$productarr[$i]->getCode()."</td>
            <td>".$productarr[$i]->getDescription()."</td>
            <td>".$details[$j]->getColor()."</td>
            <td>".$details[$j]->getSmall()."</td>
            <td>".$details[$j]->getMedium()."</td>
            <td>".$details[$j]->getLarge()."</td>
            <td>".$details[$j]->getXl()."</td>
            <td>".$details[$j]->getXxl()."</td>
            <td>".$details[$j]->getXxl()."</td>
            <td><a id='button' href=''>Edit</a></td>
            <td><a id='button' href=''><i class='fa fa-trash'></i></a></td>
          </tr>";
     }
 }
 return $str;
}
}
?>