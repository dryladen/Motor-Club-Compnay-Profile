<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand bg-white d-flex align-items-center justify-content-center py-2" href="<?= site_url('company') ?>">
    <div class="sidebar-brand-icon">
      <img class="rounded-circle" height="40px" src="<?= base_url('assets') ?>/img/logo.png" alt="">
    </div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php echo $isActive == 'Home' ? 'active':''; ?>">
    <a class="nav-link" href="<?= site_url('company') ?>">
      <i class="fa-solid fa-house"></i>
      <span>Home</span></a>
  </li>
  <li class="nav-item <?php echo $isActive == 'Artikel' ? 'active':''; ?>">
    <a class="nav-link" href="<?= site_url('company/artikel') ?>">
      <i class="fa-sharp fa-solid fa-scroll"></i>
      <span>Artikel</span></a>
  </li>
  <li class="nav-item <?php echo $isActive == 'Galeri' ? 'active':''; ?>">
    <a class="nav-link" href="<?= site_url('company/galeri') ?>">
      <i class="fa-solid fa-image"></i>
      <span>Galeri</span></a>
  </li>
  <li class="nav-item <?php echo $isActive == 'Klien Kami' ? 'active':''; ?>">
    <a class="nav-link" href="<?= site_url('company/klien') ?>">
      <i class="fa-solid fa-user-group"></i>
      <span>Klien Kami</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item <?php echo $isActive == 'Login' ? 'active':''; ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i>
      <span>Login</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?= site_url('company/login') ?>">Masuk</a>
        <a class="collapse-item" href="<?= site_url('company/register') ?>">Daftar</a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->