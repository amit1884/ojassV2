<?php 
include_once 'nav.php';
?>
<body>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src ="js.jquery,js"></script>
<link rel = "stylesheet" href = "css/style_sponsors.css">
<style>
  .sponsor-card{
    width:100vw;
  }
  .white-panel {
    position:static!important; 
    width:60%!important; 
    margin:7px auto;
    height:250px;
/*position: absolute;*/
background: white;
box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
padding: 10px;
}
.sponsor-card{
  width: 100%;
}
  .imgS img {
        height: -webkit-fill-available;
  -webkit-filter: grayscale(90%); /* Safari 6.0 - 9.0 */
  filter: grayscale(90%);
  width:100%;
}
.imgS img:hover{
-webkit-filter: grayscale(0%);
filter: grayscale(0%);
}
</style>

<br><br><br><br>
<center> <img src ="svg/sponsors.svg" width ="300" height ="40"></center><br>
<br><br> 

      <div class='sponsor-card'>
        <div class="imgS white-panel"  data-aos='fade-left'>
            <img src="images/sponsors/oyo.png" alt="images">
        </div>
      </div>
    
        <br><br> 

       <div class='sponsor-card'>
         <div class="imgS white-panel"  data-aos='flip-left'>
            <img src="images/sponsors/Picture2.png" alt="images">
         </div>
           </div>
       
       <br><br>

       <div class='sponsor-card'>
         <div class="imgS white-panel"  data-aos='zoom-in'>
            <img src="images/sponsors/Picture3.png" alt="images">
         </div>
      </div>
       <br><br>
       <div class='sponsor-card'>
         <div class="imgS white-panel"  data-aos='flip-right'>
            <img src="images/sponsors/Picture4.png" alt="images">
         </div>
      </div>
       <br><br>
       <div class='sponsor-card'>
         <div class="imgS white-panel"  data-aos='fade-down'>
            <img src="images/sponsors/Picture5.png" alt="images">
         </div>
      </div>
       <br><br>
       <div class='sponsor-card'>
         <div class="imgS white-panel"  data-aos='slide-right'>
            <img src="images/sponsors/Picture6.png" alt="images">
         </div>
      </div>
       <br><br>
       <div class='sponsor-card'  data-aos='zoom-in-right'>
         <div class="imgS white-panel">
            <img src="images/sponsors/Picture14.png" alt="images">
         </div>
      </div>

       <br>
       
<?php include_once 'footer2.php';?>

  
<script type="text/javascript">
	AOS.init({
  	duration:1200,
  });
</script>