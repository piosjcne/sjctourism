<div class="container">
         <! –– this samgy ––> 
         <div class="page-header">
            <h3 style="font-family: BARABARA;" id="SAMGY">SAMGY 199</h3>
            <LI><a href="https://maps.app.goo.gl/MtEAFU9soD3T8TMi7 "target=”_blank”>Address: Escobar ST, Brgy.FE Marcos, San Jose City</a></LI>
            <LI>Contact Number: 09072738594</LI>
            <LI>Operating Hours: 11am to 10pm</LI>
            <LI>Unlimited Samgyup Buffet</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/samgy199/';
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
      <! –– this but first, coffee ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;"id="COFFEE">BUT FIRST, COFFEE</h3>
            <LI><a href="https://maps.app.goo.gl/TfyCyZbjaYShG19w8 "target=”_blank”>Address: GOLDEN COMMERCIAL BLDG., ADELA ST., ABAR 1ST, SJC</a></LI>
            <LI>Contact Number: 09457209283</LI>
            <LI>Operating Hours: 9am to 10pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/butfirstcoffee/';
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
      <! –– this hongdae chicken––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;"id="HONGDAE">HONGDAE CHICKEN</h3>
            <LI><a href="https://maps.app.goo.gl/sNTfouWQuuBGm7QBA"target=”_blank”>Address: R.Eugenio, Brgy. Canuto Ramos, San jose City</a></LI>
            <LI>Contact Number: 09670837883</LI>
            <LI>Operating Hours: 11am to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/hongdaechicken/';
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
      <! –– this  AR CAFÉ  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase;font-family: BARABARA;" id="CAFÉ">AR CAFÉ </h3>
            <LI><a href="https://maps.app.goo.gl/gCRVpbYAS1suawzT7 "target=”_blank”>Address: CADHIT ST. SJC, NE</a></LI>
            <LI>Operating Hours: 8:00 AM to 10:00 PM	</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/arcafe/';
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
      <! –– this  BLACK SCOOP CAFÉ	 -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="BLACK">BLACK SCOOP CAFÉ</h3>
            <LI><a href="https://maps.app.goo.gl/1Zpnu7Hqxqb7pT5A8"target=”_blank”>Address: MAHARLIKA HI-WAY, ABAR 1ST, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Contact Number: 09162257479</LI>
            <LI>Operating Hours: 10:30 AM to 10 PM	</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/blackscoopcafe/';
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
      <! –– this  BO’S COFFEE -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="BO">BO’S COFFEE</h3>
            <LI><a href="https://maps.app.goo.gl/hqdpTi1TQSLtw9nq5 "target=”_blank”>Address:SHELL COMPOUND, MALASIN, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Contact Number: 09171242125</LI>
            <LI>Operating Hours: 8am to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/boscoffee/';
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
      <! –– this  CAFÉ LILY  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="LILY">CAFÉ LILY </h3>
            <LI><a href=" https://maps.app.goo.gl/zT7rxmgvQUhinbbT7"target=”_blank”>Address: TUMANA, PALESTINA, SJC, NE</a></LI>
            <LI>Contact Number: 09273761800</LI>
            <LI>Operating Hours: 3pm to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/cafelily/';
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
      <! –– this CHELSKIE’S PAPER BOXX SUSHI BAR	  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="CHELSKIE">CHELSKIE’S PAPER BOXX SUSHI BAR</h3>
            <LI><a href="https://maps.app.goo.gl/tV488iVXZMFY7nn67 "target=”_blank”>Address: ZONE 9-A, MARIANOS SUBD, BRGY. ABAR 1ST</a></LI>
            <LI>Contact Number: 09328730002</LI>
            <LI>Operating Hours: 2:00 PM to 9:00 PM</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/chelskiespaperboxsushibar/';
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
      <! –– this  CHESED CAFÉ  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="CHESED">CHESED CAFÉ </h3>
            <LI><a href=" https://maps.app.goo.gl/pjzwomv5KCSomnYBA"target=”_blank”>Address: EUGENIO ST. SJC, NE</a></LI>
            <LI>Contact Number: 09238119904</LI>
            <LI>Operating Hours: 10:00 AM to 8:00 PM	</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/chesedcafe/';
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
      <! –– this DAYS CAFÉ  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="DAYS">DAYS CAFÉ</h3>
            <LI><a href="https://maps.app.goo.gl/1pwR5PPSCw69Z7gP9 "target=”_blank”>Address:ZONE 11, SATURNO AVE., BRGY. SIBUT, SJC</a></LI>
            <LI>Contact Number: 09656632227</LI>
            <LI>Operating Hours: 11am to 7pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/dayscafe/';
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
      <! –– this  INFINITEA -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="INFINITEA">INFINITEA</h3>
            <LI><a href="https://maps.app.goo.gl/3oT5a2J4WjWW4sSc7"target=”_blank”>Address:EUGENIO ST. CANUTO RAMOS, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Contact Number: 09171773206</LI>
            <LI>Operating Hours: 10am to 7pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/infinitea/';
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
      <! –– this  JJANG AUTHENTIC RESTAURANT	 -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="JJANG">JJANG AUTHENTIC RESTAURANT</h3>
            <LI><a href=" https://maps.app.goo.gl/iNgGbGCy8TJwdaao9"target=”_blank”>Address: #6 ARIANA BLDG., ZONE 11A, ABAR 1ST, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Contact Number: 09977303893</LI>
            <LI>Operating Hours: 11am to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/jjangauthenticrestaurant/';
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
      <! –– this  JOLLIBEE -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="JOLLIBEE">JOLLIBEE (Crossing)</h3>
            <LI><a href="https://maps.app.goo.gl/ktJi1PbBBpqQQqke9 "target=”_blank”>Address: Maharlika, Hi-way, brgy, R Rueda</a></LI>
            <LI>Operating Hours: 8am to 8pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/jollibee-crossing/';
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
      <! –– this  jolibee waltermart -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="waltermart">JOLIBEE (Waltermart)</h3>
            <LI><a href="https://maps.app.goo.gl/rK5adYEtPjGSHUPKA "target=”_blank”>Address: GF WALTERMART, MAHARLIKA HI-WAY, BRGY. MALASIN, SJC.</a></LI>
            <LI>Operating Hours: 8am to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/jollibee-waltermart/';
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
      <! –– this  KEL’Z CAFÉ -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="KEL">KEL’Z CAFÉ</h3>
            <LI><a href=" https://maps.app.goo.gl/hD6Punjx5cG6WhuE6"target=”_blank”>Address: SANCHEZ ST., BRGY. C. SANCHEZ</a></LI>
            <LI>Contact Number: 09606033514</LI>
            <LI>Operating Hours: 12nn to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/kelzcafe/';
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
      <! –– this KFC	  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="KFC">KFC</h3>
            <LI><a href=" https://maps.app.goo.gl/JJBvtn7EovbfJjDv6"target=”_blank”>Address: GF WALTERMART, MAHARLIKA HI-WAY, BRGY. MALASIN, SJC.</a></LI>
            <LI>Operating Hours: 9am to 8pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/kfc-waltermart/';
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
      <! –– this KOFI MARIA	  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="KOFI">KOFI MARIA</h3>
            <LI><a href=" https://maps.app.goo.gl/DZRLhk1uFRwdGEGK6"target=”_blank”>Address: BONIFACIO ST. CORNER PASCUAL ST., SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Contact Number: 09761916308</LI>
            <LI>Operating Hours: 9:30am to 10:30pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <div class="col-md-4">
               <a href="media/restaurant/kofimaria/j2.jpg" data-lightbox="gallary" data-title="LOGO"class="thumbnail" style="border: 3px solid #555">
               <img src="media/restaurant/kofimaria/j2.jpg"/>
               </a>
            </div>
            <div class="row">
            <?php
            $dir = 'media/restaurant/kofimaria/';
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
      <! –– this   KRISPY KREME-–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="KRISPY">KRISPY KREME</h3>
            <LI><a href=" https://maps.app.goo.gl/tvFfh9RHZ5M6fLPFA"target=”_blank”>Address: BRGY. CAANAWAN, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Operating Hours: 6am to 10pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/krispykreme/';
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
      <! –– this MACAO IMPERIAL TEA	  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="MACAO">MACAO IMPERIAL TEA	</h3>
            <LI><a href="https://maps.app.goo.gl/zBaBd7sGm7e1WMs98 "target=”_blank”>Address: BRGY.CAANAWAN, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Operating Hours: 10am to 10pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/macaoimperialtea/';
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
      <! –– this NYFD -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="NYFD"> NYFD </h3>
            <LI><a href="https://maps.app.goo.gl/KeQqEoTMav7ViWZe8 "target=”_blank”>Address: BRGY. CAANAWAN, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Operating Hours: 10am to 10pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/nyfd/';
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
      <! –– this YELLOW CAB PIZZA CO.	 -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="YELLOW"> YELLOW CAB PIZZA CO.	 </h3>
            <LI><a href=" https://maps.app.goo.gl/3ATxzs7yduq8JBZTA"target=”_blank”>Address: BRGY. CAANAWAN, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Operating Hours: 10am to 10pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/yellowcabpizzaco/';
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
      <! –– this  NUEVA ECIJA CHICKEN INASAL INC. -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="Magic">Magic, CHICKEN INASAL INC.</h3>
            <LI>Address: F.E MARCOS, MAGIC BLDG., SJC.	</LI>
            <LI>Operating Hours: 9am to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/magicchickeninasal/';
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
      <! –– this  PUROK KAINAM	 -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="PUROK">PUROK KAINAM</h3>
            <LI><a href=" https://maps.app.goo.gl/HzTY1CJf15mFHQgf6"target=”_blank”>Address:SOBREPEÑA DRIVE, R. RUEDA, SAN JOSE CITY</a></LI>
            <LI>Contact Number: 09253049084</LI>
            <LI>Operating Hours: 10:00 AM to 2:00 PM, to 5:00 PM to 9:00 PM	</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/purokkainam/';
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
      <! –– this  (SHAKEY’S) REM PIZZA PARLOR -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="PIZZA">(SHAKEY’S) REM PIZZA PARLOR</h3>
            <LI><a href=" https://maps.app.goo.gl/i58yq9oZ54LXCR1H8"target=”_blank”>Address:MAHARLIKA RD., BRGY. ABAR 1ST, SJC.</a></LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/shakeysrempizzaparlor/';
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
      <! –– this  THE HUNGRY BAR	 -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="HUNGRY">THE HUNGRY BAR</h3>
            <LI><a href=" https://maps.app.goo.gl/GqAg68jf3d9rpgo4A"target=”_blank”>Address: R. RUEDA, SAN JOSE CITY</a></LI>
            <LI>Contact Number: 09171299300</LI>
            <LI>Operating Hours: 7am to 10pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/thehungrybar/';
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
      <! –– this  TVOLT & SU -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="TVOLT">TVOLT & SU</h3>
            <LI><a href="https://maps.app.goo.gl/UXv4F4Cm9QSfpWCz7 "target=”_blank”>Address: BRGY. MALASIN, SJC.</a></LI>
            <LI>Operating Hours: 4pm to 12pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/tvoltandsu/';
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
      <! –– this  TOM’S CHICKEN HOUSE -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="TOM">TOM’S CHICKEN HOUSE</h3>
            <LI><a href=" https://maps.app.goo.gl/wLjjKv2nnEpTA2QUA"target=”_blank”>Address:SANCHEZ ST., BRGY. CALAOCAN</a></LI>
            <LI>Contact Number: 09655628076</LI>
            <LI>Operating Hours: 11am to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/tomschickenhouse/';
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
      <! –– this  ANGEL’S PIZZA -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="ANGEL">ANGEL’S PIZZA</h3>
            <LI><a href=" https://maps.app.goo.gl/qzTfySAJt4vGNCyt7"target=”_blank”>Address: GOLDEN COMMERCIAL BLDG., ADELA ST., ABAR 1ST, SJC</a></LI>
            <LI>Operating Hours: 8am to 12pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/angelspizza/';
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
      <! –– this  MAX’S RESTAURANT -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="MAX">MAX’S RESTAURANT</h3>
            <LI><a href=" https://maps.app.goo.gl/bVes8QEUg5ykCtyC9"target=”_blank”>Address: MAHARLIKA HWY. BRGY. CAANAWAN, SAN  JOSE CITY</a></LI>
            <LI>Operating Hours: 9am to 10pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/maxsrestaurant/';
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
      <! –– this CHOWKING  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="CHOWKING">CHOWKING</h3>
            <LI><a href ="https://maps.app.goo.gl/QqWGxZtx8y2nzftR6"target=”_blank”>Address: BRGY. R RUEDA, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Operating Hours: 6am to 10pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/chowking/';
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
      <! –– this CAFÉ ANTONINA  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="ANTONINA">CAFÉ ANTONINA</h3>
            <LI><a href="https://maps.app.goo.gl/EhQPFEWiVQSkX78F7 "target=”_blank”>Address: HOTEL FRANCESKO INC.</a></LI>
            <LI>Operating Hours: 12nn to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/cafeantonia/';
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
      <! –– this  HAP CHAN -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="HAP">HAP CHAN</h3>
            <LI><a href=" https://maps.app.goo.gl/tKWfMsnBcKPNKfVc7"target=”_blank”>Address: ZONE 10, BRGY. ABAR 1ST, SJC.</a></LI>
            <LI>Operating Hours: 10am to 9pm</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/hapchan/';
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
      <! –– this KAPE MARIE -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="MARIE"> KAPE MARIE </h3>
            <LI><a href=" https://maps.app.goo.gl/RDxrn9UkzpFBtNv99"target=”_blank”>Address: MAHARLIKA HIGHWAY, R. RUEDA SR., SAN JOSE CITY</a></LI>
            <LI>Contact Number: 09055733857</LI>
            <LI>Operating Hours: 10am to 8PM</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/kapemarie/';
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
      <! –– this KULAS  -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="KULAS"> KULAS  </h3>
            <LI><a href="https://maps.app.goo.gl/27hWB6XjW9mELwrv9 "target=”_blank”>Address: HOTEL FRANCESKO BLDG.,BRGY. MALASIN, SJC.</a></LI>
            <LI>Operating Hours: 11:30 NN to 8:30 PM</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/kulas/';
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
      <! –– this KUYA JAMES SAMGYUPSAL -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="KUYA"> KUYA JAMES SAMGYUPSAL </h3>
            <LI><a href="https://maps.app.goo.gl/ib2nna1rPWWX2pFS9 "target=”_blank”>Address:MAHARLIKA HI-WAY, CAANAWAN	, SJC.</a></LI>
            <LI>Operating Hours: 10am to 9PM</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/kuyajamessamgyupsal/';
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
      <! –– this EAGLES NEST FOOD PLACE -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="EAGLES"> EAGLES NEST FOOD PLACE </h3>
            <LI><a href="https://maps.app.goo.gl/6QQKTfBxDtXmmnKZ9 "target=”_blank”>Address:Z-1, STO NINO 3RD, SJC, NE</a></LI>
            <LI>Operating Hours: 10am to 7PM</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/eaglesnestfoodplace/';
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
      <! –– this GREEN WICH -–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="GREEN">  GREEN WICH  </h3>
            <LI><a href="https://maps.app.goo.gl/rghzB1V3Xi4gxGfNA"target=”_blank”>Address: BRGY. R RUEDA, SAN JOSE CITY, NUEVA ECIJA</a></LI>
            <LI>Operating Hours: 10am to 9PM</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/greenwich/';
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
      <! –– this il restorante ti tayabo-–> 
      <div class="container">
         <div class="page-header">
            <h3 style=" text-transform:uppercase; font-family: BARABARA;"id="RESTORANTE">  il restorante ti tayabo </h3>
            <LI><a href="https://maps.app.goo.gl/wqCFfNeE8pBksy4H6"target=”_blank”>Address: LOMBOY, BRGY TAYABO</a></LI>
            <LI>Operating Hours: 10am to 9PM</LI>
            <LI>MONDAY-SUNDAY</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/restaurant/ilrestorantetitayabo/';
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