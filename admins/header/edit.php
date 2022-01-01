<?php
    require "../module/auth.php"
?>

<?php 
     $cafe_shop = simplexml_load_file('../xml/cafe.xml');
    if(isset($_POST['submitSave'])){
        foreach ($cafe_shop->header as $header){
            if($header['id']==$_POST['id']){
                $header->name = $_POST['name'];
                break;
            }
        }
        file_put_contents('../xml/cafe.xml',$cafe_shop->asXML());
        header('Location: index.php');
        exit();
    }
    foreach ($cafe_shop->header as $header){
        if($header['id']==$_GET['id']){
           $id = $header['id'];
           $name = $header->name;
           break;
        }
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

    <title>Header</title>

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
                        <a href="index.php" class="site_title"> <i class="fas fa-mug-hot"></i>
                            <span>Coffee</span>
                        </a>
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
                                    <a>Edit Header</a>
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
                                                    <input type="text" name="id" value="<?php echo $id?>"
                                                        class="form-control" readonly="none">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tên</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input class="form-control" type="text" name="name"
                                                        value="<?php echo $name?>">
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