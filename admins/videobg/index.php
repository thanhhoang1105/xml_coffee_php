<?php
    require "../module/auth.php"
?>

<?php 
    if(isset($_GET['action'])){
        $cafe_shop = simplexml_load_file('../xml/cafe.xml');
        $id = $_GET['id'];
        $index =  0;
        $i = 0 ;
        foreach ($cafe_shop->video_bg as $video_bg){
            if($video_bg['id']==$id){
                $index = $i;
                break;
            }
            $i++;
        }
        unset ($cafe_shop->video_bg[$index]);
        file_put_contents('../xml/cafe.xml',$cafe_shop->asXML());
    }
    $cafe_shop = simplexml_load_file('../xml/cafe.xml');
    $xml_url = 'http://localhost:8888/xml/Coffee/images/';
        
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

    <title>Video Background</title>

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
                                    <a href="add.php">Add Video Background <i class="fas fa-plus"></i></a>
                                </h2>
                            </div>
                        </div>
                        <div class="dashboard_graph">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Video</th>
                                        <th>Class Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cafe_shop->video_bg as $video_bg) { ?>
                                    <tr>
                                        <td><?php echo $video_bg['id'] ; ?></td>
                                        <td><?php echo $video_bg->video ; ?></td>
                                        <td><?php echo $video_bg->class_active ; ?></td>
                                        <td>
                                            <a class="edit" href="edit.php?id=<?php echo $video_bg['id'];?>"><i
                                                    class="fas fa-pen"></i></a>
                                            <a class="delete"
                                                href="index.php?action=delete&id=<?php echo $video_bg['id'];?>"
                                                onclick="return confirm ('Are you sure?')"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
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