
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Coba</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <table class="table table-bordered table-striped">

            <tr>
               <th> ID </th>
               <th> ISI </th>
            </tr>
            
            <?php foreach($ambil_coba as $row ) { ?>
             <tr>
               <td> <?=$row['id_coba']; ?></td>
               <td> <?=$row['isi']; ?></td>
            </tr>

            <?php }  ?>
          </table>
        </div>
      </div>
    </section>

    

<!-- page script -->
<script>
  $("#coba").addClass('menu-open');
  $("#coba .index a.nav-link").addClass('active');
</script>