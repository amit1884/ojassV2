<?php include_once 'nav.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type ="text/javascript" src ="js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>OJASS|EVENTS</title>
</head>
<body style ="background-color:#f5fdf8">
<br><br><br><br>
    <style>
        #m-eve{
        overflow-x:hidden;
        width:100vw;
      }
      body{
        overflow-x:hidden;
        
  background-image: linear-gradient(to bottom, #c112eb, #891dc2, #571a97, #2c126b, #080340);

      }
        .major_events{
              width:27%;
              margin-left:5%;
              float:left;
              text-align: center;
              align-items:center;
              border-radius: 10px;
              /* overflow-x:hidden; */

            }
        .major_events img{
            width: 100%;
            border-radius: 20%;
            border:solid 1px #fff;
        }
        .major_events h4{
                text-align: center;
                margin-top: 8px;
                color:#fff;
                
        }
        #events_header{
            text-align: center;
            color: white;
            font-family: 'Roboto Slab', serif;
        }

    </style>
    <body style="overflow-x: hidden;">
    <center><img src= "svg/events.svg" width= "250"height="50"></center><br><br>
    <div style= "display:inline-block">
    <a href ="event/index.php?branch=Aakriti"target ="_blank"><div class='major_events' data-aos='flip-up'><img src='svg\eventsIcons\akriti.svg'><h4>Aakriti</h4></div>
    <a href ="event/index.php?branch=Aavartan"target ="_blank"><div class='major_events' data-aos='fade-down-left'><img src='svg\eventsIcons\avartan.svg'><h4>Avartan</h4></div> 
    <a href ="event/index.php?branch=Armageddon"target ="_blank"><div class='major_events' data-aos='flip-right'><img src='svg\eventsIcons\armageddon.svg'><h4>Armageddon</h4></div>
    </div>
    <div style= "display:inline-block">
    <a href ="event/index.php?branch=Arthashastra"target ="_blank"><div class='major_events' data-aos='fade-down-right'><img src='svg\eventsIcons\arthashastra.svg'><h4>Arthashastra</h4></div>
    <a href ="event/index.php?branch=Circuit House"target ="_blank"><div class='major_events' data-aos='flip-right'><img src='svg\eventsIcons\circuit_house.svg'><h4>Circuit-House</h4></div>
    <a href ="event/index.php?branch=Deus-X-Machina"target ="_blank"><div class='major_events' data-aos='flip-down'><img src='svg\eventsIcons\deus_x_machina.svg'><h4>Deus-X-Machina</h4></div>
    </div>
    <div style= "display:inline-block">
    <a href ="event/index.php?branch=Live CS"target ="_blank"><div class='major_events' data-aos='flip-left' ><img src='svg\eventsIcons\live_cs.svg'><h4>Live CS</h4></div>
    <a href ="event/index.php?branch=NCFF"target ="_blank"><div class='major_events' data-aos='zoom-out-right'><img src='svg\eventsIcons\paraphernalia.svg'><h4>NCFF</h4></div>
    <a href ="event/index.php?branch=NSCET"target ="_blank"><div class='major_events' data-aos='zoom-in-left'><img src='svg\eventsIcons\nscet.svg'><h4>NSCET</h4></div> 
    </div>
    <div style= "display:inline-block">
    <a href ="event/index.php?branch=Neo Drishti"target ="_blank"><div class='major_events' data-aos='zoom-in-right'><img src='svg\eventsIcons\neodrishti.svg'><h4>Neo Drishti</h4></div>
    <a href ="event/index.php?branch=No Ground Zone"target ="_blank"><div class='major_events' data-aos='zoom-in-up'><img src='svg\eventsIcons\no_ground_zone.svg'><h4>No Ground Zone</h4></div>
    <a href ="event/index.php?branch=Prayas"target ="_blank"><div class='major_events' data-aos='zoom-out-up'><img src='svg\eventsIcons\prayas.svg'><h4>Prayas</h4></div>
    </div>
    <div style= "display:inline-block">
    <a href ="event/index.php?branch=Produs"target ="_blank"><div class='major_events' data-aos='zoom-out-left'><img src='svg\eventsIcons\produs.svg'><h4>Produs</h4></div>
    <a href ="event/index.php?branch=Rise of Machines"target ="_blank"><div class='major_events' data-aos='flip-left'><img src='svg\eventsIcons\rise_of_machines.svg'><h4>Rise of Machines</h4></div>
    <a href ="event/index.php?branch=School Events"target ="_blank"><div class='major_events' data-aos='fade-up'><img src='svg\eventsIcons\school_events.svg'><h4>School Events</h4></div>
    </div>
    <div style= "display:inline-block">
    <a href ="event/index.php?branch=Silicon Valley"target ="_blank"><div class='major_events' data-aos='zoom-in-up'><img src='svg\eventsIcons\silicon_valley.svg'><h4>Silicon Valley</h4></div>
    <a href ="event/index.php?branch=Vishwa Code Genesis"target ="_blank"><div class='major_events' data-aos='flip-up'><img src='svg\eventsIcons\vishwacodegenesis.svg'><h4>Vishwacode Genesis</h4></div>
    <a href ="event/index.php?branch=Exposicion"target ="_blank"><div class='major_events' data-aos='zoom-in-up'><img src='svg\eventsIcons\exposicion.svg'><h4>Exposicion</h4></div>
    </div>
<?php include_once 'footer2.php';?>
<script type="text/javascript">
     AOS.init({
        duration:800,
     }
        );
</script>
<script type="text/javascript" src='js\animation.js'></script>
</body>
</html>