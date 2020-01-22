var tlStars = new TimelineMax({repeat:-1, yoyo:true, paused:false, ease: Linear.easeNone});
      var tlClouds = new TimelineMax({repeat:-1, yoyo:true, paused:false});
      
      var tlMoon = new TimelineMax({repeat:-1, paused:false});

      tlStars.staggerTo(".cls-4, .cls-5", .5, {scale: .8, opacity: .5, transformOrigin: "50% 50%"}, .2);
      tlClouds.to("#clouds", 6, {x: 20, transformOrigin: "50% 50%", ease: Power4.easeInOut}, 0);
      
      

    tlMoon.set("#moon", {opacity:1});
    
    tlMoon.set("#earth", {zIndex: 2});
    tlMoon.set("#moon-shadow, #moon-shadow2", {x:100, y:-50});


      tlMoon.to("#moon, #moon2", 4, {bezier:{curviness: 1, values:[{x:0, y:0},{x: -300, y: 425},{x: -700, y: 400},{x: -200, y: 0}, {x:0, y:0}]}, transformOrigin: "50% 50%", ease: Linear.easeNone}, 0);
      tlMoon.to("#moon, #moon2", 1, {scale: 1.5, repeat: 1, yoyo:true,  transformOrigin: "50% 50%", ease: Power2.easeOut}, 0);
      tlMoon.to("#moon-shadow, #moon-shadow2", 2.5, {x: -300, y: 100, repeat: 0, yoyo:true,  transformOrigin: "50% 50%", ease: Linear.easeNone}, 1.5);
      tlMoon.to("#moon, #moon2", 1, {scale: .25, repeat: 1, yoyo:true,  transformOrigin: "50% 50%", ease: Power2.easeOut}, 2);
      tlMoon.set("#moon", {opacity:0}, 2);

