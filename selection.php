<html>

<head><title>Event Selection</title>
<link rel="stylesheet" href="style.css"> 
<style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
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
        background-color: rgb(48, 48, 48);
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
        
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }


</style>
</head>
<body>

    <form action="sel_db.php" method="POST" >
    <h1> Select your choice of events (Max 3 events for each individual)</h1>
  <div style="width:12vw; margin-left : 40vw;">  
  
  <div class="textbox" >    
        <input type="number" placeholder="Event ID(1)" name="ev1"> 
</div>
<div class="textbox" >    
        <input type="number" placeholder="Event ID(2)" name="ev2"> 
</div>
<div class="textbox" >    
        <input type="number" placeholder="Event ID(3)" name="ev3"> 
</div>
<input type="submit" value="Submit" class="btn">

</div>
</form>
</body>
</html>

<?php

include("session.php");
print($login_session);




$qr = "select * from event_tb;";
$result1 = mysqli_query($db,$qr); 

echo "</br></br>";
echo "<table style='margin-top: 20vh;'>"; 
echo "<tr style='background-color: green;'> <td>Event ID</td><td>Event Name </td></tr>";

while($row1 = mysqli_fetch_array($result1)) {
   
   echo "<tr style='color:white;'> <td>" .$row1['event_id']. "</td><td>" .$row1['event_name']. " </td></tr>" ;
}

echo "</table>";   



?>
