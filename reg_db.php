<?php

include("config.php");

$adm_no = $_POST['adm_no'];
$name = $_POST['fname'];
$email = $_POST['email'];
$sex = $_POST['sex'];

$dept = $_POST['dept'];
$year = $_POST['year'];
$mobile = $_POST['mobile'];
$pass =  $_POST['password'];


print("$adm_no, $name, $email, $sex, $dept, $year, $mobile, $pass");

$qr = "insert into registration values('$adm_no', '$name', '$email', '$sex', '$dept', '$year', '$mobile', '$pass');";

mysqli_query($db, $qr);

header("location: welcome.php");

?>