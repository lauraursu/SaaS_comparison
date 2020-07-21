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

    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


    <?php
    // dropdown used in the form, needed to get the values since we only get the key from the _post
    $minimumPriceY = mysqli_query($conn, "SELECT min(priceY) from service");
 if ($minimumPriceY) {
     while ($row = mysqli_fetch_assoc($minimumPriceY)) {
             $m =  $row["min(priceY)"];
     }
 } 

$maximumPriceY = mysqli_query ($conn, "SELECT max(priceY) from service");
if ($maximumPriceY){
    while ($row = mysqli_fetch_assoc($maximumPriceY)){
        $mx = $row["max(priceY)"];
    }
}

$avgPriceY = mysqli_query ($conn, "SELECT ROUND(avg(priceY)) as avarage from service");

if ($avgPriceY){
    while ($row = mysqli_fetch_assoc($avgPriceY)){
        $a = $row["avarage"];
    } 
}else echo "no";
$optionValues = array (
    'free' => 'Free',
    'minimum' => $m,
    'avarage' => $a,
    'maximum' => $mx
);

//
//
//
// figuring out the best fit saas to show based on the survey
//
// 1.get the id to all matching services
// 2.store these ID-s in an array 


//
//

$numberOfHosts =$_POST["nrHosts"]; //how many hosts
$numberOfAttend =$_POST["nrAttend"]; //how many attendees
$selectedPriceRange = $_POST['range'];  //what is the pricerange they selected, this is JUST THE KEY FROM the $optionValues array  
$optionValues[$selectedPriceRange]; //this is the value from the $optionValues array
$payFreq = $_POST["gridRadios"];        //how freq they want to pay, month year doesntmatter
$selectedPreferences = $_POST['hand'];      //what are the functions they want, selected preferences !!its an array bc multiple items
$n = count($selectedPreferences); //how many preferences are selected
foreach ($selectedPreferences as $a) // all the values selected as preferences
// echo  $a."\n";


  $hostsNULL = mysqli_query($conn, "SELECT serviceName from service where hosts is NULL");  //checking if there is no limit in the db for the hosts aka no data given 
  if ($hostsNULL){
      while ($row = mysqli_fetch_assoc($hostsNULL)){        //checks which services have no host limit
        //  printf ("%s", $row["serviceName"]. '<br>');
        //   $numberOfHosts = 0; //resetting the number of hosts we care about since there is no limit in these ones   !!!probably bad
      }
  } 


//echo ("nr of hattendees:  $numberOfAttend <br>");
$serviceAttend = mysqli_query($conn, "SELECT serviceName from service where attendees >= $numberOfAttend");
if ($serviceAttend){
    echo "<b>services that have atleast the nr of attend</b> <br>";
    while ($row = mysqli_fetch_assoc($serviceAttend)){
      printf ("%s", $row["serviceName"]. '<br>');
    }
} 

$serviceHost = mysqli_query ($conn, "SELECT serviceName from service where hosts >= $numberOfHosts");
if ($serviceHost){
    echo "<b>services that have atleast the nr of hosts</b> <br>";
    while ($row = mysqli_fetch_assoc($serviceHost)){
        printf ("%s", $row["serviceName"]. '<br>');
    }
}
$servicePriceAt = mysqli_query ($conn, "SELECT serviceName from service where priceY <= $optionValues[$selectedPriceRange]");
if ($servicePriceAt){
    echo "<b>services with price lower than selected </b><br>";
    while ($row = mysqli_fetch_assoc($servicePriceAt)){
        printf ("%s", $row["serviceName"]. '<br>');
    }
}















$array = array(
    'image' => "ssss image here",
    'name' => "Name of webpage example",
    'priceY' => 1,
    'priceM' => 1,
    'webpage' => "webp"
);
// print_r($array);

?>

<!-- Showing the results in card form -->

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php print($array['name'])?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    <!--- Footer -->

    <?php
include 'includes/footer.php'
?>

</body>

</html>