<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Seek and Hire - Home</title>

	<!-- link tags -->
	<?php include('includes/links.php'); ?>

</head>

<body>

	<!-- Top Bar -->
	
	<!-- End Top Bar -->

	<!-- Navigation -->
	<nav id="navbar" class="navbar fixed-top bg-light navbar-light navbar-expand-lg ">
		<div class="container ">

			<a id="" class="navbar-brand white" href="./">SeeknHire</a>

			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mymenu">
				<span class="navbar-toggler-icon "></span>				
			</button>

			<div class="collapse navbar-collapse" id="mymenu">
				<ul id="nav" class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="./#" id="" class="nav-link white">Home</a></li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle white" id="accountDropdown" role="button" data-toggle="dropdown">Account</a>
						<div class="dropdown-menu col-3" aria-labelledby="accountDropdown">
							<a class="dropdown-item " href="login.php">Login</a>
							<div class="dropdown-divider "></div>
							<a class="dropdown-item dropdown-toggle" id="createAccount" role="button"data-toggle="dropdown" href="">Create Account</a>
							<div class="dropdown-menu col-3" aria-labelledby="createAccount">
								<a class="dropdown-item" href="registration.php">Personal</a>
								<a class="dropdown-item" href="company_registration.php">Business</a>
							</div>
							
						</div>
					</li>
					<li class="nav-item dropdown">						
						<a href="#" class="nav-link dropdown-toggle white" id="servicesDropdown" role="button" data-toggle="dropdown">Services</a>
						<div class="dropdown-menu col-3" aria-labelledby="servicesDropdown">
							<a class="dropdown-item " href="#">Post a job</a>
							<div class="dropdown-divider "></div>
							<a class="dropdown-item" href="#">Apply for a job</a>
						</div>
					</li>
					<li class="nav-item"><a href="./#search-section" class="nav-link white">Search</a></li>
					<li class="nav-item"><a href="./#about-section" class="nav-link white">About</a></li>
					<li class="nav-item"><a href="./#contact-section" class="nav-link white">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navigation -->

	<!-- div for the gradient background -->
	
	<div id="first" class="gradient-bg">
			<!-- Image Carousel -->

			<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
				
				<!-- Carousel Content -->
				<div class="carousel-inner">

					<div class="carousel-item active">
						<img class="w-100" src="img/carousel/1.jpg">
						<div class="carousel-caption">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-8 bg-custom d-none d-md-block py-3">
										<h1 class="border-bottom border-warning">Need a job?</h1>
										<h3>You are at the right place.</h3>
										<a href="#" class="btn btn-primary btn-lg">Apply here</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item ">
						<img class="w-100" src="img/carousel/2.jpg">
						<div class="carousel-caption">
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-8 bg-custom d-none d-md-block py-3">
										<h1 class="border-bottom border-primary">Hiring?</h1>
										<h3>You can do it right here.</h3>
										<a href="#" class="btn btn-primary btn-lg">Post a job</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Carousel Content -->

				<!-- Previous & Next Buttons -->
				<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
					<span class="fas fa-chevron-left fa-2x"></span>
				</a>
				<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
					<span class="fas fa-chevron-right fa-2x"></span>
				</a>

				<!-- End Previous & Next Buttons -->
			</div>

			<div id="search-section" class="col-12 text-center mt-1 scroll-section">
				<h1 class="text-dark pt-4">Search</h1>
				<div class="my-3 border-top border-primary w-50 mx-auto"></div>
				<h3>You can search for job posts, companies and individual users right here.</h3>
			</div>
			<div class="container  my-3 search-section ">
				<form method="post">
					<div class="col-12 border-bottom border-warning search-section-main p-5 ">
						
						<input type="search" placeholder="Search by job titles,user names, company names" class="form-control" name="search">	
						<select class="form-control my-3">
							<option>Select category</option>
							<option>Information Technology</option>
							<option>accountancy</option>
							<option>Architecture and Enginnering Occupations</option>
							<option>health sector</option>
							<option>Building and Ground cleaning</option>
							<option>Business and Financial operations occupations</option>
							<option>construction</option>
							<option>Art,Design,Entertainment,Sport</option>
						</select>					
						
					</div>
					<div class="search-btn col-12 p-4 border-top border-warning">
						<input type="submit" class="btn btn-primary btn-lg" value="Search" name="search">
					</div>
				</form>
			</div>
			
			<!-- <section class="search-bar mt-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 mx-auto">
							<form>
								<div>
									<div class="input-group">
										<input type="search" placeholder="Search..." class="form-control" name="search">
										<div class="input-group-append">
											<div class="btn-group">
												<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Job Posts</a>
													<a class="dropdown-item" href="#">Companies</a>
													<a class="dropdown-item" href="#">Employees</a>
												</div>
											</div>
											<div class="input-group-append">
												<button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>			
				</div>		
			</section> -->

		  <!-- ====fixed background===== -->
			<div class="fixed-background mt-5">
				<div class="row text-light">
					<div class=" col-12 text text-center">
						<h1>Access your account</h1>
						<h3 class="">Login or create a free account now...</h3>
						<div class="col-12 border-bottom py-5"></div>
						<a href="login.php" class="btn btn-primary my-3 btn-lg mr-2" >Login</a>
						<button type="button" data-toggle="modal" data-target="#register-button" class="btn btn-primary my-3 btn-lg ml-2">Register</button>
					</div>
				</div>
				<div class="fixed-wrap">
					<div class="fixed"></div>
				</div>
			</div>
			<!-- ==== end of fixed background===== -->
	</div>
	<!-- end of div for the gradient background -->

	<!-- ===modal=== -->

	<div class="modal fade choice" id="register-button" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog text-center p-4">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="">Select the type of account</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
				</div>
				<div class="modal-body">
					<a href="registration.php" type="button" class="btn btn-primary btn-lg mr-2">Personal</a>
					<a href="company_registration.php" type="button" class="btn btn-primary btn-lg mr-2">Business </a>
				</div>
			</div>
		</div>
	</div>

	<!-- ===end of modal=== -->


    <!-- ====about us==== -->
	<div id="about-section" class="col-12 text-center mt-3 scroll-section">
		<h1 class="text-dark pt-4">About Us</h1>
		<div class="my-3 border-top border-primary w-50 mx-auto"></div>
	</div>

	<div class="about-section mt-5">
        <div class="inner-container">            
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <div class="skills">
                <span>text</span>
                <span>text</span>
                <span>text</span>
            </div>
        </div>
    </div>

	 <!-- ==== end of about us==== -->

	 <!-- ====contact us==== -->
	<div id="contact-section" class="col-12 text-center mt-3 scroll-section">
		<h1 class="text-dark pt-4">Contact Us</h1>
		<div class="my-3 border-top border-primary w-50 mx-auto"></div>
	</div>

	<div class="row contact-section">

      <div class="col-md-7 col-sm-offset-0 col-sm-6 col-xs-offset-1 col-xs-10">
        <div class="contact-form">
          <form role="form">
	            <div class="row">
	            	<div class="col-md-6">
	              		<input type="text" class="form-control" id="name" placeholder="Name">
	            	</div>
	            	<div class="col-md-6">
	              		<input type="email" class="form-control" id="email" placeholder="Email">
	            	</div>
	            </div>
	            <div class="col-md-12">
	             	<textarea class="form-control" placeholder="Message" rows="6"></textarea>
	            </div>
	            <div class="col-md-12 text-center">
	             	<button type="submit" class="contact-button">Send Message</button>
	            </div>
          </form>
        </div>
     </div>
      	<div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-5 col-xs-offset-1 col-xs-10">
        	<div class="address">
          		<h4 class="text-dark">Address</h4>
          		<div class=" border-bottom border-primary w-25 mr-5"></div>
          		<p class="mt-1">***********,<br>
            		*************<br>
            		***********<br>
          			<div class="email"><i class="fa fa-at"></i>example@yourdomain.com<br>
            		<i class="fa fa-mobile"></i>+257******</div>
          		</p>
        	</div>
      	</div>
 	</div>

	 <!-- ==== end of contact us==== -->

	 <div class="container my-5"></div>

	 <!-- footer -->
	<?php include('includes/footer.php'); ?>
	 <!-- end footer -->

	<!-- Script Source Files -->



	<script src="js/nav.js"></script>

	<script type="text/javascript">
		$('#nav').onePageNav({
			currentClass: 'active',
			changeHash: false,
			scrollSpeed: 750,
			scrollThreshold: 0.5,
			filter: '',
			easing: 'swing'
		});
	</script>
<!-- 	<script type="text/javascript">
		//navbar links
		let home_link = document.getElementById('homeLink');
		let search_link = document.getElementById('searchLink');
		let about_link = document.getElementById('aboutLink');
		let contact_link = document.getElementById('contactLink');

		let home_section = document.getElementById('navbar');
		let search_section = document.getElementById('search-section');
		let about_section = document.getElementById('about-section');
		let contact_section = document.getElementById('contact-section');

		let nav_height = document.getElementById('mymenu').offsetHeight;

		//search link click event handler
		search_link.addEventListener('click', (ev)=>{
			//get search_section coordinates
			let search_coords = search_section.getBoundingClientRect();
			//get the y coord
			let y_search = search_coords.top + window.pageYOffset;

			//scroll to top of the section
			document.documentElement.scrollTo(0, y_search-nav_height);
			
		});

		//about link click event handler
		about_link.addEventListener('click', (ev)=>{
			//get about_section coordinates
			let about_coords = about_section.getBoundingClientRect();
			//get the y coord
			let y_about = about_coords.top + window.pageYOffset;

			//scroll to top of the section
			document.documentElement.scrollTo(0, y_about-nav_height);

		});
		contact_link.addEventListener('click', (ev)=>{
			//get contact_section coordinates
			let contact_coords = contact_section.getBoundingClientRect();
			//get the y coord
			let y_contact = contact_coords.top + window.pageYOffset;

			//scroll to top of the section
			document.documentElement.scrollTo(0, y_contact-nav_height);
		});

		window.addEventListener('scroll', function(){
			//get home_section coordinates
			let home_coords = home_section.getBoundingClientRect();
			//get the y coord
			let homeY = home_coords.top;

			//get search_section coordinates
			let search_coords = search_section.getBoundingClientRect();
			//get the y coord
			let searchY = search_coords.top;

			//get about_section coordinates
			let about_coords = about_section.getBoundingClientRect();
			//get the y coord
			let aboutY = about_coords.top;

			//home link
			if ((homeY-nav_height) <= 0 && (homeY-nav_height) > searchY ) {	

				search_link.classList.remove('active');
				search_link.classList.add('white');

				about_link.classList.remove('active');
				about_link.classList.add('white');

				contact_link.classList.remove('active');
				contact_link.classList.add('white');

				home_link.classList.add('active');
				home_link.classList.remove('white');
			}	
			else{
				search_link.classList.add('white');
				search_link.classList.remove('active');
			}	


			
			//search link
			if ((searchY-nav_height) <= 0 && (searchY-nav_height >= -488)) {

				home_link.classList.remove('active');
				home_link.classList.add('white');

				about_link.classList.remove('active');
				about_link.classList.add('white');

				contact_link.classList.remove('active');
				contact_link.classList.add('white');

				search_link.classList.add('active');
				search_link.classList.remove('white');
			}
			else{
				search_link.classList.add('white');
				search_link.classList.remove('active');
			}
			
			document.getElementById('test').innerHTML = searchY;

		});

		// //JQuery
		// $(document).scroll(function){
		// 	var a = $('.searchLink').offset().top
		// 	document.getElementById('test').innerHTML = a;
		// }

	</script> -->
	<!-- End Script Source Files -->
</body>
</html>