<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=isset($title)?$title:'SIM Borang UMY' ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 --
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!- iCheck --
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">-->

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- jQuery -->
  <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url() ?>public/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  

<?php
function indonesian_date ($timestamp = '', $date_format = 'j F Y', $suffix = 'WIB') {
	if (trim ($timestamp) == '')
	{
			$timestamp = time ();
	}
	elseif (!ctype_digit ($timestamp))
	{
		$timestamp = strtotime ($timestamp);
	}
	# remove S (st,nd,rd,th) there are no such things in indonesia :p
	$date_format = preg_replace ("/S/", "", $date_format);
	$pattern = array (
		'/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
		'/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
		'/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
		'/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
		'/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
		'/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
		'/April/','/June/','/July/','/August/','/September/','/October/',
		'/November/','/December/',
	);
	$replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
		'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
		'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
		'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
		'Oktober','November','Desember',
	);
	$date = date ($date_format, $timestamp);
	$date = preg_replace ($pattern, $replace, $date);
	$date = "{$date} {$suffix}";
	return $date;
} 

?>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

	

	<?php include('include/navbar.php'); ?>
  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4">

  
	<?php include('include/admin_sidebar.php'); ?>
	
    
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    	<?php $this->load->view($view);?>
    
   
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">Program Badan Penjaminan Mutu UMY</a>. </strong>
    All rights reserved. Nama Akun Anda <?php echo $this->session->userdata("firstname"); ?>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->








<!-- overlayScrollbars -->
<script src="<?= base_url() ?>public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>public/dist/js/adminlte.js"></script>


</body>
</html>


