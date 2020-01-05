<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>OJASS|EventDetail</title>
    <link href="css/newevent.css" rel="stylesheet"> 
    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>

<!-- Custom Scripts -->
    <script type="text/javascript" src="js/firebase.js"></script>

    <script type="text/javascript">
          
          var branches={
            'AAKRITI':'../img/icons/akriti-01.png',
            'Armageddon':'../img/icons/armageddon-01.png',
            'ARTHASHASTRA':'../img/icons/arthashastra-01.png',
            'AVARTAN':'../img/icons/avartan-01-01.png',
            'Circuit_House': '../img/icons/CircuitHouse-01.png' ,
            'Deus-X-Machina': '../img/icons/deus-x-machina-01.png' ,
            'EXPOSICION': '../img/icons/exposcion-01.png',
            'Live CS':'../img/icons/liveCS-01.png',
            'NSCET':'../img/icons/NSCET-01.png',
            'Neo Drishti':'../img/icons/neodrishti-01.png',
            'No Ground Zone':'../img/icons/NoGroundZone-01.png',
            'Paraphernalia':'../img/icons/paraphernalia-01.png',
            'PRAYAS':'../img/icons/prayas-01.png',
            'Produs':'../img/icons/akriti-01.png',
            'Rise of Machines':'../img/icons/riseofmachines-01.png',
            'Silicon Valley':'../img/icons/siliconvalley-01.png',
            'VishwaCodegenesis':'../img/icons/vishwacodegenesis-01.png',
            'School Events':'../img/icons/SCHOOL%20EVENTS-01.png'
          }



        </script>
</head>
<body ng-app="eventApp">
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Home</span>
                <span class="ion-ios-search pull-right"></span>
                <div class="search">
                <form method="post">
                    <input type="search" placeholder="Search Here">
                </form>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar-overlay"></div>
                <div class="sidebar-content">
                    <div class="top-head" style ="background:#f5f8fd">
                        <!--event name-->
                        <span id="event_title"style =" font-family: 'Play', sans-serif;color:#000"><?php echo str_replace("_"," ",$_GET['branch']) ?></span>
                    </div>
                    <div class="container-fluid" ng-controller="demoCtrl">


                    <div class="nav-left">
                    <nav class="menu-navigation-dark" id='bottomMenu' class="fade-element-in" ng-if="flag" ng-cloak>
                    <a style="word-wrap: break-word;" ng-repeat="event in events" href="#" class="event-name" name="{{event.name.split(' ').join('').split('.').join('')}}">
                      <div >{{ event.name }}</div></a>
            </nav>
            <center>
              <div style ="margin-left:150px">
              <h4 class="fade-element-in" ng-if="!flag"><span>Loading...</span> 
                <br>
                <img src="img/loader.svg">
              </h4>
        </div>
            </center>
                    </div>
                </div>
            </div>
          
            <div ng-repeat="event in events" class="event-wrapper" id="{{event.name.split(' ').join('') | removeBrackets}}" style="display:none;">
            <div class="nav">
                <a href="#" class="nav-item nav-count-1" name ="about"><i class="fa fa-address-book-o"></i><span class="invisible">About</span></a>
                <a href="#" class="nav-item nav-count-2" name ="details"><i class="fa fa-info"></i><span class="invisible">Detail</span></a>
                <a href="#" class="nav-item nav-count-3" name ="rules"><i class="fa fa-book"></i><span class="invisible">Rules</span></a>
                <a href="#" class="nav-item nav-count-4" name ="prizes"><i class="fa fa-trophy"></i><span class="invisible">Prize</span></a>
                <a href="#" class="nav-item nav-count-5" name ="coordinators"><i class="fa fa-users"></i><span class="invisible">Coordinators</span></a>
                <a href="#toggle" class="mask"><i class="fa fa-plus"></i></a>
            </div>

         
        </div><!--ng-repeat-->
        </div> <!--ng-controller closing div-->
        </div>
    </div>







    

    <!--script-->
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
          var branchname= '<?php echo $_GET['branch']; ?>';
          var html='<img src='+branches[branchname]+' class="event-img">'; 
          $('.imm').html(html);

          $("a").mouseenter(function(){
              $("<audio></audio>").attr({ 
                'src':'../audio/pi.mp3', 
                'volume':1,
                'autoplay':'autoplay'
              }).appendTo("body");
            });
          $(document).on('mouseenter','#bottomMenu > a',function(){
            $("<audio></audio>").attr({ 
                'src':'../audio/pi.mp3', 
                'volume':1,
                'autoplay':'autoplay'
              }).appendTo("body");
          })
    </script>

    <script src ="js/newevent.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.5.1/angular-sanitize.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-animate.min.js"></script>
        <script type="text/javascript" src="js/events.js"></script>
        <script type="text/javascript" src="js/newng.js"></script>
         <!--script-->


</body>
</html>