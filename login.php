<!DOCTYPE html>
<html>
<head>
		<style type="text/css">
			.btn {
  transition-duration: 0.4s;
}

.btn:hover {
	color: white;
  background-color: #4CAF50;
  
}
		</style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>login</title>
</head>
<body style="background-image: url(image/i.jpg);background-repeat: no-repeat;background-size: cover;">
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
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php session_start(); error_reporting(0); if ($_SESSION["wh"]==1) {
          echo $_SESSION["name"];
        } else echo "login"?></a></li>
        
      </ul>
    </div>
  </div>
</nav>
<center>
	<form action="#" method="POST">
	<div style="width:25%;margin-top: 200px;box-shadow:10px 10px 70px 15px grey;padding: 2%;background-color: #fffde7  opacity:1.5;"" >
	<label style="color:white">UserName</label><br>
	 <input type="text" name="us" class="form-control" required="" placeholder="UserName"><br>
	 <label style="color:white">Password</label><br>
	 <input type="password" name="pass" class="form-control" required="" placeholder="Password">
	
	  <input type="submit" name="ch"  value="login" class="btn" style="margin:10px;width: 25%">
	  <br>
	  Already a member? <a href="user.php">Sign in</a>


	  
	 	
	  	<?php
	  	$conn=new mysqli("localhost","root","","ship");	  	
	  	if (isset($_POST["ch"])) 
	  	{ 

	  		$username=$_POST["us"];
	  		$password=$_POST["pass"];
          $query=mysqli_query($conn,"select * from `user` where user_name='$username' && user_password='$password'");
          $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
 
         if ($num_rows>0){
         $_SESSION["name"]=$_POST["us"];
	  			header("location:home.php");
	  			
        }
  else{
       $query=mysqli_query($conn,"select * from `admin` where admin_name='$username' && admin_password='$password'");
          $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
 
         if ($num_rows>0){
         $_SESSION["name"]=$_POST["us"];
	  			header("location:register.php");
	  			
        }
  else{
       echo "<div class='alert alert-danger' style='margin:5px'>
  <strong>Error!</strong> invalid UserName or Password.
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