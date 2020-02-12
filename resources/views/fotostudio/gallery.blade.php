<style>
.bg-navbar{
	background-color: #242423;
}
.color-text{
	color:white;
}
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

	
    <link rel="stylesheet" href="/welcome/assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/welcome/assets/css/animate.css">
    
    <link rel="stylesheet" href="/welcome/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/welcome/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/welcome/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/welcome/assets/css/aos.css">

    <link rel="stylesheet" href="/welcome/assets/css/ionicons.min.css">

    <link rel="stylesheet" href="/welcome/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/welcome/assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/welcome/assets/css/flaticon.css">
    <link rel="stylesheet" href="/welcome/assets/css/icomoon.css">
    <link rel="stylesheet" href="/welcome/assets/css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.html"><span class="flaticon-camera"></span>Capture</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="{{url('/')}}" class="color-text">Home</a></li>
					<li class="{{url('gallery')}}"><a href="gallery.html">Gallery</a></li>
					<li><a href="{{url('about')}}">About</a></li>
					<li><a href="{{url('contant')}}">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h3>Follow Us Here!</h3>
				<div class="d-flex justify-content-center">
					<ul class="d-flex align-items-center">
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-instagram"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
		<nav class="navbar navbar-expand-lg navbar-light bg-navbar">
  <a class="navbar-brand" style="color:white" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        {{-- <a class="nav-link disabled"  style="color:white" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
				<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Action
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Action 7</a>
					<a class="dropdown-item" href="#">Action 8</a>
					<a class="dropdown-item" href="#">Action 9</a>
						<a class="dropdown-item" href="#">Action 10</a>
				</div>
			</div>
      </li>
		 <li class="nav-item active">
        <a class="nav-link" style="color:white" href="#">Photo Personal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color:white" href="#">Photo Group</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style="color:white" href="#">Pas Photo</a>
      </li>
			  <li class="nav-item">
        <a class="nav-link"  style="color:white" href="#">Frendship</a>
      </li>
			  <li class="nav-item">
        <a class="nav-link"  style="color:white" href="#">Photo Colase</a>
      </li>
    </ul>
  </div>
</nav>
			{{-- <section class="ftco-section bg-light ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-9 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Gallery</span></p>
	            <h1 class="mb-3 bread">Galleries</h1>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	          </div>
	        </div>
				</div>
			</section> --}}
			<section class="ftco-section-2">
				<div class="photograhy">
					<div class="row no-gutters">
					@foreach ($gallery as $data )
						<div class="col-md-4 ftco-animate">
							<a href="images/image_1.jpg" >
							<img class="photography-entry img image-popup d-flex justify-content-center align-items-center" src="{{ asset('assets/img/galery/'.$data->foto_galery) }}"></img>
								{{-- <div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 01</h3>
									<span class="tag">Model</span>
								</div> --}}
							</a>
						</div>
						@endforeach
						{{-- <div class="col-md-4 ftco-animate">
							<a href="images/image_2.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_2.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 02</h3>
									<span class="tag">Nature</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_3.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_3.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 03</h3>
									<span class="tag">Fashion</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_4.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_4.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 04</h3>
									<span class="tag">Travel</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_5.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_5.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 05</h3>
									<span class="tag">Travel</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_6.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_6.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 06</h3>
									<span class="tag">Travel</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_7.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_7.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 07</h3>
									<span class="tag">Fashion, Model</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_8.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_8.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 08</h3>
									<span class="tag">Nature</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_9.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_9.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 09</h3>
									<span class="tag">Technology</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_10.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_10.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 10</h3>
									<span class="tag">Model</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_11.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(welcome/assets/images/image_11.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 11</h3>
									<span class="tag">Fashion</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_12.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(/welcome/assets/images/image_12.jpg);">
								<div class="overlay"></div>
								<div class="text text-center">
									<h3>Work 12</h3>
									<span class="tag">Photography</span>
								</div>
							</a>
						</div> --}}
					</div>
				</div>
			</section>
	    <footer class="ftco-footer ftco-bg-dark ftco-section">
	      <div class="container px-md-5">
	        <div class="row mb-5">
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4 ml-md-4">
	              <h2 class="ftco-heading-2">Category</h2>
	              <ul class="list-unstyled categories">
	                <li><a href="#">Photography <span>(6)</span></a></li>
	                <li><a href="#">Fashion <span>(8)</span></a></li>
	                <li><a href="#">Technology <span>(2)</span></a></li>
	                <li><a href="#">Travel <span>(2)</span></a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	             <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2">Archives</h2>
	              <ul class="list-unstyled categories">
	              	<li><a href="#">November 2018 <span>(105)</span></a></li>
	              	<li><a href="#">October 2018 <span>(212)</span></a></li>
	                <li><a href="#">September 2018 <span>(150)</span></a></li>
	                <li><a href="#">August 2018 <span>(100)</span></a></li>
	                <li><a href="#">July 2018 <span>(200)</span></a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
		                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
		                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">

	            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
	      </div>
	    </footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/welcome/assets/js/jquery.min.js"></script>
  <script src="/welcome/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/welcome/assets/js/popper.min.js"></script>
  <script src="/welcome/assets/js/bootstrap.min.js"></script>
  <script src="/welcome/assets/js/jquery.easing.1.3.js"></script>
  <script src="/welcome/assets/js/jquery.waypoints.min.js"></script>
  <script src="/welcome/assets/js/jquery.stellar.min.js"></script>
  <script src="/welcome/assets/js/owl.carousel.min.js"></script>
  <script src="/welcome/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="/welcome/assets/js/aos.js"></script>
  <script src="/welcome/assets/js/jquery.animateNumber.min.js"></script>
  <script src="/welcome/assets/js/bootstrap-datepicker.js"></script>
  <script src="/welcome/assets/js/jquery.timepicker.min.js"></script>
  <script src="/welcome/assets/js/scrollax.min.js"></script>
  <script src="/welcome/assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/welcome/assets/js/google-map.js"></script>
  <script src="/welcome/assets/js/main.js"></script>
    
  </body>
</html>