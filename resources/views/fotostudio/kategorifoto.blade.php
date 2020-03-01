<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Capture - Free Bootstrap 4 Template by Colorlib</title>
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
					<li><a href="index.html">Home</a></li>
					<li class="colorlib-active"><a href="gallery.html">Gallery</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
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
			<section class="ftco-section bg-light ftco-bread">
			<nav class="navbar navbar-expand-lg navbar-light bg-navbar">
  <a class="navbar-brand" style="color:white" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
			{{-- @foreach ($kategori as $a )
					 <li class="nav-item active">
							<a class="nav-link" style="color:white" href="{{route('kategorifoto', $a->slug)}}">{{$a->kategori_foto}}</a>
						</li>
			@endforeach --}}
    </ul>
  </div>
</nav>
			</section>
			<section class="ftco-section-2">
				<div class="photograhy">
					<div class="row no-gutters">
          @foreach ($kategori->galery as $data )
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/welcome/assets/js/google-map.js"></script>
  <script src="/welcome/assets/js/main.js"></script>
    
  </body>
</html>