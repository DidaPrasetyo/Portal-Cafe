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
        <i class="fas fa-table"></i>
      Data Ulasan</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Ulasan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;
              foreach ($id->result() as $row) {
                ?>
                <tr>
                  <td><center><?php echo $this->session->userdata('row')+$no++;?></center></td>
                  <td><?php echo ucwords($row->ul_nama);?></td>
                  <td><?php echo ucwords($row->ul_email);?></td>
                  <td><?php echo ucwords($row->ul_ulasan);?></td>
                  <td>
                    <a title="Delete" href="<?php echo base_url(); ?>input/delet_ul/<?php echo$row->ul_id; ?>" class="btn btn-small text-danger">
                      <i class="fas fa-trash"></i> Hapus
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> 
</body>
<script src="../assets/jquery/jquery.min.js"></script>
<script src="../assets/datatables/jquery.dataTables.js"></script>
<script src="../assets/datatables/dataTables.bootstrap4.js"></script>
<script src="../assets/js/demo/datatables-demo.js"></script>
</html>