<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Ojass'20 | Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/small_black.png">
  <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet"> 
  <link rel ="stylesheet" href ="css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9a416a1cca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/final.css">
    <script src ="js/jquery.js"></script>
    <style>
    .logo_light {
        width: 50px;
    }

    #navbar-top {
        height: 85px;
        padding: 10px 0px;
        background-color: #f5f8fd;
    }
    .navbar-brand {
        padding: 0 15px;
    }

    #navbar-menu {
        margin-left: auto;
        margin-right: 3%;
    }

    .vertical_social {
        background-color: #191919;
    }

    #event_title {
      text-transform: uppercase;
    font-size: x-large;
    color: white;
    border-left: 1px solid pink;
    padding-left: 15px;
    }
    .hide-eah{
      display:none;
    }
    
</style>


    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>

<!-- Custom Scripts -->
    <script type="text/javascript" src="js/firebase.js"></script>

    <script type="text/javascript">
          
          var branches={
            'Aakriti':'../svg/eventsIcons/akriti.svg',
            'Armageddon':'../svg/eventsIcons/armageddon.svg',
            'Arthashastra':'../svg/eventsIcons/arthashastra.svg',
            'Aavartan':'../svg/eventsIcons/avartan.svg',
            'Circuit House': '../svg/eventsIcons/circuit_house.svg' ,
            'Deus-X-Machina': '../svg/eventsIcons/deus_x_machina.svg' ,
            'EXPOSICION': '../svg/eventsIcons/exposicion.svg',
            'Live CS':'../svg/eventsIcons/live_cs.svg',
            'NSCET':'../svg/eventsIcons/nscet.svg',
            'Neo Drishti':'../svg/eventsIcons/neodrishti.svg',
            'No Ground Zone':'../svg/eventsIcons/no_ground_zone.svg',
            'NCFF':'../svg/eventsIcons/paraphernalia.svg',
            'Prayas':'../svg/eventsIcons/prayas.svg',
            'Produs':'../svg/eventsIcons/produs.svg',
            'Rise of Machines':'../svg/eventsIcons/rise_of_machines.svg',
            'Silicon Valley':'../svg/eventsIcons/silicon_valley.svg',
            'Vishwa Code Genesis':'../svg/eventsIcons/vishwacodegenesis.svg',
            'School Events':'../svg/eventsIcons/school_events.../svg',
            'Checkered Flag':'../img/icons/checkeredflag-01.png'
          }



        </script>
</head>
<body ng-app="eventApp" style="color: #000;">
    <div class="container-fluid" ng-controller="demoCtrl">
      

    <div class="navigator">
      <br>
      <div class ="title-eve">
    <a href="../" ><img class="logo_light" src="img/newlogo.png" alt="logo" /></a>
    <span id="event_title"class ="event_title"style =" font-size:20px;font-family: 'Play', sans-serif;color:#fff;"><?php echo str_replace("_"," ",$_GET['branch']) ?></span></div>
    <br>
    <div class ="nav-eve">
    <nav class =" menu-navigation-dark subevent"  id='bottomMenu' class="fade-element-in" ng-if="flag" ng-cloak>
    <a style="word-wrap: break-word;display:block;color:#fff;font-size:20px;padding-top:10px;margin:8px;" ng-repeat="event in events" href="#" id ="eve-name"class="event-name" name="{{event.name.split(' ').join('').split('.').join('')}}">
                      {{ event.name }}</a>
                      </div>
    </div>
    <div class="menu-icon">
        <div class="line_one" style ="background-color:black;"></div>
        <div class="line_two" style ="background-color:black;"></div>
        <div class="line_three" style ="background-color:black;"></div>
    </div>
  <div class ="title-eve"><br>
    <a href="../" ><img class="logo_light" src="img/newlogo.png" alt="logo" /></a>
    <br><center>
    <span id="event_title"style =" font-family: 'Play', sans-serif;color:#000;border-left:none;"><u><?php echo str_replace("_"," ",$_GET['branch']) ?></u></span>
    </center>
    <br>


    <div class ="event-abt-head">
    <center><h2 class ="eve-abt" ng-if="flag"style =" font-family: 'Play', sans-serif;color:dodgerblue;"><u>ABOUT</u></h2></center>
    <center><p id ="eve-about" style ="padding:10px;font-size:17px;">{{about}}</p></center>
   <center><h3 class ="eve-heads" ng-if="flag" style =" color:#fff;;font-family: 'Play', sans-serif;"><u>Branch Heads</u></h3></center>
   <center><div ng-repeat="h in heads" style ="padding:5px;font-size:20px;">
   <div class ="card" style ="padding:8px;height:auto;" ><br>
   <center><img src ={{h.url}} width="65%"height="60%"style ="border-radius:10px;">
   <center><h4 style ="color:dodgerblue">{{h.name}}</h4>
    <p style="color:#fff"><i class ="fa fa-phone-alt" style="color:#fff"></i>&nbsp;&nbsp;{{h.cn}}</p>
   <p style="color:#fff"> <i class="fab fa-whatsapp" style="color:#fff"></i>&nbsp;&nbsp;{{h.wn}}</p></center>
       <br> </div>
       <br>
    </div></center>
    </div>
    </div>
  
    <div class="row" >
          <div class="col-xs-12">
              <div class ="eve-loader">
              <h4 class="fade-element-in" ng-if="!flag" style ="font-size:30px;margin-top:30px;margin-bottom:10px;"><span>Loading...</span><br><br>
                <div class ="cat-load">
                <?php include_once '../evnt-loader.php';?>
               
        </div>

        </h4>
        </div>
          </div>
        </div>


        <div ng-repeat="event in events" class="event-wrapper main-display" id="{{event.name.split(' ').join('') | removeBrackets}}" style="display:none;">
        
        
        <nav class="top">
  <menu class ="sidebarmenu">
    
      <a class="c1 eve-icon20" href="#" name ="about" >
        <span><i class="fa fa-address-book-o" style="color:#fff"></i></span>
      </a>
      <a class="c2 eve-icon20" href="#" name="detail">
        <span>&nbsp;<i class="fa fa-info" style="color:#fff"></i></span>
      </a>
      <a class="c3 eve-icon20" href="#" name="prizes">
        <span><i class="fa fa-trophy" style="color:#fff"></i></span>
      </a>
      <a class="c4 eve-icon20" href="#" name ="rules">
        <span><i class="fa fa-book" style="color:#fff"></i></span>
      </a>
      <a class="c5 eve-icon20" href="#" name ="coordinators">
        <span><i class="fa fa-users" style="color:#fff"></i></span>
      </a>
  </menu>
</nav>
        
        <div class="row">
          <div class="col-xs-12 mainarea">
            <div class="row text-center">
              <div class="col-xs-12" id='stuffname'></div>
            </div>
            <div class="row">
            
              <div class="col-xs-12">
                <div class="details">
                  
                  <!-- Tabs for 1st Sub Event -->
                  <div class="{{event.name.split(' ').join('') | removeBrackets}} about" style="display:none;">
                    
                    <h4 class="text-center" style="font-weight:900;color:dodgerblue;text-decoration: underline;">About</h4>
                    
                    <div ng-bind-html="event.about | html" class="txtdetail"></div>
                  </div>

                  <div class="{{event.name.split(' ').join('') | removeBrackets}} detail" style="display:none;">
         
                    <h4 class="text-center" style="font-weight:900;color:dodgerblue;text-decoration: underline;">Details</h4>
                    
                    <div ng-bind-html="event.detail | html" class="txtdetail"></div>
                  </div>

                  <div class="{{event.name.split(' ').join('') | removeBrackets}} rules" style="display:none;">
                    
                    <h4 class="text-center" style="font-weight:900;color:dodgerblue;text-decoration: underline;">Rules</h4>
                   
                    <div class="txtdetail">
                      <ol>
                      <li ng-repeat="rule in event.rules">
                          
                          <div ng-bind-html="rule.text | html"></div>
                          
                      </li>
                    </ol>
                    </div>
                  </div>

                  <div class="{{event.name.split(' ').join('') | removeBrackets}} prizes" style="display:none;">
                
                    <h4 class="text-center" style="font-weight:900;color:dodgerblue;text-decoration: underline;text-align:center;margin-left:150px;">Prizes</h4>
                   
                        
                   
                        <div class="txtdetail">
                          <!-- Condition for normal Prizes -->
                    <ul ng-if="!event.prize.Firstyear && !event.prize.firstyear && event.name!='CodeMania' && event.name!='CODESENSE'">
                      <li ng-repeat="(key,val) in event.prize">{{key | capitalize}}: &#x20b9; {{val}}</li>
                    </ul>
                    
                    <ul ng-if="event.name=='CodeMania'">
                	    <li>First: &#x20b9;{{event.prize.first}}</li>
                	    <li>Second: &#x20b9;{{event.prize.second}}</li>
                	    <li>Third: &#x20b9;{{event.prize.third}}</li>
                	    <li>Fourth: &#x20b9;{{event.prize.fourth}}</li>
                	    <li>Fifth: &#x20b9;{{event.prize.fifth}}</li>
                	    <li>Sixth: &#x20b9;{{event.prize.sixth}}</li>
                	    <b><li>Total: &#x20b9;{{event.prize.total}}</li></b>
                		<!--<li ng-repeat="(key,val) in current.prize">{{key}}: &#x20b9;{{val}}</li>-->
                	</ul>
                	
                	<ul ng-if="event.name=='CODESENSE'">
                	    <li>First: &#x20b9;{{event.prize.first}}</li>
                	    <li>Second: &#x20b9;{{event.prize.second}}</li>
                	    <li>Third: &#x20b9;{{event.prize.third}}</li>
                	    <li>Fourth: &#x20b9;{{event.prize.forth}}</li>
                	    <b><li>Total: &#x20b9;{{event.prize.total}}</li></b>
                		<!--<li ng-repeat="(key,val) in current.prize">{{key}}: &#x20b9;{{val}}</li>-->
                	</ul>
                    

                    

                    <!-- Condition for WHO AM I (WHI) in Ciruit_House -->
                    <!-- Condition for High Voltage Concepts in Ciruit_House -->
                    <div ng-if="event.prize.firstyear">

                      <b ng-if="event.name=='Hack-De-Science'">Web</b>
                      <b ng-if="event.name!='Hack-De-Science'">First year</b>: <br>
                      <li ng-repeat="(key,val) in event.prize.firstyear">
                        {{key | capitalize}} : &#x20b9; {{val}}
                      </li>

                      <b ng-if="event.name=='Hack-De-Science'">App</b>
                      <b ng-if="event.name!='Hack-De-Science'">Second year</b>: <br>
                      <li ng-repeat="(key,val) in event.prize.secondyear" >
                        
                        	{{key | capitalize}} : &#x20b9; {{val}}
                        

                      </li>

                      <div ng-if="event.prize.thirdyear">
                        <b ng-if="event.name=='Hack-De-Science'">Others</b>
                      	<b ng-if="event.name!='Hack-De-Science'">Third year</b>: <br>
	                      <li ng-repeat="(key,val) in event.prize.thirdyear">
	                        
	                        	{{key | capitalize}} : &#x20b9; {{val}}
	                        
	                      </li>
                      </div>

                      <b>Total</b>: &#x20b9; {{event.prize.total}}
                     
                    </div>
                        </div>

                  </div>
                  <div class="{{event.name.split(' ').join('') | removeBrackets}} coordinators" style="display:none;">
                  
                    <h4 class="text-center" style="font-weight:900;color:dodgerblue;text-decoration: underline;margin-left:60px;">Event Heads</h4>
                    
                    <div class="row text-center" ng-repeat="c in event.coordinators">
                      <div class="col-xs-6" style ="padding:15px;margin-left:15px;">{{c.name}}</div>
                      <div class="col-xs-6" style ="padding:15px;margin-left:15px;">{{c.phone}}</div>
                    </div>
                  </div>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!--bottom event-->  
      </div>
    </div>
<br><br>

<script>
$(document).ready(function(){
    //hiding and showing the main details and sub event detail
    $(".nav-eve").click(function(){
      $(".event-abt-head").hide();
      $(".top").show();
    $(".mainarea").show();
    });
  });


  $(document).ready(function(){
   $(".title-eve").click(function(){
    $(".event-abt-head").show();
    $(".top").hide();
    $(".mainarea").hide();
   })
  });

</script>
  
	<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

</body>
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

    <!-- Vendor Scripts -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.5.1/angular-sanitize.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-animate.min.js"></script>
        <script type="text/javascript" src="js/events.js"></script>
        <script type="text/javascript" src="js/newng.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="js/finalevent.js"></script>

</html>