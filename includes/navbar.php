<?php
	if (isset($_GET['curr'])) {
		// get current page from the get method
		$current = $_GET['curr'];
	}
	else{
		//current page is the about page by default
		$current = "about";
	}
	
?>
<nav id="nav" class="navbar bg-dark navbar-dark navbar-expand-lg p-lg-4 sticky-top">
		<div class="container-fluid ">
		<a class="navbar-brand brand" href="./">Joa-Kevin Iradukunda</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#my-menu" aria-controls="offcanvasNavbar">
  				<span class="navbar-toggler-icon"></span>
		</button>
	    <div class="bg-dark offcanvas offcanvas-end" id="my-menu">
	      	<div class="offcanvas-header">
	        	<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
	        	</button>
	      	</div>
	      	<div class="offcanvas-body">
	        	<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
		          	<li class="nav-item">

	            		<!-- adding a php tag to check what is the current page -->	
		            	<a 
		            	<?php 
		            		if($current == "about"){ echo 'class="nav-link active"';}
		            		else{echo 'class="nav-link"';}
		            	?>
		            	href="./?curr=about">About Me
		            	</a>
		          	</li>
	          		<li class="nav-item">

	            		<!-- adding a php tag to check what is the current page -->
	            		<a 
	            		<?php
	            			if($current == "resume"){ echo 'class="nav-link active"';}
		            		else{echo 'class="nav-link"';}
		            	?> 
		            	href="resume.php?curr=resume">My Resume
		            	</a>
	          		</li>
	          		<li class="nav-item dropdown">

	            		<!-- adding a php tag to check what is the current page -->
	            		<a 
	            		<?php 
	            			if($current == "exercises" || $current == "projects"){ echo 'class="nav-link dropdown-toggle active"';}
		            		else{echo 'class="nav-link dropdown-toggle"';}
		            	?>
		            	href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">My Work
	            		</a>
	            		<ul class="dropdown-menu">
	              			<li><a class="dropdown-item" href="exercises.php?curr=exercises">Exercises</a></li>
	              			<li><a class="dropdown-item" href="projects.php?curr=projects">Projects</a></li>
	            		</ul>
	          		</li>
	          		<li class="nav-item">

	            		<!-- adding a php tag to check what is the current page -->
	            		<a 
	            		<?php
	            			if($current == "contact"){ echo 'class="nav-link active"';}
		            		else{echo 'class="nav-link"';}
		            	?> 
		            	href="contact.php?curr=contact">Contact Me
		            	</a>
	          		</li>
	          		<li class="nav-item">
	          			<a class="nav-link" href="https://www.facebook.com/iradukunda.kevin.39">
	          				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
								<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
							</svg>
	          			</a>
	          		</li>
	          		<li class="nav-item">
	          			<a class="nav-link" href="https://github.com/jk-ira/">
	          				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
									<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
							</svg>
	          			</a>
	          		</li>
	        	</ul>
	      	</div>
	    </div>
		</div>
</nav>