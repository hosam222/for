<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>register</title>
</head>
<body style="background-image: url(image/i5.jpg);background-repeat: no-repeat;background-size: cover;">
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
        <li class="active"><a href="register.php"><span class="glyphicon glyphicon-user"></span>  Add Shipping</a></li>
        <li><a href="update.php"><span class="glyphicon glyphicon-refresh"></span>  Update Shipping</a></li>
        <li><a href="delete.php"><span class="glyphicon glyphicon-trash"></span>  Delete Shipping</a></li>
        <li><a href="display.php"><span class="glyphicon glyphicon-cloud-download"></span>  View Shipping</a></li>

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
	<div style="width:25%;margin-top: 100px;box-shadow:20px 20px 80px 15px grey;padding: 2%;background-color: #646060 " >
	<label style="color:white">Account Number BOK </label>
	<br>
	<label style="color:white">2670599 </label><br>
	 <input type="text" name="BOK" class="form-control" required="" placeholder="Price"><br>
	 	<label style="color:white">Upload the image of the operation </label><br>
	 	<br>
    <input type="file" id="file" name="image" multiple>
<br>
<br>
	 <input type="submit" name="ch"  value="Add" class="btn-success" style="height:40px; width:70px "> 
	 	 <input type="submit" name="chh"  value="Back" class="btn-success" style="height:40px; width:70px "> 

	 	
	  	<?php
	  	if (isset($_POST["ch"])) 
	    {
	  		$BOK=$_POST["BOK"];
	  		$Date=$_POST["Date"];
	  		
	  	
	  	$conn=new mysqli("localhost","root","","ship"); 
	  	$sql="insert into shipping(shipping_name,shipping_date,shipping_address,shipping_number,shipping_phone,shipping_size) values ('$Name','$Date','$Address','$Number','$phone','$Size')";
	  	if (mysqli_query($conn,$sql)) {
	  		echo "<div class='alert alert-success' style='margin:5px'>
  <strong>Success!</strong> register successfully .
</div>";
	  	}
	  	}
	  	?>

	</div>
</form>
</center>
</body>
</html>