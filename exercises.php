<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Joa-Kevin Iradukunda Portfolio - Exercises</title>
	<link rel="icon" href="images/kevin1.PNG">

	<!-- bootstrap-5.3.0-alpha1-dist css min file -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- custom css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="exercises-body">
	<!-- add the navbar -->
	<?php include("includes/navbar.php");?>
	<div class="container mt-4"> 
		<h3 class="gold-color"><u><b>Exercises</b></u></h3>
		<h4>These are some of the exercises I have done to improve my coding skills:</h4>
		<div class="row">
			<a href="exercises/ajax/restaurant ordering system" class="col-md-6 mt-3">
				<div class="project row">
					<div class="col-lg-4 project-image">
						<img class="" src="images/ex1.png">
					</div>
					<div class=" col-lg-8 project-description">
						<p class="">A <span class="gold-color"><i>restaurant odering mini system</i></span> I built while practicing <span class="red-highlight">JQuery AJAX with PHP</span>. After the client places the order, the admin page runs PHP scripts to detect a new insert(order) ever 5 seconds. This is done with AJAX that automatically updates the admin page without having to refresh it.</p>
					</div>
				</div>
			</a>
			<a href="exercises/seeknhire" class="col-md-6 mt-3">
				<div class="project row">
					<div class="col-lg-4 project-image">
						<img class="" src="images/ex2.png">
					</div>
					<div class=" col-lg-8 project-description">
						<p class="">A <span class="gold-color"><i>Social Network</i></span> for job seekers and employers i was building with a friend back in 2020. The reason why it's on the exercises page is because we could not finish it due to various reasons, one of them being the COVID-19 pendemic. It was quite a challenge for two students with our infant programing levels &#128514; but we had a lot of fun during the process and learnt a lot.</p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="">
		<img class="image" src="images/kevin6.png">
	</div>
	<div class="mywork-img-div">

	</div>

	<br>
</body>
	<!-- bootstrap-5.3.0-alpha1-dist js bundle file -->
	<script  src="js/bootstrap.bundle.js"></script>

	<!-- jquery file -->
	<script src="js/jquery-3.6.3.min.js"></script>

	<!-- custom js file -->
	<script src="js/js.js"></script>

</html>
