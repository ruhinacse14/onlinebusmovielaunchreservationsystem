 <?php 
$dashboard = 1;

require_once('../lib/app.php'); 

if(!user_loggedin() ){
  header('location: ../login.php');
}

$id = $_GET['id'];
$query = "SELECT * from users  where id = ".$id;
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$data = mysqli_fetch_assoc($result);


  // $path = $config->base_url.'/homepage.php';
  // $signuser = $config->base_url.'/profile.php';
  // $bus = $config->base_url.'/bus/bus.php';
  // $movie = $config->base_url.'/movies/movie.php';
  // $signout = $config->base_url.'/functions/logout.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
  </head>
  <body>
    <nav class="navbar navbar-default navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo $path ?>">Sohoj<span class="text-green">Ticket.</span></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="bus.php?id=<?php echo $id ?>"><i class="fa fa-film"></i>Bus</a></li>
          <li><a href="../profile.php?id=<?php echo $id ?>"><?php echo $data['username']; ?></a></li>
          <li><a href="../functions/logout.php">LogOut</a></li>
        </ul>
      </div>
  </nav>