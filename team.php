
<?php include_once 'nav.php';?>

<head>
    
    <link rel="stylesheet" href="team_new/team.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- <script src="team_new/team.js"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.css">
    <script type ="text/javascript" src ="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cant89/gianni-accordion-js/dist/gianniAccordion.min.js"></script>
    <style>
 @font-face {
  font-family: batman;
  src: url(batmfa__.ttf) format('truetype');
}
article h1{
    font-family: 'Play', sans-serif;
    font-weight:10;
    font-size:28px;
    text-align:center;
}

.swiper-container {
    width: 100%;
    height:15rem;
    margin-bottom:0.3rem;
}
.swiper-slide {
   /*  background-size: cover;
    background-position: 50%;
    min-height: 80vh; */
    
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.swiper-pagination {
    &-bullet {
        background-color: transparent;
        border: 2px solid #fff;
        border-radius: 50%;
        width: 12px;
        height: 12px;
        opacity: 1;
    }

    &-bullet-active {
        background-color: #fff;
    }
}


.swiper-button {
    &-container {
        /* background-color: rgba(0,0,0,.25); */
    }
    &-prev {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")
    }
    &-next {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
    }
}

/* body {
    display: flex;
    height: 100vh;
    width: 100%;
    font-family: "San Francisco Display Semibold";
} */
.swiper-slide {
    &:before {
        content: "";
        position: relative;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
       /*  background: black; */
        opacity: .4;
    } }
    h2 {
        pointer-events: none;
        opacity: 0;
        color: #ffffff;
        font-size: calc(5vw);
        letter-spacing: -1px;
        transform: translateY(-5%) scale(.8);
        transition: 1s ease;
        text-transform: uppercase;
        text-shadow: 0 5px 5px rgba(0,0,0, .01);
    }
    &-active h2 {
        opacity: 1;
        transform: translateY(0%) scale(1);
        transition: 1s ease;
    }
}



@font-face {
  font-family: "San Francisco Display Semibold";
  font-style: normal;
  font-weight: 400;
  src: url(https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.eot?#iefix) format("embedded-opentype"), url(https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.woff2) format("woff2"), url(https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.woff) format("woff"), url(https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.ttf) format("truetype"), url("fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.svg#San Francisco Display Semibold") format("svg")
}


#loading-wrapper {
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  z-index:999;
  background:lightblue;
}

#loading-text {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  /* color: #999; */
  width: 100px;
  height: 30px;
  margin: -7px 0 0 -45px;
  text-align: center;
  color:#000;
  font-family: 'PT Sans Narrow', sans-serif;
  font-size: 20px;
}

#loading-content {
  display: block;
  position: relative;
  left: 50%;
  top: 50%;
  width: 170px;
  height: 170px;
  margin: -85px 0 0 -85px;
  border: 3px solid #F00;
}

#loading-content:after {
  content: "";
  position: absolute;
  border: 3px solid #0F0;
  left: 15px;
  right: 15px;
  top: 15px;
  bottom: 15px;
}

#loading-content:before {
  content: "";
  position: absolute;
  border: 3px solid #00F;
  left: 5px;
  right: 5px;
  top: 5px;
  bottom: 5px;
}

#loading-content {
  border: 3px solid transparent;
  border-top-color: #4D658D;
  border-bottom-color: #4D658D;
  border-radius: 50%;
  -webkit-animation: loader 2s linear infinite;
  -moz-animation: loader 2s linear infinite;
  -o-animation: loader 2s linear infinite;
  animation: loader 2s linear infinite;
}

#loading-content:before {
  border: 3px solid transparent;
  border-top-color: #D4CC6A;
  border-bottom-color: #D4CC6A;
  border-radius: 50%;
  -webkit-animation: loader 3s linear infinite;
    -moz-animation: loader 2s linear infinite;
  -o-animation: loader 2s linear infinite;
  animation: loader 3s linear infinite;
}

#loading-content:after {
  border: 3px solid transparent;
  border-top-color: #84417C;
  border-bottom-color: #84417C;
  border-radius: 50%;
  -webkit-animation: loader 1.5s linear infinite;
  animation: loader 1.5s linear infinite;
    -moz-animation: loader 2s linear infinite;
  -o-animation: loader 2s linear infinite;
}

@-webkit-keyframes loaders {
  0% {
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes loader {
  0% {
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

#content-wrapper {
  color: #FFF;
  position: fixed;
  left: 0;
  top: 20px;
  width: 100%;
  height: 100%;
}

#header
{
  width: 800px;
  margin: 0 auto;
  text-align: center;
  height: 100px;
  background-color: #666;
}

#content
{
  width: 800px;
  height: 1000px;
  margin: 0 auto;
  text-align: center;
  background-color: #888;
}




</style>
</head>
<body style="background:transparent;"><br><br><br>

<!-- <div id="loading-wrapper">
  <div id="loading-text">LOADING</div>
  <div id="loading-content"></div>
</div> -->

<center><div style="color:#413E66;font-size:45px;font-family:batman, sans-serif;">TEAM</div></center>
<br>
<div class="card carousel"  style="border:0px;background: transparent;color:#413E66;">
  <article>
  <h1 data-accordion-element-trigger >  Core Team</h1>
    <div data-accordion-element-content >
  <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/core-team/tech-sec-onkar-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;">Onkar</h3 ></center>       
            </div>

           <div class="swiper-slide">
            <div style="height:86%;background-color:black;">
            <img src="images/core-team/ex-sec-akshay-min.jpg" style="margin-left:15%;width:60%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;">Akshay</h3 ></center>
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/core-team/ex-sec-d-ganesh-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center> <h3 style="font-family:batman, sans-serif;"  >Ganesh</h3 ></center> 
            </div>
 
             <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/core-team/finn-sec-anurag-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Anurag</h3 ></center>       
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/core-team/gen-sec-jeet-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;">Jeet</h3 ></center>       
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/core-team/Joint_Sec_Chaitanya.png" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Chaitanya</h3 ></center>       
            </div>
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/core-team/joint-tech-sec-rishikesh-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;">Rishikesh</h3 ></center>       
            </div>

    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
</div>
  </article>
  <article>
  <h1 data-accordion-element-trigger> Planning & Development</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/p&d/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;">Aman</h3 ></center>  
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/p&d/p&d-shatanik-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3  style="font-family:batman, sans-serif;">Shatanik</h3 ></center>    
            </div>
  
           <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/p&d/p&d-subashish-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Subashish</h3 ></center>    
            </div>
        
           <!--  <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/p&d/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
        
         
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots --></div>
    </div>
  </article>
  <article>
  <h1 data-accordion-element-trigger> Corporate Affairs</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/corporate-affairs/ca bijay-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3  style="font-family:batman, sans-serif;">Bijay</h3 ></center>        
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/corporate-affairs/ca nidhan-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Nidhan</h3 ></center>       
            </div>

      <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/corporate-affairs/ca sachin-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Sachin</h3 ></center>       
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/corporate-affairs/ca shubham gaurav-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Shubham gaurav</h3 ></center>       
            </div>
        
            
            <!-- <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/corporate-affairs/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots --></div>
    </div>
  </article>
  <article>
  <h1 data-accordion-element-trigger>Public Relations</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/pr-team/kishore pr-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Kishore</h3 ></center>     
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/pr-team/pr divyanush-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Divyanush</h3 ></center>       
            </div>

      <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/pr-team/pr gaurav-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Gaurav</h3 ></center>       
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/pr-team/pr prachi-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Prachi</h3 ></center>       
            </div>
        
            <!-- <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/p&d/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
        
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
    <article>
    <h1 data-accordion-element-trigger>Event Management</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/event-management/dheraj em-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Dheraj</h3 ></center>     
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/event-management/em amarnath-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Amarnath</h3 ></center>       
            </div>

      <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/event-management/em nikhil-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Nikhil</h3 ></center>       
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/event-management/em pavan-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Pavan</h3 ></center>     
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/event-management/em raaman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Raaman</h3 ></center>       
            </div>
           <!--  <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/event-management/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
    <article>
    <h1 data-accordion-element-trigger> Hospitality</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/hospitality/hospi mallikarjun-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Mallikarjun</h3 ></center>      
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/hospitality/hospi sidhharth-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;"  >Sidhharth</h3 ></center>       
            </div>

      <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/hospitality/hospita sanjeev-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Sanjeev</h3 ></center>       
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/hospitality/shashi hospitality-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Shashi</h3 ></center>       
            </div>
        
            <!-- <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/hospitality/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
          
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger> Logistics</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/logistics/logis bhargav-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Bhargav</h3 ></center>      
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/logistics/logis rahul-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3  style="font-family:batman, sans-serif;">Rahul</h3 ></center>       
            </div>

      <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/logistics/logistics mohan-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Mohan</h3 ></center>       
            </div>
        
          
           <!--  <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/logistics/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger> Digital Public Relations</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/digital-pr/dpr amar-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Amar</h3 ></center>      
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/digital-pr/dpr mehendi-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Mehendi</h3 ></center>       
            </div>

      <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/digital-pr/dpr rhea-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;"  >Rhea</h3 ></center>       
            </div>
        
          <!-- 
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/digital-pr/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>Application & Web Developers</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/web-app/anirudh app-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;"  >Anirudh</h3 > </center>     
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/web-app/app naman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center> <h3  style="font-family:batman, sans-serif;">Naman</h3 ></center>        
            </div>

             <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/web-app/web mohit-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center> <h3 style="font-family:batman, sans-serif;" >Mohit</h3 ></center>        
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/web-app/web shubham-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center>  <h3  style="font-family:batman, sans-serif;">Shubham</h3 ></center>        
            </div>
        
           
           <!--  <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/web-app/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>Media Relations</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/media-relations/media nivedita-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center> <h3 style="font-family:batman, sans-serif;" >Nivedita</h3 ></center>       
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/media-relations/media usha-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center>  <h3 style="font-family:batman, sans-serif;" >Usha</h3 ></center>        
            </div>

     <!-- 
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/media-relations/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>Creative Team</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/creative-team/creative sudhanshu-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center> <h3 style="font-family:batman, sans-serif;" >Sudhanshu</h3 ></center>       
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/creative-team/pratik ranjan creative-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center> <h3 style="font-family:batman, sans-serif;" >Pratik Singh</h3 ></center>        
            </div>
            
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/test.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center> <h3 style="font-family:batman, sans-serif;" >Pratik Ranjan</h3 ></center>        
            </div>
    
           <!--  <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/creative-team/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>Robotics</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/robotics/robotic pavan-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center>  <h3 style="font-family:batman, sans-serif;" >Pavan</h3 > </center>      
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/robotics/robotics ketan-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center>  <h3 style="font-family:batman, sans-serif;" >Ketan</h3 ></center>        
            </div>

      <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/robotics/robotics praveen-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center>  <h3 style="font-family:batman, sans-serif;" >Praveen</h3 ></center>        
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/robotics/robotics sahil-min.jpg"style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center>  <h3 style="font-family:batman, sans-serif;" >Sahil</h3 ></center>        
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/robotics/robotics shubham-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center> <h3 style="font-family:batman, sans-serif;" >Shubham</h3 ></center>        
            </div>
            <!-- <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/robotics/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger> Decoration Team</h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/decoration-team/deco manohar-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center>  <h3 style="font-family:batman, sans-serif;" >Manohar</h3 ></center>       
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/decoration-team/deco parwez -min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center>  <h3 style="font-family:batman, sans-serif;" >Parwez</h3 > </center>       
            </div>

    
          <!--   <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/decoration-team/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
    
  </article>
  <article>
  <h1 data-accordion-element-trigger> Workshops </h1>
    <div data-accordion-element-content >
    <div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">

           <div class="swiper-slide">
           <div style="height:86%;background-color:black;">
            <img src="images/workshops/workshop-bhargav-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;">Bhargav</h3 ></center>  
            </div>
        
            <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/workshops/workshop-naman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3  style="font-family:batman, sans-serif;">Naman</h3 ></center>    
            </div>
   
           <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/workshops/workshop-sandeep-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <center><h3 style="font-family:batman, sans-serif;" >Sandeep</h3 ></center>    
            </div>
        
           <!--  <div class="swiper-slide">
             <div style="height:86%;background-color:black;">
            <img src="images/p&d/p&d-aman-min.jpg" style="margin-left:15%;width:65%;height:100%;">
            </div>
            <h3  >Aman</h3 >       
            </div> -->
        
         
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    </div>
    <!-- pagination dots -->
 <!--    <div class="swiper-pagination"></div> -->
    <!-- !pagination dots -->
    </div>
  </article>
</div>


<!-- <br><br> -->
<?php include_once 'footer.php';?>

</body>

</html>
<script>
/**
>>>>>>>

Wanna include in your project?

More documentation on github:

https://github.com/cant89/gianni-accordion-js

>>>>>>>
**/

var myAccordion = new gianniAccordion({
  elements: ".card article",
  trigger: "[data-accordion-element-trigger]",
  content: "[data-accordion-element-content]"
});
myAccordion.on("elementSelected", function (data) {
  console.log("elementOpened", data);
});
</script>

<script>  
$(".carousel").swipe({

swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

  if (direction == 'left') $(this).carousel('next');
  if (direction == 'right') $(this).carousel('prev');

},
allowPageScroll:"vertical"

});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.js"></script>
<script>
var Swipes = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});

</script>  
<script>
jQuery(document).ready(function($) {  

$(window).load(function(){
  $('#loading-wrapper').fadeOut('slow',function(){$(this).remove();
});
});
});
</script>