<div class="container">
   <! –– this 12.TWELVE ––> 
   <div class="page-header">
      <h3 ID="TWELVE" class="establishmentName">12.TWELVE </h3>
      <LI><a href="https://maps.app.goo.gl/Lq2RbHbaJUdVSLZk9"target=”_blank”>ADDRESS: BRGY. CAANAWAN SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 09212751234</LI>
      <LI>EMAIL/FACEBOOK: 12. TWELVE NAIL WASH SPA</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/spawellness/12twelve/';
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
<! –– this BROW LINE STATION––> 
<div class="container">
   <div class="page-header">
      <h3 ID="BROW" class="establishmentName">BROW LINE STATION</h3>
      <LI>ADDRESS: BRGY. ABAR 1ST, SAN JOSE CITY</LI>
      <LI>CONTACT NUMBER: 09654913426</LI>
      <LI>EMAIL/FACEBOOK: BROW LINE SAN JOSE</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/spawellness/browlinestation/';
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
<! –– this CRYSTAL CARE––> 
<div class="container">
   <div class="page-header">
      <h3 ID="CRYSTAL" class="establishmentName">CRYSTAL CARE</h3>
      <LI><a href=" https://maps.app.goo.gl/YNTEAKBpLguSTCsk7"target=”_blank”>ADDRESS: BRGY. ABAR 1ST, SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 09758083903</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/spawellness/crystalcare/';
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
<! –– this FAITH WELLNESS & SPA ––> 
<div class="container">
   <div class="page-header">
      <h3 ID="FAITH" class="establishmentName">FAITH WELLNESS & SPA</h3>
      <LI><a href="https://maps.app.goo.gl/ARkT86o6sp4tsruFA "target=”_blank”>ADDRESS:2-2 MAHARLIKA, HIWAY ABAR 2ND</a></LI>
      <LI>CONTACT NUMBER: 09050993462</LI>
      <LI>EMAIL/FACEBOOK: FAITHWELLNESS SPA</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/spawellness/faithwelnessandspa/';
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
<! –– this LE RAD ––> 
<div class="container">
   <div class="page-header">
      <h3 ID="LE" class="establishmentName">LE RAD</h3>
      <LI><a href="https://maps.app.goo.gl/jVFih7Bs68KctQZQ7 "target=”_blank”>ADDRESS: MAHARLIKA RD. CAANAWAN, SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 09163341075</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/spawellness/lerad/';
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
<! –– this NORTHERN SPA––> 
<div class="container">
   <div class="page-header">
      <h3 ID="NORTHERN" class="establishmentName">NORTHERN SPA</h3>
      <LI><a href=" https://maps.app.goo.gl/SZyVbLNksDhGq6dK9"target=”_blank”>ADDRESS: MAHARLIKA RD. CAANAWAN, SAN JOSE CITY</a></LI>
      <LI>CONTACT NUMBER: 09956279250</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/spawellness/northernspa/';
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
<! –– this NUAT THAI ––> 
<div class="container">
   <div class="page-header">
      <h3 ID="NUAT" class="establishmentName">NUAT THAI</h3>
      <LI><a href="https://maps.app.goo.gl/oCGbvABYGRngvYXg6"target=”_blank”>ADDRESS: MAHARLIKA, HIWAY, MALASIN, SAN JOSE CITY.</a></LI>
      <LI>CONTACT NUMBER: 09604313875</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/spawellness/nuatthai/';
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
<! –– this SPATCHIE––> 
<div class="container">
   <div class="page-header">
      <h3 ID="SPATCHIE" class="establishmentName">SPATCHIE</h3>
      <LI>ADDRESS: BONIFACIO ST. SAN JOSE CITY</LI>
      <LI>CONTACT NUMBER: 09187929092</LI>
      <LI>EMAIL: @SPATCHIESALONANDSPA</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/spawellness/spatchie/';
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