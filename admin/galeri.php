<div class="container">
<div class="col-lg-1">
  </div>
        <h3 class="uppercase text-center">Galeri</h3>

<a href="?halaman=tambahgaleri" class="btn btn-primary">Tambah Galeri</a><br /><br />

<table class="table table-bordered">
  <thead>
    <tr align="center">
    <th>No</th>
    <th>Kategori</th>
    <th>Nama</th>
    <th>Foto</th>
    <th>Opsi</th>
    </tr>
  </thead>
  <tbody>

      <?php $nomor=1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori"); ?>
      <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <tr>
      <td align="center"><?php echo $nomor; ?></td>
      <td align="center"><?php echo $pecah['nama_kategori']; ?></td>
      <td align="center"><?php echo $pecah['nama_produk']; ?></td>
      <td align="center"><img src="foto/produk/<?php echo $pecah['foto_produk']; ?>" width="100"></td>
      <td>
      <a href="?halaman=hapusgaleri&id_produk=<?php echo $pecah['id']; ?>" class="btn btn-success">Hapus</a>
      <a href="?halaman=ubahgaleri&id_produk=<?php echo $pecah['id']; ?>" class="btn btn-warning">Ubah</a>
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>

</div>