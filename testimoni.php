<div class="container">
<div class="row">
<?php
        $querytesti  = mysqli_query($koneksi, "SELECT * FROM testimoni") or die (mysqli_error());
        while ($testimoni = mysqli_fetch_array($querytesti)) {
    ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="foto/testimoni/<?php echo $testimoni['foto_testimoni']; ?>" alt="">
      <div class="caption">
        <h3><?php echo $testimoni['nama']; ?></h3>
        <p>"<?php echo $testimoni['pesan_testimoni']; ?>"</p>
      </div>
    </div>
  </div>
        
  <?php
        }
    ?>
</div>
</div>