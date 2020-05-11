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



        <div class="site-wrapper">
            <div class="top-bar grid">

                <div class="grid__item medium-up--two-fifths small--hide" style="margin-left: 140px;">
                    <span class="customer-links small--hide">
                        <a href="" id="customer_login_link">Log in</a>
                        <span class="vertical-divider"></span>
                        <a href="" id="customer_register_link">Sign up</a>

                    </span>
                </div>


                <div class="grid__item  medium-up--two-fifths  small--one-half text-right">
                    <a href="" class="site-header__cart">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart"
                            viewBox="0 0 20 20">
                            <path fill="#444"
                                d="M18.936 5.564c-.144-.175-.35-.207-.55-.207h-.003L6.774 4.286c-.272 0-.417.089-.491.18-.079.096-.16.263-.094.585l2.016 5.705c.163.407.642.673 1.068.673h8.401c.433 0 .854-.285.941-.725l.484-4.571c.045-.221-.015-.388-.163-.567z" />
                            <path fill="#444"
                                d="M17.107 12.5H7.659L4.98 4.117l-.362-1.059c-.138-.401-.292-.559-.695-.559H.924c-.411 0-.748.303-.748.714s.337.714.748.714h2.413l3.002 9.48c.126.38.295.52.942.52h9.825c.411 0 .748-.303.748-.714s-.336-.714-.748-.714zM10.424 16.23a1.498 1.498 0 1 1-2.997 0 1.498 1.498 0 0 1 2.997 0zM16.853 16.23a1.498 1.498 0 1 1-2.997 0 1.498 1.498 0 0 1 2.997 0z" />
                        </svg>
                        <span class="small--hide">
                            Cart
                            (<span id="CartCount">0</span>)
                        </span>
                    </a>
                </div>

            </div>
            <hr class="small--hide hr--border">

            <header style="height:115px;">
                <div id="HeaderLogoWrapper" class="supports-js" style="height:115px;">
                    <a href="-tee.html" itemprop="url" style="padding-top:19.601328903654487%; ">
                        <img id="HeaderLogo" src="images/logo.png"
                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio=""
                            data-sizes="auto" alt="Pat" itemprop="logo" style="width:90px;height:90px;">
                    </a>
                </div>

            </header>
        </div>




    </div>



    <div class="site-wrapper">

        <div class="grid">
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
        </div>


    </div>
    </main>
    </div>
    <hr>
    </div>
    <script src="../js/slider.js" type="text/javascript"></script>
</body>

</html>