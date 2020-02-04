<!-- <div class="loader"></div> -->
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
      <!-- <link rel="stylesheet" href="scroll_icon/scroll.css"> -->
      <link rel ="stylesheet" href= "css/bootstrap.min.css">
      <script type ="text/javascript" src ="js/jquery.js"></script>
      <script type ="text/javascript" src ="js/index.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="scroll_icon/scroll.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15979/footer-inject.jss"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <!--fonts-->
    
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|
    Alatsi|Alfa+Slab+One|Bitter|Inria+Serif|Lakki+Reddy|
    Lobster|Merriweather|Playfair+Display|Righteous&display=swap" rel="stylesheet"> 
    <title>OJASS'20</title>
    <style>
     html{
        scroll-behavior:smooth;
    }
    body{
      overflow-x:hidden;

    }
    .abt-foo{
    display:none;
  }
  .head-img{
      margin-top:-7%;
      height:100vh;
      width:100vw;
  }
 
  .about{
    position:relative;
    font-size:18px;
    /* color:#fff; */
    color:#000;
    margin:5px;
    line-height:1.3;
    letter-spacing:1.5;
    text-align:center;
  }
  .fa-angle-double-down{
    font-size:40px;
    color:#000;
  }
  .abt-jumbo{
    background:#f5f8fd;
  }
  .downarr{
      position:fixed:
    top:50vh;
  }
  @font-face {
  font-family: batman;
  src: url(batmfa__.ttf) format('truetype');
}

canvas {
	display: block;
	vertical-align: bottom;
}

.particles {
	position: absolute;
  top:0;
	background-color: transparent;
	width: 100%;
	height: 100%;
	z-index: 5;
}
.about-btn{
  position:absolute;
  top:86vh;
  z-index:10;
  left:47%;
}


  </style>
  <body>
  <div id="particles" class="particles"></div>

  <div id= "loader-wrapper">
  <img src ="svg/copper-loader.gif">
  </div>
 <img src ="images\ojasslightback.jpeg" class ="head-img"> 

 <center>
  <a href ="#pseudo-div" class= "text-center">
  <i class="fa fa-angle-double-down animated bounce about-btn" style ="font-size:40px;"></i></a>
</center>
  <div id ="pseudo-div" style ="height:90px;"></div>

<div id="abt" class ="abt-foo">
<div class ="abt-jumbo">
<h2 id  ="about-id" style ="  font-family:batman, sans-serif;color:#000;"><center><u>ABOUT</u><center></h2>

<p class= "about" >
Ojass is the annual techno-management fest of NIT Jamshedpur. Started in the year 2004, Ojass assembles a wide range of events comprising every genre of engineering, management and even film-making with the aim to foster and boost cogent engineering practices in the nation and stimulate the future generation to dream big. Certified Workshops in diversed fields are conducted every year before the fest to help students understand the different technology trends in the market.
A three-day spectacle, Ojass also organizes many motivating guest lectures under the event cluster "Guru Gyan". Since its inception, Ojass has been receiving immense participation from the student community from all over India with the 2018 edition accounting for over 4000 participants. 
</p>
</div>
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
  new WOW().init();
  </script>

<script>

particlesJS('particles', {
	'particles': {
		'number': {
			'value': 100
		},
		'color': {
			'value': '#fff'
		},
		'opacity': {
			'value': 0.8
		},
		'size': {
			'value': 4
		},
		'line_linked': {
			'color': '#fff'
		}
	}
});
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