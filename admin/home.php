
<!-- SLIDER -->
	<div class="slider-wrap">
		<div class="tp-banner-container">
			<div class="tp-banner" >
				<ul>
					<?php $ambil = $koneksi->query("SELECT * FROM banner")or die($koneksi->error);?> 
					<?php while($perproduk = $ambil->fetch_assoc()){ ?>  
					<!-- SLIDE  -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="" data-delay="13000"  data-saveperformance="off"  data-title="Our Workplace">
						<img src="foto/<?php echo $perproduk['foto_banner']; ?>"  alt="kenburns1"  data-bgposition="left center" data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130" data-bgpositionend="right center">
						<div class="tp-caption customin customout tp-resizeme"
							data-x="left" data-hoffset="60"
							data-y="500"
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="1000"
							data-start="500"
							data-easing="Back.easeInOut"
							data-endspeed="300"
							style="font-size:80px;color:#fff;text-transform:uppercase;font-weight: 800 !important;letter-spacing: 0px;line-height: 120% !important;"
							><?php echo $perproduk ['judul']; ?>
						</div>
						<div class="tp-caption light_title customin customout tp-resizeme"
							data-x="left" data-hoffset="60"
							data-y="370"
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="1000"
							data-start="700"
							data-easing="Back.easeInOut"
							data-endspeed="300" 
							style="font-size:18px;color:#fff;"
							><?php echo $perproduk ['subjudul']; ?>
						</div>
						<a href="banner.php" class="tp-caption small_title  customin customout tp-resizeme"
							data-x="left" data-hoffset="60"
							data-y="450"
							data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="1600"
							data-start="900"
							data-easing="Back.easeInOut"
							data-endspeed="300" style="	background: #000;
							padding:18px 28px;
							color: #fff;
							text-transform: uppercase;
							border: none;
							font-size: 13px;
							letter-spacing: 2px;
							border-radius: 0px;
							display: table;
							transition: .4s;
							border-radius:5px;
							">Tambah Banner</a>
					</li>
					<?php
					}
					?>
					<!-- SLIDE  -->
				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
	</div>

	<!-- INNER CONTENT -->
	<div class="inner-content no-padding">
		<div class="container">
			<div class="space60"></div>
			<div class="welcome-content text-center">
				<h2>Selamat Datang Admin</h2>
				<p class="lead">Tempat Sewa Tenda Berkualitas Dengan Harga Terjangkau</p>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<div class="container info-home">
			<div class="col-md-5">
				<img src="foto/tenda.jpg" alt="">
			</div>
			<div class="col-md-7">
				<h3>Pilihan Produk</em></h3>
				<div class="clearfix space10"></div>
				<a href="?halaman=produk" class="button btn-lg">Halaman Produk</a>
			</div>
		</div>
		
		<div class="clearfix space90"></div>
		
		<section id="portfolio-section">
			<div class="container">
				<h3 class="uppercase text-center"> Kategori</h3>
			</div>
			<ul class="filter" data-option-key="filter">
				<li><a class="selected" href="#filter" data-option-value="*">All</a></li>
				<?php
                      $query  = mysqli_query($koneksi, "SELECT * FROM kategori") or die (mysqli_error());
                      while ($kategori = mysqli_fetch_array($query)) {
                ?>
				<li><a href="#" data-option-value="<?php echo ".".$kategori['id_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?></a></li>
				<?php
					}
				?>
			</ul>
			
			<div id="portfolio-home" class="isotope">
				<?php
                      $query  = mysqli_query($koneksi, "SELECT * FROM produk") or die (mysqli_error());
                      while ($produk = mysqli_fetch_array($query)) {
                ?>
				<div class="project-item <?php echo $produk['id_kategori']; ?>">
					<div class="project-gal">
						<img src="foto/produk/<?php echo $produk['foto_produk']; ?>" class="img-responsive" alt="">
						<div class="overlay-folio">
							<div class="hover-box">
								<div class="hover-zoom">
									<a class="mp-lightbox zoom" href="foto/produk/<?php echo $produk['foto_produk']; ?>"><i class="icon-plus2"></i></a>
									<a class="link" href="?halaman=produk&id_kategori=<?php echo $kategori['id_kategori']; ?>"><i class="icon-link3"></i></a>					
								</div>
							</div>
						</div>
					</div>
					<div class="project-info">
						<h2><?php echo $produk['nama_produk']; ?></h2>
						<p><?php echo $produk['harga'];?><?php echo $produk['satuan'];?></p>
					</div>
				</div>
				<?php
					}
				?>				
			</div>
		</section>

	<div class="parallax-bg3 padding70">
		<div class="container home-testimonials ">
			<div class="text-center space70">
				<h2 class="white uppercase">Testimoni</h2>
			</div>
			<div id="home-quote" class="owl-carousel owl-theme">
				<?php
                  $querytesti  = mysqli_query($koneksi, "SELECT * FROM testimoni") or die (mysqli_error());
                  while ($testimoni = mysqli_fetch_array($querytesti)) {
                ?>
				<div class="item">
					<div class="hq-info">
						<p>"<?php echo $testimoni['pesan_testimoni']; ?>"</p>
						<img src="foto/testimoni/<?php echo $testimoni['foto_testimoni']; ?>" alt="">
						<span><strong><?php echo $testimoni['nama']; ?></strong></span>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>

