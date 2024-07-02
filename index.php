<?php
    //-- FOR LOCAL WEBSITE CONF ONLY
    if ( $_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='::1' ){
        define ("PATH","http://localhost/tourism/");
    } else {
        define ("PATH","https://".$_SERVER['HTTP_HOST']."/");
    }
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title>San Jose City (SJC) Tourism</title>         
        <link rel="stylesheet" href="<?=PATH?>assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="<?=PATH?>assets/css/lightbox.css"> 
        <script src="<?=PATH?>assets/js/jquery.js"></script>         
        <script src="<?=PATH?>assets/js/bootstrap.min.js"></script>         
        <script src="<?=PATH?>assets/js/lightbox.js"></script>         
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&amp;display=swap"> 
        <link rel="stylesheet" href="<?=PATH?>assets/css/index.css" />
        <link rel="stylesheet" href="<?=PATH?>assets/css/nav.css" />         
    </head>     
    <body style=" background-image: url(<?=PATH?>assets/img/gif1.gif);"> 
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
         
         var closebtns = document.getElementsByClassName("close");
         var i;
         
         // Loop through the elements, and hide the parent, when clicked on
         for (i = 0; i < closebtns.length; i++) {
           closebtns[i].addEventListener("click", function() {
             this.parentElement.style.display = 'none';
           });
         }
         
         window.onload = function() {
           setTimeout(function() {
             document.getElementById('loading-screen').style.display = 'none';
           }, 2000);
         }
      </script>         
        <div id="loading-screen" id="fader"> 
            <div class="loader"></div>             
        </div>         
        <div class="slider"> 
            <div class="slide" style="text-align: center;"> 
                <div class="divit" style="color: white; font-family: BARABARA; font-size: 300%; ">WELCOME TO 
                    <BR/>SAN JOSE CITY
                </div>                 
            </div>             
            <div class="slide"></div>             
            <div class="slide"></div>             
            <div class="slide"></div>             
            <div class="slide"></div>             
        </div>         
        <div class="container"> 
            <div class="page-header" style="color:WHITE; "> 
                <table border="0"> 
                    <tr> 
                        <td>
                           <h3 style="font-size: 3rem; color:#C0F4BC; font-family: BARABARA; text-shadow: 0px 4px 2px #000; -webkit-text-stroke: 2px black;">
                              TOURISM-RELATED ESTABLISHMENTS
                           </h3>  
                        </td> 
                    </tr>                     
                </table>                 
            </div>             
            <div class="row"> 
                <div class="col-md-4"> 
                    <a href="#m1" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img/RESORTSES.png" style="COLOR: red;">  </a> 
                    <div class="modal fade" id="m1" style="background-color: #DFFFBF;"> 
                        <div class="modal-dialog"> 
                            <div class="modal-content" style="background-color: white;"> 
                                <div class="modal-header" style=" font-family:BARABARA"> 
                                    <center>SAN JOSE CITY 
                                        <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                    </center>                                     
                                </div>                                 
                                <div> 
                                    <h2 style=" font-family:BARABARA" class="center">ACCOMMODATION</h2> 
                                    <br/> 
                                    <br/> 
                                    <ol style="font-family:BARABARA;"> 
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#LAKE" style=" font-family:BARABARA">LAKE ISABEL RESORT AND EVENT CENTER INCORPORATED</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#rice hotel" style=" font-family:BARABARA">RICE HOTEL</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#ABESAN" style=" font-family:BARABARA">ABESAN INN</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#ALBIEN" style=" font-family:BARABARA">HOTEL ALBIEN</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#DIADEM" style=" font-family:BARABARA">DIADEM COURT INC.</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#FRANCESKO" style=" font-family:BARABARA">HOTEL FRANCESKO.</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#MAIYA" style=" font-family:BARABARA">HOTEL MAIYA</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#KALAPAW" style=" font-family:BARABARA">KALAPAW HOTEL</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#PLANO" style=" font-family:BARABARA">L PLANO HOTEL </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#MAHARLIKA" style=" font-family:BARABARA">MAHARLIKA RESORT, GARDEN GRILL, RESTOBAR AND HOTEL </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#FARMHOUSE" style=" font-family:BARABARA">FARMHOUSE HOTEL AND CAFE</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#PORTO" style=" font-family:BARABARA">PORTO NOVO HOTEL </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#SUNWAY" style=" font-family:BARABARA">SUNWAY HOTEL  </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#TOKYO" style=" font-family:BARABARA">TOKYO SUITES </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#SHANGHAI" style=" font-family:BARABARA">SHANGHAI LEISURE SUITES </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#JOLLYDAYS" style=" font-family:BARABARA">JOLLYDAYS HOTEL </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#MARQUEZ" style=" font-family:BARABARA">MARQUEZ RESIDENCIA </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#STAYCATION" style=" font-family:BARABARA">STAYCATION HOTEL</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#SUMMERLIN" style=" font-family:BARABARA">HOTEL SUMMERLIN</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/accommodation#VICTORIA" style=" font-family:BARABARA"> LE FELIZ VICTORIA CASITAS EVENTS CENTER</a>
                                        </li>                                         
                                    </ol>                                     
                                    <br/> 
                                    <br/> 
                                </div>                                 
                                <div class="modal-footer" style=" font-family:BARABARA" onclick="location= '<?=PATH?>view/accommodation'"> 
                                    <center>
                                        <button>
                                            <a href="<?=PATH?>view/accommodation">SEE THE FULL LIST</a>
                                        </button>
                                    </center>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
                <div class="col-md-4"> 
                    <a href="#m2" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img/food.png"/>  </a> 
                    <div class="modal fade" id="m2" style="background-color: #DFFFBF;"> 
                        <div class="modal-dialog"> 
                            <div class="modal-content"> 
                                <div class="modal-header" style="font-family:BARABARA "> 
                                    <center>SAN JOSE CITY
                                        <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                    </center>                                     
                                </div>                                 
                                <div> 
                                    <h2 style=" font-family:BARABARA" class="center">RESTAURANT</h2> 
                                    <br/> 
                                    <br/> 
                                    <ol style="font-family:BARABARA;"> 
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#SAMGY" style=" font-family:BARABARA">SAMGY 199</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#COFFEE" style=" font-family:BARABARA">BUT FIRST, COFFEE</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#SAMGY" style=" font-family:BARABARA">HONGDAE CHICKEN </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#CAFÉ" style=" font-family:BARABARA">AR CAFÉ  </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#BLACK" style=" font-family:BARABARA">BLACK SCOOP CAFÉ </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#BO" style=" font-family:BARABARA">BO’S COFFEE </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#LILY" style=" font-family:BARABARA">CAFÉ LILY </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#CHELSKIE" style=" font-family:BARABARA">CHELSKIE’S PAPER BOXX SUSHI BAR </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#CHESED" style=" font-family:BARABARA">CHESED CAFÉ </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#DAYS" style=" font-family:BARABARA">DAYS CAFÉ </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#INFINITEA" style=" font-family:BARABARA">INFINITEA </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#JJANG" style=" font-family:BARABARA">JJANG AUTHENTIC RESTAURANT </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#JOLLIBEE" style=" font-family:BARABARA">JOLLIBEE (crossing)
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#waltermart" style=" font-family:BARABARA">JOLLIBEE (waltermart) </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#KEL" style=" font-family:BARABARA">KEL’Z CAFÉ </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#KFC" style=" font-family:BARABARA">KFC </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#KOFI" style=" font-family:BARABARA">KOFI MARIA </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#KRISPY" style=" font-family:BARABARA">KRISPY KREME </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#MACAO" style=" font-family:BARABARA">MACAO IMPERIAL TEA	 </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#NYFD" style=" font-family:BARABARA">NYFD </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#YELLOW" style=" font-family:BARABARA">YELLOW CAB PIZZA CO.	  </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#Magic" style=" font-family:BARABARA">CHICKEN INASAL INC.(magic) </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#PUROK" style=" font-family:BARABARA">PUROK KAINAM </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#PIZZA" style=" font-family:BARABARA"> SHAKEY’S REM PIZZA PARLOR </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#HUNGRY" style=" font-family:BARABARA">THE HUNGRY BAR </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#TVOLT" style=" font-family:BARABARA">TVOLT & SU </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#TOM" style=" font-family:BARABARA">TOM’S CHICKEN HOUSE </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#ANGEL" style=" font-family:BARABARA">ANGEL’S PIZZA </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#MAX" style=" font-family:BARABARA">MAX’S RESTAURANT </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#CHOWKING" style=" font-family:BARABARA">CHOWKING </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#ANTONINA" style=" font-family:BARABARA">CAFÉ ANTONINA </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#HAP" style=" font-family:BARABARA">HAP CHAN </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#MARIE" style=" font-family:BARABARA">KAPE MARIE  </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#KULAS" style=" font-family:BARABARA">KULAS </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#KUYA" style=" font-family:BARABARA">KUYA JAMES SAMGYUPSAL  </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#EAGLES" style=" font-family:BARABARA">EAGLES NEST FOOD PLACE  </a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#GREEN" style=" font-family:BARABARA">GREEN WICH</a>
                                        </li>                                         
                                        <li>
                                            <a href="<?=PATH?>view/restaurant#RESTORANTE" style=" font-family:BARABARA">IL RESTORANTE TI TAYABO</a>
                                        </li>                                         
                                    </ol>                                     
                                    <br/> 
                                    <br/> 
                                </div>                                 
                                <div class="modal-footer" style=" font-family:BARABARA"> 
                                    <center>
                                        <button onclick="location= '<?=PATH?>view/restaurant'">
                                            <a href="<?=PATH?>view/restaurant">SEE THE FULL LIST</a>
                                        </button>
                                    </center>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
                <div class="col-md-4"> 
                    <a href="#m3" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img//HOTEL.png"/>  </a> 
                    <div class="modal fade" id="m3" style="background-color: #DFFFBF;"> 
                        <div class="modal-dialog"> 
                            <div class="modal-content"> 
                                <div class="modal-header" style="font-family:BARABARA "> 
                                    <center>
                                        SAN JOSE CITY<button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                    </center>                                     
                                </div>                                 
                                <div> 
                                    <h2 style=" font-family:BARABARA" class="center">RESORT</h2> 
                                    <br/> 
                                    <br/> 
                                    <ol style="font-family:BARABARA;"> 
                                        <li>
                                            <a href="<?=PATH?>view/resort#CLEO" style=" font-family:BARABARA">CLEO’S PRIVATE RESORT </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Marquez" style=" font-family:BARABARA">Marquez Mini Resort  </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" ref="<?=PATH?>view/resort#Neslyn" style=" font-family:BARABARA">Neslyn Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" ref="<?=PATH?>view/resort#Rimo" style=" font-family:BARABARA">Rimo Resort & Events </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Miel" style=" font-family:BARABARA">Liah Miel  </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Bakasyunan" style=" font-family:BARABARA">L & J Bahay Bakasyunan  </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Yanna" style=" font-family:BARABARA">Yanna Farm Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Dominic" style=" font-family:BARABARA">Dominic (Garden Resort) Events Place  </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Placier" style=" font-family:BARABARA">Club Placier De Oro </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Greenzone" style=" font-family:BARABARA">Greenzone Events Place </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Seven" style=" font-family:BARABARA">Seven Stars Private Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Mary" style=" font-family:BARABARA">Mary Kates Resort  </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Purple" style=" font-family:BARABARA">REJ Purple Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Lara" style=" font-family:BARABARA">Lara’s Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Jojo" style=" font-family:BARABARA">Jojo’s Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Quihote" style=" font-family:BARABARA">Don Quihote’s Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" ref="<?=PATH?>view/resort#Hilltop" style=" font-family:BARABARA">Hilltop Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" ref="<?=PATH?>view/resort#Sunway" style=" font-family:BARABARA">Sunway Resort and Hotel </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Aniceto" style=" font-family:BARABARA"> Aniceto Pool Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Maria" style=" font-family:BARABARA">Maria Luisa Farm & Resort  </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Bricks" style=" font-family:BARABARA">Bricks Place </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Rhenz" style=" font-family:BARABARA">O’Rhenz Resort  </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Balinese" style=" font-family:BARABARA">Balinese Garden Lodge </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" ref="<?=PATH?>view/resort#Tatang" style=" font-family:BARABARA">Tatang’s Private Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Abigail" style=" font-family:BARABARA">Abigail’s Diner </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#JM" style=" font-family:BARABARA">JM Private Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Twinnie" style=" font-family:BARABARA">Twinnie Private Resort  </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#JanJim" style=" font-family:BARABARA">JanJim Farm Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" ref="<?=PATH?>view/resort#Bambi" style=" font-family:BARABARA"> Bambi Resort </a>
                                        </li>                                         
                                        <li>
                                            <a style="text-transform:uppercase;" href="<?=PATH?>view/resort#Jali" style=" font-family:BARABARA">Jali Resort (D’Cabana) </a>
                                        </li>                                         
                                    </OL>                                     
                                    <br/> 
                                    <br/> 
                                </div>                                 
                                <div class="modal-footer" style="font-family:BARABARA " onclick="location= '<?=PATH?>view/resort'"> 
                                    <center>
                                        <button>
                                            <a href="<?=PATH?>view/resort">SEE THE FULL LIST
                                        </button>
                                    </center>                                     
                                </a>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <div class="col-md-4"> 
                <a href="#m4" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img/EVENTS.png"/>  </a> 
                <div class="modal fade" id="m4" style="background-color: #DFFFBF;"> 
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header" style="font-family:BARABARA "> 
                                <center>SAN JOSE CITY
                                    <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                </center>                                 
                            </div>                             
                            <div> 
                                <h2 style=" font-family:BARABARA" class="center">FESTIVALS  &  EVENTS</h2> 
                                <br/> 
                                <br/> 
                                <ol style="font-family:BARABARA;"> 
                                    <li>
                                        <a href="<?=PATH?>view/eventsfestival#PAGIBANG" style=" font-family:BARABARA">PAGIBANG DAMARA FESTIVAL </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/eventsfestival#LIWANAG" style=" font-family:BARABARA">LIWANAG NG PASKO </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/eventsfestival#JOSE" style=" font-family:BARABARA">SAN JOSE CITY DAY </a>
                                    </li>                                     
                                </ol>                                 
                                <br/> 
                                <br/> 
                            </div>                             
                            <div class="modal-footer" style="font-family:BARABARA " nclick="location= '<?=PATH?>view/eventsfestival'"> 
                                <a href="<?=PATH?>view/eventsfestival">  <center>
                                        <button>SEE THE FULL LIST</button>
                                    </center>  </a> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <div class="col-md-4"> 
                <a href="#m5" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img//SPOT12.png"/>  </a> 
                <div class="modal fade" id="m5" style="background-color: #DFFFBF;"> 
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header" style="font-family:BARABARA "> 
                                <center>SAN JOSE CITY
                                    <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                </center>                                 
                            </div>                             
                            <div> 
                                <h2 style=" font-family:BARABARA" lass="center">TOURISM SITES</h2> 
                                <br/> 
                                <br/> 
                                <ol style="font-family:BARABARA;"> 
                                    <li>
                                        <a href="<?=PATH?>view/tourismsite#TAYABO" style=" font-family:BARABARA">TAYABO NATURE PARK  </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/tourismsite#WILLIAMNS" style=" font-family:BARABARA">MT. WILLIAMNS </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/tourismsite#PLANTHERIAL" style=" font-family:BARABARA">PLANTHERIAL INTEGRATED FARM (DEMO FARM)</a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/tourismsite#PALASAPAS" style=" font-family:BARABARA">PALASAPAS FALLS </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/tourismsite#SAN" style=" font-family:BARABARA">SAN JUAN VIEW DECK </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/tourismsite#MONT" style=" font-family:BARABARA">MONT OFELIA ECO PARK </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/tourismsite#LIPIT" style=" font-family:BARABARA">LIPIT LIPIT ROCK FORMATION </a>
                                    </li>                                     
                                </ol>                                 
                                <br/> 
                                <br/> 
                            </div>                             
                            <div class="modal-footer" style="font-family:BARABARA " onclick="location= '<?=PATH?>view/tourismsite'"> 
                                <a href="<?=PATH?>view/tourismsite">  <center>
                                        <button>SEE THE FULL LIST</button>
                                    </center>  </a> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <div class="col-md-4"> 
                <a href="#m6" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img/product1.png"/>  </a> 
                <div class="modal fade" id="m6" style="background-color: #DFFFBF;"> 
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header" style="font-family:BARABARA "> 
                                <CENTER>SAN JOSE CITY
                                    <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                </CENTER>                                 
                            </div>                             
                            <div> 
                                <h2 style=" font-family:BARABARA" class="center">PRODUCTS</h2> 
                                <br/> 
                                <br/> 
                                <ol style="font-family:BARABARA;"> 
                                    <li>
                                        <a href="<?=PATH?>view/products#OTOP" style=" font-family:BARABARA">OTOP SAN JOSE CITY PRODUCTS </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/products#VICENTE" style=" font-family:BARABARA">SAN VICENTE'S </a>
                                    </li>                                     
                                </OL>                                 
                                <br/> 
                                <br/> 
                            </div>                             
                            <div class="modal-footer" style="font-family:BARABARA " onclick="location= '<?=PATH?>view/products'"> 
                                <a href="cat.php?category=products">  <center> 
                                        <button>SEE THE FULL LIST</button>
                                    </center>  </a> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <div class="col-md-4"> 
                <a href="#m7" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img//SPOTS.png"/>  </a> 
                <div class="modal fade" id="m7" style="background-color: #DFFFBF;"> 
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header" style="font-family:BARABARA "> 
                                <CENTER>SAN JOSE CITY
                                    <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                </CENTER>                                 
                            </div>                             
                            <div> 
                                <h2 style=" font-family:BARABARA" class="center">TRAVEL AGENCIES</h2> 
                                <br/> 
                                <br/> 
                                <ol style="font-family:BARABARA;"> 
                                    <li>
                                        <a href="<?=PATH?>view/travelagency#ALEXIS" style=" font-family:BARABARA">ALEXIS TRAVEL & TOURS </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/travelagency#LEON" style=" font-family:BARABARA">GEOR TRAVEL & TOURS SERVICES </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/travelagency#KLCC" style=" font-family:BARABARA">KLCC TRAVEL & TOURS  </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/travelagency#KRISTINE" style=" font-family:BARABARA">KRISTINE TRAVEL & TOURS</a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/travelagency#LORNWILL" style=" font-family:BARABARA">LORNWILL TRAVEL & TOURS </a>
                                    </li>                                     
                                </OL>                                 
                                <br/> 
                                <br/> 
                            </div>                             
                            <div class="modal-footer" style="font-family:BARABARA " onclick="location= '<?=PATH?>view/travelagency'"> 
                                <a href="<?=PATH?>view/travelagency">  <center> 
                                        <button>SEE THE FULL LIST</button>
                                    </center>  </a> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <div class="col-md-4"> 
                <a href="#m8" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img//spas.png"/>  </a> 
                <div class="modal fade" id="m8" style="background-color: #DFFFBF;"> 
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header" style="font-family:BARABARA "> 
                                <CENTER>SAN JOSE CITY
                                    <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                </CENTER>                                 
                            </div>                             
                            <div> 
                                <h2 style=" font-family:BARABARA" class="center">SPA WELNESS</h2> 
                                <br/> 
                                <br/> 
                                <ol style="font-family:BARABARA;"> 
                                    <li>
                                        <a href="<?=PATH?>view/spawellness#TWELVE" style=" font-family:BARABARA">12.TWELVE  </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/spawellness#BROW" style=" font-family:BARABARA">BROW LINE STATION </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/spawellness#CRYSTAL" style=" font-family:BARABARA">CRYSTAL CARE </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/spawellness#FAITH" style=" font-family:BARABARA">FAITH WELLNESS & SPA</a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/spawellness#LE" style=" font-family:BARABARA">LE RAD</a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/spawellness#NORTHERN" style=" font-family:BARABARA">NORTHERN SPA </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/spawellness#NUAT" style=" font-family:BARABARA">NUAT THAI </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/spawellness#SPATCHIE" style=" font-family:BARABARA">SPATCHIE </a>
                                    </li>                                     
                                </OL>                                 
                                <br/> 
                                <br/> 
                            </div>                             
                            <div class="modal-footer" style="font-family:BARABARA " nclick="location= '<?=PATH?>view/spawellness'"> 
                                <a href="<?=PATH?>view/spawellness">  <center> 
                                        <button>SEE THE FULL LIST</button>
                                    </center>  </a> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <div class="col-md-4"> 
                <a href="#m9" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img//TOURIST SPOT (1).png"/>  </a> 
                <div class="modal fade" id="m9" style="background-color: #DFFFBF;"> 
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header" style="font-family:BARABARA "> 
                                <CENTER>SAN JOSE CITY
                                    <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                </CENTER>                                 
                            </div>                             
                            <div> 
                                <h2 style=" font-family:BARABARA" class="center">FARM TOURISM SITES</h2> 
                                <br/> 
                                <br/> 
                                <ol style="font-family:BARABARA;"> 
                                    <li>
                                        <a href="<?=PATH?>view/farmtourismsite#ACES" style=" font-family:BARABARA">ACES PHILIPPINE PRODUCERS CORPORATION</a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/farmtourismsite#DUMALE" style=" font-family:BARABARA">DUMALE MUSHROOM FARM </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/farmtourismsite#KALASAG" style=" font-family:BARABARA">KALASAG MULTI-PURPOSE COOPERATIVE </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/farmtourismsite#TINTOP" style=" font-family:BARABARA">TINTOP MUSHROOM FARM </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/farmtourismsite#EASTERN" style=" font-family:BARABARA">EASTERN PRIMARY MULTI-PURPOSE COOPERATIVE</a>
                                    </li>                                     
                                </ol>                                 
                                <br/> 
                                <br/> 
                            </div>                             
                            <div class="modal-footer" style="font-family:BARABARA " nclick="location= '<?=PATH?>view/farmtourismsite'"> 
                                <a href="<?=PATH?>view/farmtourismsite">  <center> 
                                        <button>SEE THE FULL LIST</button>
                                    </center>  </a> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <div class="col-md-4"> 
                <a href="#m10" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img//spa123.png"/>  </a> 
                <div class="modal fade" id="m10" style="background-color: #DFFFBF;"> 
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header" style="font-family:BARABARA "> 
                                <CENTER>SAN JOSE CITY
                                    <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                </CENTER>                                 
                            </div>                             
                            <div> 
                                <h2 style=" font-family:BARABARA" class="center">TRANSPORTATION</h2> 
                                <br/> 
                                <br/> 
                                <ol style="font-family:BARABARA;"> 
                                    <li>
                                        <a href="<?=PATH?>view/transportation#BALIWAG" style=" font-family:BARABARA">BALIWAG TRANSIT INC</a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/transportation#GOLDEN" style=" font-family:BARABARA">GOLDEN BEE </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/transportation#GENESIS" style=" font-family:BARABARA">GENESIS </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/transportation#MANIBELA" style=" font-family:BARABARA">MANIBELA ANG BUHAY TRANSPORT COOPERATIVE </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/transportation#EXPRESS" style=" font-family:BARABARA">UV EXPRESS (BANTRANS) </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/transportation#VICTORY" style=" font-family:BARABARA">VICTORY LINER </a>
                                    </li>                                     
                                </ol>                                 
                                <br/> 
                                <br/> 
                            </div>                             
                            <div class="modal-footer" style="font-family:BARABARA " nclick="location= '<?=PATH?>view/transportation'"> 
                                <a href="<?=PATH?>view/transportation">  <center> 
                                        <button>SEE THE FULL LIST</button>
                                    </center>  </a> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <div class="col-md-4"> 
                <! –– SPACE IN BETWEEN––> 
            </div>             
            <div class="col-md-4"> 
                <a href="#m11" data-toggle="modal" class="thumbnail" style="border: 3px solid #555">  <img src="<?=PATH?>assets/img//malls.png"/>  </a> 
                <div class="modal fade" id="m11" style="background-color: #DFFFBF;"> 
                    <div class="modal-dialog"> 
                        <div class="modal-content"> 
                            <div class="modal-header" style="font-family:BARABARA "> 
                                <CENTER>SAN JOSE CITY
                                    <button type="button" class="btn btn-default navbar-right" data-dismiss="modal" style=" margin: 0; ">&times;</button>
                                </CENTER>                                 
                            </div>                             
                            <div> 
                                <h2 style=" font-family:BARABARA" class="center">MALLS AND SUPERMARKET</h2> 
                                <br/> 
                                <br/> 
                                <ol style="font-family:BARABARA;"> 
                                    <li>
                                        <a href="<?=PATH?>view/mallsandsupermarket#CENTRO" style=" font-family:BARABARA">CENTRO MALL </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/mallsandsupermarket#FRIENDSHIP" style=" font-family:BARABARA">FRIENDSHIP </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/mallsandsupermarket#J&F" style=" font-family:BARABARA">J & F </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/mallsandsupermarket#LAMMART" style=" font-family:BARABARA">LAMMART </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/mallsandsupermarket#MAGIC" style=" font-family:BARABARA">MAGIC </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/mallsandsupermarket#SAVEMORE" style=" font-family:BARABARA">SAVEMORE </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/mallsandsupermarket#WALTERMART" style=" font-family:BARABARA">WALTERMART </a>
                                    </li>                                     
                                    <li>
                                        <a href="<?=PATH?>view/mallsandsupermarket#PURE" style=" font-family:BARABARA">PURE GOLD </a>
                                    </li>                                     
                                </ol>                                 
                                <br/> 
                                <br/> 
                                <div class="modal-footer" style="font-family:BARABARA " onclick="location= '<?=PATH?>view/mallsandsupermarket'"> 
                                    <a href="<?=PATH?>view/mallsandsupermarket">
                                       <center> 
                                            <button>SEE THE FULL LIST</button>
                                       </center>
                                    </a> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </div>         
    </div>     
    <br/> 
    <br/> 
    <section style="background-image:  url(<?=PATH?>assets/img//green.png);">
         <br />
         <br />
         <center>
            <table style="width:60%; height: 90%; background-color:rgba(49,199,113,1); background-color:#1a5f35; margin-top: 1px;  border:1px solid black; border:0;">
               <tr>
                  <center>
                     <td>
                        <br />
                        <br />
                        <div class="col-md-8 col-md-offset-2">
                        <center>
                           <h5><B style="font-size: 32px; font-family: BARABARA; color:#FFF;" class="">PLAQUE OF RECOGNITION<br /></B></h5>
                           <div class="row" style="display:flex; flex-wrap:wrap;">
                              <div class="col-sm" style="margin:10px; min-width:50%; margin:auto;">
                                 <br />
                                <a href="<?=PATH?>media/generalinfo/AS.jpg" data-lightbox="gallary" data-title=""class="thumbnail">
                                  <img src="<?=PATH?>media/generalinfo/AS.jpg" style="object-fit:cover"/>
                                </a>
                              </div>
                              <div class="col-sm" style="min-width:50%;">
                                <p style="padding:20px; pading-top:0; font-size:16px; font-family:Roboto; color:#fff; ">San Jose City was proudly awarded a plaque of recognition on the 30th day of August 2018, for its significant contribution to the cultural and economic development wealth of the community and for a remarkable effort of developing the entire city as a Christmas destination. The hosting of events paved the way for economic opportunities in addition to social and cultural benefits, thereby being a contributor to sustainable local economic development.</p>
                              </div>
                           </div>
                        </center>
                        </div>
                        <br />
                     </td>
                  </center>
               </tr>
            </table>
         </center>
         <br />
         <br />
         <center>
            <table style="width:60%; height: 90%; background-color:rgba(49,199,113,1); background-color:#1a5f35; margin-top: 1px;  border:1px solid black; border:0;">
               <tr>
                  <center>
                     <td>
                        <br />
                        <br />
                        <div class="col-md-8 col-md-offset-2">
                        <center>
                           <h5><B style="font-size: 32px; font-family: BARABARA; color:#FFF;" class="">CITATION AWARD<br /></B></h5>
                           <div class="row" style="display:flex; flex-wrap:wrap;">
                              <div class="col-sm" style="margin:10px; min-width:50%; margin:auto;">
                                 <br />
                                <a href="<?=PATH?>media/generalinfo/AS1.jpg" data-lightbox="gallary" data-title=""class="thumbnail">
                                  <img src="<?=PATH?>media/generalinfo/AS1.jpg" style="object-fit:cover"/>
                                </a>
                              </div>
                              <div class="col-sm" style="min-width:50%;">
                                <p style="padding:20px; pading-top:0; font-size:16px; font-family:Roboto;  color:#fff;">
                                    San Jose City received a citation award as best tourism event (festival)-city, "Liwanag ng Pasko sa San Jose", during the 13th ATOP-DOT PEARL Awards at Cagayan de Oro, Misamis Oriental. 
                                 </p>
                              </div>
                           </div>
                        </center>
                        </div>
                        <br />
                     </td>
                  </center>
               </tr>
            </table>
         </center>
        
         <br />
         <br />
      </section>
   </body>
</html>