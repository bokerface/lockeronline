<link rel="stylesheet" href="<?= base_url() ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

<?php 
	$last = $this->uri->total_segments();
	$prodi = $this->uri->segment($last); 

	if ($prodi == 'vokasi') {
		$id_menu = 'vokasi';
	} elseif ($prodi == 'pascasarjana') {
		$id_menu = 'pascasarjana';
	} else {
		$id_menu = 'fakultas';
	}
	
?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-12">
				<h1 class="text-center">Pilih Prodi</h1>
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
					<a class="list-group-item list-group-item-action">
						<?= $prodi['nama_prodi'] ?>
					</a>
					<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu">
						<?php foreach (menu_category() as $kategori) { ?>
						<a class="dropdown-item"
							href="<?= base_url() ?>admin/aps/dokumen/<?php echo $prodi['id']?>/<?php echo $kategori['id']?>"><?= $kategori['kategori_dokumen'] ?></a>
						<?php } ?>
					</div>
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
	$(function () {
		$("#tb_evaluasi").DataTable();
	});

	$("#<?=$id_menu; ?>").addClass('menu-open');
	$("#<?=$id_menu; ?> .<?=$singkatan_fakultas?> a.nav-link").addClass('active');

</script>
