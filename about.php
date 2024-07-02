<?php
   //-- FOR LOCAL WEBSITE CONF ONLY
	if ( $_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='::1' ){
		define ("PATH","http://localhost/tourism/");
	} else {
		define ("PATH","https://".$_SERVER['HTTP_HOST']."/");
	}


   $pageTitle = "About | San Jose City (SJC) Tourism";
    if (isset($_GET['pg'])){
      switch ($_GET['pg']) {
         case 'mission-and-vision':
            $pageTitle = "Mission and Vision | San Jose City (SJC) Tourism";;
            break;
         case 'contact-us':
            $pageTitle = "Contact Us | San Jose City (SJC) Tourism";; 
      }
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <title><?=$pageTitle?></title>
      <link rel = "stylesheet" href="<?=PATH?>assets/css/bootstrap.min.css">
      <script src="a<?=PATH?>ssets/js/jquery.js"></script>
      <script src="<?=PATH?>assets/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?=PATH?>assets/css/about.css" />
      <link rel="stylesheet" href="<?=PATH?>assets/css/nav.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
         <?php
         $bg = 'a1.jpg';
         if (isset($_GET['pg'])){
            switch ($_GET['pg']) {
               case 'mission-and-vision':
                  $bg = 'e3.jpg';
                  break;
               case 'contact-us':
                  $bg = 'c6.jpg'; 
            }
         }
         ?>
         body {
          background: url(<?=PATH?>assets/img/<?=$bg?>); 
         }
      </style>
   </head>
   <body>
      <?php
        include ("sections/nav.php");
      ?> 
      <script>
         function myFunction() {
           var x = document.getElementById("myTopnav");
           if (x.className === "topnav") {
             x.className += " responsive";
           } else {
             x.className = "topnav";
           }
         }
      </script>
      <div>
         <?php
         if (!isset($_GET['pg']) || $_GET['pg'] == ''){
         ?>
            <table border="1" class="container" style="width: 70%; height: 70%; background-color:rgba(255,255,255,0.5); margin-top: 40px;">
            <tr>
               <td>
                  <div class="row">
                     <div class="col-md-8 col-md-offset-2">
                        <div id="post">
                           <center>
                              <h1><img src="<?=PATH?>media/generalinfo/logo.jpg" style="width: 20%; height: 20%;"></br></br><a style="font-family:BARABARA; color: black;">SAN JOSE CITY </br></a></h1>
                           </center>
                           <table border="1" style=" background-color:white;">
                              <tr>
                                 <td>
                                    <p class="lead" style="font-family:Times New Roman; font-size: 120%;">
                                       San Jose, the 59th City of the Philippines and the youngest among the three cities of Nueva Ecija, is located 160 kms. North of Manila; 131 kms. Southeast of Dagupan City; 193 kms. East of Banaue, Ifugao and 435 kms. Southeast of Appari, Cagayan. The notable Caraballo Mountains surround the city on the north and the eastern part by the Sierra Madre Mountains.
                                       San Jose was originally a part of Puncan founded in 1701 by the Augustinians. Later, because of its nearness to Lupao, it was made a barrio of the latter known as Barrio “KABARITAN” which means a place where “BARIT” ( an Ilocano word for a plant that belongs to the rattan family) grows in abundance.
                                       On March 19, 1894, San Jose became a full-pledged town, with an interim government headed by a Captain Municipal. It was named San Jose, after Saint Joseph, the Patron Saint of the place. The Ilocanos from Tarlac, Pangasinan, Ilocos Region and some parts of the Nueva Ecija, especially, the towns of Sto. Domingo, Muñoz and Lupao came to San Jose and cleared its wilderness.
                                       During the Spanish Regime, the Barrio of San Jose was a Municipal District of Lupao under a Teniete Absoluto, Don Olegario Fajardo. Later, when it was declared as a town in 1894, the position was changed to Captain Municipal. Canuto Ramos, the first appointed Captain served from 1894 to 1898. One of his achievements was the construction of an irrigation system ( now the Talavera river Irrigation System ) which was later taken and enlarged by the government to irrigate vast rice fields, as far as the towns of Muñoz and Talavera.
                                       On December 23, 1941, the populace suffered heavy casualties because of the bombings of two Japanese planes. An emergency government was established in Barrio Porais with Basilio Duran as the Mayor of the Military Command. The arrival of the Japanese Imperial Forces on January 26, 1942, cut short the existence of an emergency government.
                                       Now, San Jose City is composed of 38 Barangays; 10 urban and rural, and owing to its geographical location being the Gateway to Cagayan Valley, San Jose has become a progressive city and being an active implementor of the Clean and Green Program of the government, it has gained a Presidential Award as “The Cleanest and Greenest City of Region III.” On December 13, 1995 it was declared by the Department of Tourism ( DOT ) Secretary Eduardo P. Pilapil as the “Tourism Capital of Region III.”
                                    </p>
                        </div>
                        </td></tr>
                        </table>
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
               </td>
            </tr>
         </table>
         </br>
         </br>
         </br>
         </br>
         </br>
         <table border="1" class="container" style="width: 70%; height: 70%; background-color:rgba(255,255,255,0.5); margin-top: 40px;"><tr><td>
         <div class="row">
         <div class="col-md-8 col-md-offset-2">
         <div id="post">
         <center>
         <h1></br></br><a style="font-family:BARABARA; color: black;">SAN JOSE CITY MAP </br></a></h1>
         </center>
         <table border="1" style=" background-color:white;">
         <tr><td>
         <p class="lead"><img src="<?=PATH?>media/generalinfo/san.jpg" class="thumbnail" style="height: 100%; width: 100%;"></p>
         </div>
         </td></tr>
         </table>
         </br>
         </br>
         </br>
         </br>
         </br>
         </td></tr></table>
         </br>
         </br>
         </br>
         </div>
         </div>
         </div>
         </div>
         </div>
         </div>
         <?php
         } else if ($_GET['pg'] == 'mission-and-vision'){
         ?>
            <div class="container-fluid">
               <center>
                  <table border="1" style=" font-size: 15px; background: url(<?=PATH?>assets/img/back1.png); width: 50%; margin-top: 40px;">
                     <tr>
                        <td style="padding: 10px; font-family:BARABARA font-size: 15rem;
                           color: black;
                           font-weight: 700;
                           font-family: BARABARA; text-align: center;">MISSION</td>
                     </tr>
                     <tr>
                        <td>
                           <div></div>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding: 10px; font-family:BARABARA font-size: 6rem;
                           color: black;
                           10px 10px 0px blue; font-family: Verdana;">The City Tourism Office in the frontline of initiating,implementing and sustaining programs that ensure the protection,preservation and development of the City's local culture and natural resources to be shared and promoted as a source of rest,recreation and inspiration for the local populace and other people from within and outside the country.</td>
                     </tr>
                  </table>
               </center>
               <center>
                  <table border="1" style=" font-size: 15px; background: url(<?=PATH?>assets/img/back1.png); width: 50%; margin-top: 40px;">
                     <tr>
                        <td style="padding: 10px; font-family:BARABARA font-size: 15rem;
                           color: black;
                           font-weight: 700;
                           font-family: BARABARA; text-align: center;">VISION</td>
                     </tr>
                     <tr>
                        <td>
                           <div></div>
                        </td>
                     </tr>
                     <tr>
                        <td style="padding: 10px; font-family:BARABARA font-size: 15rem;
                           color: black;
                           font-family: Verdana;">A City proud of it's natural beauty, rich in culture and heritage as well as agro-industrial achievements, frequented by local and foreign visitors that contribute to the economic well-being and socio-cultural unification of San Josenians .</td>
                     </tr>
                  </table>
               </center>
               </br>
               </br>
               </br>
               </br>
            </div>
            </div>
         <?php
         } else {
         ?>
            <center>
               <table border="1" style=" font-size: 15px; background: url(<?=PATH?>assets/img/back1.png); margin-top: 40px;">
                  <tr>
                     <td><img src="<?=PATH?>assets/img/tele.png" width="60" height="60"></td>
                     <td style="padding: 10px; font-family:BARABARA font-size: 15rem;
                        color: black;
                        font-weight: 700;
                        ">(044) 940-9658</td>
                  </tr>
                  <tr>
                     <td><img src="<?=PATH?>assets/img/email.png" width="60" height="60"></td>
                     <td style="padding: 10px; font-family:BARABARA font-size: 15rem;
                        color: black;
                        font-weight: 700;
                        ">tourism_sanjosecity@yahoo.com.ph <br/> tourism.sanjosecity.17@gmail.com</td>
                  </tr>
                  <tr>
                     <td><img src="<?=PATH?>assets/img/face.png" width="60" height="60"></td>
                     <td style="padding: 10px; font-family:BARABARA font-size: 15rem;
                        color: black;
                        font-weight: 700;
                        ">SanJose TourismOffice</td>
                  </tr>
               </table>
            </center>
            </div>
            </div>
            </div>
            </div>
         <?php
         }
         ?>
         
   </body>
</html>