<footer>
		<div class="container">
			<div class="row">
			<div class="col-md-3">				
				<?php
					$sql_aboutus = mysqli_query($koneksi, "select * from about_us where id_au =1") or die (mysqli_error());
					$data_aboutus = mysqli_fetch_array($sql_aboutus);					
					$alamatinstagram =(strip_tags($data_aboutus['instagram']));
					$instagram = substr($alamatinstagram,1);
					?>
					<h4 class="space30">Tentang Kami</h4>
			    <img src="images/basic/logo-ico.png" class="img-responsive space20" width="70" alt=""/>
					<p align="justify"><?php echo $data_aboutus['tentang']; ?></p>
				</div>
				<div class="col-md-6">
					<h4 class="space30">Kontak</h4>
			  		<ul class="c-info">
						<li><i class="fa fa-map-marker"></i> <?php echo $data_aboutus['alamat']; ?>
						</li>
						<li>
						</li>
						<li><i class="fa fa-phone"></i> <?php echo $data_aboutus['no_telp']; ?></li>
						<li><i class="fa fa-envelope-o"></i> <?php echo $data_aboutus['email']; ?></li>
						<li><i class="fa fa-instagram"></i> <a href="https://www.instagram.com/<?=$instagram; ?>/" target="_blank"><?php echo $data_aboutus['instagram']; ?></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4 class="space30">Maps</h4>
				  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.359688391628!2d106.89716908332828!3d-6.240012557285191!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f339ae88d827%3A0x84b171db26e9072e!2sRW.4%2C+Pd.+Bambu%2C+Duren+Sawit%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta!5e0!3m2!1sid!2sid!4v1550053885148" width="700" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</footer>

	<!-- FOOTER COPYRIGHT -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p>&copy; Copyright 2015. Trend. Designed by <a href="http://www.ckthemes.com" target="_blank">CK Themes</a></p>
				</div>
				<div class="col-md-4">
					<div class="f-social pull-right">
						<a class="fa fa-twitter" href="#"></a>
						<a class="fa fa-facebook" href="#"></a>
						<a class="fa fa-linkedin" href="#"></a>
						<a class="fa fa-dribbble" href="#"></a>
						<a class="fa fa-google-plus" href="#"></a>
						<a class="fa fa-skype" href="#"></a>
						<a class="fa fa-behance" href="#"></a>
						<a class="fa fa-stumbleupon" href="#"></a>
						<a class="fa fa-rss" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Plugins -->
<script src="js/bootstrap.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/isotope/isotope.pkgd.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/tweecool.js"></script>
<script src="js/flexslider/jquery.flexslider.js"></script>
<script src="js/easypie/jquery.easypiechart.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.inview.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>



<script src="js/main.js"></script>
 
</body>
</html>

