<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body with-border">
        <div class="col-md-6">
          <h4><i class="fa fa-plus"></i> &nbsp; Tambah Staf Baru</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('admin/users'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Semua Staf</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/users/add'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-9">
                  <input type="text" name="username" class="form-control" id="username" placeholder="">
                </div>
              </div>
              
              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Nama Lengkap</label>

                <div class="col-sm-9">
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="">
                </div>
              </div>
            
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Telepon</label>

                <div class="col-sm-9">
                  <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" id="password" placeholder="">
                </div>
              </div>
           
<!-- 
              <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Pilih Role</label>

                <div class="col-sm-9">
                  <select name="role" class="form-control">
                    <option value="">Pilih Role</option>
                    <option value="1">Administrator</option>
                    <option value="2">Non Administrator</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Pilih Unit Kerja</label>
                <div class="col-sm-9">
                  <select name="unit_kerja" class="form-control">
                    <option value="">Pilih Unit Kerja</option>
                    <?php foreach($unit_kerja as $unit_kerja): ?>
                      <option value="<?= $unit_kerja['id']; ?>"><?= $unit_kerja['nama_unit'];  ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div> -->

              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Tambah Staf" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 

 <script>
    $("#pengguna").addClass('active');
    $("#pengguna .submenu_useradd").addClass('active');
  </script>