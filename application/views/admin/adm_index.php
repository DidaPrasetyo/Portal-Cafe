<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Portal Cafe Admin || <?php echo $judul ?></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/admin/dashboard.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<div class="tab-atas">
		<div class="row">
			<div class="col-xl-2">
				<div class="portaladmin">PORTAL CAFÉ ADMIN
				</div>
			</div>
			<div class="col-xl-10">
				<div class="howdy">Halo, <?php echo $this->session->userdata('nama');?></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-2">
			<div class="navigasi">
				<div class="dashboardd">
					<a class="nav-db" href="<?php echo base_url(). 'admenu/beranda' ?>">
						<img class="icon-db" src="../assets/icon/dashboard.png">Beranda
					</a>
				</div>
				<div class="comment">
					<a class="nav-cm" href="<?php echo base_url(). 'admenu/comment' ?>">
						<img class="icon-cm" src="../assets/icon/comment.png">Komentar
					</a>
				</div>
				<div class="dropdown">
					<div class="upload">
						<a class="nav-up" href="<?php echo base_url(). 'admenu/upload' ?>">
							<img class="icon-up" src="../assets/icon/upload.png">Unggah
						</a>
					</div>
				</div>
				<div class="admin">
					<a class="nav-ad" href="<?php echo base_url(). 'admenu/admin' ?>">
						<img class="icon-ad" src="../assets/icon/admin.png">User Admin
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="col-xl-10">
				<?php 
				if(isset($page2)){
					echo $page2;
				} else {
					echo $page;
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>