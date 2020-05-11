<?php
require_once("../model/menu.php");
require_once("../controller/menuController.php");
require_once("../View/menuView.php");
$model = new menu();
$controller= new menuController($model);
if (isset($_GET['action']) && !empty($_GET['action'])) {
  $controller->{$_GET['action']}();
}
$controller->getAllCategoriesDetails();
$view= new menuView($model,$controller);

?>
<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>
        Pat
    </title>

    <link href="../css/home.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../js/j.js" type="text/javascript"></script>
    <script src="../js/s.js" type="text/javascript"></script>
    <script src="../js/home.js" type="text/javascript"></script>
    <script src="../js/j2.js" type="text/javascript"></script>
    <script src="../js/product.js" type="text/javascript"></script>



</head>

<body>
    <div>
        <a href="" class="announcement-bar announcement-bar--link">
            <p class="announcement-bar__message site-wrapper">WELCOME TO PAT</p>
        </a>
<center>
 <iframe  src="../public/header.php" height="70" width="1200" style="border:none;"></iframe>
</center>


    </div>



    <div class="site-wrapper">

        <div class="grid">
        
            
            
            
              <img  src="../images/logo.png" style="margin-bottom:30px; margin-left:60px; width:120px;height:120px;" >
            
            <?php
        include("menu.php");
?>


            <main class="main-content grid__item medium-up--four-fifths" id="MainContent" role="main">

                <hr class="hr--border-top small--hide">



                <style>
                @media screen and (min-width: 750px) {
                    #ProductImage-13801390768162 {
                        max-width: 720px;
                        max-height: 720.0px;
                    }

                    #ProductImageWrapper-13801390768162 {
                        max-width: 720px;
                    }
                }



                @media screen and (max-width: 749px) {
                    #ProductImage-13801390768162 {
                        max-width: 720px;
                        max-height: 720px;
                    }

                    #ProductImageWrapper-13801390768162 {
                        max-width: 720px;
                    }
                }
                </style>
                <style>
                @media screen and (min-width: 750px) {
                    #ProductImage-13801391030306 {
                        max-width: 720px;
                        max-height: 720.0px;
                    }

                    #ProductImageWrapper-13801391030306 {
                        max-width: 720px;
                    }
                }



                @media screen and (max-width: 749px) {
                    #ProductImage-13801391030306 {
                        max-width: 720px;
                        max-height: 720px;
                    }

                    #ProductImageWrapper-13801391030306 {
                        max-width: 720px;
                    }
                }
                </style>

                <div class="grid product-single">

                    <div class="grid__item medium-up--one-half">
                        <?php
$view->readOneProduct();

      ?>








                        <div class="table-responsive dynamic" data-unit-system="metric">
                            <div class="rte__table-wrapper">
                                <table cellpadding="5">
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><strong>S</strong></td>
                                            <td><strong>M</strong></td>
                                            <td><strong>L</strong></td>
                                            <td><strong>XL</strong></td>
                                            <td><strong>2XL</strong></td>
                                            <td><strong>3XL</strong></td>
                                            <td><strong>4XL</strong></td>
                                            <td><strong>5XL</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Length (cm)</strong></td>
                                            <td>69</td>
                                            <td>71</td>
                                            <td>74</td>
                                            <td>76</td>
                                            <td>79</td>
                                            <td>81</td>
                                            <td>84</td>
                                            <td>86</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Width (cm)</strong></td>
                                            <td>51</td>
                                            <td>56</td>
                                            <td>61</td>
                                            <td>66</td>
                                            <td>71</td>
                                            <td>76</td>
                                            <td>81</td>
                                            <td>86</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>







                    <!-- /snippets/social-sharing.liquid -->


        

    </div>
    </main>
    </div>
    <hr>
    </div>
    <script src="../js/slider.js" type="text/javascript"></script>
    <script>
   
    </script>
</body>

</html>