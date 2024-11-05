<!-- db connect -->
<?php include "db.php"?>

 <!-- //// -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css link -->
     <link rel="stylesheet" href="./css/home.css">
     <!-- include php -->
      <?php include "header.php"?>
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

<h1>Furniture</h1>

    <!--first add to card -->
    <div class="container my-5">
      <div class="row">
        <!-- card-1 -->
        <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ph-2.webp" class="card-img-top" alt="mix-1"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Vidiem EVO ADC Mixer Grinder 612 A</h5>
    <p class="card-text">Vidiem EVO ADC Mixer Grinder 612 A | Mixer grinder 750 watt with 5 Jar in-1 Juicer Mixer Grinder | 5 Leakproof Jars with self-lock,for Wet and Dry Spices,Chutneys and Curries | 5 Year Warranty</p>
    <h5 class="card-text"> <del>₹13,690</del> ₹8,590</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
       
</div>
  </div>
<!-- card-2 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ph-2.webp" class="card-img-top" alt="err2"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Samsung Galaxy A35 5G</h5>
    <p class="card-text">Samsung Galaxy A35 5G (Awesome Lilac, 8GB RAM, 128GB Storage) | Premium Glass Back | 50 MP Main Camera (OIS) | Nightography | IP67 | Corning Gorilla Glass Victus+ </p>
    <h5 class="card-text"> <del>40,999</del> ₹30,999 </h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-3 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ph-3.webp" class="card-img-top" alt="err3"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">realme NARZO 70 Pro 5G</h5>
    <p class="card-text">realme NARZO 70 Pro 5G (Glass Green, 8GB RAM,128GB Storage) Dimensity 7050 5G Chipset | Horizon Glass Design | Segment 1st Flagship Sony IMX890 OIS Camera</p>
    <h5 class="card-text"> <del>24,999</del> ₹19,999</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-4 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ph-4.webp" class="card-img-top" alt="err4"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Oppo F25 Pro 5G </h5>
    <p class="card-text">Oppo F25 Pro 5G (Lava Red, 8GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers  Segment 1st Flagship Sony IMX890 OIS Camera</p>
    <h5 class="card-text"> <del>28,999</del>  ₹23,999</h5>
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
  <img src="./home-img/ph-5.webp" class="card-img-top" alt="err5"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Samsung Galaxy M34 5G</h5>
  
    <p class="card-text">Samsung Galaxy M34 5G (Midnight Blue,6GB,128GB)|120Hz sAMOLED Display|50MP Triple No Shake Cam|6000 mAh Battery|4 Gen OS Upgrade & 5 Year Security Update|12GB RAM with RAM+|Android 13|without Charger</p>
    <h5 class="card-text"> <del>24,499</del> ₹12,999</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-6 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ph-6.webp" class="card-img-top" alt="err2"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Samsung Galaxy S23 Ultra 5G AI Smartphone</h5>
    <p class="card-text">Samsung Galaxy S23 Ultra 5G AI Smartphone (Green, 12GB, 256GB Storage) (Awesome Lilac, 8GB RAM, 128GB Storage) | Premium Glass Back | 50 MP Main Camera (OIS) | Nightography  </p>
    <h5 class="card-text"> <del>24,499</del> ₹12,999</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-7 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/ph-7.webp" class="card-img-top " alt="err7" style="height:300px"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Lava O2 </h5>
    <p class="card-text">Lava O2 (Imperial Green, 8GB RAM, UFS 2.2 128GB Storage) |AG Glass Back|T616 Octacore Processor|18W fast charging|6.5 inch 90Hz Punch Hole Display|50MP AI Dual Camera|Upto 16GB expandable RAM</p>
    <h5 class="card-text"> <del>24,999</del> ₹19,999</h5>
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