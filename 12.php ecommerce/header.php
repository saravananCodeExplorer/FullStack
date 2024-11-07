<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> shopping</title>
    <!-- boostrap icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- boostrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- top-header css -->
     <link rel="stylesheet" href="css/header.css">
  </head>
  <body>

   
    <!-- top-header -->
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
      
          <a class="navbar-brand" href="#" style="font-size:20px;color:white;">Shopping with Loyalty Points</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="MyAccount.php">MyAccount</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Wishlist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Points</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">My Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="Admin.php">Admin</a>
              </li>
            </ul>
                <!-- track order -->
                <div class="col-sm-2">
                    <!-- <button  class="btn"><a href="#" class="text-decoration-none text-white" style="border:5px solid black;padding:10px;border-radius:2px;">Track Order</a></button> -->
                     <button style="background-color:black;padding:10px 20px;border-radius:10px;"><a href="#" style="text-decoration:none ;color:white;">Track order</a></button>
                 </div>
            </div>
           </div>
         </nav>
        </div>

         <!-- ------------------middle-BAR -->
          <div class=" my-4 "id="middle-container">
            <div class="row">
              <!--///////////////////////  -->
            <!-- <div class="col-sm-4">
              <h3>Shopping with Loyalty Points</h3>
            </div>
                search -->
            <!-- <div class="col-sm-4"> -->
          
              <!-- <form class="d-flex my-3" role="search" >
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" required>
                <button class="btn btn-outline-dark" type="submit">Search</button>
              </form> -->
            <!-- </div>  -->
            <!-- add to cart -->
<!--     
            <div class="col-sm-4">
    <div class="container d-flex justify-content-center align-items-center my-3">
        <div class=" d-flex align-items-center"style="font-size:20px;border:1px solid black;width:220px;height:50px;">
            <span class="text-center me-2">CART - RS.0000.00</span>
            <span class="badge bg-secondary rounded-pill fs-6">0</span>
        </div>
        <div class=" d-flex align-items-center">
            <i class="bi bi-cart-plus text-dark"style="font-size:31px;border:1px solid black;"></i>
        </div>
    </div>
</div> -->
          
                 <!-- </div> -->
            <!-- </div> -->
         <?php include"marquee.php"?>
          </div>
         </div>
         <!-- main-header -->
         <div id="main-header">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container-fluid">
                 
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="Home.php">| HOME</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="Homeappliance.php">| HOME APPLIANCE</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="Electronics.php">| ELECTRONICS</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="Furniture.php">| FURNITURE</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="Swing.php">| SWING</a>
                          </li>
                               <div class="mx-5">
          
                                 <form class="d-flex " role="search" >
                               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  required>
                            
                            
                               <button class="btn text-white "style="padding:0px 20px;border:3px solid white;" type="submit">    <i class="bi bi-search text-white "style="font-size:20px;"></i> </button>
                                     </form>

                                     
                                      </div>
                                      <div class="col-sm-1">
    <div class="container d-flex justify-content-center align-items-center mx-5">
        <div class=" d-flex align-items-center"style="font-size:16px;border:1px solid white;width:220px;height:50px;">
            <span class="text-center text-white me-2">CART - RS.0000.00</span>
            <span class="badge bg-secondary rounded-pill fs-6">0</span>
        </div>
        <div class=" d-flex align-items-center">
            <i class="bi bi-cart-plus text-white"style="font-size:31px;border:1px solid white;"></i>
        </div>
    </div>
</div>
                      </ul>
                  </div>
              </div>
          </nav>
      </div>
      




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>