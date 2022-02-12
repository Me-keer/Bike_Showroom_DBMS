<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bike showroom management">
    <meta name="keywords" content="html,css">
    <meta name="author" content="Keerthana">
    <title>Home_page</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:hsla(240, 50%, 50%,0.4);;
}
p{
    text-align:center;
    font-size:20px;
    font-weight:bold;
}
</style>
</head>

<body>
    <div class="header">
        <div class="nav">
            <img src="images/logo1.jpg" alt="logo">
            <nav>
                <ul>
                    <li><a href='index.html'>Home</a></li>
                    <li><a href='motor.php'>Motorcycles</a></li>
                    <li><a href='logout.php'>Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <?php
    $bid=$_SESSION['user']['bid'];
    $cid=$_SESSION['user']['cus_id'];
    $bikeid=$_SESSION['user']['bike_id'];
    $bdate=$_SESSION['user']['bdate'];
    $ddate=$_SESSION['user']['ddate'];
    $sql1="SELECT cus_name from customer where cus_id='".$cid."'";
    $qry1=pg_query($conn,$sql1);
    if($row=pg_fetch_assoc($qry1))
    {
        echo"<p>Welcome  ".$row['cus_name']."!!</p> <p>Booking and Service Details</p>";
    }
    echo"
    <table>
    <tr>
    <th>Booking_ID</th>
    <th>Customer_ID</th>
    <th>Bike_ID</th>
    <th>Booking Date</th>
    <th>Delivery Date</th>
    </tr>
    <tr>
    <td>$bid</td>
    <td>$cid</td>
    <td>$bikeid</td>
    <td>$bdate</td>
    <td>$ddate</td>
    </tr>
    <br>
    <br>
    ";
    $sql="SELECT ser_id,bike_id,ser_bd,ser_dd,ser_status from booked_service where cus_id='".$cid."'";
    $qry=pg_query($conn,$sql);
    if($row1=pg_fetch_assoc($qry))
    {
    echo"
    <table>
    <tr>
    <th>Service_ID</th>
    <th>Bike_ID</th>
    <th>Booking Date</th>
    <th>Expected Delivery Date</th>
    <th>Service Status</th>
    </tr>
    <tr>
    <td>".$row1['ser_id']."</td>
    <td>".$row1['bike_id']."</td>
    <td>".$row1['ser_bd']."</td>
    <td>".$row1['ser_dd']."</td>
    <td>".$row1['ser_status']."</td>
    </tr>
    <br>
    <br>";
    }
    ?>
</body>
</html>