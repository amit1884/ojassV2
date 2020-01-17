<?php include_once 'nav.php';?>
<html>
	<head>
		<title>DEVELOPER|OJASS'20</title>

<link rel ="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style type="text/css">
		@media(min-width: 992px){
			.member{
				border-radius: 10px;
				width:38%;
				/* margin-left:10%; */
				/* margin-top:5%; */
				text-align: center;
				float:left;
				box-shadow: 0px 4px 3px rgba(0,0,0,0.4),
							0px 8px 13px rgba(0,0,0,0.1),
							0px 18px 23px rgba(0,0,0,0.1);
			}
		}		
		@font-face {
  font-family: batman;
  src: url(batmfa__.ttf) format('truetype');
}

		.member img{
			width:100%;
			border-radius: 10px;
		}
		.member h4{
			color: #fff;
			font-family: 'Titillium Web', sans-serif;
			margin:8px auto;
			font-size:25px;
			text-align:center;
		}
		
			
	}
	.header{
		margin-top: 0;
		text-align: center;
		padding:10px;
		font-size: 8vw;
		
      
	}
	body{
  background-image: linear-gradient(to bottom, #c112eb, #891dc2, #571a97, #2c126b, #080340);
}
</style>
</head>
<body style ="background-color: #1f2029;"><br><br><br><br>
	<h1 class='header' style ="font-family:batman, sans-serif;color:#fff;">
		  <center>Developers</center>
	</h1><br>
	<div class='container'style="overflow-x:hidden;">
		<div class='member' data-aos='fade-left'>
			<img src="images/1.jpg">
			<h4>Amit Raj, CSE</h4>
		</div>
		<div class='member' data-aos='fade-right'>
			<img src="images/2.jpg">
			<h4>Adarsh Gautam, CSE</h4>
		</div>
		<div class='member' data-aos='fade-left'>
			<img src="images/3.jpg">
			<h4>Ankit Choudhary, ME</h4>
		</div>
		<div class='member' data-aos='fade-right'>
			<img src="images/4.jpg">
			<h4>Masood, EE</h4>
		</div>
	</div>
</body>

<!--footer-->
<?php include_once 'footer2.php';?>
  
<script type="text/javascript">
	AOS.init({
  	duration:1200,
  });
</script>
</body>
</html>