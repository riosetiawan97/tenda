<div class="container">
<?php
$pecah = $koneksi->query("SELECT * FROM banner where id_banner='$id_banner'")->fetch_assoc();
?>
        <h3 class="uppercase text-center">Edit banner</h3>
  <div class="col-lg-3">
  </div>
  <div class="col-lg-6">
<form method="post" enctype="multipart/form-data" ">
	<div class="form-group">
        <label>Foto Banner</label>
        <img src="foto/<?php echo $pecah['foto_banner']; ?>" width="100">
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" name="judul" value="<?php echo $pecah['judul']; ?>">
	</div>
	<div class="form-group">
		<label>Sub Judul</label>
		<input type="text" class="form-control" name="sub_judul" value="<?php echo $pecah['subjudul']; ?>">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
    $lokasi =$_FILES['foto']['tmp_name'];
    if($nama == ''){
        $koneksi->query("UPDATE banner SET judul = '$_POST[judul]', subjudul = '$_POST[sub_judul]' where id_banner='$id_banner'");
        echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=?halaman=banner'>";
    }else{        
        $pecah = $koneksi->query("SELECT * FROM banner where id_banner='$id_banner'")->fetch_assoc();
        unlink("foto/".$pecah['foto_banner']);
        
	    $upload = move_uploaded_file($lokasi, "foto/".$nama);
        if($upload){
            $koneksi->query("UPDATE banner SET foto_banner = '$nama', judul = '$_POST[judul]', subjudul = '$_POST[sub_judul]' where id_banner='$id_banner'");
            echo "<div class='alert alert-info'>Data Tersimpan</div>";
	    echo "<meta http-equiv='refresh' content='1;url=?halaman=banner'>";
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
