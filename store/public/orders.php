<?php
require_once("../view/orders.php");
require_once("../model/user.php");
require_once("../controller/userOrder.php");
include_once("../other/sessioncheck.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>
        Orders
    </title>
    <link href="../css/orderss.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../js/edit.js"></script>
    <script src="../js/ordertbl.js"></script>
    <style>
        @media only screen and (max-width: 600px) {
            iframe{
                height:400px;
            }
}a
    </style>
</head>

<body>
    <center>
        <iframe src="../public/header.php" height="100" width="100%" style="border:none;"></iframe>
    </center>
    <?php
     $model = new user();
     $controller = new userOrderController($model);
    if(isset($_SESSION['id'])){
     $_REQUEST['userid'] = $_SESSION['id'];
    }
     $controller->getuser();
     $controller->getOrders();
     $view = new ordersview($model, $controller);
     if (isset($_GET['action']) && !empty($_GET['action'])) {
         $controller->{$_GET['action']}();
     }
     
     
     



    ?>
    <br />
    <div id="contain">
        <div class="card" id="filterz">
            <div id="orders" class="card-header">
                <b> Orders </b>
            </div>
            

            <div class="card-body" id="bod">
                <label id="slbl">Status:</label><select name="CardiologyPassword"
                    placeholder="Enter Cardiology Password" class="form-control" required id="stat">
                    <option val="" ></option>
                    <option>pending</option>
                    <option>prepared</option>
                    <option>finished</option>
                    <option>delivered</option>
                </select>
        </div>
    </div>
    <br />
    <br />
    <div id="container">
        <div id="table">
            <table id="Display">
                <tr id='must'>
                    <th>
                        <label for="vehicle1"> orderNumber</label>
                    </th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th>createdtime</th>
                    <th>editStatus</th>
                    <?php
                    if($_SESSION['usertype'] == 'admin')
                    {
                    ?>
                    <th>Action</th>
                    <?php
                    }
                    ?>
                    <th>Delete</th>
                </tr>
                <?php
                 if(count($model->getordersArray())>0)
                  echo $view->output();
                ?>
            </table>
        </div>
    </div>
</body>

</html>