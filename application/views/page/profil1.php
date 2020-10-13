<div class="container-fluid">
    <?php foreach ($personel as $personel) : ?>
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Profil</h1>
            </div>
            <div class="card-body profil">
                <div class="row">
                    <div class="col-md-3" style="text-align: center;">
                        <?php echo $this->session->flashdata('msg'); ?>
                        <div style="margin-bottom: 15px;">
                            <img src="<?= base_url('assets/img/profil/') . $personel['gambar'] ?>" alt="Foto" style="max-width: 150px;">
                        </div>
                        <p><span class="badge badge-success">AKTIF</span></p>
                    </div>
                    <div class="col-md-9" style="text-transform: uppercase;">
                        <div class="web_detailset">
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>NRP</b>:</div>
                                <div class="col-sm-9"><?= $personel['nrp']; ?></div>
                            </div>
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Nama</b>:</div>
                                <div class="col-sm-9"><?= $personel['nama']; ?></div>
                            </div>
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Pangkat</b>:</div>
                                <div class="col-sm-9"><?= $personel['pkt']; ?></div>
                            </div>
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Jabatan</b>:</div>
                                <div class="col-sm-9"><?= $personel['jabatan']; ?></div>
                            </div>
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Instansi</b>:</div>
                                <div class="col-sm-9" style="text-transform: uppercase"><?= $personel['nama_instansi']; ?></div>
                            </div>
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Bagian</b>:</div>
                                <div class="col-sm-9"><?= $personel['nama_bagian']; ?></div>
                            </div>
                            <!-- <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Alamat</b>:</div>
                                <div class="col-sm-9" style="text-transform: uppercase"><?= $personel['alamat']; ?></div>
                            </div> -->
                        </div>
                        <div class="web_detailset">
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Tempat Lahir</b>:</div>
                                <div class="col-sm-9"><?= $personel['tempat']; ?></div>
                            </div>
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Tanggal lahir</b>:</div>
                                <div class="col-sm-9"><?= date("d/m/Y", strtotime($personel['tgl_lahir'])); ?></div>
                            </div>
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Agama</b>:</div>
                                <div class="col-sm-9"><?= $personel['agama']; ?></div>
                            </div>
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Suku</b>:</div>
                                <div class="col-sm-9"><?= $personel['suku']; ?></div>
                            </div>
                            <div class="row web_rowdetail">
                                <div class="col-sm-3"><b>Tmt.Jab</b>:</div>
                                <div class="col-sm-9"><?= date("d/m/Y", strtotime($personel['tmt_jab'])); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="apa mt-3">
                        <a href="<?= base_url('personel/pdf_profil/') . $personel['nrp'] ?>" target="_blank"><button type="button" class="badge btn-info" style="height:2rem;width:5rem;float:right;"><i class="fas fa-fw fa-print fa-sm"></i> Cetak</button></a>
                        <!-- <button type="button" class="badge btn-warning" id="gantipass" name="gantipass" style="height:2rem; float:right;"><i class="fas fa-fw fa-key"></i> Password</button> -->
                        <button type="button" class="badge btn-danger" id="editprofil" name="editprofil" onclick="eProfil('<?= $personel['nrp']; ?>')" style="height:2rem; width: 80px;float:right;"><i class="fas fa-fw fa-edit fa-sm"></i> Edit</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit Profil -->
        <div class="modal fade" id="editprofilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="edit-profil" method="POST" action="<?= base_url() ?>personel/update_Profil" enctype="multipart/form-data">
                            <div class="form-group">
                                <img class="image" src="<?= base_url('assets/img/profil/') . $personel['gambar'] ?>" style="width: 20%" alt="gambar">
                                <input type="file" id="image" name="image" class="inputFile">
                                <p style="color: red"> *Hanya untuk Foto Formal berukuran Max 2MB</p>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required minlength="3" style="text-transform: uppercase;">
                            </div>
                            <div class="form-group">
                                <label>NRP</label>
                                <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP" disabled>
                                <input type="hidden" class="form-control" id="nrp_hid" name="nrp_hid" style="text-transform: uppercase;">
                            </div>
                            <div class="form-group">
                                <label>Pangkat</label>
                                <input type="text" class="form-control" id="pkt" name="pkt" placeholder="Pangkat" style="text-transform: uppercase;" disabled />
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" id="jab" name="jab" placeholder="Jabatan" style="text-transform: uppercase;" disabled />
                            </div>
                            <div class="form-group">
                                <label>Tempat</label>
                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat Lahir" required minlength="3" style="text-transform: uppercase;">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" min="01/01/1900" required>
                            </div>
                            <div>
                                <label>Agama</label>
                                <select class="form-control" id="agama" name="agama" required style="text-transform: uppercase;">
                                    <option value="">--Pilih Agama--</option>
                                    <option value="ISLAM">Islam</option>
                                    <option value="KRISTEN">Kristen</option>
                                    <option value="KATOLIK">Katolik</option>
                                    <option value="HINDU">Hindu</option>
                                    <option value="BUDDHA">Buddha</option>
                                    <option value="KHONGHUCU">Khonghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Suku</label>
                                <input type="text" class="form-control" id="suku" name="suku" placeholder="Suku" required minlength="3" required style="text-transform: uppercase;">
                            </div>
                            <div class="form-group">
                                <?php if ($this->session->userdata('akses') != 'personel') : ?>
                                    <label>Tmt.Jab</label>
                                    <input type="date" class="form-control" id="tmt_jab" name="tmt_jab" placeholder="Tmt.Jab" style="text-transform: uppercase;">
                                <?php endif; ?>
                                <?php if ($this->session->userdata('akses') == 'personel') : ?>
                                    <label>Tmt.Jab</label>
                                    <input type="date" class="form-control" id="tmt_jab" name="tmt_jab" placeholder="Tmt.Jab" style="text-transform: uppercase;" required disabled />
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label>Instansi</label>
                                <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" placeholder="Instansi" style="text-transform: uppercase;" disabled />
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Instansi" style="text-transform: uppercase;" disabled />
                            </div>

                            <div class="modal-footer">
                                <div class="col-auto mt-10">
                                    <button type="submit" class="badge btn-success" id="update" name="update" style="height:2rem;">Simpan</button>
                                    <button type="button" style="height:2rem;" class="badge btn-warning" id="pass-button">Ubah Password</button>
                                </div>
                                <!-- <input type="submit" name="update" class="btn btn-success"> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- UBAH PASSWORD -->
        <div id="password-modal-profil" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah Password</h5>
                    </div>
                    <div class="modal-body gantiPassword">
                        <!-- <form action="" method="post" id="form"> -->
                        <div class="text" id="alert"> </div>
                        <h5>Password Lama</h5><input id="old_password" type="password" class="form-control" maxlength='20' value="" required>
                        <div class="text" id="lama"></div>
                        <h5>Password Baru</h5><input id="new_password" type="password" class="form-control" maxlength='20' value="" required>
                        <div class="text" id="baru"></div>
                        <h5>Konfirmasi Password Baru</h5><input id="re-new-password" type="password" class="form-control" maxlength='20' value="" required>
                        <div class="text" id="konf"></div>
                        <!-- <div>
                                <input type="checkbox" id="show-hide" name="show-hide" value="" />
                                <label for="show-hide">Tampilkan password</label>
                            </div> -->
                        <!-- </form> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="badge btn-secondary" data-dismiss="modal" style="height:2rem;" onclick="balik()">Kembali</button>
                        <button id="save" type="button" class="badge btn-success" style="height:2rem;" onclick="gantiPass()">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
</div>