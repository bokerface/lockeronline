<!DOCTYPE html>
<html lang="en">
    <head>
          <title><?=isset($title)?$title:'Login - AdminLite' ?></title>

          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <!-- Tell the browser to be responsive to screen width -->
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- Font Awesome -->
          <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
          <!-- Ionicons -->
          <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
          <!-- icheck bootstrap -->
          <link rel="stylesheet" href="<?= base_url() ?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
          <!-- Theme style -->
          <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/adminlte.css">
          <!-- Google Font: Source Sans Pro -->
          <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition login-page kabah">
        
      <div class="login-box">
        <div class="login-logo">
          <a href="<?= site_url(); ?>">
            <img src="<?= base_url() ?>public/dist/img/logopps.png" alt="Program Pascasarjana UMY">

          </a>
        </div>

         <?php if(isset($msg) || validation_errors() !== ''): ?>
            <div class="alert alert-warning alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               <h4><i class="icon fa fa-warning"></i> Alert!</h4>
               <?= validation_errors();?>
               <?= isset($msg)? $msg: ''; ?>
            </div>
          <?php endif; ?>
          <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              <?=$this->session->flashdata('error')?>
            </div>
          <?php endif; ?>
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
              <?=$this->session->flashdata('success')?>
            </div>
          <?php endif; ?>

        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Assalamualaikum, silakan login dahulu.</p>

            <?php echo form_open(base_url('auth/login'), 'class="login-forsm" '); ?>

               
              <div class="input-group mb-3">
                <input type="text"  name="username" id="username" class="form-control" placeholder="Nama Pengguna">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Sandi">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
              
                   
                    <label for="pt-3">
                       <a href="#">Lupa kata sandi?</a>
                    </label>
                
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <!--<button type="submit"  name="submit" id="submit" class="btn btn-primary btn-block btn-flat">Login</button>-->
                   <input type="submit" name="submit" id="submit" class="form-control" value="Login">
                   
                </div>
                <!-- /.col -->
              </div>
            <?php echo form_close(); ?>

         
            
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
      <!-- /.login-box -->


  <!-- jQuery -->
    <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
