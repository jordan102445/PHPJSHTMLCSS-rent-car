<?php
$con = mysqli_connect("localhost","root","");
if($con === FALSE) die ("Нема Конекција");
if(mysqli_select_db($con,"изнајмување на автомобили") === FALSE)
die ("Нема Конекција");
?>
