<?php 
require_once("../model/user.php");
include_once("../other/session.php");
require_once("../model/user.php");


$model2 = new user();
$model2->getMostSell();

$model = new user();
$model->generateReport();
?>


<html>
<head>
<style>
    h1{
        color:#3DB8A4;


        font-size: 50px;
          font-family: sans-serif;

    }
svg {
  height: 30%;
}

circle {
  fill: #3DB8A4;
}

text { 
  fill: #fff;
  font-size: 30px;
  font-family: sans-serif;
}
    .a{
        display: inline-block;
    }
    .box{
        position: relative;
        display: inline-block; /* Make the width of box same as image */
        margin-left:200px;
        
    }
    .box .text{
        position: absolute;
        z-index: 999;
        margin: 5 auto;
        left: 0;
        right: 0;        
        text-align: center;
        top: 40%; /* Adjust this value to move the positioned div up and down */
        background: rgba(0, 0, 0, 0.8);
        font-family: Arial,sans-serif;
        color: #0000FF ;
        width: 60%; /* Set the width of the positioned div */
        
        opacity: 0.8;
        /* #fff; */
    }
</style>    
</head>
<body>
<center>
 <iframe  src="../public/header.php" height="100" width="100%" style="border:none;"></iframe>
</center>
    <center style="margin-top:4%">
        <div class="a">
      <h1> Cost</h1>  
  <svg viewBox="0 0 140 140" preserveAspectRatio="xMinYMin meet">
    <g>
      <circle r="50%" cx="50%" cy="50%" class="circle-back" />
      <text x="50%" y="50%" text-anchor="middle" dy="0.3em"><?php
          
          
          
          echo $model->getreport()->getcost();  ?> L.E</text>
         
    </g>
  </svg>
</div>   
  
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<div class="a">
      <h1> Profit</h1>  
    <svg viewBox="0 0 140 140" preserveAspectRatio="xMinYMin meet">
    <g>
      <circle r="50%" cx="50%" cy="50%" class="circle-back" />
      <text x="50%" y="50%" text-anchor="middle" dy="0.3em"><?php
          
          
          
          echo $model->getreport()->getprofit();  ?> L.E</text>
          
    </g>
  </svg>
 
            </div>
            
    </center>
    <br>;
            <br>;
            <br>;
            <br>;
            <br>;
            <br>;
            <br>;
            
    <?php
           $a=$model2->getSell()->getSelled();
          $b=$model2->getSell()->getImage();
         


         
          for($j=0;$j<3;$j++)
          {
            $imgs_arr = [];
            $imgs_arr=unserialize($b[$j]);
            
            $count2 = count($imgs_arr);
            for ($i=0;$i<$count2;$i++){
      
  



  $bana="$imgs_arr[$i]";

  echo"
  <div class='box'>
  <img src='{$imgs_arr[$i]}grande.jpeg' >
  ";
 
  

            

                       }
                       echo"<div class='text'>
<h1 style='color:white;'>$a[$j]</h1>
</div>
</div>
";
         
           
          }

            
        
          


          ?>
</body>
        

</html>