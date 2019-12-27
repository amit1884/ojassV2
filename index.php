<?php include_once 'nav.php';?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image" sizes="40px">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Jura|Rock+Salt" rel="stylesheet">
  <link rel ="stylesheet" href ="css/animate.css">
    <link rel ="stylesheet" href= "css/style.css">
    <link rel ="stylesheet" href= "css/loader.css">
    <link rel ="stylesheet" href= "css/bootstrap.min.css">
    <script type ="text/javascript" src ="js/jquery.js"></script>
    <script type ="text/javascript" src ="js/index.js"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|
    Alatsi|Alfa+Slab+One|Bitter|Inria+Serif|Lakki+Reddy|
    Lobster|Merriweather|Playfair+Display|Righteous&display=swap" rel="stylesheet"> 
    <title>OJASS'20</title>
<style>
    body{
        background-color: #1f2029;
        overflow-x:hidden;
    }
    html{
        scroll-behavior:smooth;
    }
  .about{
    font-size:15px;
    color:white;
    text-align:center;
  }
  .head{
      color:#fff;
      font-size:50px;
      text-align:center;
      font-weight:200px;
      /* font-family:'Merriweather'; */
      font-family:'Alfa Slab One';
      
  }
 
  .about-btn{
   font-size:40px;
    color:white;
  }
  .main-header-20{
   min-height:90vh;
    
  }
  a{
    text-decoration:none;
    
  }
 .fa-angle-double-down{
    font-size:40px;
    color:white;
  }
  .about-sec{
    display:none;
  }
  </style>
  </head>
  <body>

<!-- 
  <div id="loader-wrapper" style="overflow: hidden">
        <div id="main-loader">
            <div class="ring el-1"></div>
            <div class="ring el-2"></div>
            <div class="ring el-3"></div>
            <div class="ring el-4"></div>
            <div class="ring el-5"></div>
            <div class="ring el-6"></div>
            <div class="ring el-7"></div>
            <div class="ring el-8"></div>
            <div class="ring el-9"></div>
            <div class="ring el-10"></div>
            <div class="ring el-11"></div>
            <div class="ring el-12"></div>
            <div class="ring el-13"></div>
            <div class="ring el-14"></div>
            <div class="ring el-15"></div>
        </div>
        <div id="oasis-text">
            <div id="oasis-title">
                <ul>
                    <li class="oasis-li li-1">O</li>
                    <li class="oasis-li li-2">J</li>
                    <li class="oasis-li li-3">A</li>
                    <li class="oasis-li li-4">S</li>
                    <li class="oasis-li li-5">S</li>
                    <li class="oasis-li li-6">'</li>
                    <li class="oasis-li li-7">2</li>
                    <li class="oasis-li li-8">0</li>
                </ul>
            </div>
            <div id="oasis-slogan">
                INDIC ERUDITION
            </div>
        </div>
        <div id="oasis-date">
            19<sup>th</sup> Jan - 23<sup>rd</sup> Jan
        </div>
    </div> -->


<br><br>
  <div class ="main-header-20">
  <div class ="head">OJASS'20</div>
  <object>
    <center>
        <embed src="ojasslogo.svg">
      </center>
</object>
<!--theme--><br>
<div class ="theme">
  <center>
  <h1 class="ml2">INDIC ERUDITION</h1>
</center>
</div><br><br>
<center>
  <a href ="#about-id">
    <i class="fa fa-angle-double-down animated bounce about-btn"></i></a>
</center>
</div>
<br><br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<style>
  .ml2 {
  font-weight: 200;
  font-size: 40px;
  color:orange;
  font-family:'Inria Serif';
}

.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}
  </style>
  <script>

var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 1,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
    </script>

  </center>
  <div id="abt">
<h2 id  ="about-id" style ="  font-family: 'Play', sans-serif; color:white;"><center><u>ABOUT</u><center></h2>
<p class= "about" >
Ojass is the annual techno-management fest of NIT Jamshedpur. Started in the year 2004, Ojass assembles a wide range of events comprising every genre of engineering, management and even film-making with the aim to foster and boost cogent engineering practices in the nation and stimulate the future generation to dream big. Certified Workshops in diversed fields are conducted every year before the fest to help students understand the different technology trends in the market.
A three-day spectacle, Ojass also organizes many motivating guest lectures under the event cluster "Guru Gyan". Since its inception, Ojass has been receiving immense participation from the student community from all over India with the 2018 edition accounting for over 4000 participants. The prize money for this edition was ₹18 Lac. OJASS 19 is slated to kick-off from 5th April 2019 and the grandeur will prevail for the next two days. Save these dates, for we are all set to make it Bigger and Better, than ever!
</p>

<?php include_once 'footer2.php';?>
</div>
<!-- <script>
  $(document).ready(function() {
window.onload = function () {
$('#loader-wrapper').fadeOut(3500, function(){ $('#loader-wrapper').remove();
 } );
}
});
  </script> -->
</body>
</html>