<?php
$dbc=new mysqli("localhost","root","","saroshopping");
if($dbc){
    echo("database connected");
}
else{
    die('error'.mysqli_error($dbc));
}
?>