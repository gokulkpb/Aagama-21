<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome</title>

      <style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background: url(bg.jpg) ;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
        color:white;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #16a085;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #16a085;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: grey;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }

    .nav-area {
	float: right;
	list-style: none;
	margin-top: 30px;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: white;
	text-decoration: none;
	padding: 5px 20px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
}
.nav-area li a:hover {
	background: black;
	color: white;
}
</style>

   </head>
   
   <body>

       
<?php
   $admno = $login_session;

   $sql = "SELECT * FROM registration WHERE adm_no = '$admno'";
      $result = mysqli_query($db,$sql);  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      
      ?>
      <h1>Welcome <?php echo $row['name']; ?></h1>

      <ul class="nav-area">
        <li><a href="selection.php">Select your events</a></li>
        <li><a href="logout.php">Sign out</a></li>
      </ul>

      <h2 style="margin : 18vh 0 0 40vw ; color:white"> Your events</h2>
<?php
      
      $qr = "select * from event_tb, participation where participation.adm_no = '$login_session' and event_tb.event_id = participation.event_id ;";
      $result1 = mysqli_query($db,$qr); 
      
      
echo "<table style='margin-top:6vh;'>"; 
echo "<tr style='background-color: green;'> <td>Event ID</td><td>Event Name </td></tr>";
      while($row1 = mysqli_fetch_array($result1)) {
         
         echo "<tr> <td>" .$row1['event_id']. "</td><td>" .$row1['event_name']. " </td></tr>" ;
     }
 
  echo "</table>";   


?>
      
   </body>
   
</html>