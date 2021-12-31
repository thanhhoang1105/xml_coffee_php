<header>

    <div class="fas fa-bars" id="menu-bar"></div>
    <?php
        $xml_url = 'http://localhost:8888/xml/Coffee/images/';
        $xml=simplexml_load_file("admins/xml/cafe.xml") or die("Error: Cannot create object");
        foreach($xml->logo as $logo){
            echo '
                <a href="#" class="logo"><span>'. $logo -> text_one .'</span>'. $logo -> text_two .'</a>
            ';     
        }
    ?>

    <nav class="navbar">
        <?php
            foreach($xml->header as $header){
                echo '
                    <a href="#'. $header -> name .'">'. $header -> name .'</a>
                ';     
            }
        ?>
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