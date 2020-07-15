<?php
session_start();
$page = "result"; 		//used to find the active page for the menu; used in includes/menu/php
?>


<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" type="image/jpg" href="img/logo/icons811.png"/>  <!--favicon --> 
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
Welcome <?php echo $_POST["nrHosts"]; ?><br>


	<!--- Footer -->
	
	<?php
include 'includes/footer.php'
?>

</body>

</html>