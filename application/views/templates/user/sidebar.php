  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-custom sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= filter_var(base_url("personel/profil"), FILTER_DEFAULT) ?>">
          <div class="sidebar-brand-icon">
              <img src="<?= filter_var(base_url('assets/img/'), FILTER_DEFAULT) ?>poldaa.png" alt="polda">
          </div>
          <div class="sidebar-brand-text mx-3">SIPODA POLRESTABES</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Kondisi untuk Kabag Sumda -->
      <?php if (filter_var($this->session->userdata('akses'), FILTER_DEFAULT) === 'kabag') : ?>
          <!-- Nav Item - Dashboard -->
          <div class="sidebar-heading">
              Kabag SUMDA
          </div>

          <!-- Kondisi untuk Kabag -->
          <li class="nav-item active">
              <a class="nav-link" href="<?= filter_var(base_url("kabag/dashboard"), FILTER_DEFAULT); ?>">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

      <?php endif; ?>

      <!-- Kondisi untuk Kaurmin -->
      <?php if (filter_var($this->session->userdata('akses'), FILTER_DEFAULT) === 'kaurmin') : ?>
          <!-- Nav Item - Dashboard -->
          <div class="sidebar-heading">
              URMIN-SUMDA
          </div>

      <?php endif; ?>

      <!-- Kondisi untuk Kaurmin -->
      <?php if (filter_var($this->session->userdata('akses'), FILTER_DEFAULT)  === 'kasium') : ?>
          <!-- Nav Item - Dashboard -->
          <div class="sidebar-heading">
              SIUM POLSEK
          </div>
      <?php endif; ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          User
      </div>
      <li class="nav-item">
          <a class="nav-link" href="<?= filter_var(base_url('personel/profil'), FILTER_DEFAULT); ?>">
              <i class="fas fa-fw fa-user"></i>
              <span>Profil</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="<?= filter_var(base_url('login/logout'), FILTER_DEFAULT); ?>">
              <i class="fas fa-fw fa-sign-out-alt"></i>
              <span>Keluar</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Aksi
      </div>

      <?php if (filter_var($this->session->userdata('akses'), FILTER_DEFAULT)  === 'kaurmin') : ?>
          <li class="nav-item">
              <a class="nav-link" href="<?= filter_var(base_url(), FILTER_DEFAULT) ?>urmin/personel_polrestabes">
                  <i class="fas fa-fw fa-users-cog"></i>
                  <span>Kelola Data Personel Polrestabes</span>
              </a>
          </li>
      <?php endif; ?>

      <?php if ($this->session->userdata('akses') !== 'kasium') : ?>
          <li class="nav-item">
              <a class="nav-link" href="<?= filter_var(base_url(), FILTER_DEFAULT)  ?>sium/daftarPolsek">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Daftar Instansi</span>
              </a>
          </li>
      <?php endif; ?>

      <?php if (filter_var($this->session->userdata('akses'), FILTER_DEFAULT) === 'kabag') : ?>
          <!-- Nav Item - Charts -->
          <li class="nav-item">
              <a class="nav-link" href="<?= filter_var(base_url(), FILTER_DEFAULT) ?>kabag/kelola_admin">
                  <i class="fas fa-users-cog"></i>
                  <span>Kelola Akun Admin</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?= filter_var(base_url(), FILTER_DEFAULT) ?>kabag/tambahInstansiPolsek">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Tambah Polsek</span></a>
          </li>
      <?php endif; ?>

      <?php if (filter_var($this->session->userdata('akses'), FILTER_DEFAULT) === 'kasium') : ?>
          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link" href="<?= filter_var(base_url(), FILTER_DEFAULT) ?>sium/daftarPolsek">
                  <i class="fas fa-fw fa-users-cog"></i>
                  <span>Kelola Data Personel Polsek</span></a>
          </li>
      <?php endif; ?>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
          Panduan
      </div>
      <li class="nav-item">
          <a class="nav-link" href="<?= filter_var(base_url(), FILTER_DEFAULT) ?>panduan">
              <i class="fas fa-fw fa-file"></i>
              <span>Panduan Penggunaan Sistem</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

  </ul>
  <!-- End of Sidebar -->