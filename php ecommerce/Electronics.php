<!-- db connect -->
<?php include "db.php"?>

 <!-- //// --><?php include "header.php"?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- css link -->
   <link rel="stylesheet" href="./css/home.css">
  </head>
  <body>
<!-- ////////////////////////////////////////////////// -->

      <!-- home slider -->
      <div class="container my-4">
      <div class="row">
        <div class="col-sm-4">
        <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active disabled" aria-current="true">
  CATEGORIES
  </a>
  <a href="Home.php" class="list-group-item list-group-item-action">HOME</a>
  <a href="HomeAppliance.php" class="list-group-item list-group-item-action">HOME APPLIANCE</a>
  <a href="Electronics.php" class="list-group-item list-group-item-action">ELECTRONICS</a>
  <a href="Furniture.php" class="list-group-item list-group-item-action">FURNITURE</a>
  <a href="Swing.php" class="list-group-item list-group-item-action">SWING</a>

</div>

        </div>
        <!-- home silder -->
        <div class="col-sm-8 ">
        <div id="carouselExampleAutoplaying1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/h-1.jpg" class="d-block w-100 h-slider" alt="err_1">
    </div>
    <div class="carousel-item">
      <img src="./img/h-2.jpg" class="d-block w-100  h-slider" alt="err_2">
    </div>
    <div class="carousel-item">
      <img src="./img/h-3.jpg" class="d-block w-100 h-slider" alt="err_3">
    </div>
    <div class="carousel-item">
      <img src="./img/h-4.jpg" class="d-block w-100 h-slider" alt="err_4">
    </div>
    <div class="carousel-item">
    <img src="./img/h-5.jpg" class="d-block w-100 h-slider" alt="err_5">
    </div>
    <div class="carousel-item">
      <img src="./img/h-6.jpg" class="d-block w-100 h-slider" alt="err_6">
    </div>
    <div class="carousel-item">
      <img src="./img/h-7.jpg" class="d-block w-100 h-slider" alt="err_7">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        </div>
      </div>
    </div>
   <!-- /////////////////////////////// -->

 
    <h1>Electronics</h1>

        <!--first add to card -->
        <div class="container my-5">
      <div class="row">
        <!-- card-1 -->
        <div class="col-sm-3">
        <div class="card " style="width: 18rem;">
  <img src="./home-img/ele-1.webp" class="card-img-top" alt="ele1"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">ZEBRONICS THUNDER Bluetooth 5.3</h5>
  
    <p class="card-text">ZEBRONICS THUNDER Bluetooth 5.3 Wireless Headphones with 60H Backup, Gaming Mode, Dual Pairing, ENC, AUX, Micro SD, Voice assistant, Comfortable Earcups, Call Function(Black)</p>
    <h5 class="card-text"> <del> ₹1.599</del>  ₹799</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-2 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ele-2.webp" class="card-img-top" alt="ele2"style="height:275px">
  <div class="card-body">
    <h5 class="card-title">Boult Audio Z40 True Wireless</h5>
    <p class="card-text">Boult Audio Z40 True Wireless in Ear Earbuds with 60H Playtime, Zen™ ENC Mic, Low Latency Gaming, Type-C Fast Charging, Made in India, 10mm Rich Bass Drivers, IPX5, Bluetooth 5.3 Ear Buds TWS (Blue) </p>
    <h5 class="card-text"> <del> ₹4,299</del> ₹1,299</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-3 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ele-3.webp" class="card-img-top" alt="ele3"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Oneplus Bullets Z2 Bluetooth Wireless</h5>
    <p class="card-text">Oneplus Bullets Z2 Bluetooth Wireless in Ear Earphones with Mic, Bombastic Bass - 12.4 mm Drivers, 10 Mins Charge - 20 Hrs Music, 30 Hrs Battery Life, IP55 Dust and Water Resistant (Magico Black)</p>
    <h5 class="card-text"> <del>₹2,299</del> ₹1,799</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-4 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ele-4.jpg" class="card-img-top" alt="err4"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">boAt Nirvana Ion in-Ear Earbuds </h5>
    <p class="card-text">boAt Nirvana Ion in-Ear Earbuds w/ 120 HRS Playback(24hrs/Charge), Crystal Bionic Sound w/Dual EQ Modes, Quad Mics ENx™ Technology, in Ear Detection(Charcoal Black)</p>
    <h5 class="card-text"> <del>₹7,990</del> ₹1,599</h5>
    <a href="#" class="btn btn-outline-secondary  ">Add to Card</a>
  </div>
</div>
  </div>
      </div>
     </div>


     <!-- second card container -->
       <!-- add to card -->
     <div class="container my-5">
      <div class="row">
        <!-- card-5 -->
        <div class="col-sm-3">
        <div class="card " style="width: 18rem;">
  <img src="./home-img/ele-5.webp" class="card-img-top" alt="ele5"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">boAt Wave Sigma 3 w</h5>
  
    <p class="card-text">boAt Wave Sigma 3 w/Turn-by-Turn Navigation, 2.01" HD Display, Bluetooth Calling, Crest+ OS, QR Tray, Watch Face Studio, Coins, Emergency SOS Smart Watch for Men & Women(Active Black)</p>
    <h5 class="card-text"> <del>₹8,599</del> ₹1,599</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-6 -->
  <div class="col-sm-3">  
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ele-6.webp" class="card-img-top" alt="ele2"style="height:280px">
  <div class="card-body">
    <h5 class="card-title">boAt Stone 352 Bluetooth Speaker</h5>
    <p class="card-text">boAt Stone 352 Bluetooth Speaker with 10W RMS Stereo Sound, IPX7 Water Resistance, TWS Feature, Up to 12H Total Playtime, Multi-Compatibility Modes and Type-C Charging(Raging Black)  </p>
    <h5 class="card-text"> <del>24,499</del> ₹12,999</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-7 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ele-7.webp" class="card-img-top " alt="ele7" style="height:380px"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Remote  </h5>
    <p class="card-text">Remote Control Compatible with Amzon Alexa Voice FlRE TV Stick (3rd Generation)</p>
    <h5 class="card-text"> <del> ₹1,999</del>  ₹1,153  </h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-8 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ph-8.webp" class="card-img-top" alt="err4"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Oneplus Open  </h5>
    <p class="card-text">Oneplus Open (Emerald Dusk, 16GB RAM, 512GB Storage)AG Glass Back|  Premium Glass Back T616 Octacore Processor 91% positive ratings from 100K+ customers100K+ recent order from this brand 9+ years on Amazon</p>
    <h5 class="card-text"> <del>1,50,999</del> ₹1,39,999</h5>
    <a href="#" class="btn btn-outline-secondary  ">Add to Card</a>
  </div>
</div>
  </div>
      </div>
     </div>

    <!-- footer -->
<?php include "footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>