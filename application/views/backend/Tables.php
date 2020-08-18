  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Suhu</th>
                    <th>turbidity</th>
                    <th>oxigen</th>
                    <th>ph</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                        $no = 1;
                    foreach($kolam as $klm):?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $klm->tanggal ?></td>
                            <td><?= $klm->suhu ?></td>
                            <td><?= $klm->turbidity ?></td>
                            <td><?= $klm->oxigen ?></td>
                            <td><?= $klm->ph ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->