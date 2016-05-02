<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<!-- Template site title
   ================================================== -->
	<title><?= $this->section('title'); ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="codeburrow, web, software, development, design">
	<meta name="description" content="">

	<link rel="shortcut icon" href="img/logo_trans.png">
	<!--

	Template 2078 Adventure

	http://www.tooplate.com/view/2078-adventure

	-->
	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">

	<!-- Nivo Lightbox CSS
   ================================================== -->
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

	<!-- Owl Carousel CSS
   ================================================== -->
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">

	<!-- BxSlider CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bxslider.css">

	<!-- Main CSS
	================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font
   ================================================== -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Preloader section
================================================== -->
<section class="preloader">

	<div class="sk-rotating-plane"></div>

</section>


<!-- Content section
================================================== -->
<?=$this->section('content')?>


<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
				<div class="section-title">
					<?php if (isset($messageSuccess)) { ?>
						<h2 style="color: forestgreen;">
							<?php echo $messageSuccess; ?>
						</h2>
					<?php } elseif (isset($messageError)) { ?>
						<h2 style="color: tomato;">
							<?php echo $messageError; ?>
						</h2>
					<?php } else { ?>
						<h5 class="wow bounceIn">THE FIRST STEP</h5>
						<h1 class="heading">CONTACT US</h1>
						<hr>
						<p>We promise to get back to you in less than a day.</p>
						<p>(Except if it's Sunday <i class="fa fa-smile-o" aria-hidden="true"></i> )</p>
					<?php } ?>
				</div>
			</div>

			<!-- Contact form section
			================================================== -->
			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<form action="/#contact" method="POST" class="wow fadeInUp" data-wow-delay="0.6s">
					<div class="col-md-4 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<div class="col-md-4 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col-md-4 col-sm-12">
						<input type="text" class="form-control" placeholder="Subject" name="subject">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>
					</div>
					<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
						<input type="submit" class="form-control" value="SHOOT MESSAGE">
					</div>
				</form>
			</div>

			<!-- Contact detail section
			================================================== -->
			<div class="contact-detail col-md-12 col-sm-12">
				<div class="col-md-6 col-sm-6">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>support@codeburrow.com</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="tel:+306949464934">
						<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> CEO PHONE</h3>
						<p>+30 694 94 64 934</p>
					</a>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">

				<a style="color: #ffa400;" href="http://www.codeburrow.com"><h2 class="wow bounceIn">CodeBurrow</h2></a>
				<ul class="social-icon">
					<li><a href="https://www.linkedin.com/company/codeburrow" class="fa fa-linkedin wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="https://github.com/codeburrow" class="fa fa-github wow fadeIn" data-wow-delay="1.3s"></a></li>
				</ul>
				<p>Copyright &copy; 2016 CodeBurrow

					| Back To: <a rel="nofollow" href="#home" target="_parent">Top</a></p>

			</div>
		</div>
	</div>
</footer>


<!-- Javascript
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.easing-1.3.js"></script>
<script src="js/plugins.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

