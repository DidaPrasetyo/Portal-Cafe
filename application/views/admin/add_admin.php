<!DOCTYPE html>
<html>
<body>
	<div class="form">
		<form method="POST" action="<?php echo base_url(). 'input/input_admin'?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name"> Nama : </label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="uname"> Username : </label>
				<input type="text" class="form-control" id="uname" name="username">
			</div>
			<div class="form-group">
				<label for="pwd"> Password : </label>
				<input type="password" class="form-control" id="pwd" name="pass">
			</div>
			<button type="submit" class="btn btn-outline-secondary">Submit</button>
		</form>
	</div>
</body>
</html>