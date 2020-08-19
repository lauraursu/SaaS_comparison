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
    <link href="style\result.css" rel="stylesheet">

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

<div class="results">
    Based on the information provided by you, we feel like you would like these services: <br> <br>



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
}else echo "something went wrong";
$optionValues = array (
    'free' => 'Free',
    'minimum' => '$'.$m.' - $'.$a,
    'avarage' => '$'.$a.' - $'.$mx
   // 'maximum' => $mx
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
if ($selectedPriceRange == 'free'){
    $price = 0;
}  else if ($selectedPriceRange == 'minimum'){
    $price = $a;
} else $price = $mx;
$optionValues[$selectedPriceRange]; //this is the value from the $optionValues array
$payFreq = $_POST["gridRadios"];        //how freq they want to pay, month year doesntmatter
if ($payFreq == "monthly"){
    $payFreqDB = "priceM";
} else $payFreqDB = "priceY";           //if they choose it doesnt matter, we look at the yearly price because thats the lowest

$selectedPreferences = $_POST['hand'];      //what are the functions they want, selected preferences !!its an array bc multiple items
// $n = count($selectedPreferences); //how many preferences are selected
// foreach ($selectedPreferences as $a) // all the values selected as preferences
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
    while ($row = mysqli_fetch_assoc($serviceAttend)){
    //  printf ("%s", $row["serviceName"]. '<br>');
    }
} 

$serviceHost = mysqli_query ($conn, "SELECT serviceName from service where hosts >= $numberOfHosts");
if ($serviceHost){
    while ($row = mysqli_fetch_assoc($serviceHost)){
      //  printf ("%s", $row["serviceName"]. '<br>');
    }
}
$servicePriceAt = mysqli_query ($conn, "SELECT serviceName from service where priceY <= $price");
if ($servicePriceAt){
    while ($row = mysqli_fetch_assoc($servicePriceAt)){
      //  printf ("%s", $row["serviceName"]. '<br>');
    }
}

// how freq they want to pay, see if they can pay like that, if not, don't show it, otherwise show them
// used for exclusion
//it can be payed yearly or monthly if the priceY/priceM is NOT null

$servicePayableYear = mysqli_query( $conn, "SELECT serviceName from service where priceY IS NOT NULL");
if ($servicePayableYear){
    while($row = mysqli_fetch_assoc($servicePayableYear)){
      //  printf ("%s", $row["serviceName"].'<br>');
    }
}

$servicePayableMonth = mysqli_query( $conn, "SELECT serviceName from service where priceM IS NOT NULL");
if ($servicePayableMonth){
    while($row = mysqli_fetch_assoc($servicePayableMonth)){
       // printf ("%s", $row["serviceName"].'<br>');
    }
}

//OR we can check for the names that cant be payed w selected method (the value IS null) and exclude them later

$serviceNotPayableYear = mysqli_query( $conn, "SELECT serviceName from service where priceY IS NULL");
if ($serviceNotPayableYear){
    while($row = mysqli_fetch_assoc($serviceNotPayableYear)){
      //  printf ("%s", $row["serviceName"].'<br>');
    }
}

$serviceNotPayableMonth = mysqli_query( $conn, "SELECT serviceName from service where priceM IS NULL");
if ($serviceNotPayableMonth){
    while($row = mysqli_fetch_assoc($serviceNotPayableMonth)){
      //  printf ("%s", $row["serviceName"].'<br>');
    }
}

// ---------------------------------------
//we look at the services with MORE attendees & host than given, AND the price is smaller than the pricerange, AND we can pay them at selected requency
//if hosts/attendees is NULL ==> no limit to hosts

?> 
<!-- for the cards  -->
<div class="card-group">

<?php


if ($payFreqDB == "priceM"){
$finalResult = mysqli_query( $conn, "SELECT serviceName, priceM, priceY, webpage, image from service where attendees >= $numberOfAttend OR attendees IS NULL AND hosts >= $numberOfHosts OR hosts IS NULL AND priceM <= $price AND $payFreqDB IS NOT NULL ");
}else $finalResult = mysqli_query( $conn, "SELECT serviceName, priceM, priceY, webpage, image from service where attendees >= $numberOfAttend OR attendees IS NULL AND hosts >= $numberOfHosts or hosts IS NULL AND priceY <= $price AND $payFreqDB IS NOT NULL ");
if ($finalResult){
    while($row = mysqli_fetch_assoc($finalResult)){
        //printf ("%s", $row["serviceName"].$row["priceY"].'<br>');
      //  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["image"] ).'"/>';   
      
      $array = array(
        'image' => $row["image"],
        'name' => $row["serviceName"],
        'priceY' => $row["priceY"],
        'priceM' => $row["priceM"],
        'webpage' => $row["webpage"]
    );// printf($array['image'].'<br>');

     ?>
 
 <div class="col">
     <div class="card" style="width: 18rem;">
     <?php echo '<img  class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $row["image"] ).'"/ style="height: 200px; width: 100%; display: block;">';  ?>
      <div class="card-body">
          <h5 class="card-title"><?php echo($array['name'])?></h5>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">Monthly price: <b> $<?php echo($array["priceM"]) ?> </b></li>
              <li class="list-group-item">Yearly price: <b> $<?php echo($array["priceY"]) ?> </b></li>
          </ul>
        <a href="<?php echo($array["webpage"]) ?>" class="btn btn-primary">Take me to the website</a>
      </div>
    </div>
</div>




<?php
       
    }
}

?>


<!-- Showing the results in card form -->
</div>
</div>
</div>
    <!--- Footer -->

    <?php
include 'includes/footer.php'
?>

</body>

</html>