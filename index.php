<?php
session_start();
$page = "home"; 		//used to find the active page for the menu; used in includes/menu/php
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
					<h1 class="display-2">Bored of researching?</h1>
					<h3> We already did it for you!</h3>
					<button onclick="smoothScroll(document.getElementById('second'))" type="button" class="btn btn-outline-light btn-lg">Tell me more</button>
				<a href=".\survey.php">	<button  type="button" class="btn btn-primary btn-lg">Compare</button> </a>
				</div>
			</div>
			<div class="carousel-item">
				<img class="sliderImg" src="img/image2.png">
				<div class="carousel-caption">
					<h1 class="display-2">Find what is right for Your Business</h1>
					<h3> Let us help you choose!</h3>
					<button onclick="smoothScroll(document.getElementById('second'))" type="button" class="btn btn-outline-light btn-lg">Tell me more</button>
				<a href=".\survey.php">	<button type="button" class="btn btn-primary btn-lg">Compare </button></a>
				</div>
			</div>
			<div class="carousel-item">
				<img class="sliderImg" src="img/image3.png">
				<div class="carousel-caption">
					<h1 class="display-2">Short survey to happiness</h1>
					<h3> Complete it to get the software closest to your needs</h3>
					<button onclick="smoothScroll(document.getElementById('second'))" type="button" class="btn btn-outline-light btn-lg">Tell me more</button>
				<a href=".\survey.php">	<button type="button" class="btn btn-primary btn-lg">Compare </button> </a>
				</div>
			</div>
		</div>
	</div>

	<!--- Jumbotron -->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<p class="lead">The shortest path from an idea to the right choise. Complete a quick survey, tell us about your team and we will tell you what it needs! Choosing the right software as a service has never been easier :)</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Take me there</button></a>
			</div>
		</div>
	</div>

	<!--- Welcome Section -->
	<div class="container-fluid padding">
		<div class="row welcome text-center" id="second">
			<div class="col-12">
				<h1 class="display-4">How it works</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">We gathered every SaaS that counts and analysed them based on many different criterias so you don't lose your time doing it.
				</p>
			</div>
		</div>
	</div>

	<!--- Three Column Section -->
	<div class="container-fluid padding" >
		<div class="row text-center padding" >
			<div class="col-xs-12 col-sm-6 col-md-4 ">
			<i class="far fa-edit"></i> <!-- font awesome icons!-->
				<h3>Complete survey</h3>
				<p>Tell us how big is your team, how much money you wanna invest and what are your preferences.</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ">
			<i class="fa fa-list" aria-hidden="true"></i> <!-- font awesome icons!-->

				<h3>Get list</h3>
				<p>You will get a list of SaaS catered to your needs based on the criterias selected by you in the Survey.</p>
			</div>
			<div class="col-sm-12 col-md-4 ">
			<i class="far fa-thumbs-up" aria-hidden="true"></i> <!-- font awesome icons!-->
				<h3>Choose</h3>
				<p>Found the perfect one? You are one click away from getting in touch with them.</p>
			</div>
		</div>
		<hr class="my-4">
	</div>

	<!--- Two Column Section -->
	<div class="container-fluid padding ">
		<div class="row padding">
			<div class="col-md-12 col-lg-6 padding2">
				<div class="padding2" align="justify">
				<h2 >If you are a Software as a Service looking to appear in searches</h2>
				<p  >Create an account and let's make your software seen! Add your SaaS to our list and attract other businesses that are looking exactly for what you are offering!</p>
				<p>Making an account is fast and easy, plus, it's Free! You only have to pay a small percentage if customers purchase from you trough us.</p>
				<p>We also offer a limited number of sponsored results for you to fill in. Contact us to find out more!</p>
				<br>
				<a href="#" class="btn btn-primary">Sign up</a>
				</div>
			</div>
			<div class="col-lg-6">
				<img src="img/desk.png" class="img-fluid">
			</div>
		</div>
	</div>



	<!--- Top button -->
	<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out"
		data-abc="true"></a>
	<!-- <div class="height">
		<h3 class="text-center scroll">Scroll down </h3>
	</div> -->

<script>
	$(document).ready(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 700) {
				$('#toTopBtn').fadeIn();
			} else {
				$('#toTopBtn').fadeOut();
			}
		});

		$('#toTopBtn').click(function () {
			$("html, body").animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
	});


	window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
</script>

	<!--- Footer -->
	
	<?php
include 'includes/footer.php'
?>


</body>

</html>