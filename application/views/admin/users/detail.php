
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-success card-outline">
              <div class="card-body box-profile">
                <div class="text-center">

                   <?php if($user['photo'] == '' ) { ?>
                     
                      <img class="profile-user-img img-fluid img-circle"
                            src="<?=base_url(); ?>public/dist/img/avatar5.png"
                            alt="User profile picture">

                    <?php } else { ?>

                      <img class="profile-user-img img-fluid img-circle"
                            src="<?=base_url($user['photo'] ); ?>"> 

                    <?php } ?>


                </div>

                <h3 class="profile-username text-center"><?=$user['firstname'];?></h3>
                <p class="text-muted text-center">

                  <?php if($user['is_admin'] == 1) {

                     echo "Administrator";

                  } elseif($user['is_admin'] == 2) {

                    echo "Tata Usaha Prodi";

                  } elseif($user['is_admin'] == 3) {

                    echo "Reviewer";

                  } else {
                    echo "Dosen";
                  }


                  ?>
                    
                </p>               
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
           
          </div>
          <!-- /.col -->
          <div class="col-md-8">
             <div class="card card-warning card-outline">
              
              <div class="card-body">

                <?php if($user['id_prodi']) { ?>
                  <strong><i class="fas fa-book mr-1"></i> Program Studi</strong>
                  <p class="text-muted">
                    <?=$user['prodi']; ?>
                  </p>

                <?php } ?>
                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                <p class="text-muted">
                  <?php echo $user['email']; ?>
                </p>
                <strong><i class="fab fa-whatsapp mr-1"></i> No Ponsel</strong>
                <p class="text-muted">
                  <?php echo $user['mobile_no']; ?>
                </p>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

 <script>
  $("#pengguna").addClass('menu-open');
</script>
