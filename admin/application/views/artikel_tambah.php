<div class="container">
	<h5>Tambah artikel</h5>

	<form action="" method="post" enctype="multipart/form-data">
		<div class="mb-3">
			<label for="">Judul artikel</label>
			<input class="form-control" name="judul_artikel"> <?php echo set_value('judul_artikel') ?></input>
			<div class="text-danger small">
				<?php echo form_error("judul_artikel") ?>
			</div>
		</div>
		<div class="mb-3">
			<label for="">Isi artikel</label>
			<textarea class="form-control" id="editorku" name="isi_artikel"> <?php echo set_value('isi_artikel') ?></textarea>
			<div class="text-danger small">
				<?php echo form_error("isi_artikel") ?>
			</div>
		</div>

		<div class="mb-3">
			<label for="">Foto artikel</label>
			<input type="file" name="foto_artikel" class="form-control">

			<button type="submit" class="btn btn-primary mt-3">Simpan</button>
	</form>
</div>
