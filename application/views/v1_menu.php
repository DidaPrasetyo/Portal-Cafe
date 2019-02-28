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
			<div class="joedoel">Makanan & Minuman</div>
			<div class="gariss"></div> 
		</div>
		<div class="judul-menu">Menu Makanan</div>
		<hr>
		<div class="row">
			<div class="menunya">
				<div class="card">
					<?php 
					foreach ($id->result() as $product): ?>
						<img class="gambar-menu" src="<?php 
						if ($product->product_type == 'makanan'){
							echo base_url ('img/'.$product->product_pict);
						}
						?>" alt="Card image">
						<div class="card-body">
							<div class="nama-food"><?php echo $product->product_nama;?></div>
							<div class="harga">IDR <?php echo $product->product_price; ?><div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<div class="judul-menu">Menu Minuman</div>
		<hr>
		<div class="row">
			<div class="menunya">
				<div class="card">
					<?php 
					foreach ($id->result() as $product): ?>
						<img class="gambar-menu" src="<?php 
						if ($product->product_type == 'minuman'){
							echo base_url ('img/'.$product->product_pict);
						}
						?>" alt="Card image">
						<div class="card-body">
							<div class="nama-food"><?php echo $product->product_nama;?></div>
							<div class="harga">IDR <?php echo $product->product_price; ?><div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</body>
</html>