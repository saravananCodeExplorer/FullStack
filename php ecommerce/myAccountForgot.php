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
</head>
<body>

 
 <?php
include 'db.php';
$id = $_GET['upid'];
$qry = "SELECT * FROM singup where id='$id' ";
$result = mysqli_query($db,$qry);

if($row = mysqli_fetch_assoc($result)){
  $name = $_POST['signup_name'];
  $email = $_POST['signup_email'];
  $pwd = $_POST['signup_pwd'];
  $repwd = $_POST['signup_repwd'];
  $num = $_POST['signup_num'];
	
	
	if(isset($_POST['']))
	{
    $name = $_POST['signup_name'];
    $email = $_POST['signup_email'];
    $pwd = $_POST['signup_pwd'];
    $repwd = $_POST['signup_repwd'];
    $num = $_POST['signup_num'];
		
		$quary = "UPDATE singup set id ='$id',signup_name='$name',signup_email = '$email',singup_pwd = '$pwd', singup_repwd ='$repwd',signup_num='$num' where id =' $id'" ;
		
		$result = mysqli_query($db,$quary);
		
		if($result){
			// echo"updated successfully";
			header ('location:Swing.php');
		}
		else{
			die(mysqli_error($db));
		}
	
	}
	
}

?>  

<div class="row my-5">
        <!--sign in -->
        <!-- ///////////////////////////////////////// -->
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            <h3>FORGOT PASSWORD</h3>
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

  <button type="submit" name="Change" class="btn btn-primary">Change</button>
</form>

    </div>
</div>

<div class="col-sm-2"></div>
<!-- //////////////////////////// -->
 </div>
 <!-- sing up row end -->
  
<!-- footer -->
<?php include "footer.php"?>    
</body>
</html>
