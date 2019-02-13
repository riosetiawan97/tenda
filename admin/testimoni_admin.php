<div class="container">
        <h3 class="uppercase text-center">Testimoni</h3>

<a href="?halaman=tambahtestimoni" class="btn btn-primary">Tambah Testimoni</a><br /><br />

<table class="table table-bordered">
  <thead>
    <tr align="center">
    <th>No</th>
    <th>Nama</th>
    <th>Pesan</th>
    <th>Foto Banner</th>
    <th>Opsi</th>
    </tr>
  </thead>
  <tbody>

      <?php $nomor=1; ?>
      <?php $ambil=$koneksi->query("SELECT * FROM testimoni"); ?>
      <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <tr>
      <td align="center"><?php echo $nomor; ?></td>      
      <td align="center"><?php echo $pecah['nama']; ?></td>
      <td align="center"><?php echo $pecah['pesan_testimoni'] ?></td>
      <td align="center"><img src="foto/testimoni/<?php echo $pecah['foto_testimoni']; ?>" width="100"></td>
      <td>
      <a href="?halaman=hapustestimoni&id=<?php echo $pecah['id_testimoni']; ?>" class="btn btn-success">Hapus</a>
      <a href="?halaman=ubahtestimoni&id=<?php echo $pecah['id_testimoni']; ?>" class="btn btn-warning">Ubah</a>
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>

</div>