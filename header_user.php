<!DOCTYPE html>

<html lang="en">
<head>
  
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<title>Tenda</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

	<!-- Styles -->
	<link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="js/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="js/flexslider/flexslider.css">
	<link rel="stylesheet" href="js/isotope/isotope.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="js/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Icon Fonts -->
	<link rel="stylesheet" href="css/icomoon/style.css" type="text/css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

	<!-- SKIN -->
	<link rel="stylesheet" href="css/color-scheme/default-blue.css" type="text/css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
           <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>      
	<![endif]-->

</head>
<body>

<div class="outer-wrapper">

	<!-- TOPBAR -->
	<div id="top-bar" class="hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-bar-content">
						<p>Pemesanan <span></span><i class="icon-mobile2"></i> +628 <span></span>&bull;<span></span> <i class="icon-mail3"></i> Mail us - <a href="#">@gmail.com</a></p>
					</div>
						<?php
						if(@$_SESSION['admin'] == 0){ ?>
							<div class="top-login">							
									<a href="?halaman=login">Login</a>
							</div>					
					<?php
						}
						?>
					<div class="nav-social-icons">
						<ul class="social-icons">
							<li class="facebook">
								<a href="http://facebook.com" target="_blank">
								<i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="twitter">
								<a href="http://twitter.com" target="_blank">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="google-plus">
								<a href="http://google.com" target="_blank">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li class="pinterest">
								<a href="http://pinterest.com" target="_blank">
								<i class="fa fa-pinterest"></i>
								<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li class="instagram">
								<a href="http://instagram.com" target="_blank">
								<i class="fa fa-instagram"></i>
								<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li class="youtube">
								<a href="http://youtube.com" target="_blank">
								<i class="fa fa-youtube"></i>
								<i class="fa fa-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- HEADER -->
	<header id="header-main">
		<div class="container">
			<div class="navbar yamm navbar-default">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="index.php"><img src="foto/logo/LOGO TENDA.jpg" width="100" height="100"></a>
				</div>

				<!-- CART / SEARCH -->
				<div class="header-x pull-right">
					<div class="s-search">
						<div class="ss-trigger"><i class="icon-search2"></i></div>
						<div class="ss-content">
							<span class="ss-close icon-cross2"></span>
							<div class="ssc-inner">
								<form>
									<input type="text" placeholder="Type Search text here...">
									<button type="submit"><i class="icon-search2"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class= "nav-link" href="index.html" >
								Home 
							</a>
						</li>

				  
				  <li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
								Galeri
								<div class="arrow-up"><i class="fa fa-angle-down"></i></div>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="?halaman=galeri">Semua</a></li>
								<?php
									$query  = mysqli_query($koneksi, "SELECT * FROM kategori") or die (mysqli_error());
									while ($kategori = mysqli_fetch_array($query)) {
								?>
								<li><a href="?halaman=galeri&galeri=<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?></a></li>
								<?php
									}
								?>
							</ul>
						</li>
				  		<li class="dropdown">
				  			<a href="?halaman=aboutus">
								Tentang Kami
							</a>
						</li>
				  </ul>
				</div>
			</div>
		</div>
	</header>