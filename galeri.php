<!-- PAGE HEADER -->
<div class="page_header">
		<div class="page_header_parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3><span>Galeri</span>Temukan Kebutuhan Anda Disini</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="bcrumb-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="bcrumbs">
							<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
							<li>Gallery - 5col</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- INNER CONTENT -->
	<div class="inner-content">
		<div class="container">
                <?php
                if($id_galeri==""){
                    $query  = mysqli_query($koneksi, "SELECT * FROM produk") or die (mysqli_error());
                    echo "<h2 class='uppercase text-center space30'>Semua</h2>";
                }else{
                    $querykategori  = mysqli_query($koneksi, "SELECT * FROM kategori,produk WHERE kategori.id_kategori=$id_galeri") or die (mysqli_error());
                    $arraygaleri = mysqli_fetch_array($querykategori);
                    echo "<h2 class='uppercase text-center space30'>$arraygaleri[nama_kategori]</h2>";
                    $query  = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_kategori=$id_galeri") or die (mysqli_error());
                }
                ?>
			<ul class="gal-5col">
                <?php
                while ($produk = mysqli_fetch_array($query)) {
                ?>
                    <li><a class="mp-lightbox" href="foto/produk/<?php echo $produk['foto_produk']; ?>"><img src="foto/produk/<?php echo $produk['foto_produk']; ?>" class="img-responsive" alt=""></a></li>
                <?php
                }
                ?>
			</ul>
		</div>
	</div>
