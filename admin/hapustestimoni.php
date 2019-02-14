<?php
$pecah = $koneksi->query("SELECT * FROM testimoni where id_testimoni='$id_testimoni'")->fetch_assoc();
unlink("foto/testimoni/".$pecah['foto_testimoni']);
mysqli_query($koneksi, "delete from testimoni where id_testimoni='$id_testimoni'") or die (mysqli_error());
?>
<script type="text/javascript">
alert("Hapus Data Testimoni Berhasil");
window.location.href="?halaman=testimoni";
</script>