<style>
label input[type="file"]{
display:none;
}
.button {
  background-color: #FE980F; /* Green */
  border: none;
  color: white;
  padding:5px 16%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.bg-navbar{
	background-color: #EAE8E8;
}
.button2 {
  background-color: #FE980F; /* Green */
  border: none;
  color: white;
  padding:5px 17.5%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;
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
    <link href="/frontend/assets/css/bootstrap2.min.css" rel="stylesheet">
		{{-- <link href="/frontend/assets/css/bootstrap2.min.css" rel="stylesheet"> --}}
    <link href="/frontend/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/frontend/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="/frontend/assets/css/price-range.css" rel="stylesheet">
    <link href="/frontend/assets/css/animate.css" rel="stylesheet">
	<link href="/frontend/assets/css/main.css" rel="stylesheet">
	<link href="/frontend/assets/css/responsive.css" rel="stylesheet">
	<link href="/frontend/assets/css/dropzone.css" rel="stylesheet">
	<link href="/frontend/assets/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="/welcome/assets/css/magnific-popup.css">
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
		<nav class="navbar navbar-expand-lg navbar-light bg-navbar" style="height:50px">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  
  </div>
</nav>
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="/frontend/assets/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					{{-- <div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{url("cart")}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div> --}}
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
						</div>
						{{-- <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{(url("index"))}}">Cafe</a></li>
								<li><a href="{{ url('indexfoto') }}">Foto Studio</a></li>
							</ul>
						</div> --}}
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
    <form  action="{{ route('fotostudio.store') }}" method="post" enctype="multipart/form-data">
		 {{ csrf_field() }}
		<div class="form-row">
    <div class="col">
	 <label>Nama</label>
    <input type="text" class="form-control"name="nama" placeholder="nama..." required>
    </div>
    <div class="col">
	<label>Tanggal Pemotretan</label>
    <input type="date" class="form-control" name="tgl_cetak" required>
    </div>
  </div>
		<div class="form-row">
    <div class="col">
	  <label>Alamat</label>
    <input type="text" class="form-control"name="alamat"  placeholder="alamat..." required>
    </div>
    <div class="col">
 <label>Tanggal Selesai</label>
    <input type="date" class="form-control" name="tgl_ambil" required>
    </div>
  </div>
		<div class="form-row">
    <div class="col">
	   <label>Nomber Pelanggan</label>
    <input type="text" class="form-control"name="nomber"  placeholder="number..." required>
    </div>
    <div class="col">
 <label>Foto</label>
			  <input type="file" name="foto[]" class="form-control" multiple></input>
    </div>
  </div>
		<div class="form-row">
    <div class="col">
	   <label>Ekstra</label>
        <textarea id="editor1" name="ekstra" class="form-control" name="konten" rows="10" cols="50"  placeholder="Extra..."></textarea>
    </div>
    <div class="col">
 <label>Paket</label>
		  
		@isset($nama_paket)
		<input type="text" class="form-control"name="paket" value="{{ $nama_paket }}"  readonly>
@endisset
    </div>
  </div>
<button type="submit" class="button2 cetak-topright simpan">Simpan</button>
	</div>
</div>
  <br>
  <br>
    </from>
</div>
 
{{-- <div="container"> --}}
{{-- <div class="col-sm-2">
<div class="image-topright">
<img src="/multipleimage/assets/images/upload.jpg" id="changeimage1"  name="foto" height="150" width="150">
</div>
<div>
<div class="col-sm-2">
<div class="image-topright-2">
<img src="/multipleimage/assets/images/upload.jpg" id="changeimage2" name="foto" height="150" width="150">
</div>
<div>
<div class="col-sm-2">
<div class="image-topright-3">
<img src="/multipleimage/assets/images/upload.jpg" id="changeimage3" name="foto" height="150" width="150">
</div>
<div>
<div class="col-sm-2">
<div class="image-topright-4">
<img src="/multipleimage/assets/images/upload.jpg" id="changeimage4" name="foto" height="150" width="150">
</div>
<div>
<div class="col-sm-2">
<div class="image-topright-5">
<img src="/multipleimage/assets/images/upload.jpg" id="changeimage5" name="foto" height="150" width="150">
</div>
<div>
<div class="col-sm-2">
<div class="image-topright-6">
<img src="/multipleimage/assets/images/upload.jpg" id="changeimage6" name="foto" height="150" width="150">
</div>
<div> --}}
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
			 
					<div class="col-sm-3">
						<div class="address">
							<img src="/frontend/assets/images/home/map.png" alt="" />
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
	


    <script src="/frontend/assets/js/jquery.js"></script>
	<script src="/frontend/assets/js/bootstrap.min.js"></script>
	<script src="/frontend/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/frontend/assets/js/jquery.prettyPhoto.js"></script>
    <script src="/frontend/assets/js/main.js"></script>
		<script  type="text/javascript"  src="/frontend/assets/js/dropzone.js"></script>
		<script src="/frontend/assets/js/jquery-dropzone.js"></script>
		<script src="/frontend/assets/js/dropzone-config.js"></script>
		<script src="/welcome/assets/js/dynamic.js"></script>
		<script src="/sweetalert/assets/js/sweetalert2.all.min.js"></script>
		{{-- <script> 

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

</script> --}}
<script>
$('.simpan').click(function(){
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Data Sudah Tersimpan',
  showConfirmButton: false,
  timer: 1500
})
});
</script>

</body>
</html>