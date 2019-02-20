<!DOCTYPE html>
<html>
<head>
	<link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>
<body>
	<div class="table">
		<div class="card mb-3">
			<div class="card-header">
				<a class="btn" href="<?php echo site_url('admenu/addmenu') ?>"><i class="fas fa-plus"></i> Tambah Produk Baru</a>
				<a class="btn" href="<?php echo site_url('admenu/addcafepict') ?>"><i class="fas fa-plus"></i> Tambah Foto Kafe Baru </a>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Name</th>
								<th>Price</th>
								<th>Photo</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($product->result() as $product): ?>
								<tr>
									<td width="150">
										<?php echo $product->product_nama ?>
									</td>
									<td>
										<?php echo $product->product_price ?>
									</td>
									<td>
										<img src="<?php echo base_url('img/'.$product->product_pict) ?>" width="64" />
									</td>
									<td class="small">
										<?php echo substr($product->product_desc, 0, 120) ?>...</td>
										<td width="250">
											<a title="Edit" href="<?php echo base_url(); ?>input/edit_menu/<?php echo$product->product_id; ?>" class="btn btn-small">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a title="Delete" href="<?php echo base_url(); ?>input/delet_menu/<?php echo$product->product_id; ?>" class="btn btn-small text-danger">
												<i class="fas fa-trash"></i> Hapus
											</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Name</th>
									<th>Photo</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($gallery->result() as $gallery): ?>
									<tr>
										<td width="150">
											<?php echo $gallery->gallery_name ?>
										</td>
										<td>
											<img src="<?php echo base_url('img/'.$gallery->gallery_pict) ?>" width="64" />
										</td>
										<td width="250">
											<a href="<?php echo site_url('input/edit_gallery'.$gallery->gallery_id) ?>"
												class="btn btn-small"><i class="fas fa-edit"></i> Edit
											</a>
											<a onclick="deleteConfirm('<?php echo site_url('input/delet_gallery'.$gallery->gallery_id) ?>')"
												href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus
											</a>
										</td>
									</tr>
								<?php endforeach; ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>