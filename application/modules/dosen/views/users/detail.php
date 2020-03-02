  
 <section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body">
        <div class="col-md-6">
          <h4><i class="fa fa-user"></i> &nbsp; Profil <?= $user['firstname']; ?></h4>
        </div>        
      </div>
    </div>
  </div> 

  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Profil Pribadi</a></li>
      <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Data Keluarga</a></li>
      <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Data Profesi</a></li>
      <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Laporan Kinerja</a></li>              
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab_1">
        <table class="table table-striped table-bordered">
          <tr>
            <td style="width:15%;">Nama Lengkap</td>
            <td><?= $user['firstname']; ?></td>
          </tr>
          <tr>
            <td>Tempat/Tanggal Lahir</td>
            <td><?= $user['tempat_lahir']; ?>/<?= $user['tgl_lahir']; ?></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td><?= $user['jenis_kelamin']; ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?= $user['email']; ?></td>
          </tr>
          <tr>
            <td>No Telepon</td>
            <td><?= $user['mobile_no']; ?></td>
          </tr>
            <tr>
                  <td>Alamat</td>
                  <td><?= $user['alamat']; ?></td>
                </tr>
               
              </table>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table id="standar" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Status Keluarga</th>                
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    
                    <th style="text-align: center">Pendidikan</th>
                    <th style="text-align: center">Pekerjaan</th>
                 
                    <th style="text-align:center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php if($data_keluarga) {
                  $i=1; foreach ($data_keluarga as $keluarga ) { ?>
                  <tr>
                    <td><?=$i; ?></td>
                    <td><?php if(  $keluarga['status_keluarga'] != 'Anak' ) {
                              echo $keluarga['nama_keluarga'] . " ( " . $keluarga['pekerjaan'] . " )";
                            } else { 
                              echo $keluarga['nama_keluarga']; 
                            } 
                      ?>
                        
                      </td>
                    <td> 

                    <?php if(  $keluarga['status_keluarga'] == 'Anak' ) {
                              echo $keluarga['status_keluarga'] . " ke " . $keluarga['anak_ke'];
                            } else { 
                              echo $keluarga['status_keluarga']; 
                            } 
                      ?>

                      </td>
                    <td><?=$keluarga['tempat_lahir']; ?> / <?=$keluarga['tgl_lahir']; ?></td>
                    <td><?=$keluarga['jenis_kelamin']; ?></td>
                    
                    <td style="text-align: center"><?php if( $keluarga['kelas'] > 0) {
                        echo $keluarga['kelas'] . " " . $keluarga['pendidikan'];
                      } else { echo $keluarga['pendidikan']; } ?></td>

                      <td style="text-align: center"><?=$keluarga['pekerjaan']; ?></td>
                   
                     <td style="text-align:center;">
                      <a title="Edit" class="update btn btn-sm btn-success" href="<?php echo base_url('admin/profile/edit_keluarga/' . $keluarga['id']); ?>"> <i class="fa fa-pencil-square-o"></i></a>
                      <a title="Hapus" class="delete btn btn-sm btn-danger" data-href="<?= base_url('admin/profile/hapus_keluarga/'. $keluarga['id'] ); ?>" data-toggle="modal" data-target="#confirm-delete"> <i class="fa fa-trash-o"></i></a>

                      
                     </td>
                  </tr>

                  <?php $i++; }
                  } ?>                                          
                </tbody>
              </table>
              </div>             
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                
                <?php foreach ($penempatan as $penempatan) {
                  echo "<h4>Kantor Tempat Bertugas : " . get_kantor_by_id($penempatan['id_kantor']) . "</h4>";
                  echo "<h4>Jabatan : " . get_unit_kerja_by_id($penempatan['id_unit']) . "</h4>";
                  echo "<h4>Periode Jabatan : " . $penempatan['awal_penempatan']  . " Sampai dengan " . $penempatan['akhir_penempatan'] . "</h4>";
                } ?>
              </div>             
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">


              	<p class="lead text-red">Hifdz Ad-Din (Pemeliharaan Agama)</p>
              	<table class="table-striped table table-bordered">
              		<tr>
		                <th>Perihal</td>
                    	<th width="200">Keterangan</th>
                    </tr>
                   	<?php if ($din) { ?>               
		              	<tr>
		                	<td>Frekuensi melaksanakan shalat wajib berjamaah di awal waktu</td>
                    		<td><?=$din['sholat_awal_waktu']; ?> kali / hari</td>
                    	</tr>

                    	<tr>
		                	<td>Frekuensi shalat berjamaah di masjid</td>
                    		<td><?=$din['jamaah_masjid']; ?> kali / hari</td>
                    	</tr>

                    	<tr>
		                	<td>Jumlah halaman tilawah qur’an</td>
                    		<td><?=$din['tilawah_quran']; ?> halaman / bulan</td>
                    	</tr>

                    	<tr>
		                	<td>Frekuensi shalat tahajjud</td>
                    		<td><?=$din['tahajjud']; ?> kali / bulan</td>
                    	</tr>

                    	<tr>
		                	<td>Puasa sunnah Senin Kamis</td>
                    		<td><?=$din['puasa_sunnah']; ?> kali / bulan</td>
                    	</tr>

                    	<tr>
		                	<td>Shalat dhuha sebelum beraktivitas</td>
                    		<td><?=$din['dhuha']; ?> kali / bulan</td>
                    	</tr>
		            <?php }  else { echo "belum ada data"; }?>
		        </table>

		        <p class="lead text-red">Hifdz An-Nafs (Pemeliharaan Jiwa)</p>
              	<table class="table-striped table table-bordered">
              		<tr>
		                <th>Perihal</td>
                    	<th width="200">Keterangan</th>
                    </tr>
                   	<?php if ($nafs) { ?>               
		              	<tr>
		                	<td>Frekuensi olah raga </td>
                    		<td><?=$nafs['olah_raga']; ?> kali / bulan</td>
                    	</tr>

                    	<tr>
		                	<td>Kehadiran kerja tepat waktu ( Jumlah hari tepat waktunya )</td>
                    		<td><?=$nafs['tepat_waktu']; ?> kali / bulan</td>
                    	</tr>

                    	
		            <?php }  else { echo "belum ada data"; }?>
		        </table> 

		        <p class="lead text-red">Hifdz Al’Aql (Pemeliharaan Akal)</p>
              	<table class="table-striped table table-bordered">
              		<tr>
		                <th>Perihal</td>
                    	<th width="200">Keterangan</th>
                    </tr>
                   	<?php if ($aql) { ?>               
		              	<tr>
		                	<td>Jumlah Pelatihan yang diikuti </td>
                    		<td><?=$aql['pelatihan']; ?> kali / bulan</td>
                    	</tr>

                    	<tr>
		                	<td>Inovasi yang disampaikan kepada BMT</td>
                    		<td><?=$aql['inovasi_kepada_bmt']; ?> kali / bulan</td>
                    	</tr>
                    	<tr>
		                	<td>Usulan Inovasi yang dipakai oleh BMT</td>
                    		<td><?=$aql['usulan_dipakai']; ?> kali / bulan</td>
                    	</tr>
                    	<tr>
		                	<td>Kajian rutin mingguan dalam sebulan</td>
                    		<td><?=$aql['kajian_rutin']; ?> kali / bulan</td>
                    	</tr> 

                    	
		            <?php }  else { echo "belum ada data"; }?>
		        </table> 

		          <p class="lead text-red">Hifdz Al-Maal (Pemeliharaan Harta)</p>
              	<table class="table-striped table table-bordered">
              		<tr>
		                <th>Perihal</td>
                    	<th width="200">Keterangan</th>
                    </tr>
                   	<?php if ($mal) { ?>               
		              	<tr>
		                	<td>Jumlah saving untuk pendidikan anak </td>
                    		<td>Rp <?=number_format($mal['saving'],2); ?> /bulan</td>
                    	</tr>

                    	<tr>
		                	<td>Jumlah hutang/pembiayaan yang ditanggung keluarga</td>
                    		<td>Rp <?=number_format($mal['hutang'],2); ?> /bulan</td>
                    	</tr>                    	
		            <?php }  else { echo "belum ada data"; }?>
		        </table> 

		        <p class="lead text-red">Hifdz An-Nasl (Pemeliharaan Keturunan)</p>
              	<table class="table-striped table table-bordered">
              		<tr>
		                <th>Perihal</td>
                    	<th width="50%">Keterangan</th>
                    </tr>
                   	<?php if ($nasb) { ?>               
		              	<tr>
		                	<td>Kesehatan anggota keluarga <br>
(Jumlah hari anggota keluarga yang sakit dalam sebulan dan sembuh) </td>
                    		<td><?=$nasb['kesehatan_keluarga']; ?> kali /bulan</td>
                    	</tr>

                    	<tr>
		                	<td>Partisipasi keluarga besar di kegiatan BMT
</td>
                    		<td><?=$nasb['partisipasi_keluarga']; ?> kali /bulan</td>
                    	</tr>
                    	<tr>
		                	<td>Pendidikan anak</td>
                    		<td>
                    			<table class="table table-bordered">
                    				<tr>
                    					<th>Nama</th>
                    					<th>Pendidikan</th>
                    				</tr>
                    			<?php if($data_anak) {
					                  $i=1; foreach ($data_anak as $keluarga ) { ?>
					                  	<tr>
					                   
						                    <td><?php echo $keluarga['nama_keluarga']; ?></td>
						                    					                    
						                    <td>
						                    	<?php 
						                    		if( $keluarga['kelas'] > 0) {
						                       			echo $keluarga['pendidikan'] .", Kelas/Tingkat" . $keluarga['kelas'];
						                      		} else {
						                      			echo $keluarga['pendidikan']; } ?>
						                    </td>
					                  	</tr>

					                  <?php $i++; }
					                  } ?>
					            </table>
                    		</td>
                    	</tr>
                    	

                    	
		            <?php }  else { echo "belum ada data"; }?>
		        </table> 
                
              </div>             
            </div>
            <!-- /.tab-content -->
          </div>
  
 <script>
    $("#pengguna").addClass('active');
    $("#pengguna .submenu_userlist").addClass('active');
  </script>
