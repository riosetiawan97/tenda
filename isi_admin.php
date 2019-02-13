<?php
$halaman = @$_GET['halaman'];
$id_banner = @$_GET['id_banner'];
if($halaman == ""){
	include "admin/home.php";
}else if (isset($_GET['halaman'])){
    if ($_GET['halaman']=="produk"){
        include 'admin/produk.php';
    }elseif ($_GET['halaman']=="tambahproduk"){
        include 'admin/tambahproduk.php';	
    }elseif ($_GET['halaman']=="aboutus"){
        include 'admin/about_admin.php';	
    }elseif ($_GET['halaman']=="banner"){
        include 'admin/banner_admin.php';	
    }elseif ($_GET['halaman']=="testimoni"){
        include 'admin/testimoni_admin.php';	
    }elseif ($_GET['halaman']=="tambahbanner"){
        include 'admin/tambahbanner.php';	
    }elseif ($_GET['halaman']=="hapusbanner"){
        include 'admin/hapusbanner.php';	
    }elseif ($_GET['halaman']=="ubahbanner"){
        include 'admin/editbanner.php';	
    }
}
?>