<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);  
?>  


<!-- Brand Logo -->
    <a href="<?= base_url() ?>/admin" class="brand-link navbar-success">
      <img src="<?= base_url() ?>public/dist/img/logo.png" alt="Pascasarjana UMY" class="brand-image">
      <span class="brand-text font-weight-light">SIM Pasca UMY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url() ?>admin" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda              
              </p>
            </a>
          </li>

          <li class="nav-header">KINERJA</li>

          <li class="nav-item has-treeview" id="penelitian">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Penelitian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item semuapenelitian">
                <a href="<?=base_url('penelitian');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Penelitian</p>
                </a>
              </li>
              <li class="nav-item tambahbarul">
                <a href="<?=base_url('penelitian/tambah');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Baru</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-readme"></i>
              <p>
                Publikasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Publikasi</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Publikasi</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-heart"></i>
              <p>
                Pengabdian Masyarakat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Pengabdian</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pengabdian</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shield-alt"></i>
              <p>
                Hak Kekayaan Intelektual
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua HAKI</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah HAKI</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-header">ADMINISTRATOR</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/users'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Pengguna</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="<?=base_url('admin/users/add'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Pengguna</p>
                </a>
              </li> 
               
            </ul>
          </li>
      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil Saya
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Profil</p>
                </a>
              </li>   
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Sandi</p>
                </a>
              </li>      
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->


      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= ucwords($this->session->userdata('name')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li id="dashboard" class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="dashboard"><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
      </ul>
        
       

      <ul class="sidebar-menu">
        <li id="ui" class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i> <span>UI Components</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="general"><a href="<?= base_url('admin/ui/general'); ?>"><i class="fa fa-circle-o"></i> General</a></li>
              <li id="widgets"><a href="<?= base_url('admin/ui/widgets'); ?>"><i class="fa fa-circle-o"></i> Widgets</a></li>
              <li id="icons"><a href="<?= base_url('admin/ui/icons'); ?>"><i class="fa fa-circle-o"></i> Icons</a></li>
              <li id="buttons"><a href="<?= base_url('admin/ui/buttons'); ?>"><i class="fa fa-circle-o"></i> Buttons</a></li>
              <li id="sliders"><a href="<?= base_url('admin/ui/sliders'); ?>"><i class="fa fa-circle-o"></i> Sliders</a></li>
              <li id="timeline"><a href="<?= base_url('admin/ui/timeline'); ?>"><i class="fa fa-circle-o"></i> Timeline</a></li>
              <li id="modals"><a href="<?= base_url('admin/ui/modals'); ?>"><i class="fa fa-circle-o"></i> Modals</a></li>
            </ul>
          </li>
      </ul> 
      
      <ul class="sidebar-menu">
        <li id="forms" class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Forms</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="gen"><a href="<?= base_url('admin/forms/general'); ?>"><i class="fa fa-circle-o"></i> General</a></li>
              <li id="advanced"><a href="<?= base_url('admin/forms/advanced'); ?>"><i class="fa fa-circle-o"></i> Advance</a></li>
              <li id="editors"><a href="<?= base_url('admin/forms/editors'); ?>"><i class="fa fa-circle-o"></i> Editors</a></li>
            </ul>
        </li>
      </ul> 

      <ul class="sidebar-menu">
        <li id="pages" class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="invoice"><a href="<?= base_url('admin/pages/invoice'); ?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li id="prof"><a href="<?= base_url('admin/pages/profile'); ?>"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li id="login"><a target="_blank" href="<?= base_url('admin/pages/login'); ?>"><i class="fa fa-circle-o"></i> Login</a></li>
            <li id="register"><a target="_blank" href="<?= base_url('admin/pages/register'); ?>"><i class="fa fa-circle-o"></i> Register</a></li>
            <li id="lockscreen"><a target="_blank" href="<?= base_url('admin/pages/lockscreen'); ?>"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li id="404-error"><a href="<?= base_url('admin/pages/error404'); ?>"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li id="500-error"><a href="<?= base_url('admin/pages/errro500'); ?>"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li id="blank-page"><a href="<?= base_url('admin/pages/blank'); ?>"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li id="pace"><a href="<?= base_url('admin/pages/pace'); ?>"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
      </ul>

      <ul class="sidebar-menu">
        <li id="charts" class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Charts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="chartjs"><a href="<?= base_url('admin/charts/chartjs'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
              <li id="morris"><a href="<?= base_url('admin/charts/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
              <li id="flot"><a href="<?= base_url('admin/charts/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
              <li id="inline"><a href="<?= base_url('admin/charts/inline'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="sidebar-menu">  
        <li id="calender">
          <a href="<?= base_url('admin/calendar'); ?>">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
      </ul>
        
      <ul class="sidebar-menu">
        <li id="mailbox" class="treeview">
          <a href="">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="inbox">
              <a href="<?= base_url('admin/mailbox/inbox'); ?>">Inbox
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
              </a>
            </li>
            <li id="compose"><a href="<?= base_url('admin/mailbox/compose'); ?>">Compose</a></li>
            <li id="read"><a href="<?= base_url('admin/mailbox/read_mail'); ?>">Read</a></li>
          </ul>
        </li>
      </ul>

      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
      </ul>
