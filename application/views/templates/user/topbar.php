    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                    </li>

                    <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= filter_var($this->session->userdata("nama"), FILTER_DEFAULT); ?></span>
                            <img class="img-profile rounded-circle" src="<?= filter_var(base_url("assets/img/profil/" . $this->session->userdata("img")), FILTER_DEFAULT); ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= filter_var(base_url("personel/profil"), FILTER_DEFAULT) ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Lihat Profil
                            </a>
                            <a class="dropdown-item" id="passwordreset" data-target="#password-top-bar">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Ubah Password
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Keluar
                            </a>
                        </div>
                        <div id="password-top-bar" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ubah Password</h5>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Password Lama</h5><input id="lama_password" type="password" class="form-control" maxlength='20' value="" required>

                                        <h5>Password Baru</h5><input id="baru_password" type="password" class="form-control" maxlength='20' value="" required>

                                        <h5>Konfirmasi Password Baru</h5><input id="konf-password" type="password" class="form-control" maxlength='20' value="" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="badge btn-secondary" data-dismiss="modal" style="height:2rem;" onclick="kembali()">Kembali</button>
                                        <button id="save" type="button" class="badge btn-success" style="height:2rem;" onclick="gantiPassPer()">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->