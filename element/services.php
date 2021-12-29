<section class="services" id="services">

    <h1 class="heading">
        <span>Services</span>
    </h1>

    <div class="box-container">

        <?php
            $xml_url = 'http://localhost:8888/xml/Coffee/images/';
            $xml=simplexml_load_file("admins/xml/xml.xml") or die("Error: Cannot create object");
            foreach($xml->services as $services){
                echo '
                <div class = "box">
                <img src="'.$xml_url . '' . $services -> image . '">
                <h3>'. $services ->name . '</h3>
                <p>' . $services ->description . '</p>
                </div>
                ';     
            }
        ?>

    </div>

</section>