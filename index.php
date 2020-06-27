<?php 
session_start();
$page = "home"; 		//used to find the active page for the menu; used in includes/menu/php
?>

<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" type="image/jpg" href="img/logo/logo_v2.png"/>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome at OmniCompare!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> 
	<link href="style/style.css" rel="stylesheet">
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
	<!--- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="sliderImg" src="img/image.png">
				<div class="carousel-caption">
					<h1 class="display-2">Bootstrap</h1>
					<h3>Complete Website Layout</h3>
					<button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
					<button type="button" class="btn btn-primary btn-lg">Get Started</button>
				</div>
			</div>
			<div class="carousel-item">
				<img class="sliderImg" src="img/image2.png">
			</div>
			<div class="carousel-item">
				<img class="sliderImg" src="img/image3.png">
			</div>
		</div>
	</div>

	<!--- Jumbotron -->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<p class="lead">Valami hosszabb szoveg ide bla bla hello :)</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web hosting</button></a>
			</div>
		</div>
	</div>

	<!--- Welcome Section -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Built with ease.</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">Ide is kellene egy jo adag szoveg de soha sem tudom honnan pasteljek valamit. Big sad.
				</p>
			</div>
		</div>
	</div>

	<!--- Three Column Section -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4 ">
				<i class="fas fa-code"></i> <!-- font awesome icons!-->
				<h3>HTML5</h3>
				<p>Built with the latest version of HTML, HTML5.</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ">
				<i class="fas fa-bold"></i> <!-- font awesome icons!-->
				<h3>Bootstrap</h3>
				<p>Built with the latest version of Bootstrap,Bootstrap4 .</p>
			</div>
			<div class="col-sm-12 col-md-4 ">
				<i class="fab fa-css3"></i> <!-- font awesome icons!-->
				<h3>CSS3</h3>
				<p>Built with the latest version of CSS, CSS3.</p>
			</div>
		</div>
		<hr class="my-4">
	</div>

	<!--- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2>If you built it...</h2>
				<p>Valami nagyon hosszu szoveg.</p>
				<p>Huha megtobb szoveg! wgat a surprise! :)</p>
				<p>Legyen mar kevesebb szoveg, unom.</p>
				<br>
				<a href="#" class="btn btn-primary">Learn More</a>
			</div>
			<div class="col-lg-6">
				<img src="img/desk.png" class="img-fluid">
			</div>
		</div>
	</div>
	<hr class="my-4">
	<!--- Fixed background -->
	<figure>
		<div class="fixed-wrap">
			<div id="fixed">
			</div>
		</div>
	</figure>

	<!--- Emoji Section -->
	<button class="fun" data-toggle="collapse" data-target="#emoji">click for fun</button>
	<div id="emoji" class="collapse">
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-sm-6 col-md-3">
					<img class="gif" src="img/gif/panda.gif">
				</div>
				<div class="col-sm-6 col-md-3">
					<img class="gif" src="img/gif/poo.gif">
				</div>
				<div class="col-sm-6 col-md-3">
					<img class="gif" src="img/gif/unicorn.gif">
				</div>
				<div class="col-sm-6 col-md-3">
					<img class="gif" src="img/gif/chicken.gif">
				</div>
			</div>
		</div>
	</div>
	<!--- Meet the team -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Meet The Team</h1>
			</div>
			<hr>
		</div>
	</div>

	<!--- Cards -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/team1.png">
					<div class="card-body">
						<h4 class="card-tittle">John Doe</h4>
						<p class="card-text">John is very hardworking.</p>
						<a href="#" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/team2.png">
					<div class="card-body">
						<h4 class="card-tittle">Marry Joe</h4>
						<p class="card-text">Marry is very hardworking.</p>
						<a href="#" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/team3.png">
					<div class="card-body">
						<h4 class="card-tittle">Paul Hoe</h4>
						<p class="card-text">Paul is very hardworking.</p>
						<a href="#" class="btn btn-outline-secondary">See Profile</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2>Our philosophy</h2>
				<p>Valami nagyon hosszu szoveg.</p>
				<p>Huha megtobb szoveg! wgat a surprise! :)</p>
				<br>
			</div>
			<div class="col-lg-6">
				<img src="img/bootstrap2.png" class="img-fluid">
			</div>
		</div>
		<hr class="my-4">
	</div>


	<!--- Connect -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>

	<!--- Footer -->
	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<img src="img/w3newbie.png">
					<hr class="light">
					<p>555-555-5555</p>
					<p>email@yahoo.com</p>
					<p>100 Street Name</p>
					<p>City,State,00000</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Our hours</h5>
					<hr class="light">
					<p>Monday: 5pm-6pm</p>
					<p>Friday: 10am-11pm</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Service area</h5>
					<hr class="light">
					<p>City,State,00000</p>
					<p>City,State,00000</p>
					<p>City,State,00000</p>
				</div>
				<div class="col-12">
					<hr class="light">
					<h5>&copy;w3newbie.com</h5>
				</div>
			</div>
		</div>
	</footer>



</body>

</html>