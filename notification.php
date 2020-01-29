<?php include_once 'nav.php';?>
<html>
    <head>
        <title>NOTIFICATION|OJASS</title>
        <link rel ="stylesheet" href ="css/accstyle.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src ="js/jquery.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
       <script src="event\js\firebase.js"></script>
       
</head>
<body>

<br><br><br><br>
<!-- <h1 style ="font-family: 'Play', sans-serif;"><center><u>NOTIFICATIONS</u></center></h1> -->
<div class="container">
<center> <img src ="svg/notification.svg" width ="300" height ="30"></center><br>
<div class ="faq-wrapper" style='margin:0 3px;'>
<div id="notice-div" class="accordion js-accordion">
  

</div>

</div><br>
</div>
<div class ="foo-ter">
    <?php include_once 'footer.php';?>
</div>
</div>




   <script type ="text/javascript">




  

</script>

<script>
    var PUSH_CHARS = "-0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz";
    function decode(id) {
      id = id.substring(0,8);
      var timestamp = 0;
      for (var i=0; i < id.length; i++) {
        var c = id.charAt(i);
        timestamp = timestamp * 64 + PUSH_CHARS.indexOf(c);
      }
      return timestamp;
    }

    firebase.database().ref("/Notifications").on("value",(snap)=>{
      console.log(snap.val());
      var notice = snap.val();
      var html = "";
      for (key in notice){
        var item = notice[key];
        var ts = new Date(decode(key));
        var time = ts.toLocaleString();
        var temp = "<div class='accordion__item js-accordion-item'>"+
                "<div class='accordion-header js-accordion-header'>"+item.event +  " : " + item.ques+"<br><small>"+time+"</small></div>"+
                "<div class='accordion-body js-accordion-body'>"+
                "<div class='accordion-body__contents'>"+item.ans+
                "</div></div></div>";
      
        temp+=html;
        html=temp;
        temp="";
      }

      console.log(html);

      var noticeDiv = document.getElementById('notice-div');
      noticeDiv.innerHTML = html;

      myFunction();
      
    });

    function myFunction(){
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
      accordion.init({ speed: 300, oneOpen: true });
    }

  </script>

      
</body>
</html>