<link rel="stylesheet" href="<?= base_url() ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Kategori
					</br>
					<a href="<?= base_url('admin/kategori/tambah') ?>" class="btn btn-sm btn-default">
						Tambah baru
					</a>
				</h1>
			</div>

			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">kategori</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-12">

			<div class="card">
				<div class="card-body">

					<?php if($this->session->flashdata('msg') != ''): ?>
					<div class="alert alert-success flash-msg alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4>Success!</h4>
						<?= $this->session->flashdata('msg'); ?>
					</div>
					<?php endif; ?>

					<table id="tb_evaluasi" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th> Kategori </th>
								<th> Option </th>
								<th> Jumlah dokumen </th>
							</tr>
						</thead>

						<tbody>
			 				<?php foreach($ambil_kategori as $kategori ) { ?>
							<tr>
								<td> <?=$kategori['nama_kategori']?> </td>
								<td>
									 <a href="<?=base_url('admin/kategori/update/'.$kategori['a']); ?>"
										class="btn btn-primary">
										Edit
									</a>
								</td>
								<td> <?=$kategori['jumlah']?> </td>
							</tr>
							<?php } ?>
						</tbody>
					</table>

				</div>
			</div>

		</div>
	</div>
</section>
<!-- Main content -->

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- page script -->
<script>
	$(function () {
		$("#tb_evaluasi").DataTable();
	});

	$("#kategori a.nav-link").addClass('active');
</script>
