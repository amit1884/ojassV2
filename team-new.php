<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.css">
    <style>

/* .swiper-container {
    width: 100%;
} */

.swiper-slide {
    background-size: cover;
    background-position: 50%;
    min-height: 80vh;
    
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
        background-color: rgba(0,0,0,.25);
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
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: black;
        opacity: .4;
    }
/*     h2 {
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
} */



@font-face {
  font-family: "San Francisco Display Semibold";
  font-style: normal;
  font-weight: 400;
  src: url(https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.eot?#iefix) format("embedded-opentype"), url(https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.woff2) format("woff2"), url(https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.woff) format("woff"), url(https://applesocial.s3.amazonaws.com/assets/styles/fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.ttf) format("truetype"), url("fonts/sanfrancisco/sanfranciscodisplay-semibold-webfont.svg#San Francisco Display Semibold") format("svg")
}
    </style>
</head>
<body>
<div class="swiper-container">
    
    <!-- swiper slides -->
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(https://source.unsplash.com/random?sig=24);">
            <h2>SIMPLE SWIPER</h2>
        </div>
        
        <div class="swiper-slide" style="background-image: url(https://source.unsplash.com/random?sig=53);"> 
            <h2>HELLO WORLD</h2>
        </div>
        
        <div class="swiper-slide" style="background-image: url(https://source.unsplash.com/random?sig=52);">
            <h2>Random Text 1</h2>
        </div>
        
        <div class="swiper-slide" style="background-image: url(https://source.unsplash.com/random?sig=21);">
        </div>
        
        <div class="swiper-slide" style="background-image: url(https://source.unsplash.com/random?sig=53);">
        </div>
    </div>
    <!-- !swiper slides -->
    
    <!-- next / prev arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- !next / prev arrows -->
    
    <!-- pagination dots -->
    <div class="swiper-pagination"></div>
    <!-- !pagination dots -->
</div>
</body>
</html>

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