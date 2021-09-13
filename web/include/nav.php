<?php
	$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
?>
<header class="w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
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
							<li class="nav-item ">
								<a class="nav-link" href="about.html">About</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="services.html">Services</a>
							</li>
							<li class="nav-item @@contact-active">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>
						</ul>
						<ul class="social-icons">
							<li><a href="#url"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
							<li><a href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
							<li><a href="#url"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
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