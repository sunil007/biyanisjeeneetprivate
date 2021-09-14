<?php
	$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
?>
<header class="w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div style='background: #8f2929;border-bottom: 1px solid #fff;'>
				<div class='container text-right'>
				<ul class="social-icons hideInMobile" style='border: none;'>
					<li><a style='color:#fff;' href="#url"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
					<li><a style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
					<li><a style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="#url"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
					<li><a style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://www.classmatrix.org/signin" target='_blank'>Sign in &nbsp;<span class="fa fa-lock" aria-hidden="true"></span></a></li>
				</ul>
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light py-0 px-0">
					<a class="navbar-brand" href="index.php">
						<img class='logoImage' src="assets/images/logo.jpg" alt="Biyani's Jee Neet Private" title="Biyani's Jee Neet Private" />
					</a>
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item <?php if($curPageName == "index.php") echo 'active'; ?>">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item <?php if($curPageName == "overview.php") echo 'active'; ?>">
								<a class="nav-link" href="overview.php">About</a>
							</li>
							<!--li class="nav-item dropdown @@dropdown-active">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									About
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item @@faq-active" href="overview.php">Overview</a>
									<a class="dropdown-item @@blog-active" href="directors-desk.php">Directors' Desk</a>
								</div>
							</li-->
							
							<li class="nav-item ">
								<a class="nav-link" href="faculty.php">Faculty</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="course.php">Course</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
							
						</ul>
						<ul class="social-icons hideInDesktop">
							<li><a href="#url"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
							<li><a href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
							<li><a href="#url"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
							<li><a href="https://www.classmatrix.org/signin" target='_blank'><span class="fa fa-lock" aria-hidden="true"></span></a></li>
						</ul>
						<div class="phone">
						  <a href="tel:+91 8454-88-8439" style="display: block;"><span class="fa fa-headphones" aria-hidden="true"></span> +91 8454-88-8439</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>