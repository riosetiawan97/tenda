<?php        
	@session_start();	
	@ob_start();
	include 'config/koneksi.php';
	if(@$_SESSION['admin']){		
		include "header_admin.php";
		include "isi_admin.php";
		include "footer_admin.php";	
	}else{
		header("location: index.php");
	}
?>