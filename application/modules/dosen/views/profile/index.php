<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body">
        <div class="col-md-6">
          <h4><i class="fa fa-pencil"></i> &nbsp; Ubah Data Pribadi Saya</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('admin/profile/change_pwd'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Ubah Password</a>
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
        <div class="box-body m-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
            <?php echo form_open(base_url('admin/profile'), 'class="form-horizontal"' )?> 
              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-9">
                  <input type="text" name="username" value="<?php if(validation_errors()) {echo set_value('username'); } else { echo $user['username']; }  ?>" class="form-control" id="username" placeholder=""disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Nama Lengkap</label>

                <div class="col-sm-9">
                  <input type="text" name="firstname" value="<?php if(validation_errors()) {echo set_value('firstname'); } else { echo $user['firstname']; }  ?>" class="form-control" id="firstname" placeholder="">
                </div>
              </div>  
              <div class="form-group">
                <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>

                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" name="tempat_lahir" value="<?php if(validation_errors()) {echo set_value('tempat_lahir'); } else { echo $user['tempat_lahir']; }  ?>" class="form-control" id="tempat_lahir" placeholder="">
                    </div>
                     <div class="col-sm-6">
                       <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i> Tanggal Lahir
                        </div>
                        <input name="tgl_lahir" value="<?php if(validation_errors()) {echo set_value('tgl_lahir'); } else { echo $user['tgl_lahir']; }  ?>" type="text" class="form-control pull-right" id="tgl_lahir">
                      </div>

                    </div>
                  </div>
                </div>
              </div>    

              <div class="form-group">               
                    <label for="gender" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-3">
                      <select name="jenis_kelamin" class="form-control">
                        <option value=""<?php echo set_select('jenis_kelamin', '', TRUE); ?>>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" <?php if(validation_errors()) { echo set_select('jenis_kelamin', 'Laki-laki'); } else { if($user['jenis_kelamin']=='Laki-laki'){ echo "selected"; } } ?>>Laki-laki</option>
                         <option value="Perempuan" <?php if(validation_errors()) { echo set_select('jenis_kelamin', 'Perempuan'); } else { if($user['jenis_kelamin']=='Perempuan'){ echo "selected"; } } ?>>Perempuan</option>                 
                      </select>
                    </div>            
           
              </div>      

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-9">
                  <input  type="email" name="email" value="<?php if(validation_errors()) {echo set_value('email'); } else { echo $user['email']; }  ?>" class="form-control" id="email" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Telepon</label>

                <div class="col-sm-9">
                  <input  style="width:350px" type="number" name="mobile_no" value="<?php if(validation_errors()) {echo set_value('mobile_no'); } else { echo $user['mobile_no']; }  ?>" class="form-control" id="mobile_no" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                <div class="col-sm-9">
                  <textarea name="alamat" class="form-control" id="firstname" placeholder=""><?php if(validation_errors()) {echo set_value('alamat'); } else { echo $user['alamat']; }  ?></textarea>
                </div>
              </div>  
               
              <hr>           


              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Ubah Data Pribadi" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 

<script src="<?= base_url() ?>public/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= base_url() ?>public/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= base_url() ?>public/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>
  $("#pribadi").addClass('active');
  $("#pribadi .submenu_user_edit").addClass('active');

   $("#tgl_lahir").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
</script>