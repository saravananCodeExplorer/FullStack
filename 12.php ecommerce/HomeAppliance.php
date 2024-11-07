<!-- db connect -->
<?php include "db.php"?>

 <!-- //// -->
<?php include "header.php"?>
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
    <h1>Home appliance!</h1>
          <!--first add to card -->
     <div class="container my-5">
      <div class="row">
        <!-- card-1 -->
        <div class="col-sm-3">
        <div class="card " style="width: 18rem;">
  <img src="./home-img/fridge-1.jpg" class="card-img-top" alt="err1"style="height:500px">
  <div class="card-body">
    <h5 class="card-title">Whirlpool</h5>
  
    <p class="card-text">Whirlpool 184 L 2 Star Direct-Cool Single Door Refrigerator (205 WDE CLS 2S SAPPHIRE BLUE-Z, Blue,2023 Model)</p>
    <h5 class="card-text"> <del>15,400</del> Rs.12,590 </h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-2 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/fridge-2.jpg" class="card-img-top" alt="err2"style="height:500px">
  <div class="card-body">
    <h5 class="card-title">Samsung 183 L</h5>
    <p class="card-text">Samsung 183 L, 3 Star, Digital Inverter, Direct-Cool Single Door Refrigerator (RR20C1723S8/HL, Silver, Elegant Inox, 2024 Model)</p>
    <h5 class="card-text"> <del>18,999</del> ₹14,990 </h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-3 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/fridge-3.jpg" class="card-img-top" alt="err3"style="height:450px">
  <div class="card-body">
    <h5 class="card-title">Whirlpool 184 L </h5>
    <p class="card-text">Whirlpool 184 L 4 Star Inverter Direct-Cool Single Door Refrigerator (205 WDE ROY 4SInv SAPPHIRE FLOWER RAIN-Z, Blue, Base Stand with Drawer, 2023 Model)</p>
    <h5 class="card-text"> <del>24,999</del> ₹19,999</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-4 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/fridge-4.webp" class="card-img-top" alt="err4"style="height:500px">
  <div class="card-body">
    <h5 class="card-title">Samsung 183 L </h5>
    <p class="card-text">Samsung 183 L, 4 Star, Digital Inverter, Direct-Cool Single Door Refrigerator (RR20C1724CU/HL, Camellia Blue, 2024 Model)</p>
    <h5 class="card-text"> <del>21,999</del> ₹15,890</h5>
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
  <img src="./home-img/fridge-5.webp" class="card-img-top" alt="err5"style="height:500px">
  <div class="card-body">
    <h5 class="card-title">Haier 328 L</h5>
  
    <p class="card-text">Haier 328 L, 3 Star, Convertible 10-in-1 Triple Inverter & Fan Motor Technology, Frost Free Double Door Refrigerator (HEF-333TS-P, Inox Steel, 2024 Model)</p>
    <h5 class="card-text"> <del> ₹47,990</del> ₹32,990</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-6 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/fridge-6.webp" class="card-img-top" alt="err2"style="height:500px">
  <div class="card-body">
    <h5 class="card-title">Samsung 223 L</h5>
    <p class="card-text">Samsung 223 L, 3 Star, Digital Inverter, Direct-Cool Single Door Refrigerator (RR24C2Z23CR/NL, Red, Camellia Purple, Base Stand Drawer, 2024 Model)  </p>
    <h5 class="card-text"> <del>₹24,999</del> ₹19,190</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-7 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/fridge-7.webp" class="card-img-top " alt="err7" style="height:520px"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Midea 591L  </h5>
    <p class="card-text">Midea 591L Side By Side Refrigerator with Inverter (MRF5920WDSSF, Silver, SS Finish, Water Dispenser)</p>
    <h5 class="card-text"> <del>64,999</del>  ₹49,990</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-8 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/fridge-8.webp" class="card-img-top" alt="err4"style="height:500px">
  <div class="card-body">
    <h5 class="card-title">Haier 602L</h5>
    <p class="card-text">Haier 602L, 3-Star, Frost Free, 100% Convertible Fridge Space, Expert Inverter 2-Door Side by Side Refrigerator, (HRS-682KS, Black Steel)</p>
    <h5 class="card-text"> <del>: ₹1,03,990</del>  ₹62,990</h5>
    <a href="#" class="btn btn-outline-secondary  ">Add to Card</a>
  </div>
</div>
  </div>
      </div>
     </div>

<!-- ////////////////////mixer -->
     <!-- add to card   mixer-->
     <div class="container my-5">
      <div class="row">
        <!-- card-1 -->
        <div class="col-sm-3">
        <div class="card " style="width: 18rem;">
  <img src="./home-img/mixe-1.jpg" class="card-img-top" alt="mix1"style="height:400px">
  <div class="card-body">
    <h5 class="card-title">Vidiem Eva Elite Mixer Grinder </h5>
  
    <p class="card-text">Vidiem Eva Elite Mixer Grinder 710 A (Black) | Mixer grinder 750 watt with 1 Juicer & 3 Leakproof Jars with self-lock | Mixer grinder | 2 Years Warranty (4 Jar)</p>
    <h5 class="card-text"> <del> ₹7,998</del>  ₹3,739</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-2 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/mixe-2.jpg" class="card-img-top" alt="mixe2"style="height:400px">
  <div class="card-body">
    <h5 class="card-title">Preethi Zodiac 2.0 Mg-255 Mixer Grinder</h5>
    <p class="card-text">Preethi Zodiac 2.0 Mg-255 Mixer Grinder, 1000 Watt, Black/Blue, 4 Jars - Super Extractor Juicer Jar & Master Chef Food Processor Jar, 2Yr Guarantee & Lifelong Free Service</p>
    <h5 class="card-text"> <del>₹13,999</del>  ₹13,999</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-3 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/mixe-3.webp" class="card-img-top " alt="mixe3" style="height:400px;">
  <div class="card-body">
    <h5 class="card-title">Prestige Iris Plus 750 W Mixer  </h5>
    <p class="card-text">Prestige Iris Plus 750 W Mixer Grinder With 4 Jars (3 Stainless Steel Jars+ 1 Juicer Jar) 4 Super Efficient Stainless Blades 2 Years Warranty Black, 750 watts</p>
    <h5 class="card-text"> <del>₹6,295</del>  ₹3,199</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-4 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/mixe-4.webp" class="card-img-top" alt="mixe4"style="height:400px">
  <div class="card-body">
    <h5 class="card-title">Crompton Ameo 750-Watt Mixer</h5>
    <p class="card-text">Crompton Ameo 750-Watt Mixer Grinder with MaxiGrind and Motor Vent-X Technology (3 Stainless Steel Jars and 1 Juicer Jar, Black & Green) (AMEO-4JARS)</p>
    <h5 class="card-text"> <del>₹6,600</del>₹2,999</h5>
    <a href="#" class="btn btn-outline-secondary  ">Add to Card</a>
  </div>
</div>
  </div>
      </div>
     </div>

<!-- ///////////////////mixer end -->
    <!-- footer -->
<?php include "footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>