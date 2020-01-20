<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/logo.png" type="image" sizes="40px">
	<link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet"> 
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src ="js/jquery.js"></script>
    <style>
    	.nav-colored {
			background-color:#7ea2e2;
			/* background-image: linear-gradient(to bottom, #0b060c, #1a0b21, #220f36, #25124e, #1e1768); */
    	 	animation-name: fadeIn;
    	 	animation-duration: 0.4s;
    	 }

		.nav-transparent { 
			background-color:transparent;
			animation-name: fadeOut;
    	 	animation-duration: 0.3s;
		}
	@keyframes fadeIn {
   		0% {opacity: 0;}
   		100% {opacity: 1;}
	} 
	@keyframes fadeOut {
   		0% {opacity: 1;}
   		100% {opacity: 0;}
	} 
    </style>
    <!-- <title>Document</title> -->
</head>
<link rel ="stylesheet" href ="css/navstyle.css">
<body style ="overflow-x:hidden; margin:0!important;">
    <header class="cd-header" style ="margin-bottom:10px;">
		<div class="header-wrapper">
		<a href ="index.php"><img src ="images/newlogo.png" width ="70" height ="70" align="left" style ="cursor:pointer;margin-top:10px;"></a>
			<div class="nav-but-wrap">
				<div class="menu-icon hover-target" id="menu-button">
					<span class="menu-icon__line menu-icon__line-left"></span>
					<span class="menu-icon__line"></span>
					<span class="menu-icon__line menu-icon__line-right"></span>
				</div>					
			</div>					
		</div>				
	</header>

	<div class="nav">
		<div class="nav__content">
			<ul class="nav__list">
				<li class="nav__list-item active-nav"><a href="index.php"target="_blank" class="hover-target" style ="text-decoration:none;">HOME</a></li>
				<li class="nav__list-item"><a href="event.php"target="_blank" class="hover-target" style ="text-decoration:none;">EVENTS</a></li>
				<li class="nav__list-item"><a href="notification.php" target="_blank"class="hover-target" style ="text-decoration:none;">NOTIFICATION</a></li>
                <li class="nav__list-item"><a href="faq.php"target="_blank" class="hover-target" style ="text-decoration:none;">FAQs</a></li>
                <li class="nav__list-item"><a href="sponsor.php"target="_blank" class="hover-target" style ="text-decoration:none;">SPONSORS</a></li>
                <li class="nav__list-item"><a href="team.php"target="_blank" class="hover-target" style ="text-decoration:none;">TEAM</a></li>
				<li class="nav__list-item"><a href="contact.php" target="_blank"class="hover-target" style ="text-decoration:none;">CONTACT US</a></li>
			</ul>
		</div>
	</div>		

	
	<div class='cursor' id="cursor"></div>
	<div class='cursor2' id="cursor2"></div>
	<div class='cursor3' id="cursor3"></div>

<script>
	$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {
    $('.cd-header').addClass('nav-colored');
    $('.cd-header').removeClass('nav-transparent');
    }
    else{
    	 $('.cd-header').removeClass('nav-colored');
    $('.cd-header').addClass('nav-transparent');
    }
});


	$(function(){
        $('.nav__list .nav__list-item a').each(function(){
            if ($(this).prop('href') == window.location.href) {
            	$('.nav__list .nav__list-item').removeClass('active-nav');
                $(this).parents('li').addClass('active-nav');
            }
        });
    });
 


(function($) { "use strict";
		
	//Page cursors

    document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
        t.style.left = n.clientX + "px", 
		t.style.top = n.clientY + "px", 
		e.style.left = n.clientX + "px", 
		e.style.top = n.clientY + "px", 
		i.style.left = n.clientX + "px", 
		i.style.top = n.clientY + "px"
    });
    var t = document.getElementById("cursor"),
        e = document.getElementById("cursor2"),
        i = document.getElementById("cursor3");
    function n(t) {
        e.classList.add("hover"), i.classList.add("hover")
    }
    function s(t) {
        e.classList.remove("hover"), i.classList.remove("hover")
    }
    s();
    for (var r = document.querySelectorAll(".hover-target"), a = r.length - 1; a >= 0; a--) {
        o(r[a])
    }
    function o(t) {
        t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
    }
	
	//Navigation

	var app = function () {
		var body = undefined;
		var menu = undefined;
		var menuItems = undefined;
		var init = function init() {
			body = document.querySelector('body');
			menu = document.querySelector('.menu-icon');
			menuItems = document.querySelectorAll('.nav__list-item');
			applyListeners();
		};
		var applyListeners = function applyListeners() {
			menu.addEventListener('click', function () {
				return toggleClass(body, 'nav-active');
			});
		};
		var toggleClass = function toggleClass(element, stringClass) {
			if (element.classList.contains(stringClass)) element.classList.remove(stringClass);else element.classList.add(stringClass);
		};
		init();
	}();

	
	//Switch light/dark
	
   $(document).ready(function() {           
		$("a")
			.each(function(i) {
			if (i != 0) {
			  $("#hover-audio")
				.clone()
				.attr("id", "hover-audio" + i)
				.appendTo($(this).parent());
			}
			$(this).data("beeper", i);
		}).mouseenter(function() {
			$("#hover-audio" + $(this).data("beeper"))[0].play();
			});
			$("#hover-audio").attr("id", "hover-audio");  

			document.getElementById("menu-button").addEventListener('click', function(e) {
			document.getElementById("link").play();
	  	});    
			document.getElementById("switch").addEventListener('click', function(e) {
			document.getElementById("link").play();
	  	});    
			document.getElementById("portfolio").addEventListener('click', function(e) {
			document.getElementById("link").play();
	  	});      
     });        
              
})(jQuery); 

</script>
</body>
</html>