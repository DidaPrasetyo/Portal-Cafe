<!DOCTYPE html>
<html>
<body>
	<div class="form">
		<form method="POST" action="<?php echo base_url(). 'input/input_menu'?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name"> Nama Produk : </label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="price">  Harga Produk : </label>
				<input type="number" class="form-control" id="price" name="price">
			</div>
			<div class="form-group">
				<label for="desc"> Keterangan : </label>
				<textarea name="desc" class="form-control resize" id="desc"></textarea>
			</div>
			<div class="form-group">
				<label for="type"> Kategori : </label>
				<select name="type" class="custom-select" id="type">
					<option value="makanan">Makanan</option>
					<option value="minuman">Minuman</option>
				</select>
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