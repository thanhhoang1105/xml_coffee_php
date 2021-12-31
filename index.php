<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- header section starts -->

    <?php
        require "element/header.php";
    ?>

    <!-- header section end -->

    <!-- login form container -->

    <?php
        require "element/login.php";
    ?>

    <!-- home section starts -->

    <?php
        require "element/home.php";
    ?>

    <!-- home section end -->

    <!-- packages section starts -->

    <?php
        require "element/packages.php";
    ?>

    <!-- packages section end -->

    <!-- services section starts -->

    <?php
        require "element/services.php";
    ?>

    <!-- services section end -->

    <!-- wrapper section starts -->

    <?php
        require "element/wrapper.php";
    ?>
    <!-- wrapper section end -->

    <!-- menu section starts -->

    <?php
        require "element/menu.php";
    ?>

    <!-- menu section end -->

    <!-- team section start -->

    <?php
        require "element/team.php";
    ?>

    <!-- team section end -->

    <!-- brand section starts -->
    <?php
        require "element/brand.php";
    ?>

    <!-- brand section end -->

    <!-- footer section starts -->

    <?php
        require "element/footer.php";
    ?>

    <!-- footer section end -->


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>

    <!-- custom js file link -->
    <script src="js/scripts.js "></script>
</body>

</html>