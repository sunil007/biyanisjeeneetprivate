<!doctype html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>
<?php include 'include/nav.php'; ?>
<!-- breadcrum -->
<section class="w3l-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Courses</p>
    </div>
  </div>
</section>
<!-- //breadcrum -->
<section class="w3l-services2" id="courceDetailSection">
  <div class="mobile-info py-5" style='background-size: cover;'>
    <div class="container py-lg-3">
      <div class="header-section mb-5 text-center">
        <h3 class='bottomUnderline'>Our Courses</h3>
      </div>
      <div class="row mobile-info-inn mx-lg-0">
        <div class="col-lg-4 mobile-right">
          <div class="row mobile-right-grids mb-lg-5 mb-4 ripplecontainer" data-type='detailTrigger' data-href='#jeeAdvanceDetail'>
            <div class="col-md-2 col-lg-3 pr-0 col-3 mobile-right-icon">
              <div class="mobile-icon ripple">
                <img src="assets/images/banner.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-md-10 col-lg-9 mobile-right-info col-9">
              <h6><a href="course-jee-advanced.php">JEE ADVANCED</a></h6>
              <p style="color:#000;">A two-year intensive course to prepare for JEE Advanced. Students selected will be placed in <span style='color:#8f2929;font-weight:bold;'>BATCH ARJUNA</span>. It is a 5+1+1 Week program.</p>
            </div>
          </div>
          <div class="row mobile-right-grids mb-lg-5 mb-4 ripplecontainer" data-type='detailTrigger' data-href='#neetDetail'>
            <div class="col-md-2 col-lg-3 pr-0 col-3 mobile-right-icon">
              <div class="mobile-icon ripple">
                <img src="assets/images/banner1.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-md-10 col-lg-9 mobile-right-info col-9">
              <h6><a href="course-neet.php">NEET</a></h6>
              <p style="color:#000;">A two-year course to prepare for NEET. Students interested will be placed in <span style='color:#8f2929;font-weight:bold;'>BATCH ANKUR</span>. It is a 5+1+1 Week program.</p>
            </div>
          </div>
          <div class="row mobile-right-grids ripplecontainer" data-type='detailTrigger' data-href='#jeeMainsDetail'>
            <div class="col-md-2 col-lg-3 pr-0 col-3 mobile-right-icon">
              <div class="mobile-icon ripple">
                <img src="assets/images/banner2.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-md-10 col-lg-9 mobile-right-info col-9">
              <h6><a href="course-jee-main.php">JEE MAIN</a></h6>
              <p style="color:#000;">A two-year course to prepare for JEE Main. Students interested will be placed in <span style='color:#8f2929;font-weight:bold;'>BATCH ABHIMANYU</span>. It is a 5+1+1 Week program.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mobile-left">
			<div id='detailsContainer'>
				<div class="detailsNode text-center" id="defaultDetail" style="max-width:400px;margin: auto;">
					<img src="assets/images/biyanis_symbol_lg -transparent.png" class="img-fluid" alt=""  />
				</div>
			</div>
        </div>
        <div class="col-lg-4 mobile-right">
          <div class="row mobile-right-grids mb-lg-5 mb-4 ripplecontainer"  data-type='detailTrigger' data-href='#foundationDetail'>
            <div class="col-md-2 col-lg-3 pr-0 col-3 mobile-right-icon">
              <div class="mobile-icon ripple">
                <img src="assets/images/banner.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-md-10 col-lg-9 mobile-right-info col-9">
              <h6><a href="course-foundation-courses.php">FOUNDATION COURSES</a></h6>
              <p>A one-year intensive course to prepare for JEE, NEET, and other scholarship exams. Students interested will be placed in Batch Agrim. It is a weekly program.</p>
            </div>
          </div>
          <div class="row mobile-right-grids mb-lg-5 mb-4 ripplecontainer"  data-type='detailTrigger' data-href='#prayasDetail'>
            <div class="col-md-2 col-lg-3 pr-0 col-3 mobile-right-icon">
              <div class="mobile-icon ripple">
                <img src="assets/images/banner1.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-md-10 col-lg-9 mobile-right-info col-9">
              <h6><a href="course-prayas-aits.php">PRAYAS-AITS</a></h6>
              <p>A national level test series for students to rank themselves amongst the best of India.</p>
            </div>
          </div>
          <div class="row mobile-right-grids ripplecontainer"  data-type='detailTrigger' data-href='#kvpyDetail'>
            <div class="col-md-2 col-lg-3 pr-0 col-3 mobile-right-icon">
              <div class="mobile-icon ripple">
                <img src="assets/images/banner2.jpg" class="img-fluid" alt="" />
              </div>
            </div>
            <div class="col-md-10 col-lg-9 mobile-right-info col-9">
              <h6><a href="course-kvpy-olymoiads.php">KVPY & OLYMPIADS</a></h6>
              <p>Encourage students to take up research careers in Basic Sciences, Engineering and Medicine</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?php include 'include/statistics1.php'; ?>
<?php include 'include/footerEnquery.php'; ?>
<?php include 'include/footer.php'; ?>
<?php include 'include/js.php'; ?>
<?php include 'include/enquireModal.php'; ?>
<script>
	/*$(document).ready(function(){
		checkDefault();
	});
	$('[data-type="detailTrigger"]').on('click', function(){
		detailSelector = $(this).attr('data-href');
		$("#detailsContainer .detailsNode").hide();
		$("#detailsContainer "+detailSelector).show();
		checkDefault();
	});
	
	$('[data-type="detailTrigger"]').on('mouseout', function(){
		//$("#detailsContainer .detailsNode").hide();
		//$("#detailsContainer #defaultDetail").show();
	})
	$(document).click(function(a,b,c){
		if($(a.target).parents('#courceDetailSection').length == 0){
			$("#detailsContainer .detailsNode").hide();
			$("#detailsContainer #defaultDetail").show();
		}
	});
	
	function checkDefault(){
		if($("#detailsContainer .detailsNode:visible").length != 1){
			$("#detailsContainer .detailsNode").hide();
			$("#detailsContainer #defaultDetail").show();
		}
	}*/
</script>
</body>

</html>