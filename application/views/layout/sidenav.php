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
              <i class="ni ni-bullet-list-67 text-orange"></i>
              <span class="nav-link-text">Pengajuan Meeting</span>
            </a>
            <div class="collapse" id="navbar-examples">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <span>Meeting Internal</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <span>Meeting Eksternal</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading p-0 text-muted">Tabel Master</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link"href="<?php echo base_url("user");?>">
              <i class="ni ni-single-02 text-orange"></i>
              <span class="nav-link-text">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="<?php echo base_url("tag");?>">
              <i class="ni ni-tag text-yellow"></i>
              <span class="nav-link-text">Tag</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="<?php echo base_url("instansi");?>">
              <i class="ni ni-building text-green"></i>
              <span class="nav-link-text">Instansi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="<?php echo base_url("narasumber");?>">
              <i class="ni ni-paper-diploma text-red"></i>
              <span class="nav-link-text">Narasumber</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="<?php echo base_url("tribe");?>">
              <i class="ni ni-vector text-blue"></i>
              <span class="nav-link-text">Tribe</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="<?php echo base_url("bank");?>">
              <i class="ni ni-credit-card text-orange"></i>
              <span class="nav-link-text">Bank</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="<?php echo base_url("role");?>">
              <i class="ni ni-bulb-61 text-yellow"></i>
              <span class="nav-link-text">Role</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="<?php echo base_url("jabatan");?>">
              <i class="ni ni-tie-bow text-red"></i>
              <span class="nav-link-text">Jabatan</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="main-content" id="panel">