<?php 
include_once '../lib/app.php';
$id=$_GET['id'];
	$query = "DELETE from theatre_show_timings where theatre_show_time_id ='$id'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	if(!$result){
		var_dump($query);
	}
	else{
		header('location: admin_dashboard_movie_resv.php');
		exit();
	}
	 // header("location: admin_dashboard_bus.php");
 ?> 