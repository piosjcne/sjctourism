<div class="container">
         <! –– this CENTRO MALL––> 
         <div class="page-header">
            <h3 id="CENTRO" class="establishmentName">CENTRO MALL </h3>
            <LI><a href="https://maps.app.goo.gl/TCjFYLykdM6BRR3q6"target=”_blank”>ADDRESS: MAHARLIKA RD, BRGY FE MARCOS,SAN JOSE CITY</a></LI>
            <LI>CONTACT NUMBER:09437010420</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/mallsandsupermarket/centromall/';
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
      <! –– this FRIENDSHIP––> 
      <div class="container">
         <div class="page-header">
            <h3 id="FRIENDSHIP" class="establishmentName">FRIENDSHIP SUPERMARKET INC.</h3>
            <LI><a href="https://maps.app.goo.gl/47o945GvXMRM5Gpv7 "target=”_blank”>ADDRESS: BRGY MALASIN,SAN JOSE CITY</a></LI>
            <LI>CONTACT NUMBER:0449589072</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/mallsandsupermarket/friendshipsupermarketinc/';
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
      <! –– this J&F––> 
      <div class="container">
         <div class="page-header">
            <h3 id="J&F" class="establishmentName">J & F DEPARTMENT STORE</h3>
            <LI><a href="https://maps.app.goo.gl/QEkZgDk4p62Tp28SA "target=”_blank”>ADDRESS: MAHARLIKA RD, BRGY FE MARCOS,SAN JOSE CITY</a></LI>
            <LI>CONTACT NUMBER:09957191086</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/mallsandsupermarket/jandfdepartmentstore/';
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
      <! –– this LAMMART ––> 
      <div class="container">
         <div class="page-header">
            <h3 id="LAMMART" class="establishmentName">LAMMART</h3>
            <LI><a href="https://maps.app.goo.gl/mHQcZGU3UB44n52C9 "target=”_blank”>ADDRESS: MAHARLIKA RD, BRGY R, RUEDA SR,SAN JOSE CITY</a></LI>
            <LI>CONTACT NUMBER:09150867450</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/mallsandsupermarket/lammart/';
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
      <! –– this MAGIC ––> 
      <div class="container">
         <div class="page-header">
            <h3 id="MAGIC" class="establishmentName">MAGIC SUPERMARKET</h3>
            <LI><a href="https://maps.app.goo.gl/jr8TimNEgupXuvvN6" target="_blank">ADDRESS: MAHARLIKA RD, BRGY FE MARCOS,SAN JOSE CITY</a></LI>
            <LI>CONTACT NUMBER:09916991577</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/mallsandsupermarket/magicsupermarket/';
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
      <! –– this SAVEMORE––> 
      <div class="container">
         <div class="page-header">
            <h3 id="SAVEMORE" class="establishmentName">SAVEMORE MARKET</h3>
            <LI><a href="https://maps.app.goo.gl/28Vveztx6bg7Fss46 "target=”_blank”>ADDRESS: MAHARLIKA RD, BRGY. R RUEDA SR,SAN JOSE CITY</a></LI>
            <LI>CONTACT NUMBER:0449401457</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/mallsandsupermarket/savemoremarket/';
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
      <! –– this WALTERMART––> 
      <div class="container">
         <div class="page-header">
            <h3 id="WALTERMART" class="establishmentName">WALTERMART</h3>
            <LI><a href=" https://maps.app.goo.gl/amufLhjJ1Hq47fgT8"target=”_blank”>ADDRESS: BRGY. MALASIN,SAN JOSE CITY</a></LI>
            <LI>CONTACT NUMBER:09985990281</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/mallsandsupermarket/waltermart/';
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
      <! –– this PURE GOLD––> 
      <div class="container">
         <div class="page-header">
            <h3 id="PURE" class="establishmentName">PURE GOLD</h3>
            <LI><a href="https://maps.app.goo.gl/8V6qSCQWkK6gC2ue7 "target=”_blank”>ADDRESS: MAHARLIKA RD., BRGY. ABAR 2ND,SAN JOSE CITY</a></LI>
            <LI>CONTACT NUMBER:09435494536</LI>
         </div>
         <div class="row">
            <?php
            $dir = 'media/mallsandsupermarket/puregold/';
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