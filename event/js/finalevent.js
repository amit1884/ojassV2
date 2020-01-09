$(document).ready(function () {
    $('.menu-icon').click(function () {
        if ($('.navigator').css("left") == "-300px") {
            $('.navigator').animate({left: '0px'}, 350);
            $('.menu-text').empty().text("Close");
        } 
        else  {
            $('.navigator').animate({left: '-300px'}, 350); 
            $('.menu-text').empty().text("Menu");
        } 
    });
    $(document).click(function(){
      if($('.navigator').css('left') == '0px' && $('.menu-icon').hasClass('on') ) {
        $('.navigator').animate({left: '-300px'}, 350);
        $('.menu-text').empty().text("Menu");
        $('.menu-icon').toggleClass("on");
      }
    })
    $('.menu-icon').click(function () {
      $(this).toggleClass("on"); 
    }); // animation = -> x
  });