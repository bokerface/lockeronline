<link rel="stylesheet" href="<?= base_url() ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Lampiran Evaluasi Diri
					</br>
					<a href="<?= base_url('admin/apt/tambah/led') ?>" class="btn btn-sm btn-default">
						Tambah baru
					</a>
				</h1>
			</div>

			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">evaluasi</li>
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
								<th> Nama Dokumen </th>
								<th> Deskripsi </th>
								<th> Download Dokumen </th>
							</tr>
						</thead>

						<tbody>
							<?php foreach($ambil_lampiran_evaluasi as $lampiran_evaluasi ) { ?>
							<tr>
								<td> <?=$lampiran_evaluasi['nama_dokumen']?> </td>
								<td> <?=$lampiran_evaluasi['deskripsi']?> </td>
								<td>
									<a class="btn btn-success" href="<?=base_url($lampiran_evaluasi['file'] ); ?>">
										Download
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
</section>
<!-- Main content -->

<!-- Modal delete confirmation -->
<div class="modal fade" id="confirm-delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Perhatian</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Tutuo">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Yakin ingin menghapus data ini?&hellip;</p>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<a class="btn btn-danger btn-ok">Hapus</a>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div>
<!-- Modal delete confirmation -->

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- Modal delete conformation script -->
<script type="text/javascript">
	$('#confirm-delete').on('show.bs.modal', function (e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});
</script>
<!-- Modal delete conformation script -->

<!-- page script -->
<script>
	$(function () {
		$("#tb_evaluasi").DataTable();
	});

	$("#led .lampiran a.nav-link").addClass('active');
</script>
