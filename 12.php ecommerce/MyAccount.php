
  <!-- db connect -->
   <!-- signin -->
<?php include 'db.php';

if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $qry="insert into signin(signin_email,pwd)values('$email','$pwd')";
  $result =mysqli_query($dbc,$qry);
  if($result){
    echo "Registerd  successgully";
    header("location:Home.php");
  }
  else{
    die('error'.mysqli_error($dbc));
  }
}
?>

<!-- ////////// sign-up/////////////// -->
   <!-- db connect -->
   <!-- sign up -->
<?php 

if(isset($_POST['register']))
{
  $name = $_POST['signup_name'];
  $email = $_POST['signup_email'];
  $pwd = $_POST['signup_pwd'];
  $repwd = $_POST['signup_repwd'];
  $num = $_POST['signup_num'];
  $qrey="insert into singup(signup_name,signup_email,singup_pwd,singup_repwd,signup_num)
  values('$name', '$email','$pwd','$repwd','$num')";

  if($pwd === $repwd){
   $result=mysqli_query($dbc,$qrey);
  }
  else{
    echo("password and repassword not match");

  }
  if($result){
    // echo "Registerd  successgully";
    header("location:HomeAppliance.php");
  }
  else{
    die('error'.mysqli_error($dbc));
  }
}
?>

<!-- header -->
<?php include "header.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- //// -->
</head>
<body>

<div class="container mt-3">

  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#signup">SIGN UP</a>
    </li>
 
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#signin">SIGN IN</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div id="signup" class="container tab-pane active"><br>
 

    <!--sign up row start -->
    <div class="row">
        <!--sign in -->
        <!-- ///////////////////////////////////////// -->
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            <h3>CREATE A NEW ACCOUNT</h3>
            <h4>Create your own Shopping account:</h4>
 
<form method="post">
        <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" name="signup_name" id="exampleInputText1" required>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="signup_email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="signup_pwd" id="exampleInputPassword1"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Conform-Password</label>
    <input type="password" class="form-control" name="signup_repwd" id="exampleInputPassword2"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Contact No:</label>
    <input type="number" class="form-control" name="signup_num" id="exampleInputContacts"required>
  </div>

  <button type="submit" name="register" class="btn btn-primary">SIGN UP</button>
</form>

    </div>
</div>

<div class="col-sm-2"></div>
<!-- //////////////////////////// -->
 </div>
 <!-- sing up row end -->



 
      
    <div id="signin" class="container tab-pane fade"><br>

     <!-- row start -->

     <div class="row">
        <!--sign in -->
        <!-- ///////////////////////////////////////// -->
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            <h3>SIGN IN</h3>
            <h4>Hello,welcome to your account:</h4>
  <form  method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  
 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pwd" id="exampleInputPassword1" autocomplete="new-password" required>
    <div class="row my-4">
        <div class="col-sm-9"></div>
        <div class="col-sm-3"><a href="myAccountForgot.php? upid='.$id.'" class="text-danger text-decoration-none"  >Forgot password?</a></div>
    </div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
</form>

    </div>
</div>

<div class="col-sm-2"></div>
<!-- //////////////////////////// -->
 </div>
 <!-- sign in row end -->	

      
    </div>
  
  </div>
</div>
<!-- footer -->
<?php include "footer.php"?>    

</body>
</html>