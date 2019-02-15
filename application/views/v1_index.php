<!DOCTYPE html>
<html> 
<head>
	<title>Portal Cafe || <?php echo $judul ?></title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/styleku.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>
	<!-- HEADER SECTION -->
	<ul class="nav justify-content-center">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url().'home/beranda' ?>">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url().'home/gallery' ?>">Gallery</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(). 'home/menu' ?>">Food & Drink</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(). 'home/location' ?>">Location</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(). 'home/contact' ?>">Contact</a>
		</li>
	</ul>
	<!-- HEADER SECTION -->

	<!-- PAGE CONTENT SECTION-->
	<?php echo $page;?>
	<!-- PAGE CONTENT SECTION-->

	<!-- FOOTER SECTION -->
	<div class="futer">
		<div class="futers">Made With Love</div>
	</div>
	<!-- FOOTER SECTION -->
</body>
</html>