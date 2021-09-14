<!doctype html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>
<?php include 'include/nav.php'; ?>
<section class="w3l-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Contact</p>
    </div>
  </div>
</section>
<!-- //breadcrum -->
<!-- contacts -->
<section class="w3l-contact" id="contact">
  <div class="contacts-9 py-5">
    <div class="container py-lg-3">
      <div class="header-section text-center mb-5">
        <h2>Contact us</h2>
      </div>
      <div class="row top-map">
        <div class="cont-details col-md-5">
          <div class="cont-top">
            <div class="cont-left">
              <span class="fa fa-map-marker text-primary"></span>
            </div>
            <div class="cont-right">
              <h6>Mira Road (E)</h6>
              <p>Shop no. 103/104, C-Wing, 1st Floor, Dev Paradise, Kanakia Road, Above Axis Bank, Mira Road (East), <span style='white-space:nowrap'>Thane - 401107.</span></p>
            </div>
          </div>
		  <div style='height:25px;'></div>
		  <div class="cont-top">
            <div class="cont-left">
              <span class="fa fa-map-marker text-primary"></span>
            </div>
            <div class="cont-right">
              <h6>Kandivali (E)</h6>
              <p>Gokul Concorde, Bunglow No. 1, Dattani Park Rd, near Kangaroo Kids, CHS, Dattani Park, Thakur Village, Kandivali East, Mumbai, <span style='white-space:nowrap'>Maharashtra 400101.</span></p>
            </div>
          </div>
          <div class="cont-top mt-lg-4 mt-4">
            <div class="cont-left">
              <span class="fa fa-phone text-primary"></span>
            </div>
            <div class="cont-right">
              <h6>Call us:</h6>
              <p><a class="text-dec-none" href="tel:+91 8454-88-8439"> +91 8454-88-8439 (Mira Road)</a></p>
              <p><a class="text-dec-none" href="tel:+91 7900-04-0194"> +91 7900-04-0194 (Kandivali)</a></p>

            </div>
          </div>
          <div class="cont-top mt-lg-4 mt-4">
            <div class="cont-left">
              <span class="fa fa-envelope-o text-primary"></span>
            </div>
            <div class="cont-right">
              <h6>Have any questions?</h6>
              <p><a href="mailto:biyanisjeeneet@gmail.com" class="mail">biyanisjeeneet@gmail.com</a></p>
            </div>
          </div>
        </div>
        <div class="map-content-9 col-md-7 mt-5 mt-md-0">
          <form action="#" onSubmit="return generateEnquiry(this)" method="post">
            <div class="twice">
              <input type="text" class="form-control" name="name" placeholder="Name" required="">
            </div>
            <div class="twice">
              <input type="number" class="form-control" name="mobile" placeholder="Phone Number" required="">
            </div>
			<div class="twice">
              <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
            <div class="twice">
              <textarea name="message" class="form-control" placeholder="Message" required=""></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary theme-button">Send Message&nbsp; &nbsp;<i class="fa fa-paper-plane-o"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7531.546217919729!2d72.86353894970738!3d19.292230626690866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b047344ea57d%3A0xc87fcdf6cb729f63!2sBiyani&#39;s%20Super%2030!5e0!3m2!1sen!2sin!4v1631628514541!5m2!1sen!2sin"
      allowfullscreen=""></iframe>
  </div>
</section>
<?php include 'include/footer.php'; ?>
<?php include 'include/js.php'; ?>
<?php include 'include/enquireModal.php'; ?>
</body>

</html>