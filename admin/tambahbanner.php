<div class="container">
        <h3 class="uppercase text-center">Tambah banner</h3>
  <div class="col-lg-3">
  </div>
  <div class="col-lg-6">
<form method="post" enctype="multipart/form-data" ">
	<div class="form-group">
		<label>Foto Banner</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" name="judul">
	</div>
	<div class="form-group">
		<label>Sub Judul</label>
		<input type="text" class="form-control" name="sub_judul">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{

	$nama = $_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "foto/".$nama);
	$koneksi->query("INSERT INTO banner
		VALUES('','$nama','$_POST[judul]','$_POST[sub_judul]')");
	
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=?halaman=banner'>";
}
?>
</div>
</div>
<br>
<br>
