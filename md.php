<?php
  if(isset($_POST['submit']))
  {
      include('db.php');
      $mid=$_POST['mid'];
      $mname=$_POST['mname'];
      $desc=$_POST['desc'];
      $price=$_POST['price'];
      $stock=$_POST['stock'];
      $btype=$_POST['btype'];
      $sql="INSERT into bike_model_details values('$mid','$mname','$desc','$price','$btype','$stock')";
      $qry=pg_query($conn,$sql);
      if($qry){
      echo"<script>alert('Updated');</script>";
      echo"<script>location.href='admin.html';</script>";
      }
      else{
          echo"<script>alert('Update Failed');</script>";
          echo"<script>location.href='admin.html';</script>";
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
    <title>Bike Model Details</title>
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
            <p>Bike Model Details</p>
            <label>Model-ID:</label><br>
            <input type="number" name="mid"><br>
            <hr>
            <label>Model Name:</label><br>
            <input type="text" name="mname"><br>
            <hr>
            <label>Description:</label><br>
            <input type="text" name="desc"><br>
            <hr>
            <label>Price:</label><br>
            <input type="number" name="price"><br>
            <hr>
            <label>Stock availability:</label><br>
            <input type="number" name="stock"><br>
            <hr>
            <label>Bike Type:</label><br>
            <input type="text" name="btype"><br>
            <br>
            <input type="submit" value="ADD" name="submit">
            <br>
        </form>
    </div>
</body>

</html>