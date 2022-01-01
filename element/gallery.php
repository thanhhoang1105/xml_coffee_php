<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>our gallery</span>
    </h1>

    <div class="box-container container">
        <?php
            $xml_url = 'http://localhost:8888/xml/Coffee/images/';
            $xml=simplexml_load_file("admins/xml/cafe.xml") or die("Error: Cannot create object");
            foreach($xml->gallery as $gallery){
                echo '
                <div class="box">
                    <img src="'.$xml_url . '' . $gallery -> image . '">
                    <div class="content">
                        <h3>'.$gallery->name.'</h3>
                        <p>'.$gallery->description.'</p>
                        <a class = "btn">'.$gallery -> button .'</a>
                    </div>
                </div>
                ';     
            }
        ?>
    </div>

</section>