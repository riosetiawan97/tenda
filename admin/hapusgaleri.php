<?php
$pecah = $koneksi->query("SELECT * FROM produk where id='$id_produk'")->fetch_assoc();
unlink("foto/produk/".$pecah['foto_produk']);
mysqli_query($koneksi, "delete from produk where id='$id_produk'") or die (mysqli_error());
?>
<script type="text/javascript">
alert("Hapus Data produk Berhasil");
window.location.href="?halaman=galeri";
</script>