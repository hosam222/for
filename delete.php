<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>Delete</title>
</head>
<body style="background-image: url(image/i7.jpg);background-repeat: no-repeat;background-size: cover;">
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
        <li><a href="displaybok.php"><span class="glyphicon glyphicon-cloud-download"></span>  View BOK</a></li>


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
	<div style="width:25%;margin-top: 100px;box-shadow:20px 20px 50px 15px grey;padding: 2%;background-color: #646060 " >
	<label style="color:white">ID</label><br>
	 <input type="text" name="id" class="form-control" required="" placeholder="ID" ><br>
	 		<br><br><br><br><br>

	  <input type="submit" name="ch"  value="Delete" class="btn-success" style="height:40px; width:150px; ">
	  

	  		<?php 
	  			if (isset($_POST["ch"]))
	  			{
	  				$id=$_POST["id"];

	  		    $conn=new mysqli("localhost","root","","ship"); 
                $sql = "DELETE  FROM shipping WHERE shipping_id= $id"; 
                 if (mysqli_query($conn, $sql) == $id ) 
                  {
                          echo "<div class='alert alert-success' style='margin:5px'>
                               <strong>DELETE!</strong> delete successfully .
                               </div>"; } 
                     else {
                    echo "<div class='alert alert-success' style='margin:5px'>
                               <strong>ERROR!</strong>NOT FOUND .
                               </div>"; 
                           }
                     mysqli_close($conn);

                   
	  	        }
	 
	  	?>
	</div>
</form>
</center>
</body>
</html>