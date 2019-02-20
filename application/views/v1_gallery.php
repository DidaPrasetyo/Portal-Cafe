<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/styleku.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>
	<div class="container"> 
		<div class="atasbanget">
			<div class="joedoel">Galeri Kafe</div>
			<div class="gariss"></div>
		</div>
		<div class="sub">Galeri Kafe</div>
		<div class="bsub">Berikut adalah beberapa foto mengenai<br>Portal Kafe</div>
		<?php foreach ($id->result() as $gal): ?>
		<div class="foto-galeri">
			<img class="foto-kafe" src="<?php echo base_url('img/'.$gal->gallery_pict) ?>">
		<?php endforeach;?>
		</div>
	</div>
</body>
</html>