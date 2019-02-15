<!DOCTYPE html>
<html>
<body>
	<div class="form">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name"> Nama Produk : </label>
				<input type="text" class="form-control" id="name" name="pname">
			</div>
			<div class="form-group">
				<label for="price">  Harga Produk : </label>
				<input type="number" class="form-control" id="price" name="pprice">
			</div>
			<div class="form-group">
				<label for="desc"> Keterangan : </label>
				<textarea name="pdesc" class="form-control resize" id="desc"></textarea>
			</div>
			<div class="form-group">
				<label for="type"> Kategori : </label>
				<select name="ptype" class="custom-select" id="type">
					<option value="food">Makanan</option>
					<option value="beverages">Minuman</option>
				</select>
			</div>
			<div class="form-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile" name="ppict">
					<label class="custom-file-label" for="customFile">Choose Picture</label>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-outline-secondary">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>