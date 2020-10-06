  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-custom sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>personel/profil">
          <div class="sidebar-brand-icon">
              <img src="<?= base_url('assets/img/') ?>poldaa.png" alt="polda">
          </div>
          <div class="sidebar-brand-text mx-3">SIPODA POLRESTABES</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- <?= var_dump($this->session->userdata('akses')); ?> -->
      <!-- Kondisi untuk Kabag Sumda -->
      <?php if ($this->session->userdata('akses') == 'kabag') : ?>
          <!-- Nav Item - Dashboard -->
          <div class="sidebar-heading">
              Kabag SUMDA
          </div>

          <!-- Kondisi untuk Kabag -->
          <li class="nav-item active">
              <a class="nav-link" href="<?= base_url(); ?>kabag/dashboard">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

      <?php endif; ?>

      <!-- Kondisi untuk Kaurmin -->
      <?php if ($this->session->userdata('akses') == 'kaurmin') : ?>
          <!-- Nav Item - Dashboard -->
          <div class="sidebar-heading">
              URMIN-SUMDA
          </div>

      <?php endif; ?>

      <!-- Kondisi untuk Kaurmin -->
      <?php if ($this->session->userdata('akses') == 'kasium') : ?>
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
          <a class="nav-link" href="<?= base_url('personel/profil'); ?>">
              <i class="fas fa-fw fa-user"></i>
              <span>Profil</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login/logout'); ?>">
              <i class="fas fa-fw fa-sign-out-alt"></i>
              <span>Keluar</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Aksi
      </div>

      <?php if ($this->session->userdata('akses') == 'kaurmin') : ?>
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>urmin/personel_polrestabes">
                  <i class="fas fa-fw fa-users-cog"></i>
                  <span>Kelola Data Personel Polrestabes</span>
              </a>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link" aria-expanded="true" aria-controls="collapseBagian" href="#" data-target="#collapseBagian" data-toggle="collapse">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Unsur Bagian</span>
              </a>
              <div class="collapse show" id="collapseBagian" aria-labelledby="headingBagian" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Unsur Bagian Polrestabes:</h6>
                      <a class="collapse-item" href="">Buttons</a>
                  </div>
              </div>
          </li> -->
      <?php endif; ?>

      <?php if ($this->session->userdata('akses') != 'kasium') : ?>
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>sium/daftar_polsek">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Daftar Instansi</span>
              </a>
          </li>
      <?php endif; ?>

      <?php if ($this->session->userdata('akses') == 'kabag') : ?>
          <!-- Nav Item - Charts -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>kabag/kelola_admin">
                  <i class="fas fa-users-cog"></i>
                  <span>Kelola Akun Admin</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>kabag/tambah_instansi_polsek">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Tambah Polsek</span></a>
          </li>
      <?php endif; ?>

      <?php if ($this->session->userdata('akses') == 'kasium') : ?>
          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>sium/daftar_polsek">
                  <i class="fas fa-fw fa-users-cog"></i>
                  <span>Kelola Data Personel Polsek</span></a>
          </li>
      <?php endif; ?>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
          Panduan
      </div>
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>panduan">
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