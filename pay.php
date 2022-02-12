
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bike showroom management">
    <meta name="keywords" content="html,css">
    <meta name="author" content="Keerthana">
    <title>Payment</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        
        .form {
            background: rgb(232, 232, 232);
        }
        
        form {
            margin-left: 160px;
            padding: 10px;
            margin-top:20px;
            background-color: rgb(226, 236, 236);
            width: 900px;
            color: black;
            font-size: 20px;
            border-radius: 5px;
            box-shadow: 0 0 20px 0 hsla(240, 66%, 38%, 0.7);
        }
        
        input[type=text],
        input[type=date],
        input[type=number] {
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
            margin-left: 80px;
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
table {
        border-collapse: collapse;
        width: 50%;
        margin-left: 320px;
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
    <div class="form">
        <form name="cusinfo" method="post" action="bill.php">
            <p>Payment Details:</p>
            <label>Payment-ID:</label><br>
            <input type="number" name="pid"><br>
            <hr>
            <label>Payment date:</label><br>
            <input type="date" name="pdate"><br>
            <hr>
            <label>Booking-ID</label><br>
            <input type="number" name="bid"><br>
            <hr>
            <label>Customer-ID</label><br>
            <input type="number" name="cid"><br>
            <hr>
            <label>Bike-ID</label><br>
            <input type="text" name="bkid"><br>
            <hr>
            <label>Discount-ID:</label><br>
            <input type="text" name="did"><br>
            <hr>
            <label>Payment amount:</label><br>
            <input type="number" name="pamt"><br>
            <hr>
            <label>Payment mode:</label><br>
            <input type="text" name="pmode"><br>
            <br>
            <input type="submit" value="Generate Bill" name="submit">
            <br>
        </form>
    </div>
</body>

</html>