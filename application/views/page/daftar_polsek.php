<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row mt-3">
        <?php foreach ($instansi as $instansi) : ?>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top">
                        <img src="<?= base_url('assets/img/g_instansi/') . $instansi['foto'] ?> " width="100" height="250" class="card-img-top" alt="Gambar Instansi">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title"><?= $instansi['nama_instansi'] ?></h6>
                        <p class="card-text"><?= $instansi['alamat'] ?></p>
                    </div>
                    <div class="card-footer">
                        <!-- <small class="text-muted">Kepolisian Jawa Tengah</small> -->
                        <a href="<?= base_url('sium/polsek/') . $instansi['id_instansi'] ?>"><button type="button" class="badge badge-info" id="lihat-instansi" name="LI" style="height: 2.5rem">Lihat Data Personel &raquo;</button></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Modal Tambah Instansi Polsek -->
<div class="modal fade" id="tamb_instansi_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Instansi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="tambah-instansi" method="POST">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama_instansi" name="nama" placeholder="Nama Instansi" required minlength="3">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="alamat_instansi" name="alamat" placeholder="Alamat" required minlength="3">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <img class="image" src="<?= base_url('assets/img/g_instansi/') . $instansi['foto'] ?>" style="width: 50%" alt="gambar">
                        <input type="file" id="image" name="image" class="inputFile">
                    </div>
                    <div class="modal-footer">
                        <div class="col-auto mt-10">
                            <button type="submit" class="btn btn-success" id="tambahpolsek" name="update" onclick="tambah_instansi()">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>