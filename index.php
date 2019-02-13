<?php
@session_start();
@ob_start();
include 'config/koneksi.php';
	include "header_user.php";
	include "isi.php";
	include "footer_user.php";
?>