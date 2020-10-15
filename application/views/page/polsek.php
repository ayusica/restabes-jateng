<div class="container-fluid">
    <!--DATA PERSONEL POLRESTABES SEMARANG -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark" style="text-transform:uppercase;">TABEL PERSONEL <?= filter_var($daftar_instansi[$this->uri->segment(3) - 1]["nama_instansi"], FILTER_DEFAULT) ?></h6>
        </div>
        <div class="card-body">
            <?php if (filter_var($this->session->userdata("akses"), FILTER_DEFAULT) === "kasium") : ?>
                <?php if ((filter_var($this->uri->segment(3), FILTER_DEFAULT)) === (filter_var($this->session->userdata("id_instansi"), FILTER_DEFAULT))) : ?>
                    <div class="row">
                        <div class="col">
                            <div class="tambah">
                                <button type="button" class="badge btn-success" style="height: 2.5rem" id="tambah_personel_polsek"><i class="fas fa-plus"></i> Tambah Personel</button>
                                <a href="<?= filter_var(base_url('sium/pdfPolsek/') . $instansi['id_instansi'], FILTER_DEFAULT) ?>" target="_blank"><button type="button" class="badge btn-warning" style="height: 2.5rem"><i class="fas fa-fw fa-print"></i> Cetak PDF</button></a>
                                <a href="<?= filter_var(base_url("sium/formPolsek/") . $instansi['id_instansi'], FILTER_DEFAULT) ?>" target="_blank"><button type="button" class="badge btn-primary" style="height: 2.5rem"><i class="fas fa-fw fa-file"></i> Impor Data</button></a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <div class="table-responsive mt-3">
                <table class="table table-bordered" id="example1" width="100%" cellspacing="0">

                    <?php if (filter_var($this->session->userdata("akses"), FILTER_DEFAULT) === "kasium") { ?>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($org_instansi as $personel) : ?>
                                <tr style="text-transform: uppercase;">
                                    <td><?= filter_var($no, FILTER_DEFAULT);
                                        $no++ ?></td>
                                    <td><?= filter_var($personel['nama'], FILTER_DEFAULT); ?></td>
                                    <td><?= filter_var($personel['nrp'], FILTER_DEFAULT); ?></td>
                                    <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT); ?></td>
                                    <td width="80px">
                                        <?php if ($personel['level'] == 'personel') : ?>
                                            <button type="submit" class="badge badge-success" id="edit" onclick="detailPolsek('<?= filter_var($personel['nrp'], FILTER_DEFAULT); ?>')"><i class="fas fa-edit"></i></button>
                                            <?php if ($this->uri->segment(3) === $this->session->userdata("id_instansi")) : ?>
                                                <button type="submit" class="badge badge-danger" id="hapus" onclick="hapusPersonelpolsek('<?= filter_var($personel['nrp'], FILTER_DEFAULT); ?>')"><i class="fas fa-fw fa-trash"></i></button>
                                                <button type="submit" class="badge badge-warning" onclick="getNrpPass('<?= filter_var($personel['nrp'], FILTER_DEFAULT); ?>')"><i class="fas fa-fw fa-key"></i></button>
                                                <a href="<?= filter_var(base_url('personel/pdf_profil/') . $personel['nrp'], FILTER_DEFAULT) ?>" target="_blank"><button type="button" class="badge badge-info"><i class="fas fa-fw fa-print"></i></button></a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <?php } elseif (filter_var($this->session->userdata("akses"), FILTER_DEFAULT) === "kabag") { ?>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($org_instansi as $personel) : ?>
                                <tr style="text-transform: uppercase;">
                                    <td><?= filter_var($no, FILTER_DEFAULT);
                                        $no++ ?></td>
                                    <td><img class="rounded-circle" width="45" src="<?= filter_var(base_url('assets/img/profil/') . $personel['gambar'], FILTER_DEFAULT) ?>" alt="foto"></td>
                                    <td><?= filter_var($personel['nama'], FILTER_DEFAULT); ?></td>
                                    <td><?= filter_var($personel['nrp'], FILTER_DEFAULT); ?></td>
                                    <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT); ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>kabag/detail/<?= filter_var($personel['nrp'], FILTER_DEFAULT); ?>" class="badge badge-success"><i class="fas fa-fw fa-search"></i> Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <?php } elseif (filter_var($this->session->userdata("akses"), FILTER_DEFAULT) === "kaurmin") { ?>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width="80">Foto</th>
                                <th>Nama</th>
                                <?php if (filter_var($instansi['id_instansi'], FILTER_DEFAULT) === 1) : ?>
                                    <th>NRP</th>
                                <?php endif ?>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($org_instansi as $personel) : ?>
                                <tr style="text-transform: uppercase;">
                                    <td><?= filter_var($no, FILTER_DEFAULT);
                                        $no++ ?></td>
                                    <td width="80" height="70" align="center"><img class="rounded" src="<?= filter_var(base_url('assets/img/profil/') . $personel['gambar'], FILTER_DEFAULT) ?>" style="width:80px;" alt="foto"></td>
                                    <td><?= filter_var($personel['nama'], FILTER_DEFAULT); ?></td>
                                    <?php if (filter_var($instansi['id_instansi'], FILTER_DEFAULT) === 1) : ?>
                                        <td><?= filter_var($personel['nrp'], FILTER_DEFAULT); ?></td>
                                    <?php endif ?>
                                    <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <?php } else { ?>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width="80">Foto</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($org_instansi as $personel) : ?>
                                <tr style="text-transform: uppercase;">
                                    <td><?= filter_var($no, FILTER_DEFAULT);
                                        $no++ ?></td>
                                    <td width="80" height="70" align="center"><img class="rounded" src="<?= filter_var(base_url('assets/img/profil/') . $personel['gambar'], FILTER_DEFAULT) ?>" style="width:80px;" alt="foto"></td>
                                    <td><?= filter_var($personel['nama'], FILTER_DEFAULT); ?></td>
                                    <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Personel Polsek -->
    <div class="modal fade" id="tambah_polsek_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Personel <?= filter_var($daftar_instansi[$this->uri->segment(3) - 1]['nama_instansi'], FILTER_DEFAULT) ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="tambah-poltabes" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama_polsek" name="nama" placeholder="Nama Lengkap" required minlength="3">
                        </div>
                        <div class="form-group">
                            <label>NRP</label>
                            <input type="" class="form-control" id="nrp_polsek" name="nrp" placeholder="NRP" required minlength="8" maxlength="18" onkeypress="return wajibAngka(event)">
                        </div>
                        <div class="form-group">
                            <label>Pangkat</label>
                            <input type="text" class="form-control" id="pkt_polsek" name="pkt" placeholder="Pangkat" required>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" id="jab_polsek" name="jab" placeholder="Jabatan" required minlength="3">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" id="tmpt_lahir_polsek" name="tmpt_lahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir_polsek" name="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" id="agama_polsek" name="agama">
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
                            <input type="text" class="form-control" id="suku_polsek" name="suku" placeholder="Suku">
                        </div>
                        <div class="form-group">
                            <label>Tmt.Jab</label>
                            <input type="date" class="form-control" id="tmt_jab_polsek" name="tmt_jab" placeholder="Tmt.Jab">
                        </div>
                        <div class="form-group">
                            <label>Bagian</label>
                            <select class="form-control" id="bagian_polsek" name="unsur_bagian">
                                <option value="">--Pilih Bagian--</option>
                                <option value="1">PIMPINAN</option>
                                <option value="2">SIUM</option>
                                <option value="21">SIKUM</option>
                                <option value="22">SIHUMAS</option>
                                <option value="12">SENTRA PELAYANAN KEPOLISIAN TERPADU</option>
                                <option value="20">UNIT PROVOS</option>
                                <option value="23">UNIT INTELKAM</option>
                                <option value="24">UNIT RESKRIM</option>
                                <option value="25">UNIT BINMAS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <select class="form-control" id="instansi_polsek" name="nama_instansi">
                                <?= '<option value="' . filter_var($daftar_instansi[$this->uri->segment(3) - 1]['id_instansi'], FILTER_DEFAULT)  . '">' . filter_var($daftar_instansi[$this->uri->segment(3) - 1]['nama_instansi'], FILTER_DEFAULT)  . '</option>	'; ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <div class="col-auto mt-10">
                                <button type="submit" class="btn btn-success" id="tambahpolsek" name="update" onclick="tambahPolsek()">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Detail -->
    <div class="modal fade" id="Detail_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                            <input type="text" class="form-control" id="polsek_nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label>NRP</label>
                            <input type="text" class="form-control" id="polsek_nrp" name="nrp" disabled />
                        </div>
                        <div class="form-group">
                            <label>Pangkat</label>
                            <input type="text" class="form-control" id="polsek_pkt" name="pkt">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" id="polsek_jab" name="jab">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" id="polsek_tmpt" name="tmpt_lahir">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" id="polsek_tgl" name="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" id="polsek_agama" name="agama" disabled />
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
                            <input type="text" class="form-control" id="polsek_suku" name="suku">
                        </div>
                        <div class="form-group">
                            <label>Tmt.Jab</label>
                            <input type="date" class="form-control" id="polsek_tmt" name="tmt_jab">
                        </div>
                        <div class="form-group">
                            <label>Bagian</label>
                            <select class="form-control" id="polsek_bagian" name="unsur_bagian">
                                <option value="">--Pilih Bagian--</option>
                                <?php foreach ($bagian as $bag) : ?>
                                    <?= '<option value="' . filter_var($bag["id_bagian"] . '">' . $bag["nama_bagian"], FILTER_DEFAULT) . '</option>	'; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Instansi</label>
                            <select class="form-control" id="polsek_instansi" name="nama_instansi">
                                <?php foreach ($daftar_instansi as $instansi) : ?>
                                    <?= '<option value="' . filter_var($instansi["id_instansi"], FILTER_DEFAULT) . '">' . filter_var($instansi["nama_instansi"], FILTER_DEFAULT) . '</option>	'; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= filter_var(base_url("sium/polsek"), FILTER_DEFAULT) ?>"><button class="btn btn-primary">Kembali</button></a>
                            <?php if (filter_var($this->uri->segment(3), FILTER_DEFAULT) === filter_var($this->session->userdata('id_instansi'), FILTER_DEFAULT)) : ?>
                                <button type="button" class="btn btn-success" id="Polsek-edit">Edit</button>
                            <?php endif ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- KONFIRMASI EDIT MODAL -->
    <div id="polsek-edit-modal" class="modal fade" tabindex="-1" role="dialog">
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
                    <button id="save" type="button" class="btn btn-success" data-dismiss="modal" onclick="updatePolsek()">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Hapus -->
    <div id="hapus-polsek-modal" class="modal fade" tabindex="-1" role="dialog">
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
                        <input id="new_password" type="password" class="form-control" maxlength='20' value="">
                        <div>
                            <input type="checkbox" id="show-hide" name="show-hide" value="" />
                            <label for="show-hide">Tampilkan password</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button id="save_password" type="button" class="btn btn-success" data-dismiss="modal" onclick="gantiPassword(<?= filter_var($personel['nrp'], FILTER_DEFAULT); ?>)">Simpan</button>
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