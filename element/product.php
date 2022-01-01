<section class="product" id="product">

    <h1 class="heading">
        <span>product</span>
    </h1>

    <div class="swiper-container product-slider">

        <div class="swiper-wrapper">
            <?php
                $xml_url = 'http://localhost:8888/xml/Coffee/images/';
                $xml=simplexml_load_file("admins/xml/cafe.xml") or die("Error: Cannot create object");
                foreach($xml->product as $product){
                    echo '
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="'.$xml_url . '' . $product -> image . '">
                            <h3>'.$product->name.'</h3>
                            <p>'.$product->description.'</p>
                        </div>
                    </div>
                    ';     
                }
            ?>
        </div>

    </div>

</section>