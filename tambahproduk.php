<div class="container">
        <h3 class="uppercase text-center">Tambah Produk</h3>
  <div class="col-lg-3">
  </div>
  <div class="col-lg-6">
<form method="post" enctype="multipart/form-data" ">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Satuan</label>
		<input type="text" class="form-control" name="satuan">
	</div>
	<div class="form-group">
	<label>Kategori</label>
	<select name="kategori">
		<?php
		$query_kategori = mysqli_query($koneksi, "select * from kategori");
		while ($kategoriproduk = mysqli_fetch_array($query_kategori)){
			?>
			<option value="<?php echo $kategoriproduk["id_kategori"] ?>" required><?php echo $kategoriproduk["nama_kategori"] ?></option>
		<?php
		}
		?>
	</select>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{

	$nama = $_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "foto/produk/".$nama);
	$koneksi->query("INSERT INTO produk
		VALUES('','$_POST[kategori]','$_POST[nama]','$_POST[harga]','$_POST[satuan]','$nama','')");
	
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
}
?>
</div>
</div>
<br>
<br>
