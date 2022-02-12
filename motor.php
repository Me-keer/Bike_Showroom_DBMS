<?php 
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
    <link rel="stylesheet" href="./css/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300;1,600;1,800&display=swap" rel="stylesheet">
    <style>
        .contain-abt {
            margin: 10px;
            background:  hsl(225, 17%, 95%);
            padding: 10px;
        }
        
        .column-1,
        .column-2 {
            min-width: 300px;
            margin-top: 20px;
            flex-basis: 50%;
            font-size: 20px;
            padding: 10px;
        }
        
        .column-1>p,.column-2>p {
            color: black;
            border-bottom-style:solid;
            border-color:hsl(214, 46%, 54%);
            position:relative;
        }
        
        .column-1>img,.column-2>img {
            width: 530px;
            height: 450px;
            border-radius:3px;
        }
        
        .rows {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        
        .header {
            text-align: left;
        }
        
        .nav {
            display: flex;
            padding: 10px;
            background-color: azure;
        }
        
        .nav>img {
            width: 240px;
            height: 60px;
        }
        
        nav>ul {
            display: inline-block;
            margin-left: 370px;
        }
        
        nav>ul>li {
            text-align: right;
            padding-left: 20px;
            padding-right: 50px;
            list-style: none;
            display: inline-block;
            top: 10%;
        }
        
        ul {
            margin-right: 50px;
            margin-left: 50px;
        }
        
        ul>li>a {
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            color: hsl(240, 50%, 50%);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        
        ul>li>a:hover {
            background-color: hsl(240, 59%, 61%);
            color: whitesmoke;
            border-radius: 3px;
            height: 30px;
            width: 100px;
        }
            h3{
                font-weight:none;
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
                    <li><a href='login.php'>Login</a></li>
                </ul>
            </nav>
        </div>
        <div class="contain-abt">
            <div class="rows">
                <div class="column-1">
                    <h2>Yamaha v15 v4</h2>
                    <h4>
                        Yamaha R15 V4 is powered by 155 cc engine.This R15 V4 engine generates a power of 18.4 PS @ 10000 rpm and a torque of 14.2 Nm @ 7500 rpm. Yamaha R15 V4 gets Disc brakes in the front and rear. The kerb weight of R15 V4 is 142 Kg. Yamaha R15 V4 has Tubeless
                        Tyre and Alloy Wheels.</h4><br>
                    <p><b>Engine type:</b>Liquid-cooled, 4-stroke, SOHC, 4-valve</p>
                    <p><b>Fuel capacity:</b>11L</p>
                    <p><b>Body type: </b>Sports bike</p>
                    <p><b>ABS:</b>Dual Channel</p>
                  
                    <br>
                    <?php
                    $sql="SELECT bikestock,bike_price from bike_model_details where bike_model='Yamaha R15 V4'";
                    $qry=pg_query($conn,$sql);
                    if($qry)
                    {
                    if($row=pg_fetch_assoc($qry))
                    {
                    echo "<p><b>Price: Rs.".$row['bike_price']."</b></p><br>";
                    echo "<p><b>Availability:   ".$row['bikestock']."</b></p>";
                    }
                    }
                    ?>
                </div>
                <div class="column-2">
                    <img src="./images/a.jpg" alt="image">
                </div>
            </div>
            </br>
            </br>
            <div class="rows">
                <div class="column-1">
                    <img src="./images/b.jpg">
                </div>
                <div class="column-2">
                    <h2>Yamaha FZ-Fi Version 3.0</h2>
                    <h4>Yamaha FZ-Fi Version 3.0 is powered by 149 cc engine.This FZ V3 engine generates a power of 12.4 PS @ 7250 rpm and a torque of 13.3 Nm @ 5500 rpm. Yamaha FZ-Fi Version 3.0 gets Disc brakes in the front and rear. The kerb weight of FZ V3 is 135 Kg. Yamaha FZ-Fi Version 3.0 has Tubeless Tyre and Alloy Wheels.
                </h4><br>
                    <p><b>Engine type:</b>Air-cooled, 4-stroke, SOHC, 4-valve</p>
                    <p><b>Fuel capacity:</b>13L</p>
                    <p><b>Body type: </b>Sports Naked bike</p>
                    <p><b>ABS:</b>Single Channel</p>
                    <?php
                    $sql="SELECT bikestock,bike_price from bike_model_details where bike_model like 'Yamaha FZ%'";
                    $qry=pg_query($conn,$sql);
                    if($qry)
                    {
                    if($row=pg_fetch_assoc($qry))
                    {
                    echo "<p><b><br>Price: Rs.".$row['bike_price']."</b></p><br>";
                    echo "<p><b>Availability:   ".$row['bikestock']."</b></p>";
                    }
                    }
                    ?>
                </div>

            </div>
            <div class="contain-abt">
            <div class="rows">
                <div class="column-1">
                    <h2>Yamaha MT-07</h2>
                    <h4>
                    Yamaha MT-07 is powered by 689 cc engine.This MT-07 engine generates a power of 73.4 PS @ 8750 rpm and a torque of 67 Nm @ 6500 rpm.
 Yamaha MT-07 gets Disc brakes in the front and rear. The kerb weight of MT-07 is 184 Kg. Yamaha MT-07 has Tubeless Tyre.</h4><br>
                    <p><b>Engine type:</b>Liquid-cooled, 2-cylinder, 4-stroke, DOHC, 4-valves</p>
                    <p><b>Fuel capacity:</b>14L</p>
                    <p><b>Body type: </b>Sports naked bike</p>
                    <p><b>ABS:</b>Dual Channel</p>
                    <?php
                    $sql="SELECT bikestock,bike_price from bike_model_details where bike_model='Yamaha MT-07'";
                    $qry=pg_query($conn,$sql);
                    if($qry)
                    {
                    if($row=pg_fetch_assoc($qry))
                    {
                    echo "<p><b>Price: Rs.".$row['bike_price']."</b></p><br>";
                    echo "<p><b>Availability:   ".$row['bikestock']."</b></p>";
                    }
                    }
                    ?>
                    <br>
                </div>
                <div class="column-2">
                    <img src="./images/c.jpg" alt="image">
                </div>
            </div>
            <div class="rows">
                <div class="column-1">
                    <img src="./images/d.jpg">
                </div>
                <div class="column-2">
                    <h2>Yamaha R15 M </h2>
                    <h4>Yamaha R15 V4 is powered by 155 cc engine.This R15 V4 engine generates a power of 18.4 PS @ 10000 rpm and a torque of 14.2 Nm @ 7500 rpm. Yamaha R15 V4 gets Disc brakes in the front and rear. The kerb weight of R15 V4 is 142 Kg. Yamaha R15 V4 has Tubeless Tyre and Alloy Wheels.
                </h4><br>
                    <p><b>Engine type:</b>Air-cooled, 4-stroke, SOHC, 4-valve</p>
                    <p><b>Fuel capacity:</b>11L</p>
                    <p><b>Body type: </b>Sports Naked bike</p>
                    <p><b>ABS: </b>Dual Channel</p>
                    <?php
                    $sql="SELECT bikestock,bike_price from bike_model_details where bike_model like'R15M%'";
                    $qry=pg_query($conn,$sql);
                    if($qry)
                    {
                    if($row=pg_fetch_assoc($qry))
                    {
                    echo "<p><b>Price: Rs.".$row['bike_price']."</b></p><br>";
                    echo "<p><b>Availability:   ".$row['bikestock']."</b></p>";
                    }
                    }
                    ?>
                </div>

            </div>
            <div class="contain-abt">
            <div class="rows">
                <div class="column-1">
                    <h2>Yamaha Aerox 155</h2>
                    <h4>Yamaha Aerox 155 is powered by 155 cc engine.This Aerox 155 engine generates a power of 15 PS @ 8000 rpm and a torque of 13.9 Nm @ 6500 rpm. Yamaha Aerox 155 gets Drum brakes in the front and rear. The kerb weight of Aerox 155 is 126 Kg. Yamaha Aerox 155 has Tubeless Tyre and Alloy Wheels.</h4><br>
                    <p><b>Engine type:</b>Liquid-cooled, 2-cylinder, 4-stroke, DOHC, 2-valves</p>
                    <p><b>Fuel capacity:</b>5.5L</p>
                    <p><b>ABS:</b>Single Channel</p>
                    <br>
                    <?php
                    $sql="SELECT bikestock,bike_price from bike_model_details where bike_model like 'Aerox%'";
                    $qry=pg_query($conn,$sql);
                    if($qry)
                    {
                    if($row=pg_fetch_assoc($qry))
                    {
                    echo "<p><b>Price: Rs.".$row['bike_price']."</b></p><br>";
                    echo "<p><b>Availability:   ".$row['bikestock']."</b></p>";
                    }
                    }
                    ?>
                </div>
                <div class="column-2">
                    <img src="./images/e.jpg" alt="image">
                </div>
            </div>
            <div class="rows">
                <div class="column-1">
                    <img src="./images/f.jpg">
                </div>
                <div class="column-2">
                    <h2>Yamaha FZ X </h2>
                    <h4>Yamaha FZ-X is powered by 149 cc engine.This FZ-X engine generates a power of 12.4 PS @ 7250 rpm and a torque of 13.3 Nm @ 5500 rpm. The claimed mileage of FZ-X is 55.11 kmpl. Yamaha FZ-X gets Disc brakes in the front and rear. The kerb weight of FZ-X is 139 Kg. Yamaha FZ-X has Tubeless Tyre and Alloy Wheels.
                </h4><br>
                    <p><b>Engine type:</b>Air cooled, 4-stroke, SOHC, 2-valve</p>
                    <p><b>Fuel capacity:</b>10L</p>
                    <p><b>Body type: </b>Sports bike</p>
                    <p><b>ABS: </b>Single Channel</p>
                    <?php
                    $sql="SELECT bikestock,bike_price from bike_model_details where bike_model like 'Yamaha FZ-X%'";
                    $qry=pg_query($conn,$sql);
                    if($qry)
                    {
                    while($row=pg_fetch_assoc($qry))
                    {
                    echo "<p><b>Price: Rs.".$row['bike_price']."</b></p><br>";
                    echo "<p><b>Availability:   ".$row['bikestock']."</b></p>";
                    }
                    }
                    ?>
                </div>

            </div>
            <div class="contain-abt">
            <div class="rows">
                <div class="column-1">
                    <h2>Yamaha Fascino 125</h2>
                    <h4>Yamaha Fascino 125 is powered by 125 cc engine.This Fascino 125 engine generates a power of 8.2 PS @ 6500 rpm and a torque of 10.3 Nm @ 5000 rpm. The claimed mileage of Fascino 125 is 68.75 kmpl. Yamaha Fascino 125 gets Drum brakes in the front and rear. The kerb weight of Fascino 125 is 99 Kg. Yamaha Fascino 125 has Tubeless Tyre and Alloy Wheels.</h4><br>
                    <p><b>Engine type:</b>Liquid-cooled, 2-cylinder, 4-stroke, DOHC, 2-valves</p>
                    <p><b>Fuel capacity:</b>5.5L</p>
                    <p><b>ABS:</b>Single Channel</p>
                    <?php
                    $sql="SELECT bikestock,bike_price from bike_model_details where bike_model like 'Yamaha Fascino%'";
                    $qry=pg_query($conn,$sql);
                    if($qry)
                    {
                    while($row=pg_fetch_assoc($qry))
                    {
                    echo "<p><b>Price: Rs.".$row['bike_price']."</b></p><br>";
                    echo "<p ><b>Availability:   ".$row['bikestock']."</b></p>";
                    }
                    }
                    ?>
                    <br>
                </div>
                <div class="column-2">
                    <img src="./images/g.jpg" alt="image">
                </div>
            </div>
            <div class="rows">
                <div class="column-1">
                    <img src="./images/h.jpeg">
                </div>
                <div class="column-2">
                    <h2>Yamaha RayZ 125 </h2>
                    <h4>Yamaha has launched the Ray-ZR 125 Fi Hybrid and Street Raly 125 hybrid from Rs 76,830 onward The scooter receives comprehensive updates for 2021 such as an LED headlight, LED tail light, Bluetooth connectivity, and, most importantly, a hybrid engine.
                </h4><br>
                    <p><b>Engine type:</b>Air cooled, 4-stroke, SOHC, 2-valve</p>
                    <p><b>Fuel capacity:</b>5.2L</p>
                    <?php
                    $sql="SELECT bikestock,bike_price from bike_model_details where bike_model like 'Yamaha Ray-%'";
                    $qry=pg_query($conn,$sql);
                    if($qry)
                    {
                    while($row=pg_fetch_assoc($qry))
                    {
                    echo "<p><b>Price: Rs.".$row['bike_price']."</b></p><br>";
                    echo "<p><b>Availability:   ".$row['bikestock']."</b></p>";
                    }
                    }
                    ?>
                </div>

            </div>
            
 </div>