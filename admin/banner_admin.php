<div class="container">
        <h3 class="uppercase text-center">Banner</h3>

<a href="?halaman=tambahbanner" class="btn btn-primary">Tambah Banner</a><br /><br />

<table class="table table-bordered">
  <thead>
    <tr align="center">
    <th>No</th>
    <th>Foto Banner</th>
    <th>Judul</th>
    <th>Sub Judul</th>
    <th>Opsi</th>
    </tr>
  </thead>
  <tbody>

      <?php $nomor=1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM banner"); ?>
      <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <tr>
      <td align="center"><?php echo $nomor; ?></td>
      <td align="center"><img src="foto/<?php echo $pecah['foto_banner']; ?>" width="100"></td>      
      <td align="center"><?php echo $pecah['judul']; ?></td>
      <td align="center"><?php echo $pecah['subjudul'] ?></td>
      <td>
      <a onclick="return confirm('yakin Ingin Menghapus data ?')"  href="?halaman=hapusbanner&id_banner=<?php echo $pecah['id_banner']; ?>" class="btn btn-success">Hapus</a>
      <a href="?halaman=ubahbanner&id_banner=<?php echo $pecah['id_banner']; ?>" class="btn btn-warning">Ubah</a>
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>

</div>