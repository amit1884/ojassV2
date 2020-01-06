<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Ojass'20 | Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/small_black.png">
  <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet"> 
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <link rel ="stylesheet" href ="css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9a416a1cca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/e-detail.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/updated.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/events.css"> -->

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
    
</style>


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
<body ng-app="eventApp" style="color: #000;">
    <!-- <header id="navbar-top" class="header_wrap fixed-top" style="border-bottom:1px solid #000;"> -->
     <!-- <a href="../" ><img class="logo_light" src="img/newlogo.png" alt="logo" /></a>
                <span id="event_title"style =" font-family: 'Play', sans-serif;color:#000;"><?php //echo str_replace("_"," ",$_GET['branch']) ?></span> -->
<!-- </header>  -->
    <div class="container-fluid" ng-controller="demoCtrl">
      
<!--sub events-->
    <input type="checkbox" name="" id="side-menu-switch">
<div class="side-menu">
    <!--angular part-->
    <div class ="title-eve">
    <a href="../" ><img class="logo_light" src="img/newlogo.png" alt="logo" /></a>
    <span id="event_title"style =" font-family: 'Play', sans-serif;color:#000;"><?php echo str_replace("_"," ",$_GET['branch']) ?></span></div>
    <nav class =" menu-navigation-dark subevent"  id='bottomMenu' class="fade-element-in" ng-if="flag" ng-cloak>
    <a style="word-wrap: break-word;" ng-repeat="event in events" href="#" class="event-name" name="{{event.name.split(' ').join('').split('.').join('')}}">
                      {{ event.name }}</a>

    </nav>
      <!--angular part-->
    <label for="side-menu-switch">
        <i class="fas fa-angle-left"></i>
    </label>
</div>
    <!--sub events--><br>
    <div class="row" >
          <div class="col-xs-12">
            <!-- <nav class="menu-navigation-dark" id='bottomMenu' class="fade-element-in" ng-if="flag" ng-cloak>
                    <a style="word-wrap: break-word;" ng-repeat="event in events" href="#" class="event-name" name="{{event.name.split(' ').join('').split('.').join('')}}">
                      {{ event.name }}</a>
            </nav> -->
              <div class ="eve-loader">
              <h4 class="fade-element-in" ng-if="!flag" style ="margin-top:100px;"><span>Loading...</span>
                <!-- <img src="img/loader.svg"> -->
                <div class ="cat-load">
                <?php include_once 'cat.php';?>
        </div>

        </h4>
        </div>
          </div>
        </div>


        <div ng-repeat="event in events" class="event-wrapper" id="{{event.name.split(' ').join('') | removeBrackets}}" style="display:none;">
        
        
        <nav class="top">
  <menu class ="sidebarmenu">
    
      <a class="c1 eve-icon20" href="#" name ="about" >
        <span><i class="fa fa-address-book-o" ></i></span>
      </a>
      <a class="c2 eve-icon20" href="#" name="detail">
        <span>&nbsp;<i class="fa fa-info" ></i></span>
      </a>
      <a class="c3 eve-icon20" href="#" name="prizes">
        <span><i class="fa fa-trophy" ></i></span>
      </a>
      <a class="c4 eve-icon20" href="#" name ="rules">
        <span><i class="fa fa-book" ></i></span>
      </a>
      <a class="c5 eve-icon20" href="#" name ="coordinators">
        <span><i class="fa fa-users" ></i></span>
      </a>
  </menu>
</nav>
        
        <div class="row">
          <!-- <div class="col-xs-12">
            <nav class="sidebarmenu">
              
             <a href="#" name='about' style ="font-size:30px; width:72px;padding:5px;"><i class="fa fa-address-book-o" ></i></a>
                  <a href="#" name='detail' style ="font-size:30px;width:72px;padding:5px;"><i class="fa fa-info"></i></a>
                  <a href="#" name='prizes' style ="font-size:30px;width:72px;padding:5px;"><i class="fa fa-trophy"></i></a>
                  <a href="#" name='rules' style ="font-size:30px;width:72px;padding:5px;"><i class="fa fa-book"></i></a>
                  <a href="#" name='coordinators' style ="font-size:30px;width:72px;padding:5px;"><i class="fa fa-users"></i></a>
          </nav>
          </div> -->
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
                  
                    <h4 class="text-center" style="font-weight:900;color:dodgerblue;text-decoration: underline;margin-left:60px;">Co-ordinators</h4>
                    
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

        <!-- <script src="../assets/js/popper.min.js"></script> -->
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script> 
        <!-- <script src="../assets/js/scripts.js"></script> -->


</html>