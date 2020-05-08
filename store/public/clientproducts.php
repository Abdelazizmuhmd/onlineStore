<?php
require_once("../view/clientProducts.php");
require_once("../model/user.php");
require_once("../controller/userOrder.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="../css/clientproducts.css">
</head>

<body>
    <?php
    $id='';
    if(isset($_GET['userid']))
     $id = $_GET['userid']; 
    $model = new user($id);
    $controller = new userOrderController($model);
    $view = new clientProducts($model, $controller);
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        $controller->{$_GET['action']}();
    }
    echo $id;
    ?>
    <br>
    <div class="container">
        <?php
        echo $view->userOutput();
        ?>
    </div>

    <br>

    <br>
    <center>
        <button class="button">Pending <i class="fa fa-hourglass" aria-hidden="true"></i></button>
        <button class="button">Ready <i class="fa fa-clock-o" aria-hidden="true"></i></button>
    </center>
    <br>
    <table class="table table-bordered">
        <tr>
            <th>
                <center><i class="fa fa-sort"></i></center>
            </th>
            <th>
                <center>Image</center>
            </th>
            <th>
                <center>Name</center>
            </th>
            <th>
                <center>Code</center>
            </th>
            <th>
                <center>Size</center>
            </th>
            <th>
                <center>Quantity</center>
            </th>
            <th>
                <center>Color</center>
            </th>
            <th>
                <center>Weight</center>
            </th>
            <th>
                <center>Description</center>
            </th>
        </tr>

        <!--
<tr><td align="center"><br>1</td>
<td align="center"><img width="80" height="100" src="images/t-shirt2.PNG"></td>
<td align="center"><br>Pat Sport T-shirt</td>
<td align="center"><br>P156982</td>
<td align="center"><br>2XL</td>
<td align="center"><br>3</td>
<td align="center"><br>Blue</td>
<td align="center"><br>150 grams</td>
<td align="center"><br>A simple cotton design embellished with a crew neck, short sleeves</td>
</tr>
-->
    </table>


</body>

</html>