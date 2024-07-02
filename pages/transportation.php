<div class="container">
   <! –– this BALIWAG ––> 
   <div class="page-header">
      <h3 id="BALIWAG" class="establishmentName"> BALIWAG TRANSIT INC. </h3>
      <LI><a href="https://maps.app.goo.gl/etjFaEPpKt3a5XF19 "target=”_blank”>ADDRESS: BONIFACIO ST., BRGY. R. RUEDA, SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 09431345293</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/transportation/baliwagtransitinc/';
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
   <! –– this GOLDEN BEE––> 
   <div class="page-header">
      <h3 id="GOLDEN" class="establishmentName"> GOLDEN BEE </h3>
      <LI><a href="https://maps.app.goo.gl/etjFaEPpKt3a5XF19 "target=”_blank”>ADDRESS: BONIFACIO ST., BRGY. R. RUEDA, SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 09431345293</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/transportation/goldenbee/';
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
<! –– this GENESIS––> 
<div class="container">
   <div class="page-header">
      <h3 id="GENESIS" class="establishmentName">GENESIS</h3>
      <LI><a href="https://maps.app.goo.gl/Qr8zSvsD7Lg8imcJ7 "target=”_blank”>ADDRESS: MAHARLIKA RD, BRGY. MALASIN, SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 094313445293</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/transportation/genesis/';
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
<! –– this MANIBELA ANG BUHAY TRANSPORT COOPERATIVE––> 
<div class="container">
   <div class="page-header">
      <h3 id="MANIBELA" class="establishmentName">MANIBELA ANG BUHAY TRANSPORT COOPERATIVE</h3>
      <LI><a href="https://maps.app.goo.gl/J6Lku2X1py61hwmR9 "target=”_blank”>ADDRESS: MAHARLIKA RD, BRGY. CAANAWAN, SAN JOSE CITY</a></LI>
      <LI>EMAIL: MEMBERSMBTC@GMAIL.COM</LI>
      <LI>CONTACT NUMBER: 09772064370</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/transportation/manibelaangbuhaytransportcooperative/';
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
<! –– this UV EXPRESS (BANTRANS)––> 
<div class="container">
   <div class="page-header">
      <h3 id="EXPRESS" class="establishmentName">UV EXPRESS (BANTRANS)</h3>
      <LI><a href="https://maps.app.goo.gl/8PnsWpB2EZG2tfWS6 "target=”_blank”>ADDRESS:EUGENIO ST, SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 09563007730</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/transportation/uvexpressbantrans/';
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
<! –– this VICTORY LINER ––> 
<div class="container">
   <div class="page-header">
      <h3 id="VICTORY" class="establishmentName">VICTORY LINER</h3>
      <LI><a href="https://maps.app.goo.gl/H6dSiYyjThqwr1mv7 "target=”_blank”>ADDRESS: MAHARLIKA RD, BRGY. ABAR 1ST, SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 09435485717</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/transportation/victoryliner/';
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