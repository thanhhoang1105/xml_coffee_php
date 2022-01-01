<?php
session_start();
//logout
if(isset($_GET['logout'])){unset($_SESSION['logged_in']);session_destroy();}


//check login
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    //json decode user details from session into an array
    $user_details = json_decode($_SESSION['user_details'],true);
}else{
    exit(header("Location: ./login.php"));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Admins</title>

    <!-- Bootstrap -->
    <link href="../admins/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../admins/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css"
        integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Custom Theme Style -->
    <link href="../admins/build/css/custom.min.css" rel="stylesheet">

    <!-- Style css -->
    <link href="build/css/styles2.css" rel="stylesheet">

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"> <i class="fas fa-mug-hot"></i>
                            <span>Coffee</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/ngocngu.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome</span>
                            <h2>Ngọc Ngu</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Quản lý</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="logo">Logo</a></li>
                                        <li><a href="header">Header</a></li>
                                        <li><a href="videobg">Video Background</a></li>
                                        <li><a href="text_bg">Text In Background</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Section<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="package">Package</a></li>
                                        <li><a href="service">Service</a></li>
                                        <li><a href="wrapper">Wrapper</a></li>
                                        <li><a href="menu_left">Menu Left</a></li>
                                        <li><a href="menu_right">Menu Right</a></li>
                                        <li><a href="product">Product</a></li>
                                        <li><a href="gallery">Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-cogs"></i> Footer<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="status">Status</a></li>
                                        <li><a href="location">Location</a></li>
                                        <li><a href="contact">Contact</a></li>
                                        <li><a href="youtube">Youtube</a></li>
                                        <li><a href="facebook">Facebook</a></li>
                                        <li><a href="twitter">Twitter</a></li>
                                        <li><a href="instagram">Instagram</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i> Account<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="user">User</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <?php echo '<a data-toggle="tooltip" data-placement="top" title="Logout" href="?logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>';?>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/ngocngu.jpg" alt="">Ngọc Ngu
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <?php echo '<a class="dropdown-item" href="?logout"><i class="fa fa-sign-out pull-right"></i>Log Out</a>';?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <h3>WELCOME ADMIN</h3>
            </div>
            <br />
        </div>
        <!-- /page content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="../admins/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../admins/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../admins/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

    <script src="../admins/vendors/Flot/jquery.flot.js"></script>
    <script src="../admins/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../admins/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../admins/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../admins/vendors/Flot/jquery.flot.resize.js"></script>

    <script src="../admins/vendors/DateJS/build/date.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../admins/build/js/custom.min.js"></script>

</body>

</html>