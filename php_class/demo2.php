
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
echo "name:$name" ."<br>".
 "contact:$contact"."<br>".
 "city:$city" ;

}
?>


<html>
<style>
form
{
	height:500px;
	width:500px;
}
label

{
	margin:20px;
}
	input[type="text"]
	{
		margin:10px;
	}

</style>

<body>
<form action="demo2.php" method="post">
<label>name</label><br>
<input type="text" name="name"><br>
<label>contact</label><br>
<input type="text" name="contact"><br>
<label>city</label><br>
<input type="text" name="city"> <br>
<button name="submit">submit</button>
</form>
</body>
</html>