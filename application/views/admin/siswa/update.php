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
<!-- Content Header (Page header) -->

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
						<?php if($siswa['photo'] == '' ) { ?>

						<img class="profile-user-img img-fluid img-circle" src="<?=base_url(); ?>public/dist/img/avatar5.png"
							alt="User profile picture">

						<?php } else { ?>

						<img class="profile-user-img img-fluid img-circle" src="<?=base_url($siswa['photo'] ); ?>">

						<?php } ?>
					</div> 
				</div>
			</div>

			<div class="col-md-5">
				<div class="card card-success card-outline">
					<div class="card-body box-profile">

						<?php echo form_open_multipart(base_url('admin/siswa/update_post/'.$siswa['id_siswa']), 'class="form-horizontal"');?>

						<div class="form-group">
							<label for="username" class="control-label">Nama</label>
							<div class="">
								<input type="text" value="<?=$siswa['nama']; ?>" name="nama" class="form-control" id="username"
									placeholder="">
							</div>
						</div>

						<div class="form-group">
							<label for="firstname" class="control-label">No.Telp</label>
							<div>
								<input type="number" value="<?=$siswa['telp']; ?>" name="telp" class="form-control" id="firstname">
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="control-label">Alamat</label>
							<div>
								<textarea class="form-control" name="alamat"><?=$siswa['alamat']; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="mobile_no" class="control-label">Umur</label>
							<div>
								<input type="number" name="umur" value="<?=$siswa['umur']; ?>" class="form-control" id="mobile_no">
							</div>
						</div>

						<div class="form-group">
							<div>
								<input type="submit" name="submit" value="Ubah Data" class="btn btn-info">
							</div>
						</div>

						<div class="form-group">
							<label for="foto_profil" class="control-label">Foto Profil (jpg/png) 200x200px</label>
							<div>
								<input type="file" name="foto_profil" class="form-control" id="foto_profil">
							</div>
						</div>

						<?php echo form_close( ); ?>

					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Main content -->

<script>
	$("#siswa").addClass('menu-open');
</script>
