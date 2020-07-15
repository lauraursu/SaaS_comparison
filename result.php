<?php
session_start();
$page = "result"; 		//used to find the active page for the menu; used in includes/menu/php
?>


<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" type="image/jpg" href="img/logo/icons811.png" />
<!--favicon -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome at OmniCompare!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style\style.css" rel="stylesheet">

    <!-- Scroll to top button -->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="style\top-button.css" rel="stylesheet">

</head>

<body>

    <!-- php connecting to database -->
    <?php
include 'includes/connect_to_db.php'
?>
    <!-- Navigation -->

    <?php
include 'includes/menu.php'
?>

    <!-- content  -->

    <!-- $mysqli = mysqli_connect("example.com", "user", "password", "database");   i use $conn
$res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
$row = mysqli_fetch_assoc($res);
echo $row['_msg']; -->


    Based on the information provided by you, we feel like you would like these services: <br> <br>

    <?php
$numberOfHosts =$_POST["nrHosts"]; //getting the value from the form
  echo ("nr of hosts:  $numberOfHosts <br>");

  $hostsNULL = mysqli_query($conn, "SELECT serviceName from service where hosts is NULL");  //checking if there is no limit in the db for the hosts aka no data given 
  if ($hostsNULL){
      while ($row = mysqli_fetch_assoc($hostsNULL)){        //checks which services have no host limit
          printf ("%s", $row["serviceName"]. '<br>');
        //   $numberOfHosts = 0; //resetting the number of hosts we care about since there is no limit in these ones   !!!probably bad
      }
  } 

$numberOfAttend =$_POST["nrAttend"]; //getting the value from the form
echo ("nr of hattendees:  $numberOfAttend <br>");
$attend = mysqli_query($conn, "SELECT serviceName from service where attendees > $numberOfAttend");
if ($attend){
    while ($row = mysqli_fetch_assoc($attend)){
        printf ("%s", $row["serviceName"]. '<br>');
    }
} 



?>
    <!--- Footer -->

    <?php
include 'includes/footer.php'
?>

</body>

</html>