<div class="container">
   <! –– this TAYABO ––> 
   <div class="page-header">
      <h3 id="TAYABO" class="establishmentName">TAYABO NATURE PARK </h3>
      <LI><a href=" https://maps.app.goo.gl/iJ6Tgg1vzdPFCq8o6"target=”_blank”>ADDRESS: BRGY TAYABO, SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 0449409658</LI>
      <LI>MANAGE BY: CITY TOURISM OFFICE</LI>
      <LI>EMAIL: TOURISM_SANJOSECITY@YAHOO.COM.PH</LI>
   </div>
   <div class="row">
   <?php
      $dir = 'media/tourismsite/tayabonaturepark/';
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
<div class="container">
   <! –– this MT. WILLIAM––> 
   <div class="container">
      <div class="page-header">
         <h3 id="WILLIAMNS" class="establishmentName">MT. WILLIAMS</h3>
         <LI><a href=" https://maps.app.goo.gl/kZC5wB4JThQwsM4B6"target=”_blank”>ADDRESS: BRGY VILLA FLORESTA, SAN JOSE CITY </a></LI>
         <LI>CONTACT NUMBER: N/A</LI>
         <LI>MANAGE BY: CITY TOURISM OFFICE</LI>
         <LI>EMAIL: TOURISM_SANJOSECITY@YAHOO.COM.PH</LI>
      </div>
      <div class="row">
   <?php
      $dir = 'media/tourismsite/mtwilliams/';
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
   <! –– this DEMO FARM––> 
   <div class="container">
      <div class="page-header">
         <h3 id="PLANTHERIAL" class="establishmentName">PLANTHERIAL INTEGRATED FARM (DEMO FARM)</h3>
         <LI>ADDRESS: BRGY STO NINO 2ND, SAN JOSE CITY</LI>
         <LI>CONTACT NUMBER: 09070765517</LI>
         <LI>MANAGE BY: MS. MYRA RAMOS</LI>
         <LI>EMAIL:N/A </LI>
      </div>
        <div class="row">
        <?php
            $dir = 'media/tourismsite/plantherialintegratedfarmdemofarm/';
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
   <! –– this PALASAPAS FALLS ––> 
   <div class="container">
      <div class="page-header">
         <h3 id="PALASAPAS" class="establishmentName">PALASAPAS FALLS</h3>
         <LI>ADDRESS: BRGY MANICLA, SAN JOSE CITY</LI>
         <LI>CONTACT NUMBER: 0449409658</LI>
         <LI>MANAGE BY: CITY TOURISM OFFICE</LI>
         <LI>EMAIL: TOURISM_SANJOSECITY@YAHOO.COM.PH</LI>
      </div>
      <div class="row">
   <?php
      $dir = 'media/tourismsite/palasapasfalls/';
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
   <! –– this SAN JUAN VIEW DECK––> 
   <div class="container">
      <div class="page-header">
         <h3 id="SAN" class="establishmentName">SAN JUAN VIEW DECK</h3>
         <LI>ADDRESS: BRGY SAN JUAN, SAN JOSE CITY</LI>
         <LI>CONTACT NUMBER: N/A</LI>
         <LI>MANAGE BY: N/A</LI>
         <LI>EMAIL:N/A</LI>
      </div>
      <div class="row">
   <?php
      $dir = 'media/tourismsite/sanjuanviewdeck/';
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
   <! –– this MONT OFELIA ECO PARK ––> 
   <div class="container">
      <div class="page-header">
         <h3 id="MONT" class="establishmentName">MONT OFELIA ECO PARK</h3>
         <LI><a href="https://maps.app.goo.gl/ovR4AyLymzcuczxd8 "target=”_blank”>ADDRESS: BRGY MANICLA, SAN JOSE CITY</a></LI>
         <LI>CONTACT NUMBER: N/A</LI>
         <LI>MANAGE/OWNER BY: OFELIA NUNEZ</LI>
         <LI>EMAIL: N/A</LI>
      </div>
      <div class="row">
   <?php
      $dir = 'media/tourismsite/montofeliaecopark/';
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
   <! –– this lipit lipit rock formation––> 
   <div class="container">
      <div class="page-header">
         <h3 id="LIPIT" class="establishmentName">LIPIT LIPIT ROCK FORMATION</h3>
         <LI>ADDRESS: BRGY TAYABO, SAN JOSE CITY</LI>
         <LI>CONTACT NUMBER: 0449409658</LI>
         <LI>MANAGE BY: CITY TOURISM OFFICE</LI>
         <LI>EMAIL: TOURISM_SANJOSECITY@YAHOO.COM.PH</LI>
      </div>
      <div class="row">
         <a   data-title="  "class="thumbnail" style="border: 3px solid #555">
            <video width="200%" height="200%" class="img-thumbnail"  controls >
               <source src="pic2/Rock Formation (1).MP4" type="video/MP4">
               <source src="pci2/lake.ogg" type="video/ogg">
            </video>
         </a>
      </div>
   </div>
</div>