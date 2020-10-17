<div class="container-fluid">
    <!--DATA PERSONEL POLRESTABES SEMARANG -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">TABEL PERSONEL <?= filter_var($instansi['nama_instansi'], FILTER_DEFAULT) ?></h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <!-- <div class="tambah">
                        <button type="button" class="badge badge-success" id="tambah_personel_button">Tambah Personel <i class="fas fa-plus"></i></button>
                    </div> -->
                </div>
                <div class="col-sm-12 col-md-3 mt-2" id="Search">
                    <div class="input-group" id="search-bar">
                        <input type="text" id="search-query" class="form-control" placeholder="Cari Personel" autofocus>
                        <div class="input-group-append">
                            <button type="search-button" name="cari"><i class="fa fa-fw fa-search" style="color: brown"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($instansi as $personel) : ?>
                            <tr>
                                <td><?= filter_var($no, FILTER_DEFAULT);
                                    $no++ ?></td>
                                <td><?= filter_var($personel['nama'], FILTER_DEFAULT); ?></td>
                                <td><?= filter_var($personel['nrp'], FILTER_DEFAULT); ?></td>
                                <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>