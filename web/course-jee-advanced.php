<!doctype html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>
<?php include 'include/nav.php'; ?>
<!-- breadcrum -->
<section class="w3l-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; <a href="course.php">Courses</a></p>
    </div>
  </div>
</section>
<!-- //breadcrum -->
<section class="w3l-about1" id="about">
    <div class="container py-lg-3">
        <div class="header-section text-center mb-lg-5 mb-4">
			<div style='height:40px'></div>
            <h2 class='bottomUnderline'>JEE Advanced</h2>
        </div>
 
		<div class='row'>
			<div class='col-12 text-center'>
				<span onclick='showProfs("#tabsub1", this)' style='cursor:pointer;' class='theme-button btn-outline-primary active'>OVERVIEW</span>
				<span onclick='showProfs("#tabsub2", this)' style='cursor:pointer;' class='theme-button btn-outline-primary'>EXAM DATES</span>
				<span onclick='showProfs("#tabsub3", this)' style='cursor:pointer;' class='theme-button btn-outline-primary'>ELIGIBILITY CRITERIA</span>
			</div>
		</div>
		<hr>
		<div class='profProfile' id="tabsub1">
			<p><strong>Indian Institute of Technology (IIT)</strong>, Delhi will direct the JEE Advanced 2022 test in May 2022. Till 2017, JEE Advanced was directed in pen-paper mode. The JEE Advanced test will be directed online from 2018. The choice to direct the test online was taken by Joint Admission Board (JAB) to make coordination and assessment process simpler.</p>
			<p>&nbsp;</p>
			<p>The exhibition of a candidate in this assessment will frame the reason for admission to the Bachelor&#39;s, Integrated Master&#39;s and Dual Degree programs (section at the 10+2 level) in all the IITs. The choices of the JAB 2018 will be last in all matters identified with JEE (Advanced) 2018 and admission to IITs.</p>

		</div>
		
		<div class='profProfile' id="tabsub2" style='display:none'>
			<table class='table'>
				<tbody>
					<tr>
						<th style='border-top: none;'>Online Registration Opening Date</th>
						<td style='border-top: none;'>1st week of May, 2022</td>
					</tr>
					<tr>
						<th>Online Registration Closing Date</th>
						<td>2nd week of May, 2022</td>
					</tr>
					<tr>
						<th>Downloading of Admit Cards</th>
						<td>3rd week of May, 2022</td>
					</tr>
					<tr>
						<th>Date of Examination</th>
						<td>17th May, 2022</td>
					</tr>
					<tr>
						<th>Mode of Examination is</th>
						<td>Computer Based Test</td>
					</tr>
					<tr>
						<th>Date of Result</th>
						<td>8th June, 2022</td>
					</tr>
					<tr>
						<th>Conducted By</th>
						<td>JEE Advanced is held by one of the seven Zonal Coordinating IITs on a rotational basis, under the guidance of JAB</td>
					</tr>
				</tbody>
			</table>

			<p>&nbsp;</p>

		</div>
		
		<div class='profProfile' id="tabsub3" style='display:none;'>
			<ul style="margin-left:20px;">
				<li style="list-style-type: disc;"><b>Performance In JEE Main 2020 :</b> Top 2,50,000 All India Rank holders in JEE Main 2020.</li>
				<li style="list-style-type: disc;"><b>Age :</b> General category candidates should not be more than 26 years of age.</li>
				<li style="list-style-type: disc;"><b>Number Of Attempts :</b> Only 2 times in 2 consecutive years.</li>
				<li style="list-style-type: disc;"><b>Appearance In Class 12 (Or Equivalent) :</b> Candidates appearing for 10+2 or equivalent in 2020 are also eligible.</li>
				<li style="list-style-type: disc;"><b>Earlier Admission At IITs :&nbsp;</b>
				<ol style="margin-left:20px;">
					<li style="list-style-type: auto;">Students who rejected the seat of IIT earlier are not eligible to apply.</li>
					<li style="list-style-type: auto;">Those who joined preparatory courses in any of the IITs in the previous academic sessions can also apply. And those who have paid the seat acceptance fee but still not accepted the seat are eligible.</li>
				</ol>
				</li>
			</ul>
		</div>
		<div style='height:40px'></div>
		
		
    </div>
</section>
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