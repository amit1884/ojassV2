<?php include_once 'nav.php';?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://use.fontawesome.com/1d6c808dd3.js"></script>
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
        /* color:#fff; */
        color:#fff;
        background-color:#94b5f1;
        /* background-image: linear-gradient(to bottom, #c112eb, #891dc2, #571a97, #2c126b, #080340); */
    }
    html{
        scroll-behavior:smooth;
    }
    .arrow:after{
      margin-left: -11px;
    }
  .about{
    position:relative;
    font-size:18px;
    /* color:#fff; */
    color:#000;
    margin:5px;
    line-height:1.5;
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
      /* color:#fff; */
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
    width:92%;
    height:320px;
    margin-left:2%;
  }

  #scroll_id {
    background: rgb(142, 193, 218);
  }
  #scroll_btn
  {
    position:fixed;
    float:right;
  }
  </style>
  </head>
  <body>
  <!-- <div id ="loader-wrapper">
<img src="svg\copper-loader.gif">
</div> -->
<br><br>
  <div class ="main-header-20">
  <div class ="head" style ="margin-left:15%;">
  <div class =" head-wow  wow " data-wow-duration="2s" data-wow-delay="1s"style ="font-size:45px;float:left">O</div>
        <div class =" head-wow  wow " data-wow-duration="2s" data-wow-delay="1s"style ="font-size:45px;float:left">J</div>
        <div class =" head-wow  wow " data-wow-duration="2s" data-wow-delay="1s"style ="font-size:45px;float:left">A</div>
        <div class =" head-wow  wow " data-wow-duration="2s" data-wow-delay="1s"style ="font-size:45px;float:left">S</div>
        <div class =" head-wow  wow " data-wow-duration="2s" data-wow-delay="1s"style ="font-size:45px;float:left">S</div>
        <div class =" head-wow  wow " data-wow-duration="3s" data-wow-delay="1s"style ="font-size:45px;float:left">'</div>
        <div class =" head-wow  wow " data-wow-duration="3s" data-wow-delay="1s"style ="font-size:45px;float:left">2</div>
        <div class =" head-wow  wow " data-wow-duration="3s" data-wow-delay="1s"style ="font-size:45px;float:left">0</div>
  </div>
  <div class ="image wow" data-wow-duration="1s">
  <center>
<img src ="images/newlogo.png" class ="logo-20">
</center>
</div>
<!--timer-->
<?php include_once 'timer.php';?>
<!--theme-->
<div class ="theme wow fadeIn" data-wow-delay="3s">
  <center>
  <h1 class="ml2">INDIC ERUDITION</h1>
</center>
</div>
<center>
  <div class ="downarr wow zoomIn"data-wow-delay="4s">
  <a href ="#pseudo-div">
    <i class="fa fa-angle-double-down animated bounce about-btn" style ="font-size:40px;"></i></a>
</div>
</center>
<br><br>
  <!--  <a href ="#"  ><span id="scroll_id" class="arrow">up</span></a> -->
  <!-- <a href="#" id="scroll_btn"><i style ="font-size:50px;z-index:100;" class="fa fa-angle-double-up"></i></a> -->

</div>
<br>
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

      setTimeout(() => {
      var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  anime.timeline({loop: false})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 2000,
    delay: (el, i) => 70*i
  })
    }, 3000);
    })
   
 
    </script>
  </center>
  <div id ="pseudo-div" style ="height:90px;"></div>

  <div id="abt" class ="abt-foo">
<h2 id  ="about-id" style ="  font-family:batman, sans-serif;color:#000;"><center><u>ABOUT</u><center></h2>

<p class= "about" >
Ojass is the annual techno-management fest of NIT Jamshedpur. Started in the year 2004, Ojass assembles a wide range of events comprising every genre of engineering, management and even film-making with the aim to foster and boost cogent engineering practices in the nation and stimulate the future generation to dream big. Certified Workshops in diversed fields are conducted every year before the fest to help students understand the different technology trends in the market.
A three-day spectacle, Ojass also organizes many motivating guest lectures under the event cluster "Guru Gyan". Since its inception, Ojass has been receiving immense participation from the student community from all over India with the 2018 edition accounting for over 4000 participants. 
</p>

<?php include_once 'footer.php';?>
</div>

<script src ="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
    <script>
   $(document).ready(function(){
  $('.image').addClass('zoomIn');
  $('.head-wow').addClass('rollIn');
 
});
    </script>
<script>
jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop()> 100)
     {
        jQuery('#scroll_btn').fadeIn();
     }
    else
     {
      jQuery('#scroll_btn').fadeOut();
     }
 });
  </script>
  <script>
    new WOW().init();
    </script>


<script>
jQuery(document).ready(function($) {  

$(window).load(function(){
	$('#loader-wrapper').fadeOut('slow',function(){$(this).remove();
  $('#abt').removeClass('abt-foo')
  });
  $('#abt').remove(this);
});

});
  </script>
  
</body>
</html>
