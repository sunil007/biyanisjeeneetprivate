<?php
	$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
	$title = "Biyani's Jee Neet Private";
	switch($curPageName){
		case "overview.php": $title = "About - Biyani's Jee Neet Private"; break;
		case "contact.php": $title = "Contact - Biyani's Jee Neet Private"; break;
		case "faculty.php": $title = "Faculty - Biyani's Jee Neet Private"; break;
		case "course.php": $title = "Course - Biyani's Jee Neet Private"; break;
		default : $title = "Biyani's Jee Neet Private"; break;
	}
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php echo $title; ?></title>

  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <!-- web fonts -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css?132">
  <link rel="stylesheet" href="assets/css/font-icons.css">
  <link rel="shortcut icon" href="./assets/images/fav.png">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y4CXFKX4L4"></script>
  <script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-Y4CXFKX4L4');
  </script>
</head>