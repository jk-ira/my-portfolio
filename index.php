<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Joa-Kevin Iradukunda Portfolio - About Me</title>
	<link rel="icon" href="images/kevin1.PNG">

	<!-- bootstrap-5.3.0-alpha1-dist css min file -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- custom css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="index-body">

	<!-- add the navbar -->
	<?php include("includes/navbar.php");?>

	<!-- add the rest of the body -->
	<div class=" about container mt-2 ">
		<div class="row">
			<div class="about-text col-lg-7">
					<h1>Hi &#9995;...Welcome to my online portfolio</h1>
					<p class="first-p">I am <span class="name">Joa-Kevin Iradukunda</span><span class="name-sm">Joa-Kevin Iradukunda</span>, a <span class="skills">web and mobile developer graduate</span>, currently based in Durban.</p>
					<p>I have recently completed my <span class="qualification">Bachelor of Science in Information Technology</span>, where I had my first encounter with programming  &#128187;  and I just <b> fell in love with it</b> <span class="heart">&hearts;</span> . </p>
					<p class="third-p">Please don't hesitate to go through <b><a href="resume.php?curr=resume">My Resume</a></b>, <b><a href="" data-bs-toggle="modal" data-bs-target="#my_work_modal">My Work</a></b>and <b><a href="" data-bs-toggle="modal" data-bs-target="#social_media_modal">My Social Network</a></b>
					pages to know more about myself, my skills and previous experiences. </p>
					<p>Looking forward to <a href="contact.php?curr=contact">getting in touch</a> with you soon &#x1F609;.</p>
					<p>Thanks &#9996;.</p>
			</div>
			<!-- add the modal for my work pop u -->
					<?php include("includes/my_work_modal.php");?>
			<div class=" img-div col-lg-5">
				<span class="jpn-name">丁口卂-长乇リ工𠘨  工尺卂刀凵长凵𠘨刀卂</span>
				<img class="my-image" src="images/kevin3.png">
			</div>
		</div>
	</div>	

</body>

	<!-- bootstrap-5.3.0-alpha1-dist js bundle file -->
	<script  src="js/bootstrap.bundle.js"></script>

	<!-- jquery file -->
	<script src="js/jquery-3.6.3.min.js"></script>

	<!-- custom js file -->
	<script src="js/js.js"></script>

</html>