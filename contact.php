<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Joa-Kevin Iradukunda Portfolio - Contact Me</title>
	<link rel="icon" href="images/kevin.PNG">

	<!-- bootstrap-5.3.0-alpha1-dist css min file -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- custom css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body  class="contact-page">

	<!-- add the navbar -->
	<?php include("includes/navbar.php");?>

	<div class="container text-center">
		<div class="row">
			
			<div class="col-lg-6  mt-3 left-part">
				<p class="title1"><span class="title1-1">Want to get in touch? <span class="phone-icon">&#9990;</span></span><br>
				<span class="title1-2">Please fill in the form bellow to send me an email!&#9993;</span></p>
				<div class="text-start">
					<form action="" method="post">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Your name" required="Name is required">
							</div>
							<div class="col-md-6">
								<label for="email">Email address:</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Your email address" required="Your email address is required">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message:</label>
							<textarea rows="8" class="form-control" id="message"  placeholder="Your message"  name="message" rows="3" required="No message entered"></textarea>
						</div>
						<button type="submit"name="send"class="p-2 mt-2">Send Message</button>
					</form>
				</div>
				
			</div>
			<div class="col mt-4 text-start right-part">
				<p class="title2"><span class="title2-1">Or scan/click the QR code bellow</span> <br><span class="title2-2">to contact me on whatsapp <img class="whatsapp-icon" src="images/whatsapp.png">!</span></p>
				<p class="ms-5">
					<a href="https://api.whatsapp.com/send?phone=27614366546&text=Hi%2C%20I%20recently%20visited%20your%20online%20porfolio%20and%20would%20like%20to%20discuss%20with%20you." target="_blank">
						<img class="qr-code" src="images/whatsapp qr code2.png">
					</a>

				</p>
				<p class="">Contact details
					<ul class="">
						<li>Phone: <a class="tel" href="tel:+27614366546">+27 61 436 6546</a></li>
						<li>Email address: <a class="email" href="mailto:Keviniraduku2@gmail.com">Keviniraduku2@gmail.com</a></li>
					</ul>
				</p>
			</div>
		</div>		 
	</div>
	<div class="">
		<img class="image" src="images/kevin8.png">
	</div>
	<div class="contact-img-div">
	</div>


</body>

	<!-- bootstrap-5.3.0-alpha1-dist js bundle file -->
	<script  src="js/bootstrap.bundle.js"></script>

	<!-- jquery file -->
	<script src="js/jquery-3.6.3.min.js"></script>

	<!-- custom js file -->
	<script src="js/js.js"></script>

</html>
