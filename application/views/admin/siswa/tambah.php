
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah baru</h1>
          </div>
          <div class="col-sm-6">
            
          </div> 
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-12">
					<?php if(isset($msg) || validation_errors() !== ''): ?>
						<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4><i class="fa fa-exclamation"></i> Terjadi Kesalahan</h4>
								<?= validation_errors();?>
								<?= isset($msg)? $msg: ''; ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="col-md-6">
					<div class="card card-success card-outline">
						<div class="card-body box-profile">

							<?php echo form_open_multipart(base_url('admin/siswa/store'), '' )?>
							
									<div class="form-group">
										<div class="mt-3">
											<label class="control-label">Nama Siswa</label>
											<input type="text" name="nama" class="form-control" id="name" placeholder="">
										</div>

										<div class="mt-3">
											<label class="control-label">No.Telp</label>
											<input type="number" name="telp" class="form-control" id="telp" placeholder="">
										</div>
										
										<div class="mt-3">
											<label class="control-label">Alamat</label>
											<textarea class="form-control" name="alamat" id="address" ></textarea>
										</div>
										
										<div class="mt-3">
											<label class="control-label">Umur</label>
											<input type="number" name="umur" class="form-control" id="age" placeholder="">
										</div>

										<div class="mt-3">
											<div class="form-group">
												<label for="foto_profil" class="control-label">Foto Profil (jpg/png)</label>
												<div>
													<input type="file" name="foto_profil" class="form-control" id="foto_profil">
												</div>
											</div>
										</div>

										<div class="form-group mt-2">
											<input type="submit" name="submit" value="Submit" class="btn btn-info">	
										</div>
									</div>

							<?php echo form_close( ); ?>

						</div>
					</div>
				</div>
				
      </div>
    </section>

    

<!-- page script -->
<script>
  $("#siswa").addClass('menu-open');
  $("#siswa .tambah a.nav-link").addClass('active');
</script>
