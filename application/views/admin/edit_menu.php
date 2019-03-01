<!DOCTYPE html>
<html>
<body>
	<?php 
	foreach ($product as $row) {
		?>
		<div class="form">
			<form method="POST" action="<?php echo base_url(). 'input/update_menu'?>" enctype="multipart/form-data">
				<input type="hidden" name="product_id" value="<?php echo $row->product_id ?>">
				<div class="form-group">
					<label for="name"> Nama Produk : </label>
					<input type="text" class="form-control" id="name" name="name" value="<?php echo $row->product_nama; ?>">
				</div>
				<div class="form-group">
					<label for="price">  Harga Produk : </label>
					<input type="number" class="form-control" id="price" name="price" value="<?php echo $row->product_price; ?>">
				</div>
				<div class="form-group">
					<label for="desc"> Keterangan : </label>
					<textarea name="desc" class="form-control resize" id="desc" value="<?php echo $row->product_desc; ?>"></textarea>
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
					<input type="hidden" name="old" value="<?php echo $row->product_pict; ?>">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-outline-secondary">Submit</button>
				</div>
			</form>
		<?php } ?>
	</div>
</body>
</html>