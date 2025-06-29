<div class="container mt-4 mb-4 small">
	<h5>Data mitra</h5>
	<table class="table table-bordered" id="tableku">
		<thead style="background-color: #024CAA; color: #fff;">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Usia</th>
				<th>No HP</th>
				<th>Alamat Lengkap</th>
				<th>Kabupaten/Kota</th>
				<th>Kecamatan</th>
				<th>Pengalaman</th>
				<th>Peran</th>
				<th>Keahlian</th>
				<th class="text-center">Opsi</th>	
			</tr>
		</thead>
		<tbody>

			<?php foreach ($mitra as $key => $value) : ?>
				<tr>
					<td><?php echo $key + 1 ?></td>
					<td><?php echo $value['nama_mitra'] ?></td>
					<td><?php echo $value['usia_mitra'] ?> Tahun</td>
					<td><?php echo $value['wa_mitra'] ?></td>
					<td><?php echo substr($value['alamat_lengkap'], 0, 10); ?>...</td>
					<td><?php echo $value['kabupaten/kota'] ?></td>
					<td><?php echo $value['kecamatan'] ?></td>
					<td><?php echo $value['pengalaman_mitra'] ?> Tahun</td>
					<td><?php echo $value['nama_peran'] ?></td>
					<td><?php echo $value['nama_keahlian'] ?></td>
					<td class="text-center">
						<div role="group" aria-label="Basic example">
							<a href="<?php echo base_url("mitra/ubah/" . $value["id_mitra"]) ?>" class="btn btn-warning btn-sm">Ubah</a>
							<a href="<?php echo base_url("mitra/hapus/" . $value["id_mitra"]) ?>" class="btn btn-danger btn-sm">Hapus</a>
						</div>
					</td>
				</tr>
			<?php endforeach ?>

		</tbody>
	</table>
</div>