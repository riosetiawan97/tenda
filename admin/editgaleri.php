<div class="container">
<?php
$pecah = $koneksi->query("SELECT * FROM produk where id='$id_produk'")->fetch_assoc();
?>
        <h3 class="uppercase text-center">Edit Produk</h3>
  <div class="col-lg-3">
  </div>
  <div class="col-lg-6">
<form method="post" enctype="multipart/form-data" ">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk']; ?>">
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
		<br>
        <img src="foto/produk/<?php echo $pecah['foto_produk']; ?>" width="100">
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
    $lokasi =$_FILES['foto']['tmp_name'];
    if($nama == ''){
        $koneksi->query("UPDATE produk SET nama_produk = '$_POST[nama]' where id='$id_produk'");
        echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=?halaman=galeri'>";
    }else{        
        $pecah = $koneksi->query("SELECT * FROM produk where id='$id_produk'")->fetch_assoc();
        unlink("foto/produk/".$pecah['foto_produk']);
        
	    $upload = move_uploaded_file($lokasi, "foto/produk/".$nama);
        if($upload){
            $koneksi->query("UPDATE produk SET foto_produk = '$nama', nama_produk = '$_POST[nama]' where id='$id_produk'");
            echo "<div class='alert alert-info'>Data Tersimpan</div>";
	    echo "<meta http-equiv='refresh' content='1;url=?halaman=galeri'>";
        }else{
            echo "<div class='alert alert-info'>Upload gambar gagal!</div>";
        }
    }
}
?>
</div>
</div>
<br>
<br>
