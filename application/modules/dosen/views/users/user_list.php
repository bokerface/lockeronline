<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <section class="content">
    
      <?php if($this->session->flashdata('msg') != '') { ?>
            <div class="alert alert-success flash-msg alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>Success!</h4>
              <?= $this->session->flashdata('msg'); ?> 
            </div>
      <?php } ?> 
    
    
    
      <div class="container-fluid">
        <div class="row">  
        
          <div class="col-md-3">

          </div>
        </div>
      </div>
    </section>

   <div class="box">
    <div class="box-header">
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="na_datatable" class="table table-bordered table-striped" width="100%">
        <thead>
        <tr>
          <th>Username</th>
          <th>Nama</th>
          <th>Email</th>      
          <th>Aksi</th>
        </tr>
        </thead>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>  

<!-- Modal -->
<div id="confirm-delete" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus</h4>
      </div>
      <div class="modal-body">
        <p>Anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <a class="btn btn-danger btn-ok">Hapus</a>
      </div>
    </div>

  </div>
</div>


  <!-- DataTables -->
  <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script>
  //---------------------------------------------------
  var table = $('#na_datatable').DataTable( {
      "processing": true,
      "serverSide": true,
      "ajax": "<?=base_url('admin/users/datatable_json')?>",
      "order": [[0,'asc']],
      "columnDefs": [
        { "targets": 0, "name": "username", 'searchable':true, 'orderable':true},
        { "targets": 1, "name": "firstname", 'searchable':true, 'orderable':true},
        { "targets": 2, "name": "email", 'searchable':true, 'orderable':true},
      //  { "targets": 3, "name": "mobile_no", 'searchable':true, 'orderable':true},
      //  { "targets": 3, "name": "unit_kerja", 'searchable':true, 'orderable':true},
    
        //{ "targets": 4, "name": "is_admin", 'searchable':true, 'orderable':true},
        { "targets": 3, "action": "Action", 'searchable':false, 'orderable':false,'width':'100px'}
      ]
    });
  </script>
  
  <script type="text/javascript">
      $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
  </script>
  
 <script>
    $("#users").addClass('active');
    $("#users .user_list").addClass('active');
  </script>
