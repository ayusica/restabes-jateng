<div class="container-fluid">

    <div class="grid" style="max-width: 540px;">
        <div class="alert alert-success" role="alert">
            <i class="fas fa-eye"></i> Detail Data Personel
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <?php foreach ($personel as $personel) : ?>

            <table class="table table hover table-bordered table-striped">
                <img class="foto m-auto" src="<?= filter_var(base_url('assets/img/profil/') . $personel['gambar'], FILTER_DEFAULT) ?>" style="width: 30%" alt="gambar">
                <tr>
                    <td>NAMA</td>
                    <td><?= filter_var($personel['nama'], FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>NRP</td>
                    <td><?= filter_var($personel['nrp'], FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>PANGKAT</td>
                    <td><?= filter_var($personel['pkt'], FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>JABATAN</td>
                    <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>TEMPAT</td>
                    <td><?= filter_var($personel['tempat'], FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>TGL.LAHIR</td>
                    <td><?= filter_var(date("d-m-Y", strtotime($personel['tgl_lahir'])), FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>AGAMA</td>
                    <td><?= filter_var($personel['agama'], FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>SUKU</td>
                    <td><?= filter_var($personel['suku'], FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>TMT.JAB</td>
                    <td><?= filter_var(date("d-m-Y", strtotime($personel['tmt_jab'])), FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>INSTANSI</td>
                    <td><?= filter_var($personel['nama_instansi'], FILTER_DEFAULT); ?></td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><?= filter_var($personel['alamat'], FILTER_DEFAULT); ?></td>
                </tr>
            </table>
        <?php endforeach; ?>

        <?= filter_var(anchor("kabag/dashboard", '<div class="btn btn-sm btn-info" style="float:right">Kembali</div>'), FILTER_DEFAULT) ?>
    </div>
</div>