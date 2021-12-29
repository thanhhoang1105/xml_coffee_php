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
    <link rel="stylesheet" href="css/css.css">
</head>

<body>

    <!-- header section starts -->

    <header>

        <div class="fas fa-bars" id="menu-bar"></div>

        <a href="#" class="logo"><span>L</span>ogo</a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#book">menu</a>
            <a href="#packages">Reservation</a>
            <a href="#services">Pages</a>
            <a href="#gallery">Blog</a>
            <a href="#review">Shop</a>
            <a href="#contact">Element</a>
        </nav>

        <div class="icons">
            <i class="fa fa-search" id="search-btn"></i>
            <i class="fa fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fa fa-search"></label>
        </form>

    </header>

    <!-- header section end -->

    <!-- login form container -->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="">
            <h3>login</h3>
            <input type="email" class="box" placeholder="enter your email...">
            <input type="password" class="box" placeholder="enter your password...">
            <input type="submit" class="btn" value="login now">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>dont have an account? <a href="#">register now</a></p>
        </form>

    </div>

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
    <script src="js/script.js "></script>
</body>

</html>