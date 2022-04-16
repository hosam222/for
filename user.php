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
<body style="background-image: url(image/i10.jpg);background-repeat: no-repeat;background-size: cover;">
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
	<label style="color:white">User Name</label><br>
	 <input type="text" name="Name" class="form-control" required="" placeholder="Name of Shipping"><br>
	 <label style="color:white">User Password</label><br>
	 <input type="text" name="Password" class="form-control" required="" placeholder="Password"><br>
	 <label style="color:white"> You Phone</label><br>
	 <input type="text" name="ph" class="form-control" required="" placeholder="Phone"><br>
	<label style="color:white">User E-mail</label><br>
	 <input type="email" name="email" class="form-control" required="" placeholder="Email"><br>
	 <input type="submit" name="ch"  value="Finsh" class="btn-success" style="height:40px; width:70px "> 
	 	 
	 	
	  	<?php
	  	if (isset($_POST["ch"])) 
	    {
	  		$Name=$_POST["Name"];
	  		$Password=$_POST["Password"];
	  		$email=$_POST["email"];
	  		$phone=$_POST["ph"];
	  	
	  	
	  	$conn=new mysqli("localhost","root","","ship"); 
	  	$sql="insert into user(user_name,user_password,user_email,user_phone) values ('$Name','$Password','$email','$phone')";
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