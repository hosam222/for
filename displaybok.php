
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
    <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Display</title>
</head>
<body style="background-image: url(image/i8.jpg);background-repeat: no-repeat;background-size: cover;">
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
  
  <style>

         body {
      background-image: url(i7.jpg);
        color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 16px;
  }
  .table-responsive {
        margin: 30px 0;
    }
  .table-wrapper {
    min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
    border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
  .table-title {        
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
  }
  .table-title .btn-group {
    float: right;
  }
  .table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
  }
  .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
  }
  .table-title .btn span {
    float: left;
    margin-top: 2px;
  }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
    }
  table.table tr th:first-child {
    width: 200px;
    text-align: right;
  }
  table.table tr th {
    width: 200px;
    text-align: right;
  }
  table.table tr th:last-child {
    width: 100px;
  }
    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
  }
  table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
  }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
        margin: 0 5px;
    }
  table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
  }
  table.table td a:hover {
    color: #2196F3;
  }
  table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
  table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
  } 
  </style>
</head>
<body>



<div class="container">
    <div class="table-responsive">
      <div class="table-wrapper">
        <div class="table-title" style="background-color: #566787;">
          <div class="row">
            <div class="col-xs-2">
              <a href="register.php" class="btn btn-success" data-toggle=""><i class="material-icons">&#xE147;</i> <span>Add Shipping</span></a>
            </div>
            <div class="col-xs-10">
              <h2>Data of all BOK Acooun</b></h2>
            </div>
          </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Price Befor Oprtion</th>
              <th>Acoount Number</th>
              <th>Acoount Password</th>
              
              <th>Price After Oprtion</th>

              <th> </th>
                            <th> </th>

            </tr>
          </thead>
          <?php 
          $conn=new mysqli("localhost","root","","ship");
          $query = "SELECT * FROM  shipping ";
          $result = mysqli_query($conn,$query);
          for ($i = 0; $i < mysqli_num_rows( $result );++$i)
          {
          $line = mysqli_fetch_row($result);
          echo'
          <tbody>         
            <tr>
              <td>'. $line[0] . '</td>
              <td>'. $line[9]. '</td>
              <td>'. $line[13]. '</td>
              <td>'. $line[14]. '</td>
              <td>'. $line[15]. '</td>
              <td></td>



            
            </tr> 
          </tbody>
          '; } ?>
         </table>
      </div>
    </div>        
  </div>
</body>
</html>