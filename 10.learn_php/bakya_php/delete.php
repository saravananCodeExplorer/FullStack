<?php
include "dbconnect.php";
if(isset($_GET["deleteid"]));
{
$id=$_GET["deleteid"];
$sql="delete from subform where id=$id";
$result=mysqli_query($con,$sql);
if($result)
{
	header("location:view.php");
}
else
{
	die(mysqli_error($con));
}
}




?>