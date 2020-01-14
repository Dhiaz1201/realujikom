<style>
label input[type="file"]{
display:none;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Foto Studio</title>
    <link href="frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="frontend/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="frontend/assets/css/price-range.css" rel="stylesheet">
    <link href="frontend/assets/css/animate.css" rel="stylesheet">
	<link href="frontend/assets/css/main.css" rel="stylesheet">
	<link href="frontend/assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="frontend/assets/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{url("cart")}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{(url("index"))}}">Cafe</a></li>
								<li><a href="{{ url('indexfoto') }}">Foto Studio</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
<div class="container">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <title>Foto Studio</title>
  </head>
  <body>
  <div class="container">
    <h1>Foto Studio</h1>
    <form>
     <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control"name="nama" placeholder="your name...">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" class="form-control"name="alamat"  placeholder="alamat...">
  </div>
	 <div class="form-group">
    <label>Number</label>
    <input type="text" class="form-control"name="number"  placeholder="number...">
  </div>
  <div class="form-group">
    <label>Cetak Ukuran</label>
    <select class="form-control" name="cetak">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label>Tanggal Cetak</label>
    <input type="date" class="form-control" name="tgl_cetak">
  </div>
  <div class="form-group">
    <label>Tanggal Ambil</label>
    <input type="date" class="form-control" name="tgl_ambil">
  </div>
   <div class="form-group">
    <label>Jenis</label>
    <select class="form-control" name="jenis">
      <option>Fashion</option>
      <option>Wedding</option>
      <option>Still Life</option>
      <option>Family</option>
      <option>Single</option>
    </select>
  </div>
		<label>Foto</label>
	<div class="from-group">
	<label class="btn btn-primary" for="uploadedhere">Upload
<input type="file" id="uploadedhere" onchange="myfun()">
</label>
<button type="submit" class="btn btn-primary">Cetak</button>
</div>
  <br>
  <br>
    </from>
</div>
{{-- <div="container"> --}}
<div class="col-sm-2">
<div class="image-topright">
<img src="multipleimage/assets/images/upload.jpg" id="changeimage1" height="150" width="150">
</div>
<div>
</div>
<div class="col-sm-2">
<div class="image-topright-2">
<img src="multipleimage/assets/images/upload.jpg" id="changeimage2" height="150" width="150">
</div>
<div>
<div class="col-sm-2">
<div class="image-topright-3">
<img src="multipleimage/assets/images/upload.jpg" id="changeimage3" height="150" width="150">
</div>
<div>
<div class="col-sm-2">
<div class="image-topright-4">
<img src="multipleimage/assets/images/upload.jpg" id="changeimage4" height="150" width="150">
</div>
<div>
<div class="col-sm-2">
<div class="image-topright-5">
<img src="multipleimage/assets/images/upload.jpg" id="changeimage5" height="150" width="150">
</div>
<div>
<div class="col-sm-2">
<div class="image-topright-6">
<img src="multipleimage/assets/images/upload.jpg" id="changeimage6" height="150" width="150">
</div>
<div>
{{-- </div> --}}
  </body>
</html>
</div="container">
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="frontend/assets/images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="frontend/assets/images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="frontend/assets/images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="frontend/assets/images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="frontend/assets/images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="frontend/assets/js/jquery.js"></script>
	<script src="frontend/assets/js/bootstrap.min.js"></script>
	<script src="frontend/assets/js/jquery.scrollUp.min.js"></script>
    <script src="frontend/assets/js/jquery.prettyPhoto.js"></script>
    <script src="frontend/assets/js/main.js"></script>
		<script> 

var i = 0;
function myfun(){
i++;

 var x = 	document.getElementById("uploadedhere").files[0];
 var currentimage1  = document.getElementById("changeimage1");
  var currentimage2  = document.getElementById("changeimage2");
  var currentimage3  = document.getElementById("changeimage3");
  var currentimage4  = document.getElementById("changeimage4");
  var currentimage5  = document.getElementById("changeimage5");
  var currentimage6  = document.getElementById("changeimage6");

 
var reader =   new FileReader();
 
 reader.onload = function(){
 
 if(i == "1"){
currentimage1.src = reader.result;
}

if(i == "2"){
currentimage2.src = reader.result;
}
if(i == "3"){
currentimage3.src = reader.result;
}
if(i == "4"){
currentimage4.src = reader.result;
}
if(i == "5"){
currentimage5.src = reader.result;
}
if(i == "6"){
currentimage6.src = reader.result;
}


 }
 



reader.readAsDataURL(x);
}














</script>

</body>
</html>