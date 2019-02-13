<?php
$pecah = $koneksi->query("SELECT * FROM banner where id_banner='$id_banner'")->fetch_assoc();
unlink("foto/".$pecah['foto_banner']);
mysqli_query($koneksi, "delete from banner where id_banner='$id_banner'") or die (mysqli_error());
?>
<script type="text/javascript">
alert("Hapus Data banner Berhasil");
window.location.href="?halaman=banner";
</script>