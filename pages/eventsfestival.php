<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;" id="PAGIBANG">PAGIBANG DAMARA FESTIVAL</h3>
      <h7> Pagibang Damara is a festival in San Jose City, Nueva Ecija wherein its people celebrates to give thanks for a good harvest in line with their celebration of the City Fiesta on the second or third week of April every year.</br></br>
         A Damara is a Tagalog word for a shelter or a shed made of bamboo and nipa that was built on ricefields as a protection for farmers from the sun or rain during planting and harvesting seasons.</br></br> Farmers and landlords particularly in the City of San Jose many years ago are building this shelter before the planting season and they demolish (ginigiba) it after the harvest time as they celebrates together for the bountiful harvest. This is where the word Pagibang Damara (shed ready to be demolished) was adopted by the people of San Jose City, Nueva Ecija as they celebrates and gives thanks for their good harvest.</br></br>
         Today, the people of San Jose City now celebrates together as one big family unlike the older days which the people celebrates separately. The after-harvest celebration has become multi-sectoral effort wherein it is funded and collectively prepared from contributions both public and private sectors and was celebrated with street dancing, beauty contests, tourism and trade fair, awarding ceremonies and cultural shows.
      </h7>
   </div>
   <div class="row">
   <?php
      $dir = 'media/eventsfestivals/pagibangdamarafestival/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
                $title = basename($dir.$file);
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
<div class="container">
   <div class="page-header">
      <h3 style="font-family: BARABARA;"id="LIWANAG">LIWANAG NG PASKO</h3>
      <h7>San Jose City has carved a niche in the Christmas scene, offering Christmas events and attractions that make the city festive during Christmas season. </h7>
   </div>
   <div class="row">
   <?php
      $dir = 'media/eventsfestivals/liwanagngpasko/';
      //check if directory exists
      if (is_dir($dir)){
        $files = array_diff(scandir($dir), array('..', '.'));;
        foreach ($files as $file){
            //check if image
            if (getimagesize($dir.$file)){
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
      <h3 style="font-family: BARABARA;"id="JOSE">SAN JOSE CITY DAY</h3>
      <h7>August 10 is a SPECIAL NONWORKING HOLIDAY in San Jose City, Nueva Ecija to commemorate its creation as a city, as per R.A. 9776.</h7>
   </div>
   <div class="row">
   <?php
      $dir = 'media/eventsfestivals/sanjosecityday/';
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