<?php
   include("config.php");
   session_start();
   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT adm_no FROM registration WHERE email = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['adm_no'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index_style.css">
  </head>
  <body>
  <ul class="nav-area">
<li><a href="index.html">Home</a></li>


</ul>
<div class="login-box">
  <h1>Login</h1>
  <form action="" method="POST">
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name = "username" required>
  </div>


  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name = "password" required>
  </div>

  <input type="Submit" class="btn" value="Sign in">

  <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

</form>
</div>
  </body>
</html>
