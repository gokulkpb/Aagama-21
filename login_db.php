<?php
 
$con = mysqli_connect("localhost", "root", "", "university");
if($con){
    print("");
}
else{
    print("unsuccessful");
}

$email = $_POST['email'];
$pass = $_POST['pass'];

$query = 
