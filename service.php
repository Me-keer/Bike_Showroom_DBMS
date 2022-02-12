<?php
 if(isset($_POST['submit2']))
 {
     echo"<script>location.href='sb.php'</script>";
 }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bike showroom management">
    <meta name="keywords" content="html,css">
    <meta name="author" content="Keerthana">
    <title>Booking</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .form {
            background: rgb(232, 232, 232);
        }
        
        form {
            margin-left: 160px;
            padding: 10px;
            margin-top: 20px;
            background-color: rgb(226, 236, 236);
            width: 900px;
            color: black;
            font-size: 20px;
            border-radius: 5px;
            box-shadow: 0 0 20px 0 hsla(240, 66%, 38%, 0.7);
        }
        
        input[type=text],
        input[type=date],
        input[type=number] ,
        input[type=time]{
            align-items: right;
            margin-left: 300px;
            width: 50%;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            padding: 8px 15px;
        }
        
        form>label {
            margin: 80px;
        }
        
        .form>form>p {
            font-weight: bold;
            text-align: center;
            font-size: 25px;
        }
        input[type=submit] {
  width: 50%;
  background-color:hsl(240, 50%, 50%);
  color: white;
  padding: 14px 20px;
  margin-left: 300px ;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: hsla(240, 50%, 50%,0.7);
}
.dis{
   text-align:center;
    font-weight:bold;
    font-size:20px;
    
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
                    <li><a href='admin.html'>Back</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="form">
        <form name="cusinfo" method="post" action="#">
            <p>Enter Customer Details</p>
            <label>Customer-ID:</label><br>
            <input type="number" name="cid"><br>
            <hr>
            <label>Bike-ID</label><br>
            <input type="text" name="bikeid"><br>
            <hr>
            <input type="submit" value="Check" name="submit">
            <br>
 
            <?php
            if(isset($_POST['submit']))
            {
                include('db.php');
                $cid=$_POST['cid'];
                $bikeid=$_POST['bikeid'];
                $sql="SELECT free_ser from service where cus_id= '".$cid."' and bike_id ='".$bikeid."' ";
                $qry=pg_query($conn,$sql);
                if($qry)
                {
              while($row=pg_fetch_assoc($qry))
              {
                  echo"
                       <script>alert('No. of Free Services Left: ".$row['free_ser']."');</script>
                       <br>
                       <input type='submit' value='Continue Service Booking' name='submit2'>
                       ";
              }
            }
            }
            ?>
         </form>
    </div>
</body>

</html>