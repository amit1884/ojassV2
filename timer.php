<style>
 #days,#hours,#minutes,#seconds{
    font-family:"batman", sans-serif;
    font-size:25px;
    color:#000;
  }
</style>
</head>
<body>
<div class ="container-fluid">
<div class ="row text-center timer">
<div class ="col-3 wow" data-wow-delay="2s"><h5 style ="font-family:batman, sans-serif;color:#000">Days</h5><p id="days"></p></div>
<div class ="col-3 wow" data-wow-delay="2s"><h5 style ="font-family:batman, sans-serif;color:#000">Hrs</h5><p id="hours"></p></div>
<div class ="col-3 wow" data-wow-delay="2s"><h5 style ="font-family:batman, sans-serif;color:#000">Min</h5><p id="minutes"></p></div>
<div class ="col-3 wow" data-wow-delay="2s"><h5 style ="font-family:batman, sans-serif;color:#000">Sec</h5><p id="seconds"></p></div>
</div>
</div>
<!-- <p id="demo" class ="timer text-center wow"data-wow-delay="2s"></p> -->

<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 28, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("days").innerHTML = days; 
  document.getElementById("hours").innerHTML = hours; 
  document.getElementById("minutes").innerHTML = minutes; 
  document.getElementById("seconds").innerHTML = seconds; 
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    // document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 500);
</script>
<script>
$(document).ready(()=>{
$('.col-3').addClass('zoomIn');
});
</script>