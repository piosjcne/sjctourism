<?php
    //-- FOR LOCAL WEBSITE CONF ONLY
    if ( $_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='::1' ){
        define ("PATH","http://localhost/tourism/");
    } else {
        define ("PATH","https://".$_SERVER['HTTP_HOST']."/");
    }


    if (isset($_GET['category'])){
        if (!file_exists("pages/".$_GET['category'].'.php')){
            header ("Location: <?=PATH?>");
        }
    }

    $pageTitle = "San Jose City (SJC) Tourism";
    if (isset($_GET['category'])){
      switch ($_GET['category']) {
        case 'accomodation':
          $pageTitle = "Accommodations in San Jose City (SJC)";
          break;
        case 'eventsfestivals':
          $pageTitle = "Events and Festivals in San Jose City (SJC)";
          break;
        case 'farmtourismsite':
          $pageTitle = "Farm Tourism Sites in San Jose City (SJC)";
          break;
        case 'mallsandsupermarket':
          $pageTitle = "Malls and Supermarket in San Jose City (SJC)";
          break;
        case 'products':
          $pageTitle = "Products in San Jose City (SJC)";
          break;
        case 'resort':
          $pageTitle = "Resorts in San Jose City (SJC)";
          break;
        case 'restaurant':
          $pageTitle = "Restaurants in San Jose City (SJC)";
          break;
        case 'spawellness':
          $pageTitle = "Spa and Wellness in San Jose City (SJC)";
          break;
        case 'tourismsite':
          $pageTitle = "Tourist Spots/Sites in San Jose City (SJC)";
          break;
        case 'transportation':
          $pageTitle = "Transportations Available in San Jose City (SJC)";
          break;
        case 'travelagency':
          $pageTitle = "Travel Agencies in San Jose City (SJC)";
      }
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <title><?=$pageTitle?></title>
      <link rel = "stylesheet" href="<?=PATH?>assets/css/bootstrap.min.css">
      <link rel = "stylesheet" href="<?=PATH?>assets/css/lightbox.css">
      <script src="<?=PATH?>assets/js/jquery.js"></script>
      <script src="<?=PATH?>assets/js/bootstrap.min.js"></script>
      <script src="<?=PATH?>assets/js/lightbox.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?=PATH?>assets/css/cat.css" />

   </head>
   <body style="background-color: #DFFFBF;">
      <?php
      include ("sections/nav.php");
      ?>
      <div class="navbar-fixed-bottom" id="navbar" >
         <a href="<?=PATH?>" class="navbar-left" style="font-size: 170%; padding: 5px; font-family:BARABARA font-size: 15rem;
            color: black; font-weight: 700; margin-left:10px;">
            BACK
         </a>
      </div>
      <?php
   
      //-- START DISPLAYING ITEMS 
        include("pages/".$_GET['category'].'.php');
      // END ITEMS DISPLAY
      ?>
   </body>
   <script>
         function myFunction() {
           var x = document.getElementById("myTopnav");
           if (x.className === "topnav") {
             x.className += " responsive";
           } else {
             x.className = "topnav";
           }
         }
         
         window.onscroll = function() {scrollFunction()};
         
         function scrollFunction() {
           if (document.body.scrollTop > 140 || document.documentElement.scrollTop > 40) {
             document.getElementById("navbar").style.top = "0";
           } else {
             document.getElementById("navbar").style.top = "1550px";
           }
         }
      </script>
</html>