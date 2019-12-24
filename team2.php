<?php include_once 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  body{
    background-color:#1f2029;
  }
  .carousel-inner img {
      width: 96%;
      height:300px;
  }
  #btn-team{
      width:96%;
      margin:2%;
      padding:13px;
      font-family: 'Play', sans-serif;
      font-size:25px;
      border:none;
      outline:none;
      border-radius:10px;
      align-self:center;
  }
  .tc1,.tc2,.tc3,.tc4,.tc5,.tc6,.tc7,.tc8{
      display:none;
  }
  
  .tc9,.tc10,.tc11,.tc12,.tc13{
    display:none;
  }
  .team-h{
      color:white;
      text-align:center;
  }
  </style>
</head>
<body>
  <br><br>
<h1 class ="team-h">OUR TEAM</h1><br><br>
<button class ="team-1" id ="btn-team">Core Team</button>
<div id="t1" class="carousel slide tc1" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t1" data-slide-to="0" class="active"></li>
    <li data-target="#t1" data-slide-to="1"></li>
    <li data-target="#t1" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<br><br>
<button class ="team-2" id ="btn-team" >Planning And Development</button>

<div id="t2" class="carousel slide tc2" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t2" data-slide-to="0" class="active"></li>
    <li data-target="#t2" data-slide-to="1"></li>
    <li data-target="#t2" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<br><br>
<button class ="team-3" id ="btn-team" >Corporate Affairs</button>

<div id="t3" class="carousel slide tc3" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t3" data-slide-to="0" class="active"></li>
    <li data-target="#t3" data-slide-to="1"></li>
    <li data-target="#t3" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t3" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t3" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




<br><br>
<button class ="team-4" id ="btn-team" >Public Relation</button>

<div id="t4" class="carousel slide tc4" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t4" data-slide-to="0" class="active"></li>
    <li data-target="#t4" data-slide-to="1"></li>
    <li data-target="#t4" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t4" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t4" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




<br><br>
<button class ="team-5" id ="btn-team" >Event Management</button>

<div id="t5" class="carousel slide tc5" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t5" data-slide-to="0" class="active"></li>
    <li data-target="#t5" data-slide-to="1"></li>
    <li data-target="#t5" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t5" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t5" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<br><br>
<button class ="team-6" id ="btn-team" >Hospitality</button>

<div id="t6" class="carousel slide tc6" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t6" data-slide-to="0" class="active"></li>
    <li data-target="#t6" data-slide-to="1"></li>
    <li data-target="#t6" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/6.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t6" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t6" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<br><br>
<button class ="team-7" id ="btn-team" >Logistics</button>

<div id="t7" class="carousel slide tc7" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t7" data-slide-to="0" class="active"></li>
    <li data-target="#t7" data-slide-to="1"></li>
    <li data-target="#t7" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t7" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t7" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<br><br>
<button class ="team-8" id ="btn-team" >Digital Public Relations</button>

<div id="t8" class="carousel slide tc8" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t8" data-slide-to="0" class="active"></li>
    <li data-target="#t8" data-slide-to="1"></li>
    <li data-target="#t8" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t8" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t8" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<br><br>
<button class ="team-9" id ="btn-team" >Application And Web Developers</button>

<div id="t9" class="carousel slide tc9" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t9" data-slide-to="0" class="active"></li>
    <li data-target="#t9" data-slide-to="1"></li>
    <li data-target="#t9" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t9" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t9" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<br><br>
<button class ="team-10" id ="btn-team" >Media Relations</button>

<div id="t10" class="carousel slide tc10" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t10" data-slide-to="0" class="active"></li>
    <li data-target="#t10" data-slide-to="1"></li>
    <li data-target="#t10" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t10" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t10" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<br><br>
<button class ="team-11" id ="btn-team" >Creative Team</button>

<div id="t11" class="carousel slide tc11" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t11" data-slide-to="0" class="active"></li>
    <li data-target="#t11" data-slide-to="1"></li>
    <li data-target="#t11" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t11" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t11" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<br><br>
<button class ="team-12" id ="btn-team" >Robotics</button>

<div id="t12" class="carousel slide tc12" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t12" data-slide-to="0" class="active"></li>
    <li data-target="#t12" data-slide-to="1"></li>
    <li data-target="#t12" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t12" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t12" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<br><br>
<button class ="team-13" id ="btn-team" >Decoration Team</button>

<div id="t13" class="carousel slide tc13" data-ride="carousel" style ="margin-top:8px;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#t13" data-slide-to="0" class="active"></li>
    <li data-target="#t13" data-slide-to="1"></li>
    <li data-target="#t13" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#t13" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#t13" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<?php include_once 'footer.php';?>




<script type ="text/javascript">
$(function(){
    $('.team-1').on('click', function(){
        $('#t1').toggleClass('tc1')
   });
});

$(function(){
    $('.team-2').on('click', function(){
        $('#t2').toggleClass('tc2')
   });
});

$(function(){
    $('.team-3').on('click', function(){
        $('#t3').toggleClass('tc3')
   });
});

$(function(){
    $('.team-4').on('click', function(){
        $('#t4').toggleClass('tc4')
   });
});

$(function(){
    $('.team-5').on('click', function(){
        $('#t5').toggleClass('tc5')
   });
});

$(function(){
    $('.team-6').on('click', function(){
        $('#t6').toggleClass('tc6')
   });
});

$(function(){
    $('.team-7').on('click', function(){
        $('#t7').toggleClass('tc7')
   });
});

$(function(){
    $('.team-8').on('click', function(){
        $('#t8').toggleClass('tc8')
   });
});

$(function(){
    $('.team-9').on('click', function(){
        $('#t9').toggleClass('tc9')
   });
});

$(function(){
    $('.team-10').on('click', function(){
        $('#t10').toggleClass('tc10')
   });
});

$(function(){
    $('.team-11').on('click', function(){
        $('#t11').toggleClass('tc11')
   });
});

$(function(){
    $('.team-12').on('click', function(){
        $('#t12').toggleClass('tc12')
   });
});

$(function(){
    $('.team-13').on('click', function(){
        $('#t13').toggleClass('tc13')
   });
});
</script>


</body>
</html>
