 <!-- include database -->
      <?php include"connect.php"?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Customer</title>
        <!-- css -->
     <link rel="stylesheet" href="css/style.css">

     <!-- jss -->
      <script src="js/script.js"></script>

      
      <!-- font-awsewome -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
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

    </style>
  <body>
     <!-- include header -->
      <?php include"header.php"?> 
    <h1 style="text-align:center;">View customer details!</h1>
    <div class="container">
        <section class="display_product">
            <button class="btn btn-outline-success "><a href="signup.php"class="text-decoration-none text-dark">Go to Add</a></button>
           
             
                    <!-- php code -->
                    <?php
                     $qry = "select * from customer";
                     $result = mysqli_query($db,$qry);
                     if(mysqli_num_rows($result)>0){
                        echo "<table class='table table-hover striped my-2'>
                <thead class='table-dark'>
                    <th>SI No</th>
                    <th>Customer_Name</th>   
                    <th>Customer_email</th>
                     <th>Customer_pwd</th>
                      <th>Customer_repwd</th>
                       <th>Customer_number</th>
                         <th>Action</th>
                    
                </thead>
                <tbody>";
                        // logic to fetch data
                        $num=1;
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $customer_id=$row['id'];

                    ?>
                            
                                    <!-- DISPALY TABLE -->
                                     
                         <tr>
                        <td><?php echo $num ?></td>
                        
                        <td><?php echo $row ['name']?></td>
                         <td><?php echo $row ['email']?></td>
                          <td><?php echo $row ['pwd']?></td>
                           <td><?php echo $row ['repwd']?></td>
                            <td><?php echo $row ['number']?></td>
                        <td>
                            <a href="delete_customer.php? delete=<?php echo $row ['id']?>" 
                            class="delete_product_btn"onclick="return confirm('Are you sure you want to remove this product.');">
                            <i class="fas fa-trash" 
                            style="font-size:20px;color:red;padding:0px 10px;"></i>
                        </a>
                           
                        </td>
                    </tr>
                        
                        <?php 
                        $num++;           
                        }
                       }

                     else{
                  
                        echo "<div class='empty_text'>No Customer  Available!</div>";
                     }


                     ?>
               
                </tbody>
            </table>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      
    <!-- include header -->
         <?php include"footer.php"?> 

  </body>
</html>