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
        overflow-x:hidden;
        color:#fff;
        background:#f5f8fd;
    }
    html{
        scroll-behavior:smooth;
    }
  .about{
    font-size:15px;
    color:black;
    /* margin:10px; */
    text-align:center;
  }
  @font-face {
  font-family: batman;
  src: url(batmfa__.ttf) format('truetype');
}
  .head{
      color:#000;
      font-size:50px;
      text-align:center;
      font-weight:200px;
      /* font-family:'Merriweather'; */
      font-family:"batman", sans-serif;
      
  }
 
  .about-btn{
   font-size:40px;
    color:#000;
  }
  .main-header-20{
   min-height:90vh;
    
  }
  a{
    text-decoration:none;
    
  }
 .fa-angle-double-down{
    font-size:40px;
    color:#000;
  }
  .logo-20{
    width:350px;
    height:350px;
    margin-left:-15px;
  }
  </style>
  </head>
  <body>
    
    <!-- <div id ="loader-wrapper">
    <?php //include_once 'loader.php';?>
</div> -->


<br><br>
  <div class ="main-header-20">
  <div class ="head">OJASS'20</div>
  <center>
<img src ="images/newlogo.png" class ="logo-20">
</center>
<!--theme-->
<div class ="theme">
  <center>
  <h1 class="ml2">INDIC ERUDITION</h1>
</center>
</div>
<center>
  <a href ="#about-id">
    <i class="fa fa-angle-double-down animated bounce about-btn" style="font-size:40px;"></i></a>
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
  <div id="abt" class ="abt-foo">
<h2 id  ="about-id" style ="  font-family:batman, sans-serif;color:#000;"><center><u>ABOUT</u><center></h2>
<p class= "about" >
Ojass is the annual techno-management fest of NIT Jamshedpur. Started in the year 2004, Ojass assembles a wide range of events comprising every genre of engineering, management and even film-making with the aim to foster and boost cogent engineering practices in the nation and stimulate the future generation to dream big. Certified Workshops in diversed fields are conducted every year before the fest to help students understand the different technology trends in the market.
A three-day spectacle, Ojass also organizes many motivating guest lectures under the event cluster "Guru Gyan". Since its inception, Ojass has been receiving immense participation from the student community from all over India with the 2018 edition accounting for over 4000 participants. The prize money for this edition was ₹18 Lac. OJASS 19 is slated to kick-off from 5th April 2019 and the grandeur will prevail for the next two days. Save these dates, for we are all set to make it Bigger and Better, than ever!
</p>

<?php include_once 'footer2.php';?>
</div>
<script>
// jQuery(document).ready(function($) {  

// $(window).load(function(){
// 	$('#loader-wrapper').fadeOut('slow',function(){$(this).remove();$('#abt').removeClass('abt-foo')});
//   $('#abt').remove(this);
// });

// });
  </script>
</body>
</html>