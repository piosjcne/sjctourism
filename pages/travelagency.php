<div class="container">
   <div class="page-header">
      <h3 ID="ALEXIS" class="establishmentName">ALEXIS TRAVEL AND TOURS</h3>
      <LI><a href="https://maps.app.goo.gl/Cwrjs4Vo6Eow9sbU7 "target=”_blank”>Address: BRGY. ABAR 1ST, S.J.C.</a></LI>
      <LI>Gmail: alexistravelagency@gmail.com </LI>
      <LI>Tel No: 0908-866-3725</LI>
   </div>
   <div class="row">
    <?php
        $dir = 'media/travelagency/alexistravelandtours/';
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
   <div class="page-header">
      <h3 id="LEON" class="establishmentName">GEOR TRAVEL & TOURS SERVICES</h3>
      <LI><a href=" https://maps.app.goo.gl/39Shkt3AD3JCzG9h8"target=”_blank”>Address: BRGY MALASIN, S.J.C..</a></LI>
      <LI>Email: CUSTOMERSERVICE@GEORTRAVEL.COM </LI>
      <LI>Tel No: 09632774013</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/travelagency/geortravelandtoursservices/';
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
   <div class="page-header">
      <h3 ID="KLCC" class="establishmentName">KLCC TRAVEL AND TOURS</h3>
      <LI><a href="https://maps.app.goo.gl/5nTCVphwmyt7YkGSA"target=”_blank”>Address: MAHARLIKA HI-WAY, F.E. MARCOS, S.J.C.</a></LI>
      <LI>Email: KLCCTRAVELANDTOURS@GMAIL.COM</LI>
      <LI>Tel No: 0916-322-6052</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/travelagency/klcctravelandtours/';
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
   <div class="page-header">
      <h3 ID="KRISTINE" class="establishmentName">KRISTINE TRAVEL& TOURS</h3>
      <LI><a href="https://maps.app.goo.gl/Z8EU4Fb5dDYHXwHR6 "target=”_blank”>Address: 397 BLISS RD. , MALASIN, S.J.C.</a></LI>
      <LI>Email: KKRISTINETRAVEL1@GMAIL.COM</LI>
      <LI>Tel No: 0917-875-7538</LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/travelagency/kristinetravelandtours/';
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
   <div class="page-header">
      <h3 ID="LORNWILL" class="establishmentName">LORNWILL TRAVEL AND TOURS</h3>
      <LI><a href=" https://maps.app.goo.gl/BRrw7ueTE2Qve5uA7"target=”_blank”>Address: 2ND FLOOR, LORNWILL BLDG. 1, MAHARLIKA, ABAR 2ND</a></LI>
      <LI>Tel No: 0917-884-1880</LI>
      <LI>SOCIAL MEDIA(FB): LORNWILL TRAVEL AND TOURS </LI>
   </div>
   <div class="row">
        <?php
        $dir = 'media/travelagency/lornwilltravelandtours/';
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