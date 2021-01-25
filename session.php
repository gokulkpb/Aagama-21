<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select adm_no from registration where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['adm_no'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>