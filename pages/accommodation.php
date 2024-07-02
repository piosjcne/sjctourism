<! –– this lake isabel ––> 
<div class="container" >
   <div class="page-header" >
      <h3 style="font-family: BARABARA;" ID="LAKE">LAKE ISABEL RESORT AND EVENT CENTER INCORPORATED</h3>
      <LI><a href="https://maps.app.goo.gl/HPfk14J3aQk2UcFG8"target=”_blank” >Address: Bliss, Brgy; Malasin, San jose City</a></LI>
      <LI>Contact Number: 09171006544</LI>
      <LI>Number of Rooms: 8 Villas</LI>
      <LI>Email: LAKEISABELSJC@GMAIL.COM</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#LAKE">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/lakeisabel/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this 1875 RICE HOTEL ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="rice hotel">1875 RICE HOTEL</h3>
      <LI><a href="https://maps.app.goo.gl/W6czQxEgw7SpsoXF9"target=”_blank”>Address: Maharlika Rd, Brgy. Abar 1st</a></LI>
      <LI>Contact Number: 09338681742</LI>
      <LI>Number of Rooms: 12 Rooms</LI>
      <LI>Email: 1875RICEHOTEL@GMAIL.COM</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#rice hotel">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/ricehotel/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this ABESAN INN ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="ABESAN">ABESAN INN</h3>
      <LI><a href="https://maps.app.goo.gl/gGWr6spkxDjid18e9"target=”_blank”>Address: Villa Ramos, brgy. Abar 1st, San Jose City</a></LI>
      <LI>Contact Number: 09171701201</LI>
      <LI>Number of Rooms: 23 Rooms</LI>
      <LI>Email: ABESANINNVILLARAMOS@GMAIL.COM</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/abesaninn/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this HOTEL ALBIEN ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="ALBIEN">HOTEL ALBIEN</h3>
      <LI><a href="https://maps.app.goo.gl/noEXcpadyL2WGxvGA"target=”_blank”>Address: Maharlika Highway, brgy. Abar 1st</a></LI>
      <LI>Contact Number: 09532575138</LI>
      <LI>Number of Rooms: 11 Rooms</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/hotelalbien/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this DIADEM COURT INC. ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="DIADEM">DIADEM COURT INC.</h3>
      <LI><a href="https://maps.app.goo.gl/D3AdUpCfjFryi1jK9"target=”_blank”>Address: Maharlika Highway, Brgy. Malasin</a></LI>
      <LI>Contact Number: 09555572146</LI>
      <LI>Number of Rooms: 23 Rooms</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/diademcourt/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this HOTEL FRANCESKO––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="FRANCESKO">HOTEL FRANCESKO</h3>
      <LI><a href="https://maps.app.goo.gl/sA1YsGSSB1H9yRtNA"target=”_blank”>Address: Malasin, San Jose City</a></LI>
      <LI>Contact Number: 09688823570</LI>
      <LI>Number of Rooms: 32 Rooms</LI>
      <LI>Email: HOTELFRANCESKO@GMAIL.COM</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#FRANCESKO">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/hotelfrancesko/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this HOTEL MAIYA ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="MAIYA">HOTEL MAIYA</h3>
      <LI><a href="https://maps.app.goo.gl/2LdkWmRxg7U1qQ6b8"target=”_blank”>Address: Brgy. R, Rueda, Bonifacio St. San Jose City</a></LI>
      <LI>Contact Number: 09776545763</LI>
      <LI>Number of Rooms: 16 Rooms</LI>
      <LI>Email: HOTELMAIYA.SANJOSE@GMAIL.COM</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#FRANCESKO">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/hotelmaiya/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this KALAPAW HOTEL ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="KALAPAW">KALAPAW HOTEL</h3>
      <LI><a href="https://maps.app.goo.gl/DRH8vmN4aXMJkgdK8"target=”_blank”>Address: Zone 5, Brgy. Caanawan</a></LI>
      <LI>Contact Number: 09228194525</LI>
      <LI>Number of Rooms: 19 Rooms</LI>
      <LI>Email: ECBERONILLA@GMAIL.COM</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/kalapawhotel/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this L PLANO HOTEL.––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="PLANO">L PLANO HOTEL</h3>
      <LI><a href="https://maps.app.goo.gl/cgP4rP42hvU243ycA"target=”_blank”>Address: Zone 1, Brgy. Sto.Nino 3rd</a></LI>
      <LI>Contact Number: 09182278200</LI>
      <LI>Number of Rooms: 10 Rooms</LI>
      <LI>Email: PLANOHOTEL2016@YAHOO.COM</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/lplanohotel/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this MAHARLIKA RESORT, GARDEN GRILL, RESTOBAR AND HOTEL ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="MAHARLIKA">MAHARLIKA RESORT, GARDEN GRILL, RESTOBAR AND HOTEL</h3>
      <LI><a href="https://maps.app.goo.gl/ETw2Q6be4aCJjJ9Y8"target=”_blank”>Address: Maharlika Highway, Brgy. Caanawan</a></LI>
      <LI>Contact Number: 09228026873</LI>
      <LI>Number of Rooms: 16 Rooms</LI>
      <LI>Email: MAHARLIKARESORT0807@GMAIL.COM</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#MAHARLIKA">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/maharlikaresort/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this FARMHOUSE HOTEL AND CAFE ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="FARMHOUSE">FARMHOUSE HOTEL AND CAFE</h3>
      <LI><a href="https://maps.app.goo.gl/urQMxUeCsNS3bPht9"target=”_blank”>Address: Zone 6, Brgy.Caanawan</a></LI>
      <LI>Contact Number: 09236849985</LI>
      <LI>Number of Rooms: 24 Rooms</LI>
      <LI>Email: FARMHOUSEHOTELANDCAFE@GMAIL.COM</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#FARMHOUSE">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/farmhousehotel/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this PORTO NOVO HOTEL< ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="PORTO">PORTO NOVO HOTEL</h3>
      <LI><a href="https://maps.app.goo.gl/AGX7pwg415pxrQ3h8"target=”_blank”>Address: Maharlika Highway, Brgy. Malasin</a></LI>
      <LI>Contact Number: 09237168067</LI>
      <LI>Number of Rooms: 24 Rooms</LI>
      <LI>Email: HOTELPORTONOVO227@GMAIL.COM</LI>
      </br>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/portonovohotel/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this SUNWAY HOTEL ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="SUNWAY">SUNWAY HOTEL</h3>
      <LI><a href="https://maps.app.goo.gl/HV1aH2YXSnJscaAy6"target=”_blank”>Address:brgy. Palestina</a></LI>
      <LI>Contact Number: 09237168067/0449586688</LI>
      <LI>Number of Rooms: 11 Rooms</LI>
      <LI>Email: SUNWAYHOTEL2@GMAIL.COM</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/sunwayhotel/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this TOKYO SUITES ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="TOKYO">TOKYO SUITES</h3>
      <LI><a href="https://maps.app.goo.gl/ovCQ2YDiaAGXvhg4A"target=”_blank”>Address: Maharlika Rd, Brgy Abar 1st</a></LI>
      <LI>Contact Number: 09332629118</LI>
      <LI>Number of Rooms: 22 Rooms</LI>
      <LI>Email: TOKYOSUITES@YAHOO.COM</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/tokyosuites/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this SHANGHAI LEISURE SUITES ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="SHANGHAI">SHANGHAI LEISURE SUITES</h3>
      <LI><a href="https://maps.app.goo.gl/cj5szDwrdipQ7XNp7"target=”_blank”>Address: Zone 7, Brgy. Kita Kita, Sitio Florida</a></LI>
      <LI>Contact Number: 09253830110</LI>
      <LI>Number of Rooms: 26 Rooms</LI>
      <LI>Email: SHANGHAILEISURESUITES5@GMAIL.COM</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/shanghai/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this JOLLYDAYS HOTEL ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="JOLLYDAYS">JOLLYDAYS HOTEL</h3>
      <LI><a href="https://maps.app.goo.gl/zjDBNzn3g4LT26JM6"target=”_blank”>Address: Maharlika Highway, Brgy. Abar 1st</a></LI>
      <LI>Contact Number: 09238049815</LI>
      <LI>Number of Rooms: 25 Rooms</LI>
      <LI>Email: JOLLYDAYSHOTEL@GMAIL.COM</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#JOLLYDAYS">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/jollydays/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this MARQUEZ RESIDENCIA ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="MARQUEZ">MARQUEZ RESIDENCIA</h3>
      <LI><a href="https://maps.app.goo.gl/MX1Vuzg3ACDTSiW87"target=”_blank”>Address: Christianville Brgy. Abar 1st</a></LI>
      <LI>Contact Number: 09236450707</LI>
      <LI>Number of Rooms: 6 Villas</LI>
      <LI>Email: VANESSAPOR013018@GMAIL.COM</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#MARQUEZ">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/marquezresidencia/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this STAYCATION HOTEL ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="STAYCATION">STAYCATION HOTEL</h3>
      <LI><a href="https://maps.app.goo.gl/emUqi72CqUfkGy3u9"target=”_blank”>Address: Maharlika Highway, Brgy. Caanawan</a></LI>
      <LI>Contact Number: 09669522000</LI>
      <LI>Number of Rooms: 26 rooms</LI>
      <LI>Email: RESERVATIONSTAYCATIONHOTEL.COM.PH</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#STAYCATION">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/staycation/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this HOTEL SUMMERLIN ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="SUMMERLIN">HOTEL SUMMERLIN</h3>
      <LI><a href="https://maps.app.goo.gl/5QfGzLR8ygVJeNws9"target=”_blank”>Address: Maharlika highway, Brgy. Caanawan</a></LI>
      <LI>Contact Number: 09773559129</LI>
      <LI>Number of Rooms: 14 rooms</LI>
      <LI>Email: JASPERBRIANG@GMAIL.COM</LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/hotelsummerlin/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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
<! –– this LE FELIZ VICTORIA CASITAS EVENTS CENTER ––> 
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="VICTORIA">LE FELIZ VICTORIA CASITAS EVENTS CENTER</h3>
      <LI><a href="https://maps.app.goo.gl/T8aKasne1ijM4Exe6"target=”_blank”>Address: Paseo rueda. Brgy. Sibut</a></LI>
      <LI>Contact Number: 09683635002</LI>
      <LI>Number of Rooms: 5 Casitas</LI>
      <LI>Email: LEFELIZVICTORIA@GMAIL.COM</LI>
      </br>
      <LI><a href="<?=PATH?>amenity#VICTORIA">Show Amenities</a></LI>
   </div>
   <div class="row">
      <?php
      $dir = 'media/accommodation/lefeliz/';
      //check if directory exists
      if (is_dir($dir)){
            $files = array_diff(scandir($dir), array('..', '.'));;
            foreach ($files as $file){
               //check if image
               if (getimagesize($dir.$file)){
                  $title = basename($dir.$file);
                  ?>
                  <div class="col-md-4">
                        <a href="<?=PATH.$dir.$file?>" data-lightbox="gallary" data-title="<?=$title?>" class="thumbnail" style="border: 3px solid #555">
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