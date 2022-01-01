<section class="home" id="home">

    <div class="content">
        <?php
            $xml_url = 'http://localhost:8888/xml/Coffee/images/';
            $xml=simplexml_load_file("admins/xml/cafe.xml") or die("Error: Cannot create object");
            foreach($xml->text_bg as $text_bg){
                echo '
                    <img src="'.$xml_url . '' . $text_bg -> image . '">
                    <h3>'. $text_bg -> title .'</h3>
                    <p>'. $text_bg -> text .'</p>
                    <a href="#" class="btn">'. $text_bg -> button .'</a>
                ';     
            }
        ?>
    </div>

    <div class="controls">
        <?php
            foreach($xml->video_bg as $video_bg){
                echo '
                    <span class="vid-btn ' . $video_bg -> class_active .'" data-src="video/'. $video_bg -> video .'"></span>
                ';     
            }
        ?>
    </div>

    <div class="video-container">
        <video src="video/<?php echo $video_bg -> video ?>" id="video-slider" loop autoplay muted></video>
    </div>

</section>