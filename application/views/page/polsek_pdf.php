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
<p style="text-align: center; text-transform:uppercase;">TABEL PERSONEL <?= filter_var($daftar_instansi[$this->uri->segment(3) - 1]['nama_instansi'], FILTER_DEFAULT) ?> POLRESTABES SEMARANG POLDA JATENG </p><br>

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
            <td><?= filter_var($personel['nama'], FILTER_DEFAULT) ?></td>
            <td><?= filter_var($personel['nrp'], FILTER_DEFAULT) ?></td>
            <td><?= filter_var($personel['pkt'], FILTER_DEFAULT) ?></td>
            <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT) ?></td>
            <td><?= filter_var($personel['tempat'], FILTER_DEFAULT) ?></td>
            <td><?= filter_var(date("d-m-Y", strtotime($personel['tgl_lahir'])), FILTER_DEFAULT) ?></td>
            <td><?= filter_var($personel['agama'], FILTER_DEFAULT) ?></td>
            <td><?= filter_var($personel['suku'], FILTER_DEFAULT) ?></td>
            <td><?= filter_var(date("d-m-Y", strtotime($personel['tmt_jab'])), FILTER_DEFAULT) ?></td>
            <td><?= filter_var($personel['nama_bagian'], FILTER_DEFAULT) ?></td>
        </tr>
    <?php endforeach; ?>
   

</table>
</body></html>