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
    <link rel="stylesheet" href="scroll_icon/scroll.css">
    <link rel ="stylesheet" href= "css/bootstrap.min.css">
    <script type ="text/javascript" src ="js/jquery.js"></script>
    <script type ="text/javascript" src ="js/index.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="scroll_icon/scroll.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15979/footer-inject.jss"></script>

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
    position:relative;
    font-size:18px;
    color:black;
    margin:5px;
    line-height:2;
    letter-spacing:2;
    text-align:center;
  }
  @font-face {
  font-family: batman;
  src: url(batmfa__.ttf) format('truetype');
}
  .head{
      font-size:55px;
      text-align:center;
      font-weight:200px;
      color:#413e66;
      font-family:"batman", sans-serif;
  }
 
  .about-btn{
   font-size:40px;
    color:#000;
  }
  .main-header-20{
   min-height:90vh;
   background-image:url('images\intro-bg.jpg');
    
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
  .feed-20{
   display:block;
   float:left;
   position:fixed;
   top:550px;
   width:50px;
   height:50px;
   margin-left:10px;
   /* z-index:9999; */
   color:#413e66;
   outline:none;
   /* border:none; */
   background:dodgerblue;
   border-radius:50%;
  }
  .up-20{
    display:block;
   width:40px;
   height:40px;
   padding:2px;
   position:absolute;
   right:0;
   margin-right:10px;
   /* z-index:9999; */
   color:#fff;
   outline:none;
   /* border:none; */
   background:dodgerblue;
   border-radius:20px 20px 0 0;
  }
  </style>
  </head>
  <body>
    
    <!-- <div id ="loader-wrapper">
    <?php //include_once 'loader.php';?>
</div> -->

<!-- <a href ="#"><button class ="feed-20"><i class ="fa fa-angle-double-up" style ="font-size:25px;color:#000;"></i></button></a> -->
<br><br>
  <div class ="main-header-20">
  <div class ="head" style ="display:none">OJASS'20</div>
  <center>
<img src ="images/newlogo.png" class ="logo-20" style ="display:none;">
</center>
<!--theme-->
<div class ="theme" style ="display:none;">
  <center>
  <h1 class="ml2">INDIC ERUDITION</h1>
</center>
</div>
<center>
  <!-- <a href ="#pseudo-div">
    <i class="fa fa-angle-double-down animated bounce about-btn" style ="font-size:40px;display:none"></i></a>
   -->
   <a href ="#"  ><span id="scroll_id" class="arrow">up</span></a>
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


$(document).ready(function(){
    $(".logo-20").fadeIn(800);
    $(".head").fadeIn(2500);
    $(".theme").fadeIn(3000);
    $(".about-btn").fadeIn(4000);
});
setTimeout(function(){
  var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  anime.timeline({loop: false})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 900,
    delay: (el, i) => 70*i
  })

},900);
    </script>
  </center>
  <div id ="pseudo-div" style ="height:90px;">

  <div id="abt" class ="abt-foo">
<h2 id  ="about-id" style ="  font-family:batman, sans-serif;color:#000;"><center><u>ABOUT</u><center></h2>

<p class= "about" >
Ojass is the annual techno-management fest of NIT Jamshedpur. Started in the year 2004, Ojass assembles a wide range of events comprising every genre of engineering, management and even film-making with the aim to foster and boost cogent engineering practices in the nation and stimulate the future generation to dream big. Certified Workshops in diversed fields are conducted every year before the fest to help students understand the different technology trends in the market.
A three-day spectacle, Ojass also organizes many motivating guest lectures under the event cluster "Guru Gyan". Since its inception, Ojass has been receiving immense participation from the student community from all over India with the 2018 edition accounting for over 4000 participants. 
<!-- <a href ="#"><button class ="up-20 animated tada" style ="font-size:20px;"><i class ="fa fa-angle-double-up"></i></button></a> -->
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
<!-- <script>
  jQuery("a[href='#pseudo-div']").click(function() {
     jQuery("html, body").animate({ scrollTop: 0 }, "slow");
     return false;
});
</script> -->
<script>
jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop()> 170)
     {
        jQuery('#scroll_id').fadeIn();
     }
    else
     {
      jQuery('#scroll_id').fadeOut();
     }
 });
  </script>