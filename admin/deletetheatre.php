<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../lib/app.php');
if($_GET['id'])
{
	$id=$_GET['id'];
	$query = "DELETE from theatres where theatre_id ='$id'";
	$result = mysqli_query($con,$query);
	 header("location: admin_dashboard_movie_resv.php");
}

?>