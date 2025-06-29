<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Admin Marketplace</title>
</head>

<body>


	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4 mt-5 offset-md-4 bg-white shadow p-5">
				<form method="post">
					<h6 class="text text-center">Admin Login</h6>
					<div class="mb-3">
						<label for="">Username</label>
						<input type="text" name="username" class="form-control" value="<?php set_value("username") ?>">
						<div class="text-danger small">
							<?php echo form_error("username") ?>
						</div>	
					</div>
					<div class="bm-3">
						<label for="">Password</label>
						<input type="password" name="password" class="form-control" value="<?php set_value("password") ?>">

						<div class="text-danger small">
							<?php echo form_error("password") ?>
						</div>
					</div>
					<button class="mt-2 btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>

	
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<?php if ($this->session->flashdata('pesan_sukses')) : ?>
		<script>
			swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");
		</script>

	<?php endif ?>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<?php if ($this->session->flashdata('pesan_gagal')) : ?>
		<script>
			swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");
		</script>

	<?php endif ?>

</html>
