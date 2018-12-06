<?php

$input_name  = $_POST['itemname'];
$input_price = $_POST['itemprice'];

$con = mysqli_connect("localhost","root","","stationery");

$sql = "insert into items values(null,'$input_name','$input_price')";

$res = mysqli_query($con,$sql);

mysqli_close($con);

?>