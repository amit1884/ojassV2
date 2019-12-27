<?php include_once 'nav.php';?>
<html>
    <head>
        <title>NOTIFICATION|OJASS</title>
        <link rel ="stylesheet" href ="css/accstyle.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src ="js/jquery.js"></script>
</head>
<body>

<br><br><br>
<h1 style ="font-family: 'Play', sans-serif;"><center><u>NOTIFICATIONS</u></center></h1>
<div class ="faq-wrapper">
<div class="accordion js-accordion">
  <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Panel 1</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
    </div>
    </div>
  </div>
  <div class="accordion__item js-accordion-item">
   <div class="accordion-header js-accordion-header">Panel 2</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
    </div>
    </div>
    </div>
    <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Panel 3</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
    </div>
          </div>
  </div>
     <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Panel 4</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
    </div>
       </div>
  </div>
     <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Panel 5</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
    </div>
         </div>
  </div>
     <div class="accordion__item js-accordion-item">
    <div class="accordion-header js-accordion-header">Panel 6</div> 
  <div class="accordion-body js-accordion-body">
    <div class="accordion-body__contents">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi placeat distinctio dolor, amet magnam voluptatibus eos ex vero, sunt veritatis esse. Nostrum voluptatum et repudiandae vel sed, explicabo in?
    </div>
    </div>
  </div>
</div>
</div><br>
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