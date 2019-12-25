<?php include_once 'nav.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href= "style.css">
    <link rel ="stylesheet" href= "bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title>Events | OJASS</title>
    <style>
        body{
          overflow-x:hidden;
        }
        .major_events{
              width:30%;
              margin:5px;
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
        }
    </style>
    <body>
      <br><br><br>
    <h1 id='events_header'>Major Events</h1>
    <div class ="main-event">
<div class='major_events' data-aos="flip-left"><img src='svg\eventsIcons\armageddon.svg'><h5>Armageddon</h5></div>
    <div class='major_events' data-aos="fade-down"><img src='svg\eventsIcons\arthashastra.svg'><h5>Arthashastra</h5></div>
    <div class='major_events' data-aos="fade-down-left"><img src='svg\eventsIcons\akriti.svg'><h5>Aakriti</h5></div>
    <div class='major_events' data-aos="flip-right"><img src='svg\eventsIcons\avartan.svg'><h5>Avartan</h5></div>
    <div class='major_events' data-aos="zoom-in"><img src='svg\eventsIcons\circuit_house.svg'><h5>Circuit-House</h5></div>
    <div class='major_events' data-aos="flip-left"><img src='svg\eventsIcons\deus_x_machina.svg'><h5>Deus-X-Machina</h5></div>
    <div class='major_events' data-aos='fade-right'><img src='svg\eventsIcons\live_cs.svg'><h5>Live CS</h5></div>
    <div class='major_events' data-aos='zoom-out'><img src='svg\eventsIcons\neodrishti.svg'><h5>Neo Drishti</h5></div>
    <div class='major_events' data-aos='fade-left'><img src='svg\eventsIcons\no_ground_zone.svg'><h5>No Groud Zone</h5></div>
    <div class='major_events' data-aos='fade-right'><img src='svg\eventsIcons\nscet.svg'><h5>NSCET</h5></div> 
    <div class='major_events' data-aos='zoom-out'><img src='svg\eventsIcons\paraphernalia.svg'><h5>Paraphernalia</h5></div>
    <div class='major_events' data-aos='fade-left'><img src='svg\eventsIcons\prayas.svg'><h5>Prayas</h5></div>
    <div class='major_events' data-aos='fade-right'><img src='svg\eventsIcons\produs.svg'><h5>Produs</h5></div>
    <div class='major_events' data-aos='zoom-in'><img src='svg\eventsIcons\rise_of_machines.svg'><h5>Rise of Machines</h5></div>
    <div class='major_events' data-aos='fade-left'><img src='svg\eventsIcons\school_events.svg'><h5>School Events</h5></div>
    <div style ="display:inline-block">
    <div class='major_events' data-aos="fade-down"><img src='svg\eventsIcons\silicon_valley.svg'><h5>Silicon Valley</h5></div>
    <div class='major_events' data-aos="zoom-in"><img src='svg\eventsIcons\vishwacodegenesis.svg'><h5>Vishwacode Genesis</h5></div>
    <div class='major_events' data-aos="flip-left"><img src='svg\eventsIcons\exposicion.svg'><h5>Exposicion</h5></div>
      </div>
</div>
<br>
   


<!--footer-->
<div class="container-fluid text-center footer" style="background:#514e56bd;margin-left:-5%;margin-top:20%;overflow:hidden;">
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
    <script type ="text/javascript">
    AOS.init({
  duration: 700,
})
</script>