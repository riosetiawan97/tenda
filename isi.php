<?php
$halaman = @$_GET['halaman'];
$id_galeri = @$_GET['galeri'];
if($halaman == ""){
	include "home.php";
}else if (isset($_GET['halaman'])){
    if ($_GET['halaman']=="login"){
        if(@$_SESSION['admin']){
            header("location:indexadmin.php");
        }else{
            include 'login.php';
        }	
    }elseif ($_GET['halaman']=="aboutus"){
        include 'about.php';	
    }elseif ($_GET['halaman']=="galeri"){
        include 'galeri.php';	
    }elseif ($_GET['halaman']=="testimoni"){
        include 'testimoni.php';	
    }
}
?>