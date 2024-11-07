<!-- header -->
<?php include "header.php";?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-3">

<br>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="#signin">SIGN IN</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#signup">SIGN UP</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

  <div id="signin" class="container tab-pane active"><br>


  <!-- row start -->
  <div class="row">
      <!--sign in -->
      <!-- ///////////////////////////////////////// -->
      <div class="col-sm-2"></div>

      <div class="col-sm-8">
          <h3>SIGN IN</h3>
          <h4>Hello,welcome to your account:)</h4>
          <form>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email address</label>
  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>


</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Password</label>
  <input type="password" class="form-control" name="pwd" id="exampleInputPassword1"required>
  <div class="row my-4">
      <div class="col-sm-9"></div>
      <div class="col-sm-3"><a href="myAccountForgot.php" style="text-decoration:none; color:red;">forgot your password?</a></div>
  </div>
</div>

<button type="submit" class="btn btn-primary">LOGIN</button>
</form>

  </div>
</div>

<div class="col-sm-2"></div>
<!-- //////////////////////////// -->
</div>
<!-- sign in row end -->
    
  <div id="signup" class="container tab-pane fade"><br>

  
  <!--sign up row start -->
  <div class="row">
      <!--sign in -->
      <!-- ///////////////////////////////////////// -->
      <div class="col-sm-2"></div>

      <div class="col-sm-8">
          <h3>CREATE A NEW ACCOUNT</h3>
          <h4>Create your own Shopping account:)</h4>

<form>
      <div class="mb-3">
  <label for="" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleInputText1" required>

</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Password</label>
  <input type="password" class="form-control" id="exampleInputPassword1"required>
</div>
<div class="mb-3">
  <label for="exampleInputPassword2" class="form-label">Conform-Password</label>
  <input type="password" class="form-control" id="exampleInputPassword2"required>
</div>
<div class="mb-3">
  <label for="exampleInputNumber" class="form-label">Contact No:</label>
  <input type="number" class="form-control" id="exampleInputContacts"required>
</div>

<button type="submit" class="btn btn-primary">SIGN UP</button>
</form>

  </div>
</div>

<div class="col-sm-2"></div>
<!-- //////////////////////////// -->
</div>
<!-- sing up row end -->

    
</div>

</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- footer -->
<?php include "footer.php"?>     
</body>
</html>