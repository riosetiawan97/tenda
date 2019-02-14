<!-- PAGE HEADER -->
<div class="page_header">
		<div class="page_header_parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3><span>Tentang Kami</span>Hubungi Kami <br>Untuk Pemesanan </h3>
					</div>
				</div>
			</div>
		</div>
		<div class="bcrumb-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="bcrumbs">
							<li><a href="indexadmin.php"><i class="fa fa-home"></i> Home</a></li>
							<li>Tentang Kami</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- INNER CONTENT -->
	<div>
		<div class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.359688391628!2d106.89716908332828!3d-6.240012557285191!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f339ae88d827%3A0x84b171db26e9072e!2sRW.4%2C+Pd.+Bambu%2C+Duren+Sawit%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta!5e0!3m2!1sid!2sid!4v1550053885148" width="700" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			<br><br>
			<div class="row">
				<?php
				$sql_aboutus = mysqli_query($koneksi, "select * from about_us where id_au=1") or die (mysqli_error());
				$data_aboutus = mysqli_fetch_array($sql_aboutus);
				$alamatinstagram =(strip_tags($data_aboutus['instagram']));
				$instagram = substr($alamatinstagram,1);
				?>
				<div class="col-md-8">
					<p align="justify"><strong><i class="fa fa-home"></i> Tentang Kami:</strong><br> <?php echo $data_aboutus['tentang']; ?></p>
				</div>
				<div class="col-md-4">
					<h3 class="no-margin">Informasi Kontak</h3>
					<div class="space20"></div>
					<ul class="contact-info">
						<li>
							<p><strong><i class="fa fa-map-marker"></i> Alamat:</strong> <?php echo $data_aboutus['alamat']; ?></p>
						</li>
						<li>
							<p><strong><i class="fa fa-envelope"></i> Nomor Telepon:</strong> <?php echo $data_aboutus['no_telp']; ?></p>
						</li>
						<li>
							<p><strong><i class="fa fa-phone"></i> Email:</strong> <a href="#"><?php echo $data_aboutus['email']; ?></a></p>
						</li>
						<li>
							<p><strong><i class="fa fa-instagram"></i> Instagram:</strong> <a href="https://www.instagram.com/<?=$instagram; ?>/" target="_blank"><?php echo $data_aboutus['instagram']; ?></a></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>