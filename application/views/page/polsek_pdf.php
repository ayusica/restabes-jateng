<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak PDF POLSEK</title>

    <style type="text/css">
        table td {
            font-size: small;
            text-transform: uppercase;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;

        }

        th {
            background-color: #696969;
            color: white;
        }

    </style>
</head><body>
<p style="text-align: center; text-transform:uppercase;">TABEL PERSONEL <?= $daftar_instansi[$this->uri->segment(3) - 1]['nama_instansi'] ?> POLRESTABES SEMARANG POLDA JATENG </p><br>

<table style="width:100%">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NRP</th>
        <th>Pkt</th>
        <th>Jabatan</th>
        <th>Tempat</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Suku</th>
        <th>Tmt.jab</th>
        <th>Bagian</th>
    </tr>

    <?php
    $no = 1;
    foreach ($personel as $personel) : ?>

        <tr>
            <td align="center"><?= $no++ ?></td>
            <td><?= $personel['nama'] ?></td>
            <td><?= $personel['nrp'] ?></td>
            <td><?= $personel['pkt'] ?></td>
            <td><?= $personel['jabatan'] ?></td>
            <td><?= $personel['tempat'] ?></td>
            <td><?= date("d-m-Y", strtotime($personel['tgl_lahir'])) ?></td>
            <td><?= $personel['agama'] ?></td>
            <td><?= $personel['suku'] ?></td>
            <td><?= date("d-m-Y", strtotime($personel['tmt_jab'])) ?></td>
            <td><?= $personel['nama_bagian'] ?></td>
        </tr>
    <?php endforeach; ?>
   

</table>
</body></html>