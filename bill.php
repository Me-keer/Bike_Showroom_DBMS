<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bike showroom management">
    <meta name="keywords" content="html,css">
    <meta name="author" content="Keerthana">
    <title>Payment-bill</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
      .form {
            background: rgb(232, 232, 232);
            margin-left: 160px;
            margin-top:20px;
            background-color: rgb(226, 236, 236);
            width: 900px;
            color: black;
            font-size: 20px;
            border-radius: 5px;
            box-shadow: 0 0 20px 0 hsla(240, 66%, 38%, 0.7);
        }
      h2,h3{
            text-align:center;
            color:black;
        }
        table {
        border-collapse: collapse;
        width: 50%;
        margin-left: 320px;
        margin-top:0px;
    }
    
    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    tr:hover {
        background-color: yellow;
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
    
<?php
  if(isset($_POST['submit']))
  {
      include('db.php');
      $pid=$_POST['pid'];
      $cid=$_POST['cid'];
      $bid=$_POST['bid'];
      $pmode=$_POST['pmode'];
      $pdate=$_POST['pdate'];
      $bkid=$_POST['bkid'];
      $did=$_POST['did'];
      $pamt=$_POST['pamt'];
      $sql="INSERT into payment(pay_date,pay_mode,dis_id,pay_amt,book_id,pay_cus_id) values('$pdate','$pmode','$did','$pamt','$bid','$cid')";
      $qry=pg_query($conn,$sql);
      if($qry){
          $sql2="SELECT dis_per from discount where dis_id='".$did."'";
          $qry2=pg_query($conn,$sql2);
          $sql3="SELECT cus_name from customer where cus_bike_id='".$bkid."'";
          $qry3=pg_query($conn,$sql3);
          $sql4="SELECT bike_model from bike_model_details bm inner join bike_details bd on bm.bike_model_id=(SELECT bike_model_id from bike_details where bike_id='".$bkid."')";
          $qry4=pg_query($conn,$sql4);
          if($qry2 && $qry3)
          {
              if($row=pg_fetch_assoc($qry2) and $row2=pg_fetch_assoc($qry3) and $row3=pg_fetch_assoc($qry4))
              {
                  
                  $sum=$row['dis_per']*$pamt;
                
                  $dis=$sum/100;
                  $amt=$pamt-$dis;
                  $name=$row2['cus_name'];
                  $bname=$row3['bike_model'];
    
              $tax=(0.07*$pamt);
              $tamt=$amt+$tax;
              $sql5="INSERT into bill(Date,Cus_name,bike_model,bike_price,dis_amt,tax,total) values('$pdate','$name','$bname','$pamt','$dis','$tax','$tamt')";
              $qry5=pg_query($conn,$sql5);
              echo" <div class='form'>
              <h2>ACL MOTORS</h2>
    <h3>BILLING DETAILS</h3>
              <table>
              <tr>
              <th>Date</th>
              <td>$pdate</td>
              </tr>
              <tr>
              <th>Customer Name</th>
              <td>$name</td>
              </tr>
              <tr>
              <th>Bike Model</th>
              <td>$bname</td>
              </tr>
              <tr>
              <th>Bike Price</th>
              <td>Rs.$pamt</td>
              </tr>
              <tr>
              <th>Discount Amount</th>
              <td>Rs.$dis</td>
              </tr>
              <tr>
              <th>Tax Charges</th>
              <td>Rs.$tax<td>
              </tr>
              <tr>
              <th>Payable Amount<th>
              <td>Rs.$tamt</td>
              </tr>
              <tr>
              <th></th>
              </tr>
              </table>
              </br>
              <br>
              <br>";
              echo"<script>alert('Updated Details Successfully');</script>";
          }
      
      }
    }
      else{
          echo"<script>alert('Insertion Failed');</script>";
          echo"<script>location.href='admin.html';</script>";
      }

    }
?>
</body>

</html>