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
				<h1><?= $nama_prodi['nama_prodi'] ?> </h1>
			</div>

			<div class="col-4">
				<h1 class="text-center">Pilih Menu</h1>
			</div>

			<div class="col-4">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href=""></a>Fakultas <?php echo($fakult) ?></li>
					<li class="breadcrumb-item"><a href=""></a><?= $nama_prodi['nama_prodi'] ?></li>
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
				<?php foreach (menu_category() as $kategori) { ?>
				<div class="btn-group">
					<a href="<?= base_url() ?>admin/aps/dokumen/<?php echo $prodi?>/<?php echo $kategori['id']?>"  class="list-group-item list-group-item-action">
						<?= $kategori['kategori_dokumen'] ?>
					</a>
				</div>
				<?php } ?>
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

	$("#<?= $id_menu; ?>").addClass('menu-open');
	$("#<?= $id_menu; ?> .<?= $class_menu; ?> a.nav-link").addClass('active');

</script>
