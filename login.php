<?php
if(isset($_POST['submit']))
{
include_once('db.php');
$uname = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM customer where cus_id = '".$uname."' and cus_dob = '".$pass."'";
$qry = pg_query($conn,$sql);
$count=pg_num_rows($qry);
echo"$count";
if($count)
{
    session_start();
    $sql2="SELECT * FROM booking where cus_id = '".$uname."'";
    $qry2=pg_query($conn,$sql2);
    while($row=pg_fetch_assoc($qry2)){
     $info=array("bid"=>$row['book_id'],"cus_id"=>$row['cus_id'],"bike_id"=>$row['bike_id'],"bdate"=>$row['book_date'],"ddate"=>$row['delivery_date']);
     $_SESSION['user']=$info;
    }
    echo"<script>alert('Login Successful');</script>";
    echo"<script>location.href='cusinfo.php';</script>";

}
else
{
echo"<script>alert('Unsuccessful login');</script>";
echo "<script>location.href='login.php';</script>";
}
}
if(isset($_POST['submit2']))
{
    include('db.php');
$name=$_POST['username'];
$pass=$_POST['password'];
$sql="SELECT * from administrator where admin_id ='".$name."' and ad_pass = '".$pass."'";
$qry= pg_query($conn,$sql);
if($qry)
{
    echo"<script>alert('Login Successful');</script>";
    echo"<script>location.href='admin.html';</script>";
}
else{
    echo"<script>alert('Unsuccessful login');</script>";
    echo "<script>location.href='login.php';</script>";
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="html,php">
    <meta name="author" content="Keerthana">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .login-form {
            background-color: white;
            width: 300px;
            height: 400px;
            position: relative;
            text-align: center;
            padding: 20px 0;
            margin: auto;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .col-2 img {
            width: 750px;
            align: left;
        }
        
        .account-login {
            padding: 50px;
            background: rgb(232, 232, 232);
        }
        
        .login-form span {
            font-weight: bold;
            padding: 0 10px;
            color: #555;
            cursor: pointer;
            width: 100px;
            display: inline-block;
        }
        
        .form-btn {
            display: inline-block;
        }
        
        .login-form form {
            max-width: 300px;
            padding: 0 20px;
            position: absolute;
            top: 130px;
            transition: transform 1s;
        }
        
        form input {
            width: 220px;
            height: 30px;
            margin: 10px 0;
            padding: 0 10px;
            border: 1px solid #ccc;
        }
        
        form .btn {
            width: 220px;
            border: none;
            cursor: pointer;
            margin: 10px 0;
        }
        
        form .btn:focus {
            outline: none;
        }
        
        #login {
            left: -320px;
        }
        
        #reg {
            left: 0;
        }
        
        form a {
            font-size: 15px;
        }
        
        #indicator {
            width: 60px;
            border: none;
            background: hsl(240, 73%, 42%);
            height: 3px;
            margin-top: 8px;
            transform: translateX(60px);
            transition: transform 1s;
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
                <li><a href='login.php'>Login</a></li>
            </ul>
        </nav>
    </div>
    <div class="account-login">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src=".\images\login1.jpg" alt="towelS">
                </div>
                <div class="col-2">
                    <div class="login-form">
                        <div class="form-btn">
                            <span onclick="ln()">Customer</span>
                            <span onclick="register()">Admin</span>
                            <hr id="indicator">
                        </div>
                        <form name="myform" id="login" method="post" onsubmit="return validatelform()" action="#">
                            <input type="number" placeholder="Customer_ID" name="username" id="username">
                            <input type="password" placeholder="DOB(YYYYMMDD)" name="password" id="pass">
                            <input type="submit" class="btn" value="Login" name="submit">
                            <P><a href="">Change Password?</a></P>
                        </form>
                        <form name="adform" id="reg" method="post" onsubmit="return validaterform()" action="#">
                            <input type="text" placeholder="Admin_ID" name="username" id="username">
                            <input type="password" placeholder="Password" name="password" id="password" maxlength="8">
                            <input type="submit" class="btn" value="Login" name="submit2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var login = document.getElementById("login");
        var reg = document.getElementById("reg");
        var indicator = document.getElementById("indicator");

        function register() {
            reg.style.transform = "translateX(0px)";
            login.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(65px)";

        }

        function ln() {
            reg.style.transform = "translateX(300px)";
            login.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(-60px)";
        }
    </script>
    <script>
        function validatelform() {
            var name = document.getElementById("uname").value;
            if (name == " ") {
                alert("Enter valid customer-id!")
                return false;
            }
            var pwd = document.getElementById("pass").value;
            if (pwd == " ") {
                alert("Enter your password!")

                return false;
            }
            return true;
        }

        function validaterform() {
            var name = document.getElementById("username").value;
            if (name == " ") {
                alert("Enter valid username!")

                return false;
            } 
            var pwd = document.getElementById("password").value;
            if (pwd == " ") {
                alert("Enter your password!")

                return false;
            }
            return true;
        }
    </script>
</body>

</html>