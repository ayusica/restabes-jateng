<html>

<head>
  <title>Form Impor Data Personel Polsek</title>

  <!-- Load File jquery.min.js yang ada difolder js -->
  <script src="<?= filter_var(base_url('assets/js/jquery-3.4.1.min.js'), FILTER_DEFAULT); ?>"></script>

  <script>
    $(document).ready(function() {
      // Sembunyikan alert validasi kosong
      $("#kosong").hide();
    });
  </script>
</head>

<body>
  <h3>Form Impor Data Personel</h3>
  <hr>

  <a href="<?= filter_var(base_url("assets/excel/format.xlsx"), FILTER_DEFAULT); ?>">Unduh Format</a>
  <br>
  <br>

  <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->

  <form method="post" action="<?= filter_var(base_url("sium/formPolsek") . '?id=' . $this->uri->segment(3), FILTER_DEFAULT) ?>" enctype="multipart/form-data">
    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    <input type="file" name="file">

    <!--
    -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
    <input type="submit" name="preview" value="Tampilkan">
  </form>

  <?php
  if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form 
    if (isset($upload_error)) { // Jika proses upload gagal
      echo "<div style='color: red;'>" . $upload_error . "</div>"; // Muncul pesan error upload
      die; // stop skrip
    }

    // Buat sebuah tag form untuk proses import data ke database
    echo "<form method='post' action='" . base_url("sium/importPolsek/") . $instansi . "'>";

    // Buat sebuah div untuk alert validasi kosong
    echo "<div style='color: red;' id='kosong'>
    Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
    </div>";

    echo "<table border='1' cellpadding='8'>
    <tr>
      <th colspan='11'>Tampilan Data</th>
    </tr>
    <tr>
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
        <th>id_instansi</th>
    </tr>";

    $numrow = 1;
    $kosong = 0;

    // Lakukan perulangan dari data yang ada di excel
    // $sheet adalah variabel yang dikirim dari controller
    foreach ($sheet as $row) {
      // Ambil data pada excel sesuai Kolom
      $nama = $row['A']; // Ambil data Nama
      $nrp = $row['B']; // Ambil data nrp
      $pkt = $row['C']; // Ambil data pangkat
      $jabatan = $row['D']; // Ambil data jabatan
      $tempat = $row['E']; // Ambil data tempat
      $tgl_lahir = $row['F']; // Ambil data tanggal lahir
      $agama = $row['G']; // Ambil data agama
      $suku = $row['H']; // Ambil data suku
      $tmt_jab = $row['I']; // Ambil data tmt jab
      $id_bagian = $row['J']; // Ambil data bagian
      $id_instansi = $this->uri->segment(3); // Ambil data id instansi

      // Cek jika semua data tidak diisi
      if ($nama == "" && $nrp == "" && $pkt == "" && $jabatan == "" && $tempat == "" && $tgl_lahir == "" && $agama == "" && $suku == "" && $tmt_jab == "" && $id_bagian == "")
        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah nama-nama kolom
      // Jadi dilewat saja, tidak usah diimport
      if ($numrow > 1) {
        // Validasi apakah semua data telah diisi
        $nama_td = (!empty($nama)) ? "" : " style='background: #E07171;'";
        $nrp_td = (!empty($nrp)) ? "" : " style='background: #E07171;'";
        $pkt_td = (!empty($pkt)) ? "" : " style='background: #E07171;'";
        $jabatan_td = (!empty($jabatan)) ? "" : " style='background: #E07171;'";
        $tempat_td = (!empty($tempat)) ? "" : " style='background: #E07171;'";
        $tgl_lahir_td = (!empty($tgl_lahir)) ? "" : " style='background: #E07171;'";
        $agama_td = (!empty($agama)) ? "" : " style='background: #E07171;'";
        $suku_td = (!empty($suku)) ? "" : " style='background: #E07171;'";
        $tmt_jab_td = (!empty($tmt_jab)) ? "" : " style='background: #E07171;'";
        $id_bagian_td = (!empty($id_bagian)) ? "" : " style='background: #E07171;'";
        $id_instansi_td = $this->uri->segment(3);

        // Jika salah satu data ada yang kosong
        if ($nama == "" or $nrp == "" or $pkt == "" or $jabatan == "" or $tempat == "" or $tgl_lahir == "" or $agama == "" or $suku == "" or $tmt_jab == "" or $id_bagian == "") {
          $kosong++; // Tambah 1 variabel $kosong
        }

        echo "<tr>";
        echo "<td" . $nama_td . ">" . $nama . "</td>";
        echo "<td" . $nrp_td . ">" . $nrp . "</td>";
        echo "<td" . $pkt_td . ">" . $pkt . "</td>";
        echo "<td" . $jabatan_td . ">" . $jabatan . "</td>";
        echo "<td" . $tempat_td . ">" . $tempat . "</td>";
        echo "<td" . $tgl_lahir_td . ">" . $tgl_lahir . "</td>";
        echo "<td" . $agama_td . ">" . $agama . "</td>";
        echo "<td" . $suku_td . ">" . $suku . "</td>";
        echo "<td" . $tmt_jab_td . ">" . $tmt_jab . "</td>";
        echo "<td" . $id_bagian_td . ">" . $id_bagian . "</td>";
        echo "<td" . $id_instansi_td . ">" . $instansi . "</td>";
        echo "</tr>";
      }

      $numrow++; // Tambah 1 setiap kali looping
    }

    echo "</table>";

    // Cek apakah variabel kosong lebih dari 0
    // Jika lebih dari 0, berarti ada data yang masih kosong
    if ($kosong > 0) {
  ?>
      <script>
        $(document).ready(function() {
          // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
          $("#jumlah_kosong").html('<?php echo $kosong; ?>');

          $("#kosong").show(); // Munculkan alert validasi kosong
        });
      </script>
  <?php
    } else { // Jika semua data sudah diisi
      echo "<hr>";

      // Buat sebuah tombol untuk mengimport data ke database
      echo "<button type='submit' name='import'>Kirim</button>";
      // echo "<a href='".base_url("sium/polsek")."'>Cancel</a>";
      echo "<a href='" . base_url("sium/formPolsek/") . $instansi . "'>Batalkan</a>";

      //masih salah

    }

    echo "</form>";
  }
  ?>
</body>

</html>