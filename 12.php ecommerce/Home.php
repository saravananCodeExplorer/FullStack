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

<h1>All products</h1>
     <!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ phone \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
    <!--first add to card -->
     <div class="container my-5">
      <div class="row">
        <!-- card-1 -->
        <div class="col-sm-3">
        <div class="card " style="width: 18rem;">
  <img src="./home-img/ph-1.jpg" class="card-img-top" alt="err1"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">iQOO 12 5G</h5>
  
    <p class="card-text">iQOO 12 5G (Legend, 12GB RAM, 256GB Storage) | India's 1st Snapdragon® 8 Gen 3 Mobile Platform | India's only flagship with 50MP + 50MP + 64MP camera</p>
    <h5 class="card-text"> <del>50,000</del> Rs.30,000 </h5>
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


<!--\\\\\\\\\\\\\\\\\\\\\\\\\ laptop \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  -->
    <!--first add to card -->
    <div class="container my-5">
      <div class="row">
        <!-- card-1 -->
        <div class="col-sm-3">
        <div class="card " style="width: 18rem;">
  <img src="./home-img/lap-1.jpg" class="card-img-top" alt="lap1"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Lenovo</h5>
  
    <p class="card-text">Lenovo IdeaPad 1 AMD Ryzen 5 5500U 15.6" (39.62cm) FHD Thin & Light Laptop (8GB/512GB SSD/Windows 11/Office 2021/HD Camera/1 Year ADP Free/Grey/1.6Kg), 82R400BGIN</p>
    <h5 class="card-text"> <del>68,900</del> Rs.35,900 </h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-2 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/lap-2.jpg" class="card-img-top" alt="lap2"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">HP Laptop 15</h5>
    <p class="card-text">HP Laptop 15, 12th Gen i5-1235U, 15.6-inch (39.6 cm), FHD, Anti-glare, 8GB DDR4, 512GB SSD, Intel Iris Xᶱ Graphics, Backlit Keyboard, Dual Speakers, (Win 11, MSO 2021, Silver, 1.69 kg), 15s-fy5007TU </p>
    <h5 class="card-text"> <del>65,999</del>  ₹46,990</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-3 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/lap-3.webp" class="card-img-top" alt="lap3"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">ASUS Vivobook 14 </h5>
    <p class="card-text">ASUS Vivobook 14 Thin and Light Laptop, IntelCore i3-1215U 12th Gen, 14" (35.56 cm) FHD, (8 GB RAM/512GB SSD/Win11/Office 2021/Fingerprint/42WHr /Blue/1.40 kg), X1404ZA-NK321WS</p>
    <h5 class="card-text"> <del>56,990</del>  ₹37,990</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-4 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/lap-4.webp" class="card-img-top" alt="lap4"style="height:300px;">
  <div class="card-body">
    <h5 class="card-title">
Walker Thin & Light Laptop</h5>
    <p class="card-text">Walker Thin & Light Laptop, 14.1 inch (4GB Ram,128GB SSD) | FHD IPS Display 1920 * 1080 Resolution | Gemini Lake N4020 | UHD Graphics 600 | Windows 11 Home | Cloud Silver</p>
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
  <img src="./home-img/lap-5.webp" class="card-img-top" alt="lap5"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Intel Celeron N4020 Laptop   </h5>
  
    <p class="card-text">Chuwi HeroBook Pro 14.1'' Intel Celeron N4020 Laptop with 8GB RAM, 256GB SSD, Windows 11, 1TB Expand, FHD IPS, Ultra Slim, USB3.0, Mini-HDMI, Webcam</p>
    <h5 class="card-text"> <del>21,499</del> ₹16,990</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-6 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/lap-6.webp" class="card-img-top" alt="lap-6"style="height:300px">
  <div class="card-body ">
    <h5 class="card-title">MSI Cyborg 15 AI, Intel Core</h5>
    <p class="card-text">MSI Cyborg 15 AI, Intel Core Ultra 7 155H,Built-in AI, 40CM Gaming Laptop(16GB/1TB NVMe SSD/Windows 11)</p>
    <h5 class="card-text"> <del>₹1,19,990</del> ₹1,04,990</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-7 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/lap-7.webp" class="card-img-top " alt="lap7" style="height:300px"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">Acer [Smartchoice] Aspire Lite  </h5>
    <p class="card-text">
Roll over image to zoom in
Acer [Smartchoice] Aspire Lite AMD Ryzen 3 5300U Premium Thin and Light Laptop (Windows 11 )</p>
    <h5 class="card-text"> <del> ₹47,990</del>  ₹28,990</h5>
    <a href="#" class="btn btn-outline-secondary">Add to Card</a>
  </div>
</div>
  </div>
<!-- card-8 -->
  <div class="col-sm-3">
  <div class="card" style="width: 18rem;">
  <img src="./home-img/lap-8.jpg" class="card-img-top" alt="lap8"style="height:300px">
  <div class="card-body">
    <h5 class="card-title">HP Victus Gaming Laptop </h5>
    <p class="card-text">HP Victus Gaming Laptop, AMD Ryzen 5 5600H, 4GB RTX 3050 GPU, 15.6-inch (39.6 cm), FHD, IPS, 144Hz, 16GB DDR4, 512GB SSD, Backlit KB, B&O.</p>
    <h5 class="card-text"> <del> ₹80,587</del>  ₹60,990</h5>
    <a href="#" class="btn btn-outline-secondary  ">Add to Card</a>
  </div>
</div>
  </div>
      </div>
     </div>

<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\fridge////////////////////////////////////// -->
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





     <!-- /////////////////////////////////////Swing\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
     <div class="container">
  <div class="row">
    <div class="col-sm-6">
    <!-- card-1 start -->
    <div class="card mb-3" style="max-width: 540px; height:400px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img
        src="./home-img/swing-1.webp"
        alt="Swing-1"
        class="img-fluid rounded-start"
        style="width:600px;"
      />
    </div>
    <div class="col-md-6 my-5 ">
      <div class="card-body my-3">
        <h5 class="card-title">Swing Chair </h5>
        <p class="card-text">
        City Outdoor Furniture Single Seater Swing Chair with Stand and Cushion Hammock Swing for Adult Outdoor Indoor Garden Living Room Balcony Hanging Chair (Brown Silver)
        </p>
        <h5 class="card-text"> <del> ₹19,999</del> ₹9,699</h5>
        <a href="#" class="btn btn-outline-secondary">Add to Card</a>
      </div>
    </div>
  </div>
</div> 
</div> 
     <!-- card-1 end -->

     <div class="col-sm-6">
    <!-- card-2 start -->
    <div class="card mb-3" style="max-width: 540px; height:400px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img
        src="./home-img/swing-2.jpg"
        alt="Swing-1"
        class="img-fluid rounded-start"
        style="width:400px;"
      />
    </div>
    <div class="col-md-6 my-5 ">
      <div class="card-body my-3">
        <h5 class="card-title">Swingzy Chair </h5>
        <p class="card-text">
        Swingzy Made in India Soft Velvet Hanging Swing for Adults/Jhula for Adults, Swing for Indoor, Outdoor/Swing for Home/Hanging Jhula Chair - (52x50x150 Cms, Sky-Blue)
        </p>
        <h5 class="card-text"> <del> ₹4,999</del> ₹1,149</h5>
        <a href="#" class="btn btn-outline-secondary">Add to Card</a>
      </div>
    </div>
  </div>
</div> 
</div> 
     <!-- card-2 end -->
      
</div>

<!-- first row end -->

<!-- SECOND row start -->
<div class="row">
    <div class="col-sm-6">
    <!-- card-3 start -->
    <div class="card mb-3" style="max-width: 540px; height:400px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img
        src="./home-img/swing-3.webp"
        alt="Swing-1"
        class="img-fluid rounded-start"
        style="width:600px;"
      />
    </div>
    <div class="col-md-6 my-3 ">
      <div class="card-body my-3">
        <h5 class="card-title">JT OUTDOOR Single Seater </h5>
        <p class="card-text">
        JT OUTDOOR Single Seater |Swing Chair with Stand & Cushion & Hook | Indoor| Outdoor| Living Room | Balcony | Garden | Patio | Home Improvement (Stand-Brown, Basket-White/Blue, Cushion-Blue)
        </p>
        <h5 class="card-text"> <del> ₹15,999</del> ₹9,999</h5>
        <a href="#" class="btn btn-outline-secondary">Add to Card</a>
      </div>
    </div>
  </div>
</div> 
</div> 
     <!-- card-3 end -->

     <div class="col-sm-6">
    <!-- card-4 start -->
    <div class="card mb-3" style="max-width: 540px; height:400px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img
        src="./home-img/swing-4.webp"
        alt="Swing-4"
        class="img-fluid rounded-start"
        style="width:600px;"
      />
    </div>
    <div class="col-md-6 my-5 ">
      <div class="card-body my-3">
        <h5 class="card-title">Heavy Iron Hanging Swing Chair </h5>
        <p class="card-text">
        Candid Home Designer Double Seater Heavy Iron Hanging Swing Chair with Tufted Soft Deep Cushion with Stand Backyard Relax for Indoor, Outdoor, Balcony, Patio, Home & Garden (Black+ Black)
        </p>
        <h5 class="card-text"> <del> ₹39,999</del>  ₹18,999</h5>
        <a href="#" class="btn btn-outline-secondary">Add to Card</a>
      </div>
    </div>
  </div>
</div> 
</div> 
     <!-- card-4 end -->
      
</div>
<!-- second-row end -->
 
 <!--  third row satrt-->
<div class="row">
    <div class="col-sm-6">
    <!-- card-5 start -->
    <div class="card mb-3" style="max-width: 540px;height:400px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img
        src="./home-img/swing-5.webp"
        alt="Swing-5"
        class="img-fluid rounded-start"
        style="width:600px;"
      />
    </div>
    <div class="col-md-6 my-5 ">
      <div class="card-body my-3">
        <h5 class="card-title">Swing for Home - Black </h5>
        <p class="card-text">
        Curio Centre Cotton Swinging Hammock Hanging Swing Chair/Hammock Swing for Adults/Swing for Indoor Outdoor, Garden & Patio/Durable Portable Jhula/Swing for Home - Black
        </p>
        <h5 class="card-text"> <del> ₹3,999</del> ₹1,499</h5>
        <a href="#" class="btn btn-outline-secondary">Add to Card</a>
      </div>
    </div>
  </div>
</div> 
</div> 
     <!-- card-5 end -->

     <div class="col-sm-6">
    <!-- card-6 start -->
    <div class="card mb-3" style="max-width: 540px;height:400px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img
        src="./home-img/swing-6.webp"
        alt="Swing-6"
        class="img-fluid rounded-start"
        style="width:600px;"
      />
    </div>
    <div class="col-md-6 my-5 ">
      <div class="card-body my-3">
        <h5 class="card-title">White Swing with White Cushion</h5>
        <p class="card-text">
        Happy Star Outdoor Furniture Double Seater Swing, Beautiful Swing with Stand (White Swing with White Cushion) 9 (Rattan
        </p>
        <h5 class="card-text"> <del> 29,999</del>  ₹18,999</h5>
        <a href="#" class="btn btn-outline-secondary">Add to Card</a>
      </div>
    </div>
  </div>
</div> 
</div> 
     <!-- card-6 end -->
      
</div>
<!-- third row end -->

<!-- fourth row start -->

<div class="row">
    <div class="col-sm-6">
    <!-- card-7 start -->
    <div class="card mb-3" style="max-width: 540px;height:400px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img
        src="./home-img/swing-7.webp"
        alt="Swing-7"
        class="img-fluid rounded-start"
        style="width:600px;"
      />
    </div>
    <div class="col-md-6 my-5 ">
      <div class="card-body my-2">
        <h5 class="card-title">SWINGZY Premium Rectangle-Shaped Swing Chair </h5>
        <p class="card-text">
        SWINGZY Premium Rectangle-Shaped Swing Chair/Jhula For Adults/Wooden Swing For Living Room/Swing For Balcony/Swing Chair For Adults For Home(Brown),96 Cm,66 Cm
        </p>
        <h5 class="card-text"> <del> ₹6,999</del> ₹3,199</h5>
        <a href="#" class="btn btn-outline-secondary">Add to Card</a>
      </div>
    </div>
  </div>
</div> 
</div> 
     <!-- card-7 end -->

     <div class="col-sm-6">
    <!-- card-8 start -->
    <div class="card mb-3" style="max-width: 540px;height;400px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img
        src="./home-img/swing-8.webp"
        alt="Swing-8"
        class="img-fluid rounded-start"
        style="width:300px;"
      />
    </div>
    <div class="col-md-6 my-2 ">
      <div class="card-body my-1">
        <h5 class="card-title">Patiofy Metal Premium Square Relaxo Jhula Swing Chair</h5>
        <p class="card-text">
        Patiofy Metal Premium Square Relaxo Jhula Swing Chair For Adults&Kids/Hammock Hanging Swing For Balcony, Indoor&Outdoor.
        </p>
        <h5 class="card-text"> <del> ₹5,999</del> ₹2,899</h5>
        <a href="#" class="btn btn-outline-secondary">Add to Card</a>
      </div>
    </div>
  </div>
</div> 
</div> 
     <!-- card-8 end -->

      <!-- fourth row end -->
      
</div>
<!--  -->
</div>


      <!-- /////////////////////////////////////////swing end/////////////////////// -->


<!-- footer -->
<?php include "footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>