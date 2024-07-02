<?php
    //-- FOR LOCAL WEBSITE CONF ONLY
    if ( $_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='::1' ){
        define ("PATH","http://localhost/tourism/");
    } else {
        define ("PATH","https://".$_SERVER['HTTP_HOST']."/");
    }
?><!DOCTYPE html>
<html>
   <head>
      <title>Tourism Amenities in San Jose City (SJC)</title>
      <link rel = "stylesheet" href="<?=PATH?>assets/css/bootstrap.min.css">
      <link rel = "stylesheet" href="<?=PATH?>assets/css/lightbox.css">
      <script src="<?=PATH?>assets/js/jquery.js"></script>
      <script src="<?=PATH?>assets/js/bootstrap.min.js"></script>
      <script src="<?=PATH?>assets/js/lightbox.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         .thumbnail img{
         width: 400px;
         height: 350px;
         object-fit: cover;
         }
         LI{
         font-size: 20px;
         text-transform:uppercase;
         }
         @font-face{
         font-family: BARABARA;
         src: url(<?=PATH?>assets/fonts/BARABARA-final.otf)
         }
         .topnav {
         overflow: hidden;
         background-color: #AEE4B9;
         }
         .topnav a {
         float: left;
         display: block;
         color: #f2f2f2;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
         font-size: 17px;
         }
         .topnav a:hover {
         background-color: #ddd;
         color: black;
         }
         .topnav a.active {
         background-color: #04AA6D;
         color: black;
         }
         .topnav .icon {
         display: none;
         }
         @media screen and (max-width: 600px) {
         .topnav a:not(:first-child) {display: none;}
         .topnav a.icon {
         float: right;
         display: block;
         }
         }
         @media screen and (max-width: 600px) {
         .topnav.responsive {position: relative;}
         .topnav.responsive .icon {
         position: absolute;
         right: 0;
         top: 0;
         }
         .topnav.responsive a {
         float: none;
         display: block;
         text-align: left;
         }
         }
         #navbar {
         background-color: #AEE4B9; /* Black background color */
         position: fixed; /* Make it stick/fixed */
         bottom: 0;
         top: 1550px; /* Hide the navbar 50 px outside of the top view */
         width: 100%; /* Full width */
         transition: top 0.4s; /* Transition effect when sliding down (and up) */
         height: 13%;
         }
         /* Style the navbar links */
         #navbar a {
         float: left;
         display: block;
         color: #f2f2f2;
         text-align: center;
         padding: 9px 9px;
         text-decoration: none;
         font-size: 7px;
         }
         #navbar a:hover {
         background-color: #ddd;
         color: white;
         }
      </style>
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
   </head>
   <body style="background-color: #009F7A;">
      <div class="topnav " id="myTopnav">
         <a href="index.php" ><img src="<?=PATH?>assets/img/BG.jpg" alt="Logo image" height="27"/></a>
         <a href="cat.php?category=accommodation" class="navbar-right" style="font-size: 170%; padding: 10px; font-family:BARABARA font-size: 15rem;
            color: black;
            font-weight: 700;margin-right:10px;">BACK ACCOMMODATION</a>
         <a href="index.php" class="navbar-right" style="font-size: 170%; padding: 10px; font-family:BARABARA font-size: 15rem;
            color: black;
            font-weight: 700;">BACK HOME</a>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <i class="fa fa-bars"></i>
         </a>
      </div>
      <div class="navbar-fixed-bottom" id="navbar" >
         <a href="index.php" class="navbar-left" style="font-size: 170%; padding: 6px; font-family:BARABARA font-size: 15rem;
            color: black;
            font-weight: 700; margin-left:10px;">BACK HOME</a>
         <a href="cat.php?category=accommodation" class="navbar-left" style="font-size: 170%; padding: 6px; font-family:BARABARA font-size: 15rem;
            color: black;
            font-weight: 700; margin-left:10px;">BACK ACCOMMODATION</a>
      </div>
      <! –– this lake isabel ––> 
      <div class="container" >
         <div class="page-header" >
            <h3 style="font-family: BARABARA;" ID="LAKE">LAKE ISABEL RESORT AND EVENT CENTER INCORPORATED</h3>
            <LI>Other Amenities: Swimming Pool, Kayak and Function Hall</LI>
         </div>
        <div class="row">
          <?php
          $dir = 'media/amenity/lakeisabel/';
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
      <! –– this 1875 RICE HOTEL ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;"id="rice hotel">1875 RICE HOTEL</h3>
            <LI>Other Amenities: multi-purpose hall</LI>
         </div>
        <div class="row">
          <?php
          $dir = 'media/amenity/ricehotel/';
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
      <! –– this HOTEL FRANCESKO. ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;" id="FRANCESKO">HOTEL FRANCESKO.</h3>
            <LI>Other Amenities: Restaurant and Cafe, multi-purpose hall</LI>
         </div>
        <div class="row">
          <?php
          $dir = 'media/amenity/hotelfrancesko/';
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
      <! –– this HOTEL MAIYA ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;">HOTEL MAIYA.</h3>
            <LI>Other Amenities: Restaurant and Cafe, multi-purpose hall, Elevator</LI>
         </div>
        <div class="row">
          <?php
          $dir = 'media/amenity/hotelmaiya/';
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
      <! –– this MAHARLIKA RESORT, GARDEN GRILL, RESTOBAR AND HOTEL ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;" id="MAHARLIKA">MAHARLIKA RESORT, GARDEN GRILL, RESTOBAR AND HOTEL</h3>
            <LI>Other Amenities: restobar, pool, function hall</LI>
         </div>
         <div class="row">
          <?php
          $dir = 'media/amenity/maharlikaresort/';
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
      <! –– this FARMHOUSE HOTEL AND CAFE ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;" id="FARMHOUSE">FARMHOUSE HOTEL AND CAFE</h3>
            <LI>Other Amenities: restaurant and Cafe, Multi-Purpose Hall, Pool</LI>
         </div>
         <div class="row">
          <?php
          $dir = 'media/amenity/farmhousehotelandcafe/';
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
      <! –– this JOLLYDAYS HOTEL ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;" id="JOLLYDAYS">JOLLYDAYS HOTEL</h3>
            <LI>Other Amenities: restaurant and cafe, multi-purpose hall</LI>
         </div>
         <div class="row">
          <?php
          $dir = 'media/amenity/jollydayshotel/';
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
      <! –– this MARQUEZ RESIDENCIA ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;" id="MARQUEZ">MARQUEZ RESIDENCIA</h3>
            <LI>Other Amenities: Restaurant and cafe, Bar, Multi-purpose, Pool, Gym</LI>
         </div>
         <div class="row">
          <?php
          $dir = 'media/amenity/marquezresidencia/';
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
      <! –– this STAYCATION HOTEL ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;" id="STAYCATION">STAYCATION HOTEL</h3>
            <LI>Other Amenities: elevator, Multi-purpose, Pool, Gym</LI>
         </div>
         <div class="row">
          <?php
          $dir = 'media/amenity/staycationhotel/';
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
      <! –– this LE FELIZ VICTORIA CASITAS EVENTS CENTER ––> 
      <div class="container">
         <div class="page-header">
            <h3 style="font-family: BARABARA;" id="VICTORIA">LE FELIZ VICTORIA CASITAS EVENTS CENTER</h3>
            <LI>Other Amenities: function Hall, Pool</LI>
         </div>
         <div class="row">
          <?php
          $dir = 'media/amenity/lefeliz/';
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
   </body>
</html>