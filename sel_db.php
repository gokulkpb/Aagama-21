<?php

include("config.php");
include("session.php");

$ev1 = $_POST['ev1'];
$ev2 = $_POST['ev2'];
$ev3 = $_POST['ev3'];

$qr1 = "insert into participation values ('$login_session', '$ev1'),  ('$login_session', '$ev2'), ('$login_session', '$ev3');";
mysqli_query($db, $qr1);

header("location: welcome.php");
?>


