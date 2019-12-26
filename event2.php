<?php include_once 'nav.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events Page</title>
    <link rel="stylesheet" href="css/swiper.min.css">
    <style>
        body {
    background: #000;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color:#000;
    margin: 0;
    padding: 0;
  }

    h1 {
        color: white;
        text-align: center;
        padding-top: 20px;
        font-size: 2.7rem;
        font-weight: bolder;
    }

  .swiper-container {
    width: 100%;
    padding-top: 40px;
    padding-bottom: 100px;
  }
  .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 270px;
    height: 300px;
    background: rgb(207, 193, 29);
    border-radius: 50px;
  }

  .swiper-slide .imgBx {
      width: 100%;
      height: 300px;
      overflow: hidden;
    }

    .swiper-slide .imgBx img {
        width: 100%;
    }

    .swiper-slide .details {
        box-sizing: border-box;
        padding: 20px;
        background-color: white;
        border-radius: 50px;
        margin-top: 10px;
    }

    .swiper-slide .details h3 {
        margin: 0;
        padding: 0!important;
        font-size: 26px;
        text-align: center;
        /*line-height: 20px;*/
    }

    .swiper-slide .details h3 span {
        font-size: 20px;
        color: #f44336;
    }

    .swiper-pagination   {
        transform: translateY(35px);
    }
    
    </style>
</head>
<body>

    <h1>Major Events</h1>
    <!-- Swiper -->
        <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div class="imgBx">
                          <img src="Events Page/akriti.svg" alt="">
                      </div>
                      <div class="details">
                          <h3>Aakriti<br></h3>
                      </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/armageddon.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Armageddon<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/arthashastra.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Arthashastra<br></h3>
                        </div>
                   </div>
                   <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/avartan.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Avartan<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/circuit_house.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Circuit House<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/deus_x_machina.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Dues-X-Machina<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/exposicion.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Exposicion<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/live_cs.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Live CS<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/neodrishti.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Neo Drishti<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/no_ground_zone.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>No Ground Zone<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/nscet.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>NSCET<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/paraphernalia.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Paraphernalia<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/prayas.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Prayas<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/produs.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Produs<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/rise_of_machines.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Rise of Machines<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/silicon_valley.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Silicon Valley<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/vishwacodegenesis.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>Vishwa Code Genesis<br></h3>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="imgBx">
                            <img src="Events Page/school_events.svg" alt="">
                        </div>
                        <div class="details">
                            <h3>School Events<br></h3>
                        </div>
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
        </div>
            
    <script type="text/javascript" src="js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 40,
            stretch: 0,
            depth: 250,
            modifier: 5,
            slideShadows : true,
          },
          pagination: {
            el: '.swiper-pagination',
          },
        });
    </script>
    <?php include_once 'footer.php';?>
</body>
</html>