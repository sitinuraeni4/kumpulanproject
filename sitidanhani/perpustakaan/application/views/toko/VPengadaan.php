<div class="card mt-5" style="background-color: bluesky; color: black;">
	<h5 class="card-header"  style="font-size: 20px;">
		Penyortiran
</h5>
	<div class="card-body" style="background-color: bluesky;">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th scope="col">Judul</th>
					<th scope="col">Harga</th>
					<th scope="col">Stok</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach ($DataPengadaan as $ms): ?>
				<tr>
					<td><?php echo $ms->nama_buku; ?></td>
					<td><?php echo $ms->harga; ?></td>
					<td><?php echo $ms->stok; ?></td>
				</tr>
				<?php endforeach; ?>
				</tr>
			</tbody>
		</table>

	</div>
</div>