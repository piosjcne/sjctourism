<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" ID="OTOP">OTOP (ONE TOWN ONE PRODUCT)</h3>
      <li><a href=" https://maps.app.goo.gl/irqvGjSFjteLWc2RA"target=”_blank”>ADDRESS: CARDENAS ST. CORNER AO PASCUAL ST.</a></li>
      <li>WEBSITE: (FB)OTOP SAN JOSE</li>
      <li>CONTACT NUMBER: 0449409658</li>
      <li>MANAGED BY: CITY TOURISM OFFICE</li>
   </div>
   <div class="row">
        <?php
        $dir = 'media/products/otoponetownoneproduct/';
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
   <div class="page-header">
      <h3 style="font-family: BARABARA;" ID="VICENTE">SAN VICENTE'S HOMEMADE KAKANIN</h3>
      <li><a href=" https://maps.app.goo.gl/s2ap4H98N6yPoh4N8"target=”_blank”>ADDRESS: BRGY CRISANTO SANCHEZ, SAN JOSE CITY</a></li>
      <li>WEBSITE: HTTP:///SANVICENTEKAKANIN.COM</li>
      <li>CONTACT NUMBER: 09178045836</li>
      <li>OWNED BY: ERWIN SAN VICENTE</li>
   </div>
   <div class="row">
        <?php
            $dir = 'media/products/sanvicenteshomemadekakanin/';
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