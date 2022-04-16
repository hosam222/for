<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Pay</title>
</head>
<body style="background-image: url(image/i11.jpg);background-repeat: no-repeat;background-size: cover;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
          </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="update.php"><span class="glyphicon glyphicon-usd"></span>  Pay</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-shopping-cart"></span>  About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-off"></span> <?php session_start(); error_reporting(0); if ($_SESSION["wh"]==1) {
          echo $_SESSION["name"];
        } else echo "Exit"?></a></li>
        
      </ul>
    </div>
  </div>
</nav>
<center>
	<form action="#" method="POST">
	<div style="width:25%;margin-top: 100px; grey;padding: 2%;background-color: #646060 " >

	    <label style="color:white">Khartoum To Gedaref is 500</label>
  <br><label style="color:white">Khartoum To Al Jazeera is 1600</label>
  <br><label style="color:white">Khartoum To Blue Nile is 900</label>
  <br><label style="color:white">Khartoum To East Darfur State is 3000</label>
  <br><label style="color:white">Gedaref To East Darfur Stat is 3000</label>
  <br><label style="color:white">Gedaref To East Al Jazeera  is 1200</label>
  <br><label style="color:white">Gedaref To Blue Nile is 1500</label>
  <br><label style="color:white">Blue Nile To East Darfur Stat is 2500</label>
  <br><label style="color:white">Blue Nile To Al Jazeera is 800</label>
  <br><label style="color:white">Al Jazeera To East Darfur Stat is 4000</label>
  <br>

   <label style="color:white">account number </label><br>
   <input type="text" name="number" class="form-control" required="" placeholder="number"><br>
   <label style="color:white">account Password </label><br>
   <input type="password" name="Password" class="form-control" required="" placeholder=" Password"><br>
   <label style="color:white">Price </label><br>
   <input type="text" name="Price" class="form-control" required="" placeholder=" Price"><br>
<br>
<br>
          <input type="submit" name="ch"  value="Send" class="btn-success" style="height:40px; width:150px; background: #095484;"> 
<?php
      if (isset($_POST["ch"])) 
      {
                $conn=new mysqli("localhost","root","","ship"); 

        $number=$_POST["number"];
        $Password=$_POST["Password"];
         $Price=$_POST["Price"];
$Khartoum='Khartoum';
$Gedaref='Gedaref';
$AlJazeera='Al Jazeera';
$BlueNile='Blue Nile';
$EastDarfurState='East Darfur State';

$sql="insert into shipping  (shipping_pricrb) values ('$Price')";
if (mysqli_query($conn,$sql)) {
               $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$Khartoum' && shipping_to='$Gedaref'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-500;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }
  $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$Khartoum' && shipping_to='$AlJazeera'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-1600;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }


  $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$Khartoum' && shipping_to='$BlueNile'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-900;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }

  $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$Khartoum' && shipping_to='$EastDarfurState'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-3000;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }

     $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$Gedaref' && shipping_to='$AlJazeera'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-1200;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }

  $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$Gedaref' && shipping_to='$BlueNile'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-1500;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }

  $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$Gedaref' && shipping_to='$EastDarfurState'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-2000;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }

  $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$BlueNile' && shipping_to='$EastDarfurState'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-2500;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }
        $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$BlueNile' && shipping_to='$AlJazeera'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-800;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }
        $query=mysqli_query($conn,"select * from `shipping` where shipping_from='$EastDarfurState' && shipping_to='$AlJazeera'");
               $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
         if ($num_rows>0){
          $Price=$Price-800;
                $sql="insert into shipping(account_number,account_password,shipping_price) values (' $number',' $Password','$Price')";
        }


if (mysqli_query($conn,$sql)){
echo "<div class='alert alert-success' style='margin:5px'>
  <strong>Success!</strong> Paying successfully .
</div>";    }
else
    {
echo "<div class='alert alert-danger' style='margin:5px'>
  <strong>Error!</strong> register Filed .
</div>";
    }
  }
  }
	 ?>
	</div>
</form>
</center>
</body>
</html>