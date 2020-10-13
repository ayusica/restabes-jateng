<div class="container-fluid">
    <!--DATA PERSONEL POLRESTABES SEMARANG -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">TABEL DATA SELURUH PERSONEL POLRESTABES SEMARANG</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="tambah">
                        <button type="button" class="bagde btn-success" style="height: 2.5rem; border-radius:5px; font-size:12px;font-weight:bold;" id="tambah_personel_button"><i class="fas fa-fw fa-plus"></i> Tambah Personel</button>
                        <button type="button" class="badge btn-warning" style="height: 2.5rem" id="pdf_bagian"><i class="fas fa-fw fa-print"></i> Cetak PDF</button>
                        <a href="<?= filter_var(base_url("urmin/form_polrestabes"), FILTER_DEFAULT); ?>" target="_blank"><button type="button" class="badge btn-primary" style="height: 2.5rem"><i class="fas fa-fw fa-file"></i> Impor Data</button></a>
                    </div>
                    <br>
                    <span style=" font-weight: bold; float:inherit;">Bagian :</span>
                    <select id="selectBagian" class="input bg-gray-300" style="font-size:small; border-radius:5px;" onchange="tabelperBagian()">
                    </select>
                </div>
            </div>
            <div class="table-responsive mt-3" id="tabel">
            </div>
        </div>
    </div>
    <!-- Modal Detail -->
    <div class="modal fade" id="Detail_Poltabes_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDP">Detail Data Personel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="detailp-personel" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="poltabes_nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label>NRP</label>
                            <input type="text" class="form-control" id="poltabes_nrp" name="nrp" disabled />
                        </div>
                        <div class="form-group">
                            <label>Pangkat</label>
                            <input type="text" class="form-control" id="poltabes_pkt" name="pkt" style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" id="poltabes_jab" name="jab" style="text-transform: uppercase;" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" id="poltabes_tmpt" name="tmpt_lahir" style="text-transform: uppercase;" disabled>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" id="poltabes_tgl" name="tgl_lahir" readonly>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" id="poltabes_agama" name="agama" style="text-transform: uppercase;" disabled />
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
                            <input type="text" class="form-control" id="poltabes_suku" name="suku" disabled />
                        </div>
                        <div class="form-group">
                            <label>Tmt.Jab</label>
                            <input type="date" class="form-control" id="poltabes_tmt" name="tmt_jab" required>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <!-- <input type="text" class="form-control" id="poltabes_instansi" name="nama_instansi"> -->
                            <select class="form-control" id="poltabes_instansi" name="nama_instansi" required style="text-transform: uppercase;">
                                <?php foreach ($instansi as $instansi) : ?>
                                    <?= '<option value="' . filter_var($instansi["id_instansi"], FILTER_DEFAULT) . '">' . filter_var($instansi["nama_instansi"], FILTER_DEFAULT) . '</option>	'; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bagian</label>
                            <select class="form-control" id="poltabes_bagian" name="unsur_bagian" required>
                                <option value="">--Pilih Bagian--</option>
                                <?php foreach ($bagian as $bag) : ?>
                                    <?= '<option value="' . filter_var($bag["id_bagian"], FILTER_DEFAULT) . '">' . filter_var($bag["nama_bagian"], FILTER_DEFAULT)  . '</option>	'; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= filter_var(base_url("urmin/personel_polrestabes"), FILTER_DEFAULT) ?>"><button class="btn btn-primary">Kembali</button></a>
                            <button type="button" class="btn btn-success" id="Poltabes-edit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- KONFIRMASI EDIT MODAL -->
    <div id="konf-edit-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Edit Personel</h5>
                </div>
                <div class="modal-body">
                    <h6>Apakah Anda Yakin Mengedit Data Personel ini?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button id="save" type="button" class="btn btn-success" data-dismiss="modal" onclick="updatePoltabes()">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Hapus -->
    <div id="hapus-poltabes-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Personel</h5>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda Yakin Ingin Menghapus?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button id="konfirmasi_hapus_modal" type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah -->
    <div class="modal fade" id="tambah_pers_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">TAMBAH PERSONEL POLRESTABES SEMARANG</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="tambah-poltabes" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama_poltabes" name="nama" placeholder="Nama Lengkap" required minlength="3">
                        </div>
                        <div class="form-group">
                            <label>NRP</label>
                            <input type="" class="form-control" id="nrp_poltabes" name="nrp" placeholder="NRP" required minlength="8" maxlength="18" onkeypress="return wajibAngka(event)">
                        </div>
                        <div class="form-group">
                            <label>Pangkat</label>
                            <input type="text" class="form-control" id="pkt_poltabes" name="pkt" placeholder="Pangkat" required>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" id="jab_poltabes" name="jab" placeholder="Jabatan" required minlength="3">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" id="tmpt_lahir_poltabes" name="tmpt_lahir" placeholder="Tempat Lahir" min="2000-01-01" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir_poltabes" name="tgl_lahir" required>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" id="agama_poltabes" name="agama" required>
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
                            <input type="text" class="form-control" id="suku_poltabes" name="suku_poltabes" placeholder="Suku" required>
                        </div>
                        <div class="form-group">
                            <label>Tmt.Jab</label>
                            <input type="date" class="form-control" id="tmt_jab_poltabes" name="tmt_jab" placeholder="Tmt.Jab" required>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <input type="text" class="form-control" id="instansi_poltabes" name="instansi_poltabes" placeholder="POLRESTABES SEMARANG" required minlength="3" disabled />
                        </div>
                        <div class="form-group">
                            <label>Bagian</label>
                            <select class="form-control" id="bagian_poltabes" name="bagian" required>
                                <option value="">--Pilih Bagian--</option>
                                <?php foreach ($bagian as $bag) : ?>
                                    <?= '<option value="' . filter_var($bag["id_bagian"], FILTER_DEFAULT) . '">' . filter_var($bag["nama_bagian"], FILTER_DEFAULT) . '</option>	'; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <div class="col-auto mt-10">
                                <button type="submit" class="btn btn-success" id="tambah_poltabes" name="update" onclick="poltabes()">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- UBAH PASSWORD -->
    <div id="reset-pass" class="modal fade" tabindex="-1" role="dialog">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button id="save_password" type="button" class="btn btn-success" data-dismiss="modal" onclick="ganti_password()">Simpan</button>
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