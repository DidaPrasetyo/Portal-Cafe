<!DOCTYPE html>
<html>
<body>
	<?php 
	foreach ($id->result() as $row) {
		?>
		<div class="form">
			
			<form method="POST" action="<?php echo base_url(). 'input/edit_admin'?>" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name"> Nama : </label>
					<input type="text" class="form-control" id="name" name="name" value="<?php echo $row->nama?>">
				</div>
				<div class="form-group">
					<label for="uname"> Username : </label>
					<input type="text" class="form-control" id="uname" name="username" value="<?php echo $row->username?>">
				</div>
				<div class="form-group">
					<label for="pwd"> Password : </label>
					<input type="password" class="form-control" id="pwd" name="pass" value="<?php echo $row->password?>">
				</div>
				<button type="submit" class="btn btn-outline-secondary">Submit</button>
			</form>
		</div>
	</body>
	</html>