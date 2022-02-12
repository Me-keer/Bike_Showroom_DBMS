<?php
if(isset($_POST['submit']))
{
include('db.php');
$cid=$_POST['cid'];
$name=$_POST['name'];
$gen=$_POST['gen'];
$dob=$_POST['dob'];
$add=$_POST['add'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$uid=$_POST['uid'];
$un=$_POST['uidno'];
$bid=$_POST['bikeid'];

$sql="INSERT into customer(cus_id,cus_name,cus_address,cus_mobile,cus_uid,cus_uid_no,cus_gender,cus_email,cus_dob,cus_bike_id) 
values('$cid','$name','$add','$mob','$uid','$un','$gen','$email','$dob','$bid')";
$qry=pg_query($conn,$sql);
if($qry)
{
    echo"<script>alert('Successfully inserted');</script>";

}
else{
    echo"<script>alert('Failed');</script>";
}
}
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
        input[type=email] {
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

    </style>
</head>

<body>
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
    <div class="form">
        <form name="cusinfo" method="post" action="#">
            <p>Customer Details:</p>
            <label>Name:</label><br>
            <input type="text" name="name"><br>
            <hr>
            <label>Customer_ID:</label><br>
            <input type="text" name="cid"><br>
            <hr>
            <label>Gender:</label><br>
            <input type="text" name="gen"><br>
            <hr>
            <label>Date of Birth: </label><br>
            <input type="date" name="dob"><br>
            <hr>
            <label>Address:</label><br>
            <input type="text" name="add"><br>
            <hr>
            <label>Email:</label><br>
            <input type="email" name="email"><br>
            <hr>
            <label>Mobile: </label><br>
            <input type="text" name="mob"><br>
            <hr>
            <label>UID:</label><br>
            <input type="text" name="uid"><br>
            <hr>
            <label>UID No.:</label><br>
            <input type="text" name="uidno"><br>
            <hr>
            <label>Bike-ID:</label><br>
            <input type="text" name="bikeid"><br><br>
            <input type="submit" value="Add Customer" name="submit">
            <br>
        </form>
    </div>
</body>

</html>