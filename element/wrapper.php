<section class="wrapper" id="wrapper">

    <h1 class="heading">
        <span>wrapper</span>
    </h1>

    <div class="box-container">

        <?php
            $xml_url = 'http://localhost:8888/xml/Coffee/images/';
            $xml=simplexml_load_file("admins/xml/xml.xml") or die("Error: Cannot create object");
            foreach($xml->wrapper as $wrapper){
                echo '
                <div class = "box">
                    <img src="'.$xml_url . '' . $wrapper -> image_right . '" class = "img-1">
                    <div class = "content">
                        <h3>'. $wrapper ->name . '</h3>
                        <p>' . $wrapper ->description . '</p>
                    </div>
                    <div class = "btn-content">
                            <a class = "btn">'.$wrapper -> button .'</a>
                    </div>
                </div>
                <div class ="box">
                <img src="'.$xml_url . '' . $wrapper -> image_left . '" class = "img-2">
                </div>
                ';     
            }
        ?>

    </div>

</section>