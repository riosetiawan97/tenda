<!DOCTYPE html>

<html lang="en">
<head>
  
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<?php
$halaman = @$_GET['halaman'];
$id_banner = @$_GET['id_banner'];
$id_produk = @$_GET['id_produk'];
$id_testimoni = @$_GET['id_testimoni'];
if($halaman == ""){
	echo "<title>Admin Tenda</title>";
}else if (isset($_GET['halaman'])){
    if ($_GET['halaman']=="galeri"){
        echo "<title>Admin Tenda | Galeri</title>";
    }elseif ($_GET['halaman']=="tambahgaleri"){
        echo "<title>Admin Tenda | Tambah Galeri</title>";
    }elseif ($_GET['halaman']=="ubahgaleri"){
        echo "<title>Admin Tenda | Ubah Galeri</title>";	
    }elseif ($_GET['halaman']=="hapusgaleri"){
        echo "<title>Admin Tenda | Hapus Galeri</title>";	
    }
    
    elseif ($_GET['halaman']=="aboutus"){
        echo "<title>Admin Tenda | Tentang Kami</title>";	
    }
    
    elseif ($_GET['halaman']=="testimoni"){
        echo "<title>Admin Tenda | Testimoni</title>";	
    }elseif ($_GET['halaman']=="tambahtestimoni"){
        echo "<title>Admin Tenda | Tambah Testimoni</title>";
    }elseif ($_GET['halaman']=="ubahtestimoni"){
        echo "<title>Admin Tenda | Ubah Testimoni</title>";	
    }elseif ($_GET['halaman']=="hapustestimoni"){
        echo "<title>Admin Tenda | Hapus Testimoni</title>";
    }
    
    elseif ($_GET['halaman']=="banner"){
        echo "<title>Admin Tenda | Banner</title>";	
    }elseif ($_GET['halaman']=="tambahbanner"){
        echo "<title>Admin Tenda | Tambah Banner</title>";		
    }elseif ($_GET['halaman']=="hapusbanner"){
        echo "<title>Admin Tenda | Hapus Banner</title>";		
    }elseif ($_GET['halaman']=="ubahbanner"){
        echo "<title>Admin Tenda | Ubah Banner</title>";	
    }
}

$sql_aboutus = mysqli_query($koneksi, "select * from about_us where id_au =1") or die (mysqli_error());
$data_aboutus = mysqli_fetch_array($sql_aboutus);					
$alamatinstagram =(strip_tags($data_aboutus['instagram']));
$instagram = substr($alamatinstagram,1);
?>


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
						<p>Pemesanan <span></span><i class="icon-mobile2" ></i><a href="https://api.whatsapp.com/send?phone=6287800081968&text=Hallo%20saya%20lihat%20di%20iklan%20www.bertenda99.co.id,%20saya%20mau%20konsultasi,%20mohon%20segera%20hubungi%20saya..%20%F0%9F%99%8F%F0%9F%98%8A" target="_blank">
						
						<?=$data_aboutus['no_telp']; ?></a><span></span>&bull;<span></span> <i class="icon-mail3"></i> Mail us - <a href="#">@gmail.com</a></p>
					</div>
					<div class="nav-social-icons">
						<ul class="social-icons">
							<li class="instagram">
								<a href="https://www.instagram.com/<?=$instagram; ?>/" target="_blank">
								<i class="fa fa-instagram"></i>
								<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li class="youtube">
							<a href="https://api.whatsapp.com/send?phone=6287800081968&text=Hallo%20saya%20lihat%20di%20iklan%20www.bertenda99.co.id,%20saya%20mau%20konsultasi,%20mohon%20segera%20hubungi%20saya..%20%F0%9F%99%8F%F0%9F%98%8A" target="_blank">
								<i class="fa fa-phone"></i>
								<i class="fa fa-phone"></i>
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
					<a href="indexadmin.php"><img src="foto/logo/LOGO TENDA.jpg" width="100" height="100"></a>
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
							<a class= "nav-link" href="indexadmin.php" >
								Beranda 
							</a>
						</li>

						<li class="dropdown">
								<a href="?halaman=banner">
									Banner
								</a>
						<li class="dropdown">
						<a href="?halaman=galeri">
									Galeri
								</a>
								</li>
						<li class="dropdown">
							<a href="?halaman=testimoni">
								Testimoni
							</a>
						</li>
				  		<li class="dropdown">
							<a href="?halaman=aboutus">
								Tentang Kami
							</a>
						</li>
						<li class="dropdown">
							<?php
							$admin_terlogin = @$_SESSION['admin'];
							$sql_admin = mysqli_query($koneksi, "select * from admin where id_admin = '$admin_terlogin'") or die (mysqli_error());
							$data_admin = mysqli_fetch_array($sql_admin);
							?>
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">
								<?php echo $data_admin['username'];?> 
								<div class="arrow-up"><i class="fa fa-angle-down"></i></div>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Edit Profil</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>	
				  </ul>
				</div>
			</div>
		</div>
	</header>