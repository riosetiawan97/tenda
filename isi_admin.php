<?php
$halaman = @$_GET['halaman'];
$id_banner = @$_GET['id_banner'];
$id_produk = @$_GET['id_produk'];
$id_testimoni = @$_GET['id_testimoni'];
if($halaman == ""){
	include "admin/home.php";
}else if (isset($_GET['halaman'])){
    if ($_GET['halaman']=="galeri"){
        include 'admin/galeri.php';
    }elseif ($_GET['halaman']=="tambahgaleri"){
        include 'admin/tambahgaleri.php';	
    }elseif ($_GET['halaman']=="ubahgaleri"){
        include 'admin/editgaleri.php';	
    }elseif ($_GET['halaman']=="hapusgaleri"){
        include 'admin/hapusgaleri.php';	
    }
    
    elseif ($_GET['halaman']=="aboutus"){
        include 'admin/about_admin.php';	
    }
    
    elseif ($_GET['halaman']=="testimoni"){
        include 'admin/testimoni_admin.php';	
    }elseif ($_GET['halaman']=="tambahtestimoni"){
        include 'admin/tambahtestimoni.php';	
    }elseif ($_GET['halaman']=="ubahtestimoni"){
        include 'admin/edittestimoni.php';	
    }elseif ($_GET['halaman']=="hapustestimoni"){
        include 'admin/hapustestimoni.php';	
    }
    
    elseif ($_GET['halaman']=="banner"){
        include 'admin/banner_admin.php';	
    }elseif ($_GET['halaman']=="tambahbanner"){
        include 'admin/tambahbanner.php';	
    }elseif ($_GET['halaman']=="hapusbanner"){
        include 'admin/hapusbanner.php';	
    }elseif ($_GET['halaman']=="ubahbanner"){
        include 'admin/editbanner.php';	
    }
}
?>