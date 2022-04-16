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

	<title>Update</title>
</head>
<body style="background-image: url(image/i1.jpg);background-repeat: no-repeat;background-size: cover;">
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
        <center>
        	<div class="name-item">
            <input type="text" name="ID" placeholder="ID "/>
                 </div>
        </center>
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
              <option value="Russia">Russia</option>
              <option value="Germany">Germany</option>
              <option value="France">France</option>
              <option value="Armenia">Armenia</option>
              <option value="USA">USA</option>
            </select>
            <p>To</p>
            <select name="tcountry" class="form-control">
              <option value="">Country</option>
              <option value="Russia">Russia</option>
              <option value="Germany">Germany</option>
              <option value="France">France</option>
              <option value="Armenia">Armenia</option>
              <option value="USA">USA</option>
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
          <div class="name-item">
            <input type="text" name="price" placeholder="price"  style=" width: 100%;"/>
          </div>
          <label >Upload the image of the operation </label>
    <input type="file" id="uploadfile" name="uploadfile" multiple">
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
	    	$ID=$_POST["ID"];
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
	 	$sql=" UPDATE shipping SET shipping_sname = '$namesender',shipping_snumber = '$Phonesender',shipping_rname = '$namereciver' ,shipping_rnumber = '$Phonreciver' ,shipping_size = '$weight',shipping_from = '$fcountry',shipping_to = '$tcountry',shipping_date = '$bdate',shipping_type = '$freight',shipping_delivery = '$Delivery',shipping_shipment = '$Shipment' WHERE shipping_id= $ID";
                    mysqli_query($conn, $sql);

        if (move_uploaded_file($tempname, $folder))  {

echo "<div class='alert alert-success' style='margin:5px'>
  <strong>Success!</strong> Update successfully .
</div>";    }
else
    {
echo "<div class='alert alert-danger' style='margin:5px'>
  <strong>Error!</strong> Update Filed .
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