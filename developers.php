<?php include_once 'nav.php';?>
    <!-- <link rel ="stylesheet" href= "style.css"> -->
    <!-- <link rel ="stylesheet" href= "bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
	 integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link rel ="stylesheet" href= "css/bootstrap.min.css">
    <title>Developers | OJASS</title>
<style type="text/css">
		@media(min-width: 992px){
			.member{
				border-radius: 10px;
				width:38%;
				margin-left:10%;
				margin-top:5%;
				text-align: center;
				float:left;
				box-shadow: 0px 4px 3px rgba(0,0,0,0.4),
							0px 8px 13px rgba(0,0,0,0.1),
							0px 18px 23px rgba(0,0,0,0.1);
			}
		}		
		.member img{
			width:100%;
			border-radius: 10px;
		}
		.member h4{
			color: #f1f6ac;
			font-family: 'Titillium Web', sans-serif;
			margin:5px auto;
		}
		
			
	}
		body{
			background-color:black;
		}
	.header{
		margin-top: 0;
		text-align: center;
		padding:10px;
		font-size: 10vw;
		color:white;
		font-family: 'times new roman';
	}
</style>
<body>
	<h1 class='header'>
		  Developers
	</h1>
	<div class='container'>
		<div class='member' data-aos='fade-up'>
			<img src="images/1.jpg">
			<h4>Amit Raj, CSE</h4>
		</div>
		<div class='member' data-aos='fade-up'>
			<img src="images/2.jpg">
			<h4>Adarsh Gautam, CSE</h4>
		</div>
		<div class='member' data-aos='fade-up'>
			<img src="images/3.jpg">
			<h4>Ankit Choudhary, ME</h4>
		</div>
		<div class='member' data-aos='fade-up'>
			<img src="images/4.jpg">
			<h4>Masood Masu, EE</h4>
		</div>
	</div>
</body>
<script type="text/javascript">
	AOS.init({
  	duration:1200,
  });
</script>
<!--footer-->
  <!--footer-->
  <div class="container-fluid text-center footer" style="background:#514e56bd;margin-left:-10%;overflow:hidden;">
    <footer style="padding-top: 10px;">

        <div class="row ">
          <div class="col text-center">
            <ul class="list-inline" >
              <p class="text-light" style="font-size:18px; font-family: 'Jura', sans-serif;">Ojass'19</p>
            </ul>
          </div>
          <div class="col">

          <ul class="list-inline" style="list-style-type:none">
            <li><i class="fa fa-map-marker text-light" style="font-size: 16px;color:red;"><a style="font-family: 'Jura', sans-serif;color:#fff;"> NIT Jamshedpur</a></i></li>
            <li><a class="fa fa-envelope text-light" style="font-size: 16px;color:red;"><a class="text-light" style="font-family: 'Jura', sans-serif;color:#fff;" href="mailto:ojass@nitjsr.ac.in"> ojass@nitjsr.ac.in</a> </i></li>
          </ul>

          </div>
        </div>

      <center>
            <a href="https://www.facebook.com/Ojassnitjamshedpur/" ><i class="fa fa-facebook-official" style="font-size: 36px; color:white !important" target="_blank"></i></a>
            <a href="https://www.youtube.com/user/ojassnitjsr" class="fa fa-youtube-square" style="font-size: 36px; margin-left: 12px;color:white !important" target="_blank"></a>
            <a href="https://www.instagram.com/ojass_techfest/" class="fa fa-instagram" style="font-size: 36px; margin-left: 12px;color:white !important" target="_blank"></a>
            
            <p style="font-size: 14px; margin: 0; padding: 10px 0;"> <a class="text-light" style="text-decoration:none; color:white" href="Developers.php" target= "_blank">© Ojass Web Team</a> </p>

        </center>
    </footer>
    </div>
</body>
</html>