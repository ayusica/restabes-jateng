<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unduh Data Personel POLRESTABES SEMARANG</title>

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
    <p style="text-align: left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KEPOLISIAN NEGARA REPUBLIK INDONESIA<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DAERAH JAWA TENGAH<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RESOR KOTA BESAR SEMARANG</b></p><hr width="40%" align ="left">
    <br><br><br>

    <?php filter_var($nama_bagian=  $this->uri->segment(3),FILTER_DEFAULT?>
    <?php if ($nama_bagian !=0) {?>
        <p style="text-align: center; text-transform:uppercase;"><?= filter_var($bag[$this->uri->segment(3)-1]['nama_bagian'], FILTER_DEFAULT) ?> POLRESTABES SEMARANG POLDA JATENG </p>
    <?php }else{?>
        <p style="text-align: center; text-transform:uppercase;">SEMUA PERSONEL POLRESTABES SEMARANG POLDA JATENG </p>
    <?php }?>
    <table class="mt-3" style="width:100%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Pkt</th>
            <th>Jabatan</th>
        </tr>

        <?php
        $no = 1;
        foreach ($personel as $personel) : ?>

            <tr style="text-transform: uppercase;">
                <td align="center"><?= filter_var($no++, FILTER_DEFAULT) ?></td>
                <td style="text-transform: inherit"><?= filter_var($personel['nama'], FILTER_DEFAULT) ?></td>
                <td>&nbsp;<?= filter_var($personel['nrp'],FILTER_DEFAULT) ?></td>
                <td>&nbsp;<?= filter_var($personel['pkt'], FILTER_DEFAULT) ?></td>
                <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT) ?></td>
            </tr>
        <?php endforeach; ?>


    </table>
</body></html>