<div class="container">
        <h3 class="uppercase text-center">Tambah Testimoni</h3>
  <div class="col-lg-3">
  </div>
  <div class="col-lg-6">
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" placeholder="Nama" name="nama" required>
	</div>
	<div class="form-group">
		<label>Pesan Testimoni</label>
		<textarea rows="5" class="field-comments form-control input-lg" placeholder="Pesan" name="pesan" required></textarea>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto" required>
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{

	$nama = $_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "foto/testimoni/".$nama);
	$koneksi->query("INSERT INTO testimoni
		VALUES('','$_POST[nama]','$_POST[pesan]','$nama')");
	
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=?halaman=testimoni'>";
}
?>
</div>
</div>
<br>
<br>
