<! –– this cleo private ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="CLEO">CLEO’S PRIVATE RESORT</h3>
      <LI><a href="  https://maps.app.goo.gl/datSCnjij8U46nvBA" target=”_blank”>Address: Abar 1st, San Jose City</a></LI>
      <LI>Contact Number: 0927-339-8620</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/cleosprivateresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Marquez Mini Resort ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Marquez">Marquez Mini Resort</h3>
      <LI><a href=" https://maps.app.goo.gl/NfzrBp7TDL6Fk5L38 " target=”_blank”>Address:Abar 1st, San Jose City</a></LI>
      <LI>Contact Number: 0923-645-0707</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/marquezminiresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Neslyn Resort ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Neslyn">Neslyn Resort</h3>
      <LI><a href="https://maps.app.goo.gl/WZpFYu32yEWAEFgDA  " target=”_blank”>Address:Abar 1st, San Jose City</a></LI>
      <LI>Contact Number: 0907-0620259</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
    <?php
      $dir = 'media/resort/neslynresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Rimo Resort & Events––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Rimo">Rimo Resort & Events</h3>
      <LI><a href=" https://maps.app.goo.gl/8ZW6NGUjLCPBxexV9 " target=”_blank”>Address:Abar 1st, San Jose City</a></LI>
      <LI>Contact Number: 0997-536-8730</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/resort/rimoresortandevents/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Liah Miel ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Miel">Liah Miel</h3>
      <LI><a href=" https://maps.app.goo.gl/cAcge2LTpJFENdYLA " target=”_blank”>Address:Abar 1st, San Jose City</a></LI>
      <LI>Contact Number: 0943-877-8525</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
    <?php
      $dir = 'media/resort/liahmiel/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
    ?>
</div>
<! –– this L & J Bahay Bakasyunan  ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Bakasyunan">L & J Bahay Bakasyunan </h3>
      <LI>Address: Bagong Sikat, San Jose City</LI>
      <LI>Contact Number: 0929-440-8485</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/landjbahaybakasyunan/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Yanna Farm Resort  ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Yanna">Yanna Farm Resort </h3>
      <LI>Address:Caanawan, San Jose City</LI>
      <LI>Contact Number: 0927-339-8620</LI>
      <LI>Email: destymaejumaquio@gmail.com </LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/yannafarmresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Dominic (Garden Resort) Events Place  ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Dominic">Dominic (Garden Resort) Events Place </h3>
      <LI><a href=" https://maps.app.goo.gl/qBNysGvdteeUY4Y28 "target=”_blank” >Address:Caanawan, San Jose City</a></LI>
      <LI>Contact Number: n/a</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/dominicgardenresorteventsplace/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Club Placier De Oro ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Placier">Club Placier De Oro</h3>
      <LI><a href=" https://maps.app.goo.gl/LY5FpfSMuLVRDaea6 "target=”_blank” >Address: Caanawan, San Jose City</a></LI>
      <LI>Contact Number: 09155931763</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/clubplacierdeoro/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Greenzone Events Place ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Greenzone">Greenzone Events Place</h3>
      <LI><a href=" https://maps.app.goo.gl/HnP9Nui7cBF8zvuN8 "target=”_blank” >Address:Caanawan, San Jose City</a></LI>
      <LI>Contact Number: 0916-225-6691</LI>
      <LI>Email: greenzoneeventsplace@gmail.com </LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/greenzoneeventsplace/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Seven Stars Private Resort  ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Seven">Seven Stars Private Resort</h3>
      <LI>Address:Caanawan, San Jose City</LI>
      <LI>Contact Number: 0999-867-4794</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/sevenstarsprivateresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Mary Kates Resort ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Mary">Mary Kates Resort</h3>
      <LI><a href=" https://maps.app.goo.gl/mSZQF13nTZmrwUZu8 " target=”_blank”>Address:Caanawan, San Jose City</a></LI>
      <LI>Contact Number: 09174262484</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/marykatesresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this REJ Purple Resort––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Purple">REJ Purple Resort</h3>
      <LI><a href=" https://maps.app.goo.gl/AhYFiauTY5T6bfGC9 "target=”_blank” >Address:Caanawan, San Jose City</a></LI>
      <LI>Contact Number: 09452141064</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/rejpurpleresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Lara’s Resort ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="CLEO">Lara’s Resort</h3>
      <LI><a href=" https://maps.app.goo.gl/Amph2UDbiTJDD3Qe9 "target=”_blank” >Address:Abar 1st, San Jose City</a></LI>
      <LI>Contact Number: 0927-339-8620</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/larasresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Jojo’s Resort
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Jojo">Jojo’s Resort</h3>
      <LI><a href=" https://maps.app.goo.gl/c4NHUmSVY7j5TJsG7 " target=”_blank”>Address: Caanawan, San Jose City</a></LI>
      <LI>Contact Number: 0948-620-9406</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/jojosresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Don Quihote’s Resort
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Quihote">Don Quihote’s Resort</h3>
      <LI>Address:Malasin </LI>
      <LI>Contact Number: 0999-041-1814</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/donquihotesresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Hilltop Resort
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Hilltop">P.A.A MOUNTAIN RESORT</h3>
      <LI>Address: Malasin</LI>
      <LI>Contact Number: 0966-701-6885</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/paamountainresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Sunway Resort and Hotel
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Sunway">Sunway Resort and Hotel</h3>
      <LI><a href=" https://maps.app.goo.gl/UbqpSMJBN6X4s4CR6 " target=”_blank”>Address: Palestina</a>
      </LI>
      <LI>Contact Number: 0965-058-9685
      <LI>Email: Sunwayhotel2@gmail.com</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/sunwayresortandhotel/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Aniceto Pool Resort
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Aniceto"> Aniceto Pool Resort</h3>
      <LI><a href=" https://maps.app.goo.gl/Zr8VEkwMFuWqy3Sp7 "target=”_blank” >Address: Palestina </a></LI>
      <LI>Contact Number: 0915-429-2003</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/anicetopoolresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Maria Luisa Farm & Resort 
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Maria">Maria Luisa Farm & Resort </h3>
      <LI><a href=" https://maps.app.goo.gl/XuVTgG3YoJvfpdXo7 " target=”_blank”>Address: Palestina </a>
      </LI>
      <LI>Contact Number: 0906-243-8014
      </LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/marialuisafarmandresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Bricks Place
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Bricks">Bricks Place</h3>
      <LI><a href="https://maps.app.goo.gl/QwqDhyGuyN8SYQBk8  "target=”_blank” >Address: Pinili </a>
      </LI>
      <LI>Contact Number: 0926-111-0119
      </LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/bricksplace/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this O’Rhenz Resort 
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Rhenz">O’Rhenz Resort </h3>
      <LI><a href=" https://maps.app.goo.gl/3p6rSzpzuvZbqYp77 " target=”_blank”>Address:San Agustin</a>
      </LI>
      <LI>Contact Number: 0916-334-6389
      </LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/orhenzresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<
<! –– this Balinese Garden Lodge
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Balinese">Balinese Garden Lodge</h3>
      <LI><a href="https://maps.app.goo.gl/JNxhTZytdGd9GKUPA  "target=”_blank” >Address:Sto Nino 2nd </a>
      </LI>
      <LI>Contact Number: 0997-036-3621
      </LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/balinesegardenlodge/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Tatang’s Private Resort
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Tatang">Tatang’s Private Resort</h3>
      <LI><a href=" https://maps.app.goo.gl/PFvCL5hrijaRHABa6 "target=”_blank” >Address:Sto Nino 2nd </a></LI>
      <LI>Contact Number: 0936-461-5564</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/tatangsprivateresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Abigail’s Diner
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Abigail">Abigail’s Diner</h3>
      <LI><a href=" https://maps.app.goo.gl/FkvGa361t8PK6G4fA " target=”_blank”>Address:Sto Tomas</a>
      </LI>
      <LI>Contact Number: 0905-400-6512
      </LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/abigailsdiner/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this JM Private Resort ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="JM">JM Private Resort </h3>
      <LI><a href="https://maps.app.goo.gl/2otdqefNs9ggEQ347  " target=”_blank”>Address:Sto Tomas </a>
      </LI>
      <LI>Contact Number: 0935-803-2031
      </LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/jmprivateresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Twinnie Private Resort 
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Twinnie">Twinnie Private Resort 
      </h3>
      <LI><a href="https://maps.app.goo.gl/prk7hYpD2rVbERfU6  "target=”_blank” >Address:Sto Tomas </a>
      </LI>
      <LI>Contact Number: 0926-394-4401</LI>
      <LI>Email: Zedlove22@gmail.com </LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/twinnieprivateresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this JanJim Farm Resort ––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="JanJim">JanJim Farm Resort </h3>
      <LI><a href=" https://maps.app.goo.gl/H8buqcg9DsDeGf6Y9 "target=”_blank” >Address:Sto Tomas </a></LI>
      <LI>Contact Number: 0906-973-0732</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/janjimfarmresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Bambi Resort
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Bambi">Bambi Resort</h3>
      <LI><a href=" https://maps.app.goo.gl/zrukhoFsyn3kbUXy9 " target=”_blank”>Address:Tondod </a></LI>
      <LI>Contact Number: 0917-479-2838
      </LI>
      <LI>Email: bambiresortcorp@gmail.com </LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/bambiresort/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
<! –– this Jali Resort (D’Cabana)
––> 
<div class="container">
   <div class="page-header">
      <h3 style="text-transform:uppercase; font-family: BARABARA;" id="Jali">Jali Resort (D’Cabana)</h3>
      <LI>Address:Tulat</LI>
      <LI>Contact Number: 0953-334-3742</LI>
      <LI>Email: n/a</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/resort/jaliresortdcabana/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                ?>
                <div class="col-md-4">
                    <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail"style="border: 3px solid #555">
                    <img src="<?=PATH.$dir.$file?>"/>
                    </a>
                </div>
                <?php
            }
        }
      }
      ?>
   </div>
</div>
</div>