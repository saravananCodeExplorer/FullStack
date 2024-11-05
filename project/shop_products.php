<?php include "connect.php";
// cart table
if(isset($_POST['add_to_cart'])){
  $product_name=$_POST['product_name'];
  $product_price=$_POST['product_price'];
  $product_image=$_POST['product_image'];
  $product_quantity=1;

  // select cart data based on condition
  $select_cart = mysqli_query($db,"select * from cart where name ='$product_name'");
  // if(mysqli_num_rows($select_cart)>0){
     $display_message = "Product already added to the cart " ;
  // }
  // else{
// 
      //insert cart data in cart data
  $qry="insert into cart (name,price,image,quantity)
  values('$product_name','$product_price','$product_image','$product_quantity')";
  $result=mysqli_query($db,$qry);

   $display_message = "Product  added to the cart " ;


  // }




  

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Products</title>
        <!-- css -->
        <link rel="stylesheet" href="css/style.css">

<!-- jss -->
 <script src="js/script.js"></script>

 <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 <!-- font-awsewome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   


</head>
<style>
    .display_message{
        margin-top:20px;
        height:50px;
        /* background-color:black; */
        color:black;
        font-size:32px;
        font-weight:bold;
        display: flex;
        flex-direction:column;
        justify-content:center;
        text-align:center;
        cursor: pointer;
    }
  .empty_text{
        margin-top:20px;
        height:50px;
        background-color:black;
        color:white;
        font-size:32px;
        font-weight:bold;
        display: flex;
        flex-direction:column;
        justify-content:center;
        text-align:center;
    }
    .container.cart-cont{
      width:25%;
      float:left;
      /* display:flex;
      align-items:center;
      justify-content:space-around; */
      margin-bottom: 2%;

    }
    .cart-img{
      height:250px;
    }



    </style>
  <body>
         <!-- include header -->
         <?php include"header.php"?>
         <!-- marquee -->
         <?php include"marquee.php"?>

         
         <!-- message display -->
     <?php
     if(isset($display_message)){
      echo " <div class='display_message'>
      <span>$display_message
      <i class='fas fa-times' onclick='this.parentElement.style.display = `none`';></i></span>
     </div>";
     }

     ?>
         
    <div class="container">
        <section class="products">
            <h1 class="heading text-center">Lets Shop!</h1>
          <div class="product_container">
    <!-- php code -->
    <?php
    $select_products = mysqli_query($db, "SELECT * FROM `products`");
    if (mysqli_num_rows($select_products) > 0) {
        while ($fetch_products = mysqli_fetch_assoc($select_products)) {
            //  $id=  $fetch_products['id'];
            //  echo $id;
    ?>
            <div class="container cart-cont">
                <form action="" method="post">
                    <!-- CARD END -->
                    <div class="card" style="width: 18rem;text-align:center;">
                        <img src="images/<?php echo $fetch_products['image'] ?>" class="card-img-top cart-img" alt="<?php echo $fetch_products['image'] ?>">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $fetch_products['name'] ?></h2>
                            <h3 class="card-text">Price: $<?php echo $fetch_products['price'] ?></h3>
                            <!-- id check -->
                            <input type="hidden" name="product_id" value="<?php echo $fetch_products['id'] ?>">
                            <input type="hidden" name="product_name" value="<?php echo $fetch_products['name'] ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_products['price'] ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_products['image'] ?>">
                            <input type="submit" class="btn btn-primary cart_btn" name="add_to_cart" value="Add to cart" style="width:100px;" />
                        </div>
                    </div>
                </form>
            </div>
    <?php
        }
    } else {
        echo "<div class='empty_text'>No Products Available!</div>";
    }
    ?>


</div> 
        </section>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>


    