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
    <link rel="stylesheet" type="text/css" href="css\animation.css">
    <title>OJASS|EVENTS</title>
</head>
<body style ="background-color:#f5fdf8">
<br><br><br><br>
    <style>
      .body{
        overflow-x:hidden;
      }
        .major_events{
              width:30%;
              margin:6px;
              float:left;
              /*background: black;*/
              text-align: center;
              align-items:center;
              border-radius: 10px;

            }
        .major_events img{
            width: 100%;
            border-radius: 20%;
            border:solid 2px dodgerblue;
        }
        .major_events h5{
                text-align: center;
                margin-top: 8px;
                color:#413e66;
                
        }
        #events_header{
            text-align: center;
            color: white;
            font-family: 'Roboto Slab', serif;
        }

    </style>
    <body>
    <center><img src= "svg/events.svg" width= "250"height="50"></center><br><br>
    <div class ="main-event eve" id ="m-eve">

    <a href ="event/index.php?branch=ARTHASHASTRA"target ="_blank"><div class='major_events animatable bounceInLeft ' ><img src='svg\eventsIcons\arthashastra.svg'><h5>Arthashastra</h5></div>
    <a href ="event/index.php?branch=AAKRITI"target ="_blank"><div class='major_events animatable bounceIn' ><img src='svg\eventsIcons\akriti.svg'><h5>Aakriti</h5></div>
    <a href ="event/index.php?branch=AVARTAN"target ="_blank"><div class='major_events animatable bounceInRight ' ><img src='svg\eventsIcons\avartan.svg'><h5>Avartan</h5></div>
   
    <a href ="event/index.php?branch=Circuit_House"target ="_blank"><div class='major_events animatable bounceInRight' ><img src='svg\eventsIcons\circuit_house.svg'><h5>Circuit-House</h5></div>
    <a href ="event/index.php?branch=Deus-X-Machina"target ="_blank"><div class='major_events animatable fadeInDown' ><img src='svg\eventsIcons\deus_x_machina.svg'><h5>Deus-X-Machina</h5></div>
    <a href ="event/index.php?branch=Live CS"target ="_blank"><div class='major_events animatable bounceInLeft' ><img src='svg\eventsIcons\live_cs.svg'><h5>Live CS</h5></div>
    <div style= "display:inline-block">
    <a href ="event/index.php?branch=Neo Drishti"target ="_blank"><div class='major_events animatable fadeInDown'><img src='svg\eventsIcons\neodrishti.svg'><h5>Neo Drishti</h5></div>
    <a href ="event/index.php?branch=No Ground Zone"target ="_blank"><div class='major_events animatable fadeInUp'><img src='svg\eventsIcons\no_ground_zone.svg'><h5>No Groud Zone</h5></div>
    <a href ="event/index.php?branch=NSCET"target ="_blank"><div class='major_events animatable fadeInDown'><img src='svg\eventsIcons\nscet.svg'><h5>NSCET</h5></div> 
    </div>
    <a href ="event/index.php?branch=Paraphernalia"target ="_blank"><div class='major_events animatable bounceIn'><img src='svg\eventsIcons\paraphernalia.svg'><h5>Paraphernalia</h5></div>
    <a href ="event/index.php?branch=Prayas"target ="_blank"><div class='major_events animatable bounceIn'><img src='svg\eventsIcons\prayas.svg'><h5>Prayas</h5></div>
    <a href ="event/index.php?branch=Produs"target ="_blank"><div class='major_events animatable bounceIn'><img src='svg\eventsIcons\produs.svg'><h5>Produs</h5></div>
   
    <a href ="event/index.php?branch=Rise of Machines"target ="_blank"><div class='major_events animatable bounceInRight'><img src='svg\eventsIcons\rise_of_machines.svg'><h5>Rise of Machines</h5></div>
    <a href ="event/index.php?branch=School Events"target ="_blank"><div class='major_events animatable bounceIn'><img src='svg\eventsIcons\school_events.svg'><h5>School Events</h5></div>
    <a href ="event/index.php?branch=Armageddon"target ="_blank"><div class='major_events animatable bounceInLeft'><img src='svg\eventsIcons\armageddon.svg'><h5>Armageddon</h5></div>
    <div style= "display:inline-block">
    <a href ="event/index.php?branch=Silicon Valley"target ="_blank"><div class='major_events animatable bounceInLeft'><img src='svg\eventsIcons\silicon_valley.svg'><h5>Silicon Valley</h5></div>
    <a href ="event/index.php?branch=VishwaCodegenesis"target ="_blank"><div class='major_events animatable fadeInUp'><img src='svg\eventsIcons\vishwacodegenesis.svg'><h5>Vishwacode Genesis</h5></div>
    <a href ="event/index.php?branch=Exposicion"target ="_blank"><div class='major_events animatable bounceInRight'><img src='svg\eventsIcons\exposicion.svg'><h5>Exposicion</h5></div>
    </div>
</div>
<?php include_once 'footer2.php';?>
<script type="text/javascript" src='js\animation.js'></script>
</body>
</html>