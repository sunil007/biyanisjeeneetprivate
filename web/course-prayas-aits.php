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
            <h2 class='bottomUnderline'>Prayas AITS</h2>
        </div>
 
		<div class='row'>
			<div class='col-12 text-center'>
				<span onclick='showProfs("#tabsub1", this)' style='cursor:pointer;' class='theme-button btn-outline-primary active'>OVERVIEW</span>
				<span onclick='showProfs("#tabsub2", this)' style='cursor:pointer;' class='theme-button btn-outline-primary'>ONLINE TESTING FEATURES</span>
			</div>
		</div>
		<hr>
		<div class='profProfile' id="tabsub1">
			<p>A national level test series for students to rank themselves amongst the best of India. This course is a structured and comprehensive practice session in the form of Mock exams conducted in JEE& NEET pattern. This will perfect examination skills of a student, and will help them to evaluate their performance to compete on a national level platform. 
			<p style='height:10px;'>&nbsp;</p>
			<p>This test series helps students complete their examination preparation much ahead of schedule. Detailed solution sets alongwith projected cut-off and projected AIR is provided after every exam.</p>
			<p style='height:10px;'>&nbsp;</p>
			

		</div>
		
		<div class='profProfile' id="tabsub2" style='display:none'>
			<p style='height:10px;'>&nbsp;</p>
			<ol>
				<li><strong>Exam Like Tests</strong>
				<ul>
					<li>Students will be trained for online exams with the same software interface that will be used for their actual entrance exams. These simulated tests will familiarise the student with the testing environment and improve their efficiency.<p style='height:10px;'>&nbsp;</p></li>
				</ul>
				</li>
				<li><strong>Real-time Results</strong>
				<ul>
					<li>Students will be able to procure their results instantly after finishing their test. Test results of the same will be recorded with us in order to keep track of the academic progress of every student.<p style='height:10px;'>&nbsp;</p></li>
				</ul>
				</li>
				<li><strong>Immediate PARA(Performance And Result Analysis)</strong>
				<ul>
					<li>An extensive report detailing the performance analysis of the student on various important parameters will be generated immediately after the student finishes their Major Test.<p style='height:10px;'>&nbsp;</p></li>
				</ul>
				</li>
				<li><strong>Challenging Questions</strong>
				<ul>
					<li>Al-based online testing content will be incorporated to continuously challenge the student and increase their skills in answering questions that require higher-order thinking skills.<p style='height:10px;'>&nbsp;</p></li>
				</ul>
				</li>
				<li><strong>All India Level Ranking</strong>
				<ul>
					<li>In order to gauge where the student stands amongst thousands of other aspirants, AITS (All India Test Series) will be provided and the student will get a realistic and comparative assessment of their performance.<p style='height:10px;'>&nbsp;</p></li>
				</ul>
				</li>
				<li><strong>Made by Experts</strong>
				<ul>
					<li>The testing content is prepared by subject experts from the entrance exam perspective. For Major Tests, highly concept based, complex questions are selected from past papers as well as made specifically by alumni of IITs and students from reputed medical colleges.<p style='height:10px;'>&nbsp;</p></li>
				</ul>
				</li>
			</ol>


			<p>&nbsp;</p>

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