<div class="container">
        <h3 class="uppercase text-center">Produk</h3>
      </div>

<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Produk</a><br />

<table class="table table-bordered">
  <thead>
    <tr align="center">
    <th>No</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Satuan</th>
    <th>Foto</th>
    <th>Terjual</th>
    <th>Opsi</th>
    </tr>
  </thead>
  <tbody>

      <?php $nomor=1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori"); ?>
      <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <tr>
      <td align="center"><?php echo $nomor; ?></td>
      <td align="center"><?php echo $pecah['nama_produk']; ?></td>
      <td align="center"><?php echo $pecah['harga']; ?></td>
      <td align="center"><?php echo $pecah['satuan']; ?></td>
      <td align="center"><img src="foto/produk/<?php echo $pecah['foto_produk']; ?>" width="100"></td>
      <td align="center"><?php echo $pecah['terjual'] ?></td>
      <td>
      <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-success">Hapus</a>
      <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-warning">Ubah</a>
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>