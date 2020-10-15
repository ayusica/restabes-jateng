<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">TABEL ADMIN</h6>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col md-5">
                    <div class="tambah">
                        <button type="button" class="badge btn-primary " id="tambah_admin_button"><i class="fas fa-plus fa-sm"></i> Tambah Admin</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Jabatan</th>
                            <th>Instansi</th>
                            <th>Level</th>
                            <th width="60px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($personel as $personel) : ?>
                            <tr style="text-transform: uppercase;">
                                <td><?= filter_var($no, FILTER_DEFAULT);
                                    $no++ ?></td>
                                <td><?= filter_var($personel['nama'], FILTER_DEFAULT); ?></td>
                                <td><?= filter_var($personel['nrp'], FILTER_DEFAULT); ?></td>
                                <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT); ?></td>
                                <td><?= filter_var($personel['nama_instansi'], FILTER_DEFAULT) ?></td>
                                <td><?= filter_var($personel['level'], FILTER_DEFAULT); ?></td>
                                <td width="60px">
                                    <button type="submit" class="badge btn-success" id="edit" onclick="edit('<?= filter_var($personel['nrp'], FILTER_DEFAULT); ?>')"><i class="fas fa-edit"></i></button>
                                    <button type="submit" class="badge btn-danger" id="hapus" onclick="hapusAdmin('<?= filter_var($personel['nrp'], FILTER_DEFAULT); ?>')"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Update -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-personel" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required minlength="3">
                        </div>
                        <div class="form-group">
                            <label>NRP</label>
                            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP" required minlength="3" disabled />
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" id="jab" name="jab" placeholder="Jabatan" required minlength="3">
                        </div>
                        <!-- <div class="form-group">
                            <label>Instansi</label>
                            <input type="text" class="form-control" id="inst" name="inst" placeholder="Instansi" required minlength="3">
                        </div> -->
                        <div>
                            <label>Level</label>
                            <select class="form-control" id="level" name="level">
                                <option value="">--Pilih Level--</option>
                                <option value="kabag">Kabag</option>
                                <option value="kaurmin">Urmin</option>
                                <option value="kasium">Sium</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <div class="col-auto mt-10">
                                <button type="submit" class="btn btn-success" id="update" name="update" onclick="updateEdit()">Simpan</button>
                                <button type="button" class="btn btn-warning" id="password-button">Ubah Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="background-color:#B80F0A">
        <div class="card-header">
            <h4>Catatan:
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </h4>
        </div>
        <div class="card-body" style="color: whitesmoke">
            1. Setiap Admin Polsek <b>DEFAULT</b> harus memasukkan 1 anggota yang akan menjadi admin SIUM.</p>
            2. <b>Laporkan</b> perubahan data admin kepada <b>KABAG SUMDA</b> untuk melakukan perubahan admin.</p>
            3. Password <b>DEFAULT</b> dari Admin Polsek adalah (admin) tanpa tanda kurung.</p>
            4. Setelah melakukan pergantian Admin Polsek, data Admin <b>DEFAULT</b> harus <b>dihapus</b>. </p>
            5. Sehingga <b>SIUM Polsek</b> dapat melakukan fungsi yang seharusnya dengan aplikasi ini.
        </div>
    </div>
    <!-- UBAH PASSWORD -->
    <div id="reset-password-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Password</h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="form">
                        <h5>Password Baru</h5>
                        <input id="new_password" type="password" class="form-control" maxlength='20' value="" required>
                        <div>
                            <input type="checkbox" id="show-hide" name="show-hide" value="" />
                            <label for="show-hide">Tampilkan password</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="save" type="button" class="btn btn-success" data-dismiss="modal" onclick="changePassword()">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Hapus -->
    <div id="hapus-admin-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Admin</h5>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda Yakin Ingin Menghapus?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="konfirmasi_hapus" type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-personel" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="namaAdmin" name="nama" placeholder="Nama Lengkap" required minlength="3">
                        </div>
                        <div class="form-group">
                            <label>NRP</label>
                            <input type="" class="form-control" id="nrpAdmin" name="nrp" placeholder="NRP" required minlength="8" maxlength="18" onkeypress="return wajibAngka(event)">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="passAdmin" name="password" placeholder="(password) menggunakan password lama" required minlength="3" disabled />
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" id="levelAdmin" name="level" onchange="pilInstansi()">
                                <option value="">--Pilih Level--</option>
                                <option value="kabag">Kabag</option>
                                <option value="kaurmin">Urmin</option>
                                <option value="kasium">Sium</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <select class="form-control" id="selectInstansi">
                                <option value="">--Pilih Instansi--</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <div class="col-auto mt-10">
                                <button type="submit" class="btn btn-success" id="tambahAA" name="update" onclick="successTambahAdmin()">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function wajibAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
    }
</script>