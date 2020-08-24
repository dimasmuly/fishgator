  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 ">
              <select class="form-control" name="kolam" id="kolom">
                <option selected disabled>Pilih Kolam</option>
                <?php foreach ($select as $slt) { ?>
                  <option value="<?php echo $slt['id_nama_kolam'] ?>">
                  <?php echo $slt['nama_kolam']; ?>
                  </option>  
                  <?php
                }
                  ?>
              </select>

            <!-- <h1 class="m-0 text-dark">Pilih Kolam</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            
            <div class="small-box bg-info">
              <div class="inner">
                <h3><span id="dph"><?php echo $last_data->ph ?></span></h3>

                <p>pH</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-snowy"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><span id="dox"><?php echo $last_data->oxigen ?><sup style="font-size: 20px"></span></h3>

                <p>DO (ppm)</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-cloud"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><span id="dtubidity"><?php echo $last_data->turbidity ?></span></h3>
                <p>Turbidity</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-sunny"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><span id="dsuhu"><?php echo $last_data->suhu ?></span></h3>

                <p>Temperature</p>
              </div>
              <div class="icon">
                <i class="ion ion-erlenmeyer-flask"></i>
              </div>
            </div>
          </div>
           
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
              <canvas id="chartph" class="chartkolom"></canvas>
            <!-- section -->
          </section>
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->