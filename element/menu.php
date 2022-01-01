<section class="menu" id="menu">

    <div class="bg_container">

        <div class="bg-img">
            <img src="images/bg.jpg" alt="">
        </div>

        <div class="container">
            <h1 class=" heading ">
                <span>Favourite coffee flavors</span>
            </h1>
            <div class="box-container ">
                <div class="box-content">
                    <?php
                        $xml_url = 'http://localhost:8888/xml/Coffee/images/';
                        $xml=simplexml_load_file("admins/xml/cafe.xml") or die("Error: Cannot create object");
                        foreach($xml->menu_left as $menu_left){
                            echo '
                                <div class="box ">
                                    <ul>
                                        <li>
                                            <div class = "about-img">
                                                <img src="'.$xml_url . '' . $menu_left -> image . '">
                                            </div>
                                            <div class = "content">
                                                <div class="name-coffee ">
                                                    <div class="about-name ">
                                                        <h3>'. $menu_left ->name . '</h3>
                                                    </div>
                                                    <div class="about-name ">
                                                        <h3>$'. $menu_left ->price . '</h3>
                                                    </div>
                                                </div>
                                                <p>' . $menu_left ->description . '</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            ';
                        }
                    ?>
                </div>
                <div class="box-content">
                    <?php
                        $xml_url = 'http://localhost:8888/xml/Coffee/images/';
                        $xml=simplexml_load_file("admins/xml/cafe.xml") or die("Error: Cannot create object");
                        foreach($xml->menu_right as $menu_right){
                            echo '
                                <div class="box ">
                                    <ul>
                                        <li>
                                            <div class="about-img">
                                                <img src="'.$xml_url . '' . $menu_right -> image . '">
                                            </div>
                                            <div class="content">
                                                <div class="name-coffee ">
                                                    <div class="about-name ">
                                                        <h3>'. $menu_right ->name . '</h3>
                                                    </div>
                                                    <div class="about-name ">
                                                        <h3>$'. $menu_right ->price . '</h3>
                                                    </div>
                                                </div>
                                                <p>' . $menu_right ->description . '</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
</section>