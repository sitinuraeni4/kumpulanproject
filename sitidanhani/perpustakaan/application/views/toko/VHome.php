<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
/* Gaya input ketika dalam fokus */
.form-control {
    border: 2px solid #ccc; /* Warna border awal */
    transition: border 0.3s, background-color 0.3s, color 0.3s, font-size 0.3s; /* Efek transisi untuk beberapa properti */
}
  
.form-control:focus {
    border-color: #4CAF50; /* Ganti warna border saat dalam fokus */
    background-color: #f0f0f0; /* Ganti warna latar belakang saat dalam fokus */
    color: #333; /* Ganti warna teks saat dalam fokus */
    font-size: 16px; /* Ganti ukuran teks saat dalam fokus */
}
</style>

</head>
  <body>

  <div class="card mt-5" style="background-color: lavender; color: black;">
  <div class="card-header">
    <h4 class="text-dark">Pencarian buku</h4>
  </div>
  <div class="container">
  <div class="wrapper mt-4">
  <form method="post" class="d-flex" action="<?php echo site_url('Welcome/home'); ?>">
    <input type="text" name="cari" placeholder="Nama Buku" class="form-control me-2">
    <button type="submit" class="btn btn-outline-success">Cari</button>
  </form>
  <table class="table table-bordered table-hover mt-2">
  <thead>
    <tr>
    <th>Id Buku</th>
    <th>Kategori</th>
    <th>Nama Buku</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Penerbit</th>
    </tr>
  </thead>
  <tbody>
  <?php if (isset($GetDataCariBuku) && !empty($GetDataCariBuku)) {
                    foreach ($GetDataCariBuku as $tbl_buku) { ?>
                        <tr>
                            <td><?php echo $tbl_buku->id_buku; ?></td>
                            <td><?php echo $tbl_buku->kategori; ?></td>
                            <td><?php echo $tbl_buku->nama_buku; ?></td>
                            <td><?php echo $tbl_buku->harga; ?></td>
                            <td><?php echo $tbl_buku->stok; ?></td>
                            <td><?php echo $tbl_buku->penerbit; ?></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="2">Tidak ada hasil pencarian.</td>
                    </tr>
                <?php } ?>
  </tbody>
</table>
  </div>
</div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </body>
</html>