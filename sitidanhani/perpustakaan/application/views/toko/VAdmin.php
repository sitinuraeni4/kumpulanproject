<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <br>

  <div class="card mt-5" style="background-color: lavender; color: #000;">
  <h5 class="card-header text-dark">Form Data Buku</h5>
  <div class="card-body">

    <!-- tampilan tambah data -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
  Tambah Data
  </button>
  
    <!-- tampilan akhir tambah data  -->

    <!-- Modal tampilan form tambah data-->
<div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="tambahdata" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahdata">Konfirmasi Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('Welcome/AdminInsert');?>" method="POST">
        <div class="mb-3">
         <label for="id_buku" class="form-label">Id Buku</label>
         <input name="id_buku" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="kategori" class="form-label">Kategori</label>
         <input name="kategori" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="nama_buku" class="form-label">Nama Buku</label>
         <input name="nama_buku" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="harga" class="form-label">Harga</label>
         <input name="harga" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="stok" class="form-label">Stok</label>
         <input name="stok" type="text" class="form-control" id="updateData">
        </div>
        <div class="mb-3">
         <label for="penerbit" class="form-label">Penerbit</label>
         <input name="penerbit" type="text" class="form-control" id="updateData">
        </div>
        <div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
     <!-- Modal tampilan akhir form tambah -->     

     <!-- Tampilan tabel -->
     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Buku</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tools</th>
    </tr>
  </thead>
   <tbody class="table-group-divider">
   <?php
	if(!empty($DataToko))
	{   
        $nomor=1;
		foreach($DataToko as $ReadDS)
		{
	?>
    <tr>
      <th scope="row"><?php echo $nomor?></th>
		<td><?php echo $ReadDS->id_buku; ?></td>
		<td><?php echo $ReadDS->kategori; ?></td>
		<td><?php echo $ReadDS->nama_buku; ?></td>
		<td><?php echo $ReadDS->harga; ?></td>
        <td><?php echo $ReadDS->stok; ?></td>
        <td><?php echo $ReadDS->penerbit; ?></td>

      <td>
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editdata">
      Edit</button>

      <!--  tampilan hapus data -->
      <a type="button" class="btn btn-danger" href="<?php echo site_url('Welcome/AdminDelete/'.$ReadDS->id_buku); ?>" onclick="return confirm('are you sure?')">
          Delete
        </a>
    </tr>

    <?php	
    $nomor++;
		}
	}
	?>
   

        <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="editdata" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editdata">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="<?php echo site_url('Welcome/AdminUpdate');?>" method="POST">
                    <div class="mb-3">
                    <label for="id_buku" class="form-label">Id Buku</label>
                    <input name="id_buku" type="text" class="form-control" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input name="kategori" type="text" class="form-control" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="nama_buku" class="form-label">Nama Buku</label>
                    <input name="nama_buku" type="text" class="form-control" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input name="harga" type="text" class="form-control" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input name="stok" type="text" class="form-control" id="editData">
                    </div>
                    <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input name="penerbit" type="text" class="form-control" id="editData">
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
                </div>
             </div>
            </div>
        </div>
        <!-- tampilan akhir edit data  -->
        <div class="modal fade" id="hapusdata" tabindex="-1" aria-labelledby="hapusdata" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hapusdata">Konfirmasi Hapus</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda ingin menghapus data ini ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
      <!-- Tampilan akhir tabel  -->
</tbody>
</table>
</body>
</html>