<?php
  $role = "ASMIN";
?>
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
        <img src="<?php echo asset_url();?>img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#navbar-dashboards" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
              <i class="ni ni-shop text-primary"></i>
              <span class="nav-link-text">Dashboards</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
              <i class="ni ni-ungroup text-orange"></i>
              <span class="nav-link-text">My Task</span>
            </a>
            <div class="collapse" id="navbar-examples">
              <ul class="nav nav-sm flex-column">
                <?php
                if($role == 'ASMIN'){
                  echo '
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Pembuatan Undangan</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Booking Konsumsi</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Pembuatan Form Absen Rapat</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Booking Ruangan</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Booking Link Meeting</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Booking Narasumber/Moderator</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Booking Transportasi</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Booking Ruang Rapat Hotel</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Booking Kamar Hotel</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Pembuatan Itenary</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <span style="width:165px;">Pembuatan Norminatif SPPD</span>
                      <span class="pull-right-container">
                        <span class="badge-circle badge-primary pull-right">4</span>
                      </span>
                    </a>
                  </li>
                  ';
                }
                ?>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/calendar.html">
              <i class="ni ni-calendar-grid-58 text-red"></i>
              <span class="nav-link-text">Calendar</span>
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading p-0 text-muted">Tabel Master</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="user">
              <i class="ni ni-single-02 text-blue"></i>
              <span class="nav-link-text">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="narasumber">
              <i class="ni ni-badge text-green"></i>
              <span class="nav-link-text">Narasumber</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-key-25"></i>
              <span class="nav-link-text">Change Password</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="main-content" id="panel">