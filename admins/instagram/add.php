<?php
    require "../module/auth.php"
?>

<?php 
    if(isset($_POST['submitSave'])){
        $shop = simplexml_load_file('../xml/cafe.xml');
        $instagram =  $shop->addChild('instagram');
        $instagram->addAttribute('id', $_POST['id']);
        $instagram->addChild('link', $_POST['link']);
        file_put_contents('../xml/cafe.xml',$shop->asXML());
        header('Location: index.php');
        exit();
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

    <title>Instagram</title>

    <?php
        require "../module/css_module.php"
    ?>

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="../index.php" class="site_title"> <i class="fas fa-mug-hot"></i>
                            <span>Coffee</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <?php
                        require "../module/menu_profile.php"
                    ?>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <?php
                        require "../module/sidebar_menu.php"
                    ?>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <?php
                        require "../module/logout.php"
                    ?>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <?php
                require "../module/top_nav.php"
            ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="row">
                    <div class="col-md-12 col-sm-12 ">

                        <div class="row x_title">
                            <div class="col-md-6">
                                <h2>
                                    <a>Add Instagram</a>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_content">
                                        <br />
                                        <form method="POST" id="demo-form2" data-parsley-validate
                                            class="form-horizontal form-label-left">

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">ID
                                                </label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" name="id" class="form-control">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Link
                                                    Instagram</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input class="form-control" type="text" name="link">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6 offset-md-3">
                                                    <button type="submit" name="submitSave" value="Save"
                                                        class="btn btn-success">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>

            </div>
            <br />
        </div>
        <!-- /page content -->
    </div>
    </div>

    <!-- jQuery -->
    <?php
        require "../module/js_module.php"
    ?>

</body>

</html>