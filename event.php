<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type ="text/javascript" src ="js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>animate</title>
</head>
<body style ="background-color:black">
    <title>Events | OJASS</title>
    <style>
      
        .major_events{
              width:30%;
              margin:3px;
              float:left;
              /*background: black;*/
              text-align: center;
              align-items:center;
              border-radius: 10px;

            }
        .major_events img{
            width: 100%;
            border-radius: 20%;
            border:solid 2px white;
        }
        .major_events h5{
                text-align: center;
                margin-top: 8px;
                color:#FFDAB9;
                
        }
        #events_header{
            text-align: center;
            color: white;
            font-family: 'Roboto Slab', serif;
        }
        /* .main-event{
            opacity:0;
        } */
       /* .btn-eve{
            width:100px;
            height:auto;
            display:block;
        } */
        .main-event{
            height:100vh;
        }
        .event-container{
  position:relative;
  min-height:170vh;
}
.footer-o20{
  position:absolute;
  bottom:0;
  width:100%;
}

    </style>
    <body bgcolor ="black">
    <h1 id='events_header'>Major Events</h1>
    <!-- <center><button class ="btn-eve" id ="btn-1"onclick="document.getElementById('m-eve').style.display='block';
     this.style.display='none';">EVENTS</button></center><br><br> -->
     <div class ="event-container">
    <div class ="main-event eve" id ="m-eve">

    <div class='major_events animated rollIn ' ><img src='svg\eventsIcons\arthashastra.svg'><h5>Arthashastra</h5></div>
    <div class='major_events animated bounceIn ' ><img src='svg\eventsIcons\akriti.svg'><h5>Aakriti</h5></div>
    <div class='major_events animated zoomIn ' ><img src='svg\eventsIcons\avartan.svg'><h5>Avartan</h5></div>
   
    <div class='major_events animated slideInLeft' ><img src='svg\eventsIcons\circuit_house.svg'><h5>Circuit-House</h5></div>
    <div class='major_events animated rubberBand' ><img src='svg\eventsIcons\deus_x_machina.svg'><h5>Deus-X-Machina</h5></div>
    <div class='major_events animated slideInright' ><img src='svg\eventsIcons\live_cs.svg'><h5>Live CS</h5></div>
    <div style= "display:inline-block">
    <div class='major_events animated bounceInRight'><img src='svg\eventsIcons\neodrishti.svg'><h5>Neo Drishti</h5></div>
    <div class='major_events animated fadeInUpBig'><img src='svg\eventsIcons\no_ground_zone.svg'><h5>No Groud Zone</h5></div>
    <div class='major_events animated bounceInRight'><img src='svg\eventsIcons\nscet.svg'><h5>NSCET</h5></div> 
    </div>
    <div class='major_events animated rotateIn'><img src='svg\eventsIcons\paraphernalia.svg'><h5>Paraphernalia</h5></div>
    <div class='major_events animated fadeInUpBig'><img src='svg\eventsIcons\prayas.svg'><h5>Prayas</h5></div>
    <div class='major_events animated slideInLeft'><img src='svg\eventsIcons\produs.svg'><h5>Produs</h5></div>
   
    <div class='major_events animated rollIn'><img src='svg\eventsIcons\rise_of_machines.svg'><h5>Rise of Machines</h5></div>
    <div class='major_events animated bounceInRigh'><img src='svg\eventsIcons\school_events.svg'><h5>School Events</h5></div>
    <div class='major_events animated bounceInLeft'><img src='svg\eventsIcons\armageddon.svg'><h5>Armageddon</h5></div>
    <div style= "display:inline-block">
    <div class='major_events animated rollIn'><img src='svg\eventsIcons\silicon_valley.svg'><h5>Silicon Valley</h5></div>
    <div class='major_events animated rubberBand'><img src='svg\eventsIcons\vishwacodegenesis.svg'><h5>Vishwacode Genesis</h5></div>
    <div class='major_events animated bounceInRight'><img src='svg\eventsIcons\exposicion.svg'><h5>Exposicion</h5></div>
    </div>
</div>
<div class ="footer-o20">

<!--footer-->
 <div class="container-fluid text-center footer" style="background:#514e56bd;margin-left:-3%;margin-top:10%;overflow:hidden;">
    <footer style="padding-top: 10px;">

        <div class="row ">
          <div class="col text-center">
            <ul class="list-inline" >
              <p class="text-light" style="font-size:18px; font-family: 'Jura', sans-serif;">Ojass'19</p>
            </ul>
          </div>
          <div class="col">

          <ul class="list-inline" style="list-style-type:none">
            <li><i class="fa fa-map-marker text-light" style="font-size: 16px;color:red;"><a style="font-family: 'Jura', sans-serif;color:#fff;"> NIT Jamshedpur</a></i></li>
            <li><a class="fa fa-envelope text-light" style="font-size: 16px;color:red;"><a class="text-light" style="font-family: 'Jura', sans-serif;color:#fff;" href="mailto:ojass@nitjsr.ac.in"> ojass@nitjsr.ac.in</a> </i></li>
          </ul>

          </div>
        </div>

      <center>
            <a href="https://www.facebook.com/Ojassnitjamshedpur/" ><i class="fa fa-facebook-official" style="font-size: 36px; color:white !important" target="_blank"></i></a>
            <a href="https://www.youtube.com/user/ojassnitjsr" class="fa fa-youtube-square" style="font-size: 36px; margin-left: 12px;color:white !important" target="_blank"></a>
            <a href="https://www.instagram.com/ojass_techfest/" class="fa fa-instagram" style="font-size: 36px; margin-left: 12px;color:white !important" target="_blank"></a>
            
            <p style="font-size: 14px; margin: 0; padding: 10px 0;"> <a class="text-light" style="text-decoration:none;color:white" href="developers.php" target= "_blank">© Ojass Web Team</a> </p>

        </center>
    </footer>
    </div>

    </div>
    </div>

</body>
</html>