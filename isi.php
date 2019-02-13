<?php
$halaman = @$_GET['halaman'];
if($halaman == ""){
	include "home.php";
}else if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="produk")
                    {include 'produk.php';
                    }
                    elseif ($_GET['halaman']=="tambahproduk")
                    {include 'tambahproduk.php';	
                    }
}
?>