<?php include_once 'nav.php';?>
<html>
    <head>
        <title>FAQ|OJASS</title>
        <link rel ="stylesheet" href ="css/accstyle.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src ="js/jquery.js"></script>
</head>
<body style ="background-color: #1f2029;">

<br><br><br>
<h1 style ="font-family: 'Play', sans-serif;"><center><u>FAQs</u></center></h1>
<div class ="faq-wrapper">
<div class="accordion js-accordion" style ="margin-left:2px;margin-right:2px;">
  <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">What is OJASS ?</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    Ojass,the annual Techno-Management fest of NIT Jamshedpur is one of the East India's biggest college festivals. It will span for 3 days: April 5-7,2019. The spirit of Ojass lies in encouraging sound practices,making precision engineering a way of life,effectively bringing about a paradigm shift from classroom to path-breaking innovation.
    </div>
    </div>
  </div>
  <div class="accordion__item js-accordion-item">
   <div class="accordion-header js-accordion-header">Is there any special arrangements during night for girls participating in ojass?</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    Yes! Girls would be provided a special mirror environment after the sunset inside the girls hostel. All the arrangement of mattresses would be provided inside the hostel itself.
    </div>
    </div>
    </div>
    <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">What are the type of events in ojass?</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    Ojass is a plethora of many events. It includes branch events, gaming events, formal events,fun events etc.
    </div>
          </div>
  </div>
     <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Are there any online events?</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    Yes,there will be online events. For details of the online events stay updated to our facebook page
    </div>
       </div>
  </div>
     <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">How can we participate?</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    Get registered through our android app or you can get registered in our campus at the time of fest.
    </div>
         </div>
  </div>
     <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">What about the accommondation?</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    Accommodation will be provided for the students in the college hostels.
    </div>
    </div>
  </div>
  <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">How far is the college from railway station?</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    From Tatanagar junction,college is located at a distance of 6 k.m. From Adityapur Railway Station,it is located at a distance of 1.6 k.m.
    </div>
         </div>
  </div>
  <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Will participation certificate be given for the events?</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    Yes,we do give participation certificate for the registered candidates.
    </div>
         </div>
  </div>
  <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Still have doubts?
</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
    Feel free to drop us a message at our Facebook page or contact Akash Gupta (7488650379). We will get back to you soon.
    </div>
         </div>
  </div>
</div>
</div>
<div class ="foo-ter">
    <?php include_once 'footer2.php';?>
</div>
</div>




   <script type ="text/javascript">

var accordion = (function(){
  
  var $accordion = $('.js-accordion');
  var $accordion_header = $accordion.find('.js-accordion-header');
  var $accordion_item = $('.js-accordion-item');
 
  // default settings 
  var settings = {
    // animation speed
    speed: 400,
    
    // close all other accordion items if true
    oneOpen: false
  };
    
  return {
    // pass configurable object literal
    init: function($settings) {
      $accordion_header.on('click', function() {
        accordion.toggle($(this));
      });
      
      $.extend(settings, $settings); 
      
      // ensure only one accordion is active if oneOpen is true
      if(settings.oneOpen && $('.js-accordion-item.active').length > 1) {
        $('.js-accordion-item.active:not(:first)').removeClass('active');
      }
      
      // reveal the active accordion bodies
      $('.js-accordion-item.active').find('> .js-accordion-body').show();
    },
    toggle: function($this) {
            
      if(settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
        $this.closest('.js-accordion')
               .find('> .js-accordion-item') 
               .removeClass('active')
               .find('.js-accordion-body')
               .slideUp()
      }
      
      // show/hide the clicked accordion item
      $this.closest('.js-accordion-item').toggleClass('active');
      $this.next().stop().slideToggle(settings.speed);
    }
  }
})();

$(document).ready(function(){
  accordion.init({ speed: 300, oneOpen: true });
});


       </script>
</body>
</html>