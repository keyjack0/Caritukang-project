<div class="container mt-4 mb-4">
	<h5>Data customer</h5>
	<table class="table table-bordered" id="tableku">
		<thead style="background-color: #024CAA; color: #fff;" class="small">
			<tr >
				<th>No</th>
				<th>Email</th>
				<th>Username</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Wa</th>
				<!-- <th>Opsi</th> -->
			</tr>
		</thead>
		<tbody>

			<?php foreach ($customer as $key => $value) : ?>
				<tr class="small">
					<td><?php echo $key + 1 ?></td>
					<td><?php echo $value['email_customer'] ?></td>
					<td><?php echo $value['username_customer'] ?></td>
					<td><?php echo $value['nama_customer'] ?></td>
					<td><?php echo $value['alamat_customer'] ?></td>
					<td><?php echo $value['wa_customer'] ?></td>
					<!-- <td>
						<a href="<?php echo base_url("customer/detail/".$value['id_customer']) ?>" class="btn btn-primary">Opsi</a>
					</td> -->
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
