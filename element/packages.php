<section class="packages" id="packages">

    <h1 class="heading">
        <span>Coffee Build Your Base</span>
    </h1>

    <div class="box-container">
        <?php
            $xml_url = 'http://localhost:8888/xml/Coffee/images/';
            $xml=simplexml_load_file("admins/xml/cafe.xml") or die("Error: Cannot create object");
            foreach($xml->packages as $packages){
                echo '
                <div class = "box">
                    <img src="'.$xml_url . '' . $packages -> image . '">
                    <div class = "content">
                        <h3><span>'. $packages -> numeric .'</span>'. $packages ->name . '</h3>
                        <p>' . $packages ->description . '</p>
                        <a class = "btn">'.$packages -> button .'<i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                ';     
            }
        ?>
    </div>

</section>