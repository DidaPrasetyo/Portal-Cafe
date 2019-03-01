<!DOCTYPE html>
<html>
<body>
	<?php 
	foreach ($admin as $row) {
		?>
		<div class="form">
			<form method="POST" action="<?php echo base_url(). 'input/update_admin'?>" enctype="multipart/form-data">
				<input type="hidden" name="user_id" value="<?php echo $row->user_id ?>">
				<div class="form-group">
					<label for="name"> Nama : </label>
					<input type="text" class="form-control" id="name" name="name" value="<?php echo $row->nama?>">
				</div>
				<div class="form-group">
					<label for="username"> Username : </label>
					<input type="text" class="form-control" id="username" name="username" value="<?php echo $row->username?>">
				</div>
				<div class="form-group">
					<label for="password"> Password : </label>
					<input type="password" class="form-control" id="password" name="pass">
				</div>
				<button type="submit" class="btn btn-outline-secondary">Submit</button>
			</form>
		</div>
	<?php } ?>
</body>
</html>