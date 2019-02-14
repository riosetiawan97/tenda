<div class="container">
<?php
$pecah = $koneksi->query("SELECT * FROM testimoni where id_testimoni='$id_testimoni'")->fetch_assoc();
?>
        <h3 class="uppercase text-center">Edit Testimoni</h3>
  <div class="col-lg-3">
  </div>
  <div class="col-lg-6">
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $pecah['nama']; ?>" required>
	</div>
	<div class="form-group">
		<label>Pesan Testimoni</label>
		<textarea rows="5" class="field-comments form-control input-lg" placeholder="Pesan" name="pesan" required><?php echo $pecah['pesan_testimoni']; ?></textarea>
	</div>
	<div class="form-group">
        <label>Foto</label>
        <img src="foto/testimoni/<?php echo $pecah['foto_testimoni']; ?>" width="100">
		<input type="file" class="form-control" name="foto" required>
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
    $lokasi =$_FILES['foto']['tmp_name'];
    if($nama == ''){
        $koneksi->query("UPDATE testimoni SET nama = '$_POST[nama]', pesan_testimoni = '$_POST[pesan]' where id_testimoni='$id_testimoni'");
        echo "<div class='alert alert-info'>Data Tersimpan</div>";
	    echo "<meta http-equiv='refresh' content='1;url=?halaman=testimoni'>";
    }else{        
        $pecah = $koneksi->query("SELECT * FROM testimoni where id_testimoni='$id_testimoni'")->fetch_assoc();
        unlink("foto/testimoni/".$pecah['foto_testimoni']);
        
	    $upload = move_uploaded_file($lokasi, "foto/testimoni/".$nama);
        if($upload){
            $koneksi->query("UPDATE testimoni SET foto_testimoni = '$nama', nama = '$_POST[nama]', pesan_testimoni = '$_POST[pesan]' where id_testimoni='$id_testimoni'");
            echo "<div class='alert alert-info'>Data Tersimpan</div>";
	    echo "<meta http-equiv='refresh' content='1;url=?halaman=testimoni'>";
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
