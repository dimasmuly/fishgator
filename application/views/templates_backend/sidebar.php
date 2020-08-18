  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url()?>assets/frontend/demo/backgrounds/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">GainzTech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/frontend/demo/backgrounds/download.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">FishGator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Home</li> 
          <li class="nav-item">
            <a href="<?php echo site_url('Dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Chart')?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Chart</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url('Table')?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Tables</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url('templates_backend/parameter_sensor')?>" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>Parameter Sensor</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url('templates_backend/prediction_analysis')?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Prediction Analysis</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url('templates_backend/about_us')?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>About Us</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo site_url('auth/login/logout')?>" class="nav-link">
              <i class="nav-icon far ion-power"></i>
              <p>Log Out</p>
            </a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
