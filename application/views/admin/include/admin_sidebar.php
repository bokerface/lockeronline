<!-- Brand Logo -->
<a href="<?= base_url() ?>admin/dashboard" class="brand-link navbar-success">
	<img src="<?= base_url() ?>public/dist/img/logo.png" alt="SIM Borang UMY" class="brand-image">
	<span class="brand-text font-weight-light">SIM Borang UMY</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-legacy" data-widget="treeview" role="menu"
			data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-item" id="beranda">
				<a href="<?= base_url() ?>admin/dashboard" class="nav-link">
					<i class="nav-icon fas fa-home"></i>
					<p>
						Beranda
					</p>
				</a>
			</li>


			<!-- Menu APT -->
			<li class="nav-header">APT</li>

			<?php foreach(menu_category() as $menu) { ?>
			<li class="nav-item <?= $menu['singkatan'] ?>">
				<a href="<?= base_url() ?>admin/apt/dokumen/<?= $menu['id'] ?> " class="nav-link">
					<i class="nav-icon fas fa-user"></i>
					<p>
						<?= $menu['kategori_dokumen']?>
					</p>
				</a>
			</li>
			<?php } ?>
			
			<!-- /Menu APT -->

			<!-- Menu APS -->
			<li class="nav-header">APS</li>

			<li class="nav-item has-treeview" id="fakultas">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-search"></i>
					<p>
						Fakultas
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<?php foreach (menu_fakultas() as $fakultas) { ?>
				<ul class="nav nav-treeview">
					<li class="nav-item <?= $fakultas['singkatan'] ?>">
						<a href="<?= base_url() ?>admin/aps/fakultas/<?= $fakultas['singkatan'] ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>
								Fakultas <?= $fakultas['nama_fakultas'] ?>
							</p>
						</a>
					</li>
				</ul>
				<?php } ?>
			</li>

			<li class="nav-item has-treeview" id="vokasi">
				<a href="<?= base_url() ?>admin/aps/fakultas/vokasi" class="nav-link">
					<i class="nav-icon fas fa-search"></i>
					<p>
						Vokasi
					</p>
				</a>
			</li>

			<li class="nav-item has-treeview" id="pascasarjana">
				<a href="<?= base_url() ?>admin/aps/fakultas/pascasarjana" class="nav-link">
					<i class="nav-icon fas fa-search"></i>
					<p>
						Pascasarjana
					</p>
				</a>
			</li>

			</li>
			<!-- /Menu APS -->

			<li class="nav-header">ADMINISTRATOR</li>
			<li class="nav-item has-treeview" id="pengguna">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-users"></i>
					<p>
						Pengguna
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item semua_pengguna">
						<a href="<?=base_url('admin/users'); ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Semua Pengguna</p>
						</a>
					</li>
					<li class="nav-item tambah_pengguna">
						<a href="<?=base_url('admin/users/add'); ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Tambah Pengguna</p>
						</a>
					</li>

				</ul>
			</li>

			<li class="nav-header">KATEGORI</li>

			<li class="nav-item" id="kategori">
				<a href="<?= base_url() ?>admin/apt/kategori" class="nav-link">
					<i class="nav-icon fas fa-user"></i>
					<p>
						Kategori
					</p>
				</a>
			</li>

		</ul>

	</nav>
	<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
