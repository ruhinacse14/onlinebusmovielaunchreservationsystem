<?php
  $ad_dashboard =1;
  require_once('../lib/app.php');
  if(!user_loggedin() ){
    header('location: ../login.php');
  }
  $id= $_GET['id'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-inverse">
  		<div class="container">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#">Admin<span class="text-green">panel</span></a>
    		</div>
    		<ul class="nav navbar-nav navbar-right">
    			<li class="active"><a href="index.html"><i class="fa fa-user"></i>Admin</a></li>
    			<li><a href="../logout.php"><i class="fa fa-key"></i>Logout</a></li>
    		</ul>
  		</div>
	</nav>


	<div class="nav-tabs">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <ul class="nav nav-tabs">
              	  <li><a href="admin_dashboard.php?id=<?php echo $id ?>">Dashboard</a></li>
              	  <li><a href="admin_dashboard_bus.php">Bus</a></li>
              	  <li><a href="admin_dashboard_bus_seat.php">Bus Reservation</a></li>
              	  <li><a href="admin_dashboard_launch.php">Launch</a></li>
              	  <li><a href="admin_dashboard_launch_seat.php">Launch Reservation</a></li>
              	  <li><a href="admin_dashboard_movie.php">Movie</a></li>
                  <li><a href="admin_dashboard_movie_resv.php">Movie Reservation</a></li>
            	</ul>
        	</div>
         </div>
      </div>
  </div>