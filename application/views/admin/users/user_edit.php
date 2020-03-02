
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ubah Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
           
                <?php if(isset($msg) || validation_errors() !== ''): ?>
                  <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="fa fa-exclamation"></i> Terjadi Kesalahan</h4>
                      <?= validation_errors();?>
                      <?= isset($msg)? $msg: ''; ?>
                  </div>
                <?php endif; ?>
             
          </div>

          <div class="col-md-2"> 
            <div class="card card-success card-outline">
              <div class="card-body box-profile">
                 <?php if($user['photo'] == '' ) { ?>
                     
                      <img class="profile-user-img img-fluid img-circle"
                            src="<?=base_url(); ?>public/dist/img/avatar5.png"
                            alt="User profile picture">

                    <?php } else { ?>

                      <img class="profile-user-img img-fluid img-circle"
                            src="<?=base_url($user['photo'] ); ?>">

                    <?php } ?>
              </div>
            </div>
          </div>

          <div class="col-md-5">
              <div class="card card-success card-outline">
                <div class="card-body box-profile">

                <?php echo form_open_multipart(base_url('admin/users/edit/'.$user['id']), 'class="form-horizontal"');  ?> 
                  <div class="form-group">
                    <label for="username" class="control-label">Username</label>
                    <div class="">
                      <input type="text" value="<?=$user['username']; ?>" name="username" class="form-control" id="username" placeholder="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="firstname" class="control-label">Nama Lengkap</label>
                    <div>
                      <input type="text"  value="<?=$user['firstname']; ?>" name="firstname" class="form-control" id="firstname" placeholder="">
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <div>
                      <input type="email"  value="<?=$user['email']; ?>" name="email" class="form-control" id="email" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mobile_no" class="control-label">Telepon</label>
                    <div>
                      <input type="number" name="mobile_no"  value="<?=$user['mobile_no']; ?>" class="form-control" id="mobile_no" placeholder="">
                    </div>
                  </div>

                 
              </div>
            </div>
          </div>

           <div class="col-md-5">
              <div class="card card-success card-outline">
                <div class="card-body box-profile">  
                  <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <div>
                      <input type="password" name="password" class="form-control" id="password" placeholder="">
                    </div>
                  </div>               
                             

                  <div class="form-group">
                    <label for="is_admin" class="control-label">Pilih Jabatan</label>
                    <div>
                      <select name="is_admin" class="form-control">
                        <option value="">Pilih Jabatan</option>
                        <option value="1" <?=( $user['is_admin'] == 1 ) ? 'selected' : ''; ?>>Administrator</option>
                        <option value="2" <?=( $user['is_admin'] == 2 ) ? 'selected' : ''; ?>>TU Prodi</option>
                        <option value="3" <?=( $user['is_admin'] == 3 ) ? 'selected' : ''; ?>>Reviewer</option>
                        <option value="4" <?=( $user['is_admin'] == 4 ) ? 'selected' : ''; ?>>Dosen</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="id_prodi" class="control-label">Pilih Program Studi</label>
                    <div>
                      <select name="id_prodi" class="form-control">
                        <option value="">Pilih program Studi</option>
                        <?php foreach($prodi as $prodi): ?>
                          <option value="<?= $prodi['id_prodi']; ?>"><?= $prodi['prodi'];  ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div> 

                  <div class="form-group">
                    <label for="foto_profil" class="control-label">Foto Profil (jpg/png) 200x200px</label>
                    <div>
                      <input type="file" name="foto_profil" class="form-control" id="foto_profil" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <div>
                      <input type="submit" name="submit" value="Ubah Pengguna" class="btn btn-info">
                    </div>
                  </div>
                <?php echo form_close( ); ?>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

<script>
  $("#pengguna").addClass('menu-open');
</script>
