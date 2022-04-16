<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/cssform.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

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
<div class="banner">
          <h1>Global Shipping Company</h1>
        </div>
        <form method="POST">
        <h2>Shipping Details</h2>
        <div class="item">
          <p>Sender</p>
          <div class="name-item">
            <input type="text" name="namesender" placeholder="Name "/>
            <input type="text" name="Phonesender" placeholder="Phone"/>
          </div>
        </div>
        <div class="item">
          <p>Recviver</p>
          <div class="name-item">
            <input type="text" name="namereciver" placeholder="Name"/>
            <input type="text" name="Phonreciver" placeholder="Phone"/>
          </div>
        </div>
        <p>Charging type</p>
            <select name="weight" class="form-control">
              <option value="10K">10K</option>
              <option value="20K">20K</option>
              <option value="30K">30K</option>
            </select>
            <p>From</p>
            <select name="fcountry" class="form-control">
              <option value="">Country</option>
              <option value="Khartoum">Khartoum</option>
              <option value="Gedaref">Gedaref</option>
              <option value="Al Jazeera">Al Jazeera</option>
              <option value="Blue Nile">Blue Nile</option>
              <option value="East Darfur State">East Darfur State</option>
            </select>
            <p>To</p>
            <select name="tcountry" class="form-control">
              <option value="">Country</option>
              <option value="Khartoum">Khartoum</option>
              <option value="Gedaref">Gedaref</option>
              <option value="Al Jazeera">Al Jazeera</option>
              <option value="Blue Nile">Blue Nile</option>
              <option value="East Darfur State">East Darfur State</option>
            </select>
            <p>Charging type</p>
            <select name="freight" class="form-control">
              <option value="Air freight">Air freight</option>
              <option value="Sea freight">Sea freight</option>
              <option value="land shipping">land shipping</option>
            </select>
        <div class="item">
          <p>Date of Shipment</p>
          <input type="date" name="bdate"/>
          <i class="fas fa-calendar-alt"></i>
      </div>
          
    <p>Shipment type</p>
            <select name="Shipment" class="form-control">
              <option value="Raw materials">Raw materials</option>
              <option value="Drugs">Drugs</option>
              <option value="indestructible">indestructible</option>
            </select><p>Delivery type</p>
            <select name="Delivery" class="form-control">
              <option value="company">Delivery from the company</option>
              <option value="home">Delivery from the home</option>
            </select>
        <div class="btn-block">
          <input type="submit" name="ch"  value="Send" class="btn-success" style="height:40px; width:150px; background: #095484;"> 
        </div>

	 	<center>
	  	<?php
      
	  	if (isset($_POST["ch"])) 
	    {
	  		$namesender=$_POST["namesender"];
	  		$Phonesender=$_POST["Phonesender"];
	  		$namereciver=$_POST["namereciver"];
	  		$Phonreciver=$_POST["Phonreciver"];
	  		$weight=$_POST["weight"];
	  		$fcountry=$_POST["fcountry"];
        $freight=$_POST["freight"];
        $tcountry=$_POST["tcountry"];
        $bdate=$_POST["bdate"];
        $Delivery=$_POST["Delivery"];
        $Shipment=$_POST["Shipment"];
        
      


	  	
	 	$conn=new mysqli("localhost","root","","ship"); 
	 	$sql="insert into shipping(shipping_sname,shipping_snumber,shipping_rname,shipping_rnumber,shipping_size,shipping_from,shipping_to,shipping_date,shipping_type,shipping_delivery,shipping_shipment) values ('$namesender','$Phonesender','$namereciver','$Phonreciver','$weight','$fcountry','$tcountry','$bdate','$freight','$Delivery','$Shipment')";
    mysqli_query($conn, $sql);

        if (mysqli_query($conn,$sql)){
echo "<div class='alert alert-success' style='margin:5px'>
  <strong>Success!</strong> Register successfully .
</div>";    }
else
    {
echo "<div class='alert alert-danger' style='margin:5px'>
  <strong>Error!</strong> Register Filed .
</div>";
    }
	  		
	  	
	  	}

	  	?>
      </center>

	</div>
</form>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>