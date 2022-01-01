<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>opening hours</h3>
            <?php
                $xml_url = 'http://localhost:8888/xml/Coffee/images/';
                $xml=simplexml_load_file("admins/xml/cafe.xml") or die("Error: Cannot create object");
                foreach($xml->status as $status){
                    echo '
                        <div class="dates">
                            <p>'.$status->date.'</p>
                            <span class="space"></span>
                            <p>'.$status->time.'</p>
                        </div>
                    ';     
                }
            ?>
        </div>

        <div class="box">
            <h3>Locations</h3>
            <?php
                foreach($xml->location as $location){
                    echo '
                    <a href="#">'. $location-> local .'</a>
                    ';     
                }
            ?>
        </div>

        <div class="box">
            <h3>Quick links</h3>
            <?php
                foreach($xml->header as $header){
                    echo '
                    <a href="#'. $header -> name .'">'. $header -> name .'</a>
                    ';     
                }
            ?>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <?php
                foreach($xml->contact as $contact){
                    echo '
                    <p><i class="fas fa-phone"></i>  '. $contact->phone .'</p>
                    <p><i class="fas fa-envelope"></i>  '. $contact->email .' </p>
                    <p><i class="fas fa-map-marked-alt"></i>  '. $contact-> map .'</p>
                    ';     
                }
            ?>
            <div class="share">
                <?php
                    foreach($xml->youtube as $youtube){
                        echo '
                        <a href="'. $youtube-> link .'" class="fab fa-youtube"></a>
                        ';     
                    }
                ?>
                <?php
                    foreach($xml->facebook as $facebook){
                        echo '
                        <a href="'. $facebook-> link .'" class="fab fa-facebook"></a>
                        ';     
                    }
                ?>
                <?php
                    foreach($xml->twitter as $twitter){
                        echo '
                        <a href="'. $twitter-> link .'" class="fab fa-twitter"></a>
                        ';     
                    }
                ?>
                <?php
                    foreach($xml->instagram as $instagram){
                        echo '
                        <a href="'. $instagram-> link .'" class="fab fa-instagram"></a>
                        ';     
                    }
                ?>
            </div>
        </div>
    </div>

</section>