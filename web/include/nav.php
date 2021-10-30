<?php
	$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
?>
<header class="w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div style='background: #8f2929;border-bottom: 1px solid #fff;'>
				<div class='container text-right'>
					<ul class="social-icons hideInMobile" style='border: none;'>
						<li><a target='_blank' style='color:#fff;' href="./assets/pdf/biyani super 30 brochure c2c version 18 low res.pdf"><span class="fa fa-download" aria-hidden="true"></span> Prospectus</a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://api.whatsapp.com/send/?phone=917900040194&text=Hello+Biyani%27s%20JEE%20NEET%20Private!&app_absent=0"><span class="fa fa-whatsapp" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://www.facebook.com/Biyanis-JEE-NEET-Private-102050525281179"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="#url"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://www.instagram.com/biyanisjeeneetprivate/?hl=en"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://www.google.com/maps/place/Biyanis+Jee+Neet+Private,+Dev+Paradise,+C+103,+Beverly+Park,+Mira+Road,+Mumbai,+Maharashtra+401107/@19.289685,72.869063,14z/data=!4m2!3m1!1s0x3be7b17986c7d209:0xaa39879900fa17d3?hl=en&gl=IN"><span class="fa fa-map-marker" aria-hidden="true"></span></a></li>
						<li><a target='_blank' style='color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;' href="https://www.classmatrix.org/signin" target='_blank'>Sign in &nbsp;<span class="fa fa-lock" aria-hidden="true"></span></a></li>
						<li data-toggle="modal" data-target="#enquireModal"><a style='font-weight: bold;color:#fff;border-left: 1px solid #cfcfcf;padding-left: 25px;animation: blinker 1s linear infinite;' href='#'>Enquiry & Admission	</a></li>
					</ul>
					<div class="social-icons hideInDesktop noMargin" style="border: none;padding: 4px 0px;">
						<span><a href="tel:+91 8454-88-8439" style='color:#fff;border-right: 1px solid #cfcfcf;padding:0px 15px;'><span class="fa fa-phone" aria-hidden="true"></span></a></span>
						<span><a target='_blank' style='color:#fff;border-right: 1px solid #cfcfcf;padding:0px 15px;' href="https://api.whatsapp.com/send/?phone=917900040194&text=Hello+Biyani%27s%20JEE%20NEET%20Private!&app_absent=0"><span class="fa fa-whatsapp" aria-hidden="true"></span></a></span>
						<span><a target='_blank' style='color:#fff;padding:0px 15px;' href="./assets/pdf/biyani super 30 brochure c2c version 18 low res.pdf"><span class="fa fa-download" aria-hidden="true"></span></a></span>
						
						<span data-toggle="modal" data-target="#enquireModal"><a style='font-weight: bold;color:#fff;border-left: 1px solid #cfcfcf;padding-left: 15px;animation: blinker 1s linear infinite;' href='#'>Enquiry & Admission	</a></span>
					</div>
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
							
							<li class="nav-item <?php if($curPageName == "faculty.php") echo 'active'; ?>">
								<a class="nav-link" href="faculty.php">Faculty</a>
							</li>
							<li class="nav-item <?php if($curPageName == "course.php") echo 'active'; ?>">
								<a class="nav-link" href="course.php">Courses</a>
							</li>
							
							<li class="nav-item <?php if($curPageName == "digital-library.php") echo 'active'; ?>">
								<a class="nav-link" href="digital-library.php">Digital Library</a>
							</li>
							<li class="nav-item <?php if($curPageName == "gallery.php") echo 'active'; ?>">
								<a class="nav-link" href="gallery.php">Gallery</a>
							</li>
							<li class="nav-item <?php if($curPageName == "contact.php") echo 'active'; ?>">
								<a class="nav-link" href="contact.php"><i class='fa fa-map-marker' style='font-size: 1.35em;'></i></a>
							</li>
							
						</ul>
						<ul class="social-icons hideInDesktop" style="background: #8f2929;">
							<li><a target='_blank' href="./assets/pdf/biyani super 30 brochure c2c version 18 low res.pdf" style="color: #fff;"><span class="fa fa-download" aria-hidden="true"></span> Prospectus</a></li>
						</ul>
						<ul class="social-icons hideInDesktop" style='margin-top: 0px;border-top: none;'>
							<li><a target='_blank' href="https://api.whatsapp.com/send/?phone=917900040194&text=Hello+Biyani%27s%20JEE%20NEET%20Private!&app_absent=0"><span class="fa fa-whatsapp" aria-hidden="true"></span></a></li>
							<li><a target='_blank' href="https://www.facebook.com/Biyanis-JEE-NEET-Private-102050525281179"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
							<li><a target='_blank' href="#url"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
							<li><a target='_blank' href="https://www.instagram.com/biyanisjeeneetprivate/?hl=en"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
							<li><a target='_blank' href="https://www.classmatrix.org/signin/biyanis.php" target='_blank'>Sign in &nbsp;<span class="fa fa-lock" aria-hidden="true"></span></a></li>
							
						</ul>
						<div class="phone">
						  <a href="tel:+91 8454-88-8439" style="display: block;"><span class="fa fa-phone" aria-hidden="true"></span> +91 8454-88-8439</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>