<!DOCTYPE html>
<html>
<body>
	<div class="form">
		<form method="POST" action="<?php echo base_url(). 'input/input_gallery'?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name"> Nama Gambar : </label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="img" name="img">
					<label class="custom-file-label" for="customFile"></label>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-outline-secondary">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>