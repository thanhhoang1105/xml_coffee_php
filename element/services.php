<section class="services" id="services">

    <h1 class="heading">
        <span>Services</span>
    </h1>

    <div class="box-container">

        <?php
            $xml_url = 'http://localhost:8888/xml/Coffee/images/';
            $xml=simplexml_load_file("admins/xml/cafe.xml") or die("Error: Cannot create object");
            foreach($xml->service as $service){
                echo '
                <div class = "box">
                <img src="'.$xml_url . '' . $service -> image . '">
                <h3>'. $service ->name . '</h3>
                <p>' . $service ->description . '</p>
                </div>
                ';     
            }
        ?>

    </div>

</section>