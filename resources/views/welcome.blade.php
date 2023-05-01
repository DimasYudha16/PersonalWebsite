<!DOCTYPE html>

<html>
<head>
	<title>Personal Website Yudha</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Goggle Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>

	<!-- Font Css -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Animation Css -->
	<link rel="stylesheet" href="css/animate.css">

</head>
<body>
<header>
	<div id="homeFullScreen">
		<div class="header-text">
			<h1>Personal Website</h1>
			<div class="vertical-line"></div>
			<p>
				Dimas Yudha Adi Pascayana
				<br />
				<span>Bina Nusantara University</span>
			</p>
		</div><!-- End HeaderText -->
	</div><!-- End homeFullScreen -->
</header><!-- End Header -->

<!-- Feature -->

<section class="feature">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="feature-box">
					<h1>About Me!</h1>
					<p>Hello, my name is Dimas Yudha Adi Pascayana, my nickname is Yudha, I am student in Bina Nusantara University (Binus) I live in Malang City and this is my personal website</p>
				</div>
			</div><!-- End col-md-6 -->
			<div class="col-md-6 col-sm-6 nopadding">
				<img src="{{ asset('images/Fotoril.jpg') }}" alt="Gambar Pribadi">
			</div><!-- End col-md-6 -->

			<div class="clearfix"></div><!-- End clearfix -->

			<div class="col-md-6 col-sm-6 nopadding">
				<img src="{{ asset('images/fotokelas.jpg') }}" alt="Gambar Pribadi">
			</div><!-- End col-md-6 -->
			<div class="col-md-6 col-sm-6">
				<div class="feature-box">
					<h1>Daily Life</h1>
					<p>Being a 4th semester student at Binus is one of the fun things because I can learn to make a website that is very exciting. and now I get an assignment to make a personal website.</p>
				</div>
			</div><!-- End col-md-6 -->
		</div>
	</div>
</section>

<!-- portfolio -->

<section class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="heading">This my Portofolio</h1>
			</div><!-- End col-md-12 -->
			@foreach($portofolio as $p)
			<div class="col-md-4 col-sm-4">
				<img src="{{ asset('images/'.$p->image) }}" alt="Gambar Portofolio">
			</div>
			@endforeach
			
		</div><!-- End row -->
	</div><!-- End container -->
</section>

<!-- Call to Action -->
<section class="call-top-action text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>So this is i am</h1>
				<p>besides studying, I also have a hobby of playing basketball, I also have a shoe washing and pancong cake business. 
				<br />
				so this is my portfolio, hopefully with this website you know me better</p>
				<span>Dimas Yudha</span>
			</div><!-- End col-md-12 -->
		</div><!-- End row -->
	</div><!-- End container -->
</section>

<!-- Footer -->
<footer>
	<span class="copyright">&#169; Untitled . All rights reserved. Design By <a href="http://templatestock.co">Templatestock.co</a></span>
</footer>
	



<!-- Main JS -->
<script type="text/javascript" src="js/jquery-main.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Animation JS -->
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- Custom JS -->
<script type="text/javascript" src="js/custom.js"></script>


</body>
</html>