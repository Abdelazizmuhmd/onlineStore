<?php 
require_once("../view/View.php");
class adminproductsView extends View{

function getallcategories(){
$str="";
$categories = $this->model->getCategories();
$str.='<select name="categories" id="catselection" class="form-control categories combBox">';
$str.='<option disabled selected value> -- select an option -- </option>
';
foreach($categories as $i=>$category){
    
if($i>0){
    
$str.='<option value="'.$category->getId().'">'.$category->getName().'</option>';
}}
$str.='</select>';
$str.='<script>';
$str.='$(document).ready(function() {';
$str.='$(".categories").change(function() {';
$str.=' var val = $(this).val();';
$str.='document.getElementById("editcatgoryid").value =val;';
$str.='document.getElementById("deletecategoryid").value =val;';
$str.='document.getElementById("categoryid").value =val;';

$str.='if(1==0){}';

foreach($categories as $u=>$category){
 if($u>0){
 $subcategories=$category->getSubcategories();     
 $str.='else if (val == "'.$category->getId().'"){';
 $str.='$(".subcategory").html("'; 
if(is_iterable($subcategories)){
 foreach($subcategories as $k=>$subcategory){
 $str.='<option value='.$subcategory->getID().'>'.$subcategory->getName().'</option>';
    } }

  $str.='");}';

}}

$str.='});});';
$str.='</script>';
 
    return $str;
}
    
  
    


/*
function categoryoutput(){
  $str = "";
  $catarr = $this->model->getcategories();
  for($i = 1;$i<count($catarr);$i++)
   $str .= "<option>".$catarr[$i]->getName()."</option>";
  return $str;
}


function subcategoryoutput(){
  $str = "";
  $subarr = $this->model->getcategories()[]->getsubcategories();
  for($i = 0;$i<count($subarr);$i++)
   $str .= "<option>".$subarr[$i]->getName()."</option>";
  return $str;
}
*/

function products(){
  $productarr = $this->model->getcategories()[0]->getsubcategories()[0]->getproducts();
  $str ="";
    $length=count($productarr);
  for ($i = 1;$i<$length;$i++)
  {  $details = $productarr[$i]->getProductDetails();
     //$img = $details->getArray()[0];
   $dlength=count($details);
    for($j = 0;$j<$dlength;$j++)
     {
        
         $str .= "<tr>
            <td><img src=".$details[$j]->getArray()[0]." style='width
            :50px;height:50px;position: relative;'></td>
            <td><label>".$productarr[$i]->getName()."</label></td>
            <td>".(int)($productarr[$i]->getCost()+$productarr[$i]->getProfit())." L.E</td>
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