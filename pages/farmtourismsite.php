<div class="container">
   <! –– this ACES PHILIPPINE PRODUCERS CORPORATION ––> 
   <div class="page-header">
      <h3 id ="ACES" class="establishmentName">ACES PHILIPPINE PRODUCERS CORPORATION</h3>
      <li>ADDRESS: 2-12 SITIO LOMBOY BRGY. TAYABO, SAN JOSE CITY</li>
      <li>WEBSITE: ACDI ,ULI-PURPOSE COOP./ ACES PHIL PRODUCERS/ ACES FARM FRESH</li>
      <li>OWNER: ACES PHIL PRODUCERS CORP.</li>
      <li>CONTACT NUMBER: 09175635594</li>
   </div>
   <div class="row">
        <?php
        $dir = 'media/farmtourismsite/acesphilippineproducerscorporation/';
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
   <! –– this DUMALE MUSHROOM FARM––> 
   <div class="container">
      <div class="page-header">
         <h3 id ="DUMALE" class="establishmentName">DUMALE MUSHROOM FARM</h3>
         <li>ADDRESS: 2-5. BRGY STO TOMAS, SAN JOSE CITY</li>
         <li>OWNER: DON DUMALE</li>
         <li>CONTACT NUMBER: 09453661214</li>
      </div>
      <div class="row">
        <?php
        $dir = 'media/farmtourismsite/dumalemushroomfarm/';
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
   <! –– this KALASAG––> 
   <div class="container">
      <div class="page-header">
         <h3 id ="KALASAG" class="establishmentName">KALASAG MULTI-PURPOSE COOPERATIVE</h3>
         <li><a href=" https://maps.app.goo.gl/e3WkTefQUjZgJ5ua7"target=”_blank”>ADDRESS: ZONE 1 BRGY SAN AGUSTIN, SAN JOSE CITY</a></li>
         <li>WEBSITE: KALASAGMC@GMAIL.COM</li>
         <li>OWNER: WENCELITO GOMEZ.</li>
         <li>CONTACT NUMBER: 09123725893</li>
      </div>
      <div class="row">
        <?php
        $dir = 'media/farmtourismsite/kalasagmultipurposecooperative/';
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
<! –– this TINTOP MUSHROOM FARM––> 
<div class="container">
   <div class="page-header">
      <h3 id ="TINTOP" class="establishmentName">TINTOP MUSHROOM FARM</h3>
      <li>ADDRESS: ZONE 3, BRGY STO. TOMAS, SAN JOSE CITY</li>
      <li>WEBSITE: TINTOP MUSHROOM FARM</li>
      <li>OWNER: CHRISTOPHER TUMAMPO</li>
      <li>CONTACT NUMBER: 09275422187</li>
   </div>
   <div class="row">
        <?php
        $dir = 'media/farmtourismsite/tintopmushroomfarm/';
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
<! –– this EASTERN PRIMARY MULTI-PURPOSE COOPERATIVE––> 
<div class="container">
   <div class="page-header">
      <h3 id ="EASTERN" class="establishmentName">EASTERN PRIMARY MULTI-PURPOSE COOPERATIVE</h3>
      <li>ADDRESS: NO 426, PASEO RUEDA ST. CORNER VETERANOS EXT. SIBUT SAN JOSE CITY</li>
      <li>WEBSITE: SAN JOSE CARAMILK (FB)</li>
      <li>OWNER: WILARSON PASCUAL.</li>
      <li>CONTACT NUMBER: 09364701554</li>
   </div>
   <div class="row">
        <?php
        $dir = 'media/farmtourismsite/easternmultipurposecooperative/';
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