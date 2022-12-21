<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- Nama Perusahaan -->
    <div class="container-fluid bg-primary text-white text-center py-2">
      <h1 class="font-weight-bold bg-primary">Honda Tiger Club Indonesia</h1>
    </div>
    <!-- Topbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary topbar static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle p-0">
        <i class="fa-solid fa-angles-right"></i>
      </button>
      <button class="btn btn-link d-md-none rounded p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse bg-primary position-relative text-white" style="z-index: 2;" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Nav Item - Alerts -->
          <li class="nav-item mx-1">
            <a class="nav-link <?php echo $title == 'Profile' ? 'aktif':''; ?>" href="<?= site_url('company') ?>">
              Profile
            </a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link <?php echo $title == 'Visi dan Misi' ? 'aktif':''; ?>" href="<?= site_url('company/visimisi') ?>">
              Visi dan Misi
            </a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link <?php echo $title == 'Produk' ? 'aktif':''; ?>" href="<?= site_url('company/produk') ?>">
              Produk Kami
            </a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link <?php echo $title == 'Kontak' ? 'aktif':''; ?>" href="<?= site_url('company/kontak') ?>">
              Kontak Kami
            </a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link <?php echo $title == 'Tentang Kami' ? 'aktif':''; ?>" href="<?= site_url('company/tentang') ?>">
              Tentang Kami
            </a>
          </li>
        </ul>
    </nav>
    <!-- End of Topbar -->
    <!-- Begin Page Content -->
    <div class="container p-0">