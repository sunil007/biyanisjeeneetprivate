<!doctype html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>
<?php include 'include/nav.php'; ?>
<!-- breadcrum -->
<section class="w3l-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Faculty</p>
    </div>
  </div>
</section>
<!-- //breadcrum -->
<section class="w3l-about1 fade-start fade-end" id="about"  style='background: url(./assets/images/iit-g-bg1.jpg) no-repeat 0px 0px;background-size: cover;background-position: center;position: relative;z-index: 1;'>
    <div class="container py-lg-3">
        <div class="header-section text-center mb-lg-5 mb-4">
			<div style='height:40px'></div>
            <h2 class='bottomUnderline'>Know Our Faculties</h2>
        </div>
        <div class="row">
			<div class="col-md-12">
				<h3 class="mb-4 text-center">Learn from the <span style='color: #8f2929;font-weight: bold;'>Best Teachers in town</span></h3>
				<div style='height:40px'></div>
			</div>
		</div>
		<div class='row'>
			<div class='col-12 text-center'>
				<span onclick='showProfs("#prof2", this)' style='cursor:pointer;' class='theme-button btn-outline-primary active'>Prof. Rakesh Shah</span>
				<span onclick='showProfs("#prof3", this)' style='cursor:pointer;' class='theme-button btn-outline-primary'>Prof. Piyush Singh</span>
				<span onclick='showProfs("#prof5", this)' style='cursor:pointer;' class='theme-button btn-outline-primary'>Prof. Rohit Tiwari</span>
				<span onclick='showProfs("#prof4", this)' style='cursor:pointer;' class='theme-button btn-outline-primary'>Prof. Pooja Baiju</span>
				<span onclick='showProfs("#prof1", this)' style='cursor:pointer;' class='theme-button btn-outline-primary'>Prof. Yash Biyani</span>
			</div>
		</div>
		
		<div class='profProfile' id="prof2" >
			<table>
				<tr style='border-bottom: 2px solid #23517c;'>
					<td width='33%' class='hideInMobile' style='border-bottom: 8px solid #8f2929;'>
						<img src="assets/images/Rakesh Shah.png" class="img-fluid" alt="" style='margin-bottom: -1px;'/>
					</td>
					<td style='vertical-align: bottom;'>
						<div style='max-width: 400px;display: block;margin: auto;'>
							<img src="assets/images/Rakesh Shah.png" class="img-fluid hideInDesktop" alt="" />
						</div>
						<div style='height:40px'></div>
						<p style='font-weight: bold;color: #8f2929;font-size: 1.2em;'>
							Prof. Rakesh Shah 
							<span style="font-weight: normal;font-size: 0.85em;color: #27537f;font-weight: bold;white-space:nowrap;">The Physics Toofan</span>
						</p>
						<p class="mb-3" style='color:#333;font-weight: bold;font-size: 0.98em;'>Professor of Advanced Physics | B.E, MU</span></p>
						<p class="mb-3">Mr. Rakesh Shah has been a part of the teaching fraternity for more than 12 years. He has been coaching IIT-JEE & Medical aspirants for the better half of his career. He pursued his engineering degree in Electronics & Telecom from Mumbai University. Few of his work experiences include working for Yukti Coaching Classes for 5 years where he trained around 800-1000 students. He has also worked as the Director of Mindsetters, senior subject faculty for Clear Concepts and trained more than 6000 students in the last 8 years.</p>
					</td>
				</tr>
			</table>
		</div>
		
		<div class='profProfile' id="prof3" style='display:none;'>
			<table>
				<tr style='border-bottom: 2px solid #23517c;'>
					<td style='vertical-align: bottom;'>
						<div style='max-width: 400px;display: block;margin: auto;'>
							<img src="assets/images/Piyush Singh.png" class="img-fluid hideInDesktop" alt="" />
						</div>
						<div style='height:40px'></div>
						<p style='font-weight: bold;color: #8f2929;font-size: 1.2em;'>
							Prof. Piyush Kumar Singh 
							<span style="font-weight: normal;font-size: 0.85em;color: #27537f;font-weight: bold;white-space:nowrap;">The Chemistry Jugaad King</span>
						</p>
						<p class="mb-3" style='color:#333;font-weight: bold;font-size: 0.98em;'>Professor  of Advanced Chemistry | B.Sc, Ex-IAF</span></p>
						<p class="mb-3">With more than a decade of teaching experience to his advantage, he has been the core of education amongst the popular engineering and medical circles in town. He has pursued his B.Sc. in Physics and was the topper of his batch. Few of his work experiences include working as a Director for Eureka-llT, Founder and Director of Aromatic Classes and as a Senior Faculty & Career Coach of Chemistry at Lakshya, MT. He has been a professor to 10000+ students till date. Along with being an experienced faculty, he has served the country as an IAF Officer.</p>
					</td>
					<td width='33%' class='hideInMobile' style='border-bottom: 8px solid #8f2929;'>
						<img src="assets/images/Piyush Singh.png" class="img-fluid" alt="" style='margin-bottom: -1px;'/>
					</td>
				</tr>
			</table>
		</div>
		
		<div class='profProfile' id="prof5" style='display:none'>
			<table>
				<tr style='border-bottom: 2px solid #23517c;'>
					
					<td style='vertical-align: bottom;'>
						<div style='max-width: 400px;display: block;margin: auto;'>
							<img src="assets/images/Rohit Tiwari.png" class="img-fluid hideInDesktop" alt="" />
						</div>
						<div style='height:40px'></div>
						<p style='font-weight: bold;color: #8f2929;font-size: 1.2em;'>
							Prof. Rohit Tiwari
							<span style="font-weight: normal;font-size: 0.85em;color: #27537f;font-weight: bold;white-space:nowrap;">The Mathemagician</span>
						</p>
						<p class="mb-3" style='color:#333;font-weight: bold;font-size: 0.98em;'>Professor of Advanced Mathematics | B.Tech, llT Dhanbad</span></p>
						<p class="mb-3">With a teaching experience of more than 12 years, Prof. Rohit Tiwari has guided more than 5000 students in their journey towards IITs, NITs, IIITs and prestigious medical colleges. After graduating from IIT Dhanbad with a degree in Petroleum Engineering, he started training other JEE & Medical aspirants in the field of Mathematics. He has been the Senior Faculty for Maths at Lakshya and other national-level institutes. He truly believes that if taught efficiently, Maths can be a true game-changer for any student who dreams of entering a great engineering or medical college.</p>
					</td>
					<td width='33%' class='hideInMobile' style='border-bottom: 8px solid #8f2929;'>
						<img src="assets/images/Rohit Tiwari.png" class="img-fluid" alt="" style='margin-bottom: -1px;'/>
					</td>
					
				</tr>
			</table>
		</div>
		
		<div class='profProfile' id="prof4" style='display:none'>
			<table>
				<tr style='border-bottom: 2px solid #23517c;'>
					<td width='33%' class='hideInMobile' style='border-bottom: 8px solid #8f2929;'>
						<img src="assets/images/Pooja Baiju.png" class="img-fluid" alt="" style='margin-bottom: -1px;'/>
					</td>
					<td style='vertical-align: bottom;'>
						<div style='max-width: 400px;display: block;margin: auto;'>
							<img src="assets/images/Pooja Baiju.png" class="img-fluid hideInDesktop" alt="" />
						</div>
						<div style='height:40px'></div>
						<p style='font-weight: bold;color: #8f2929;font-size: 1.2em;'>
							Prof. Pooja Baiju
							<span style="font-weight: normal;font-size: 0.85em;color: #27537f;font-weight: bold;white-space:nowrap;">The Biology Mastermind</span>
						</p>
						<p class="mb-3" style='color:#333;font-weight: bold;font-size: 0.98em;'>Professor of Blology | M.Tech ln Blotechnology, M.Phil in Plant Tlssue Culture</span></p>
						<p class="mb-3">Mrs. Pooja Baiju has been a professor of Biology for the last 15 years. She has taught at esteemed institutes in India. After pursuing her M.Tech in Biotechnology  from Dr. D.Y. Patil Institute of Biotechnology, she pursued M.Phil in a topic of her expertise - Plant Tissue Culture. She has been a passionate guide, mentor and a teacher to several medical aspirants over the course of last ten years.</p>
					</td>
					
				</tr>
			</table>
		</div>
		
		<div class='profProfile' id="prof1" style='display:none'>
			<table>
				<tr style='border-bottom: 2px solid #23517c;'>
					<td style='vertical-align: bottom;'>
						<div style='max-width: 400px;display: block;margin: auto;'>
							<img src="assets/images/Yash Biyani-Mirror.png" class="img-fluid hideInDesktop" alt="" />
						</div>
						<div style='height:40px'></div>
						<p style='font-weight: bold;color: #8f2929;font-size: 1.2em;'>
							Prof. Yash Biyani
							<span style="font-weight: normal;font-size: 0.85em;color: #27537f;font-weight: bold;white-space:nowrap;">A Man With The Plan</span>
						</p>
						<p class="mb-3" style='color:#333;font-weight: bold;font-size: 0.98em;margin:0px !important;'>Professor of Advanced Chemistry  | B.Tech, RGIPT | IITK</span></p>
						<p class="mb-3">Teaching experience of more than 7 years, guiding more than 6000 students, building passion for question-solving and the drive to ask doubts - Mr. Yashvardhan Biyani is an established professor of Chemistry. After graduating from RGIPT-IITK with a B.Tech in Petroleum Engineering, he quickly dived into the education field with a single purpose - to change the academic culture present today, to bring concept-driven teaching back into the classrooms and to provide students with as many opportunities as possible to test and challenge themselves.</p>
					</td>
					<td width='33%' class='hideInMobile' style='border-bottom: 8px solid #8f2929;'>
						<img src="assets/images/Yash Biyani-Mirror.png" class="img-fluid" alt="" style='margin-bottom: -1px;'/>
					</td>
				</tr>
			</table>
		</div>
		<div style='height:40px'></div>
    </div>
</section>
<div style='height:40px'></div>
<div class="w3l-services3">
  <section id="grids5-block" class="">
    <div class="container py-lg-3">
      <div class="row">
		<div class="col-md-4 col-sm-6 mt-sm-0 mt-5 grids5-info">
		  <span class='popuponscroll'>
			<a href="#url" style="border-bottom: 3px solid #8f2929;height: 340px;overflow: hidden;display: block;"><img src="./assets/images/Sumedh Ukidave.jpg" class="img-fluid img-curve" alt="" style="margin-bottom: -1px;"></a>
		  </span>
          <h5>Dr. Sumedh Ukidave</h5>
          <h4><a class='noMargin' href="#url">Biology | B.H.M.S, C.C.H., C.G.O</a></h4>
          <p class='noMargin'>Teaching Experience 14 yrs</p>
		  <div style='height:40px'></div>
        </div>
		
		<div class="col-md-4 col-sm-6 mt-0 grids5-info">
		  <span class='popuponscroll'>
			<a href="#url" style="border-bottom: 3px solid #8f2929;height: 340px;overflow: hidden;display: block;"><img src="./assets/images/Amir Khan.jpg" class="img-fluid img-curve" alt="" style="margin-bottom: -1px;"></a>
		  </span>
          <h5>Prof. Amir Khan</h5>
          <h4><a class='noMargin' href="#">Maths | Msc in Mathematics</a></h4>
          <p class='noMargin'>Teaching Experience 14+ yrs</p>
		  <div style='height:40px'></div>
        </div>
		
        <div class="col-md-4 col-sm-6 mt-0 grids5-info">
		  <span class='popuponscroll'>
			<a href="#url" style="border-bottom: 3px solid #8f2929;height: 340px;overflow: hidden;display: block;"><img src="./assets/images/Kavita Pal.jpg" class="img-fluid img-curve" alt="" style="margin-bottom: -1px;"></a>
		  </span>
          <h5>Prof. Kavita Pal</h5>
          <h4><a class='noMargin' href="#">Chem. | M.Sc organic chem., B.Ed </a></h4>
          <p class='noMargin'>Teaching Experience 5 years</p>
		  <div style='height:40px'></div>
        </div>
		
		<div class="col-md-4 col-sm-6 mt-0 grids5-info">
		  <span class='popuponscroll'>
			<a href="#url" style="border-bottom: 3px solid #8f2929;height: 340px;overflow: hidden;display: block;"><img src="./assets/images/Naresh Pareek.jpg" class="img-fluid img-curve" alt="" style="margin-bottom: -1px;"></a>
		  </span>
          <h5>Prof. Naresh Pareek</h5>
          <h4><a class='noMargin' href="#">Phy. | B.Tech in Mechanical Eng.</a></h4>
          <p class='noMargin'>Teaching Experience 7+ years</p>
		  <div style='height:40px'></div>
        </div>
		
      </div>
	  <div style='height:60px;'></div>
    </div>
  </section>
</div>
<script>
	function showProfs(dom, element){
		$(element).parent().find('span').removeClass('active');
		$(element).addClass('active');
		$(".profProfile").slideUp(500);
		$(dom).slideDown(500);
		
	}
</script>
<?php include 'include/awesomeResponse.php'; ?>
<?php include 'include/footerEnquery.php'; ?>
<?php include 'include/footer.php'; ?>
<?php include 'include/js.php'; ?>
<?php include 'include/enquireModal.php'; ?>
</body>

</html>