<?php 
require_once("../model/user.php");
$model = new user();
$model->generateReport();
?>


<html>
<head>
<style>
    h1{
        color:#3DB8A4

;
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
</body>
        

</html>