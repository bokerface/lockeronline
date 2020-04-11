<link rel="stylesheet" href="<?= base_url() ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

<?php
$last = $this->uri->total_segments();
$prodi = $this->uri->segment($last);

if ($prodi == 'vokasi') {
	$id_menu = 'vokasi';
} elseif ($prodi == 'pps') {
	$id_menu = 'pps';
} elseif ($prodi == 'kinter') {
	$id_menu = 'kinter';
} elseif ($prodi == 'pprof') {
	$id_menu = 'pprof';
} else {
	$id_menu = 'fakultas';
}

?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2 mt-5">
			<div class="col-4">
				<h1>Fakultas <?= $fakult['nama_fakultas'] ?> </h1>
			</div>

			<div class="col-4">
				<h1 class="text-center">Pilih Prodi</h1>
			</div>

			<div class="col-4">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href=""></a>Fakultas <?= $fakult['nama_fakultas'] ?></li>
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

			<div class="list-group col-6 mx-auto">
				<?php foreach ($ambil_prodi as $prodi) { ?>
					<div class="btn-group">
						<a href="<?= base_url() ?>admin/aps/kategori/<?= $prodi['id'] ?> " class="list-group-item list-group-item-action">
							<?= $prodi['nama_prodi'] ?>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- Main content -->

<!-- page script -->
<script>

	$("#<?= $id_menu; ?>").addClass('menu-open');
	$("#<?= $id_menu; ?> .<?= $singkatan_fakultas ?> a.nav-link").addClass('active');
</script>
