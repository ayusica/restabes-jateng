<div class="container-fluid">

    <div class="grid" style="max-width: 540px;">
        <div class="alert alert-success" role="alert">
            <i class="fas fa-eye"></i> Detail Data Personel
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <?php foreach ($personel as $personel) : ?>

            <table class="table table hover table-bordered table-striped">
                <img class="foto m-auto" src="<?= base_url('assets/img/profil/') . $personel['gambar'] ?>" style="width: 30%" alt="gambar">
                <tr>
                    <td>NAMA</td>
                    <td><?= $personel['nama']; ?></td>
                </tr>
                <tr>
                    <td>NRP</td>
                    <td><?= $personel['nrp']; ?></td>
                </tr>
                <tr>
                    <td>PANGKAT</td>
                    <td><?= $personel['pkt']; ?></td>
                </tr>
                <tr>
                    <td>JABATAN</td>
                    <td><?= $personel['jabatan']; ?></td>
                </tr>
                <tr>
                    <td>TEMPAT</td>
                    <td><?= $personel['tempat']; ?></td>
                </tr>
                <tr>
                    <td>TGL.LAHIR</td>
                    <td><?= date("d-m-Y", strtotime($personel['tgl_lahir'])); ?></td>
                </tr>
                <tr>
                    <td>AGAMA</td>
                    <td><?= $personel['agama']; ?></td>
                </tr>
                <tr>
                    <td>SUKU</td>
                    <td><?= $personel['suku']; ?></td>
                </tr>
                <tr>
                    <td>TMT.JAB</td>
                    <td><?= date("d-m-Y", strtotime($personel['tmt_jab'])); ?></td>
                </tr>
                <tr>
                    <td>INSTANSI</td>
                    <td><?= $personel['nama_instansi']; ?></td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><?= $personel['alamat']; ?></td>
                </tr>
            </table>
        <?php endforeach; ?>

        <?= anchor('kabag/dashboard', '<div class="btn btn-sm btn-info" style="float:right">Kembali</div>') ?>
    </div>
</div>