<html>

<head>
  <title>Form Impor Data Personel Polrestabes</title>

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
  <h3>Form Impor Data Personel Polrestabes</h3>
  <hr>

  <a href="<?= filter_var(base_url("assets/excel/format.xlsx"), FILTER_DEFAULT); ?>">Unduh Format</a>
  <br>
  <br>

  <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
  <form method="post" action="<?= filter_var(base_url("urmin/form_polrestabes"), FILTER_DEFAULT); ?>" enctype="multipart/form-data">
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
  ?>
      <!--Muncul pesan error upload-->
      <div style='color: red;'><?= filter_var($upload_error, FILTER_DEFAULT) ?></div>
    <?php
      die; // stop skrip
    } ?>

    <!-- Buat sebuah tag form untuk proses import data ke database -->
    <form method='post' action='<?= filter_var(base_url("urmin/import"), FILTER_DEFAULT) ?>'>

      <!-- Buat sebuah div untuk alert validasi kosong -->
      <div style='color: red;' id='kosong'>
        Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
      </div>

      <table border='1' cellpadding='8'>
        <tr>
          <th colspan='10'>Tampilan Data</th>
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
          <th>ID Bagian</th>
        </tr>";
        <?php
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
          $id_bagian = $row['J']; // Ambil data id bagian

          // Cek jika semua data tidak diisi
          if ($nama == "" && $nrp == "" && $pkt == "" && $jabatan == "" && $tempat == "" && $tgl_lahir == "" && $agama == "" && $suku == "" && $tmt_jab == ""  && $id_bagian == "")
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

            // Jika salah satu data ada yang kosong
            if ($nama == "" or $nrp == "" or $pkt == "" or $jabatan == "" or $tempat == "" or $tgl_lahir == "" or $agama == "" or $suku == "" or $tmt_jab == "") {
              $kosong++; // Tambah 1 variabel $kosong
            } ?>
            <tr>
              <td <?= filter_var($nama_td, FILTER_DEFAULT) ?>> <?= filter_var($nama, FILTER_DEFAULT) ?></td>
              <td <?= filter_var($nrp_td, FILTER_DEFAULT) ?>> <?= filter_var($nrp, FILTER_DEFAULT) ?> </td>;
              <td <?= filter_var($pkt_td, FILTER_DEFAULT) ?>> <?= filter_var($pkt, FILTER_DEFAULT) ?></td>;
              <td <?= filter_var($jabatan_td, FILTER_DEFAULT) ?>> <?= filter_var($jabatan, FILTER_DEFAULT) ?></td>;
              <td <?= filter_var($tempat_td, FILTER_DEFAULT) ?>> <?= filter_var($tempat, FILTER_DEFAULT) ?></td>;
              <td <?= filter_var($tgl_lahir_td, FILTER_DEFAULT) ?>> <?= filter_var($tgl_lahir, FILTER_DEFAULT) ?></td>;
              <td <?= filter_var($agama_td, FILTER_DEFAULT) ?>> <?= filter_var($agama, FILTER_DEFAULT) ?></td>;
              <td <?= filter_var($suku_td, FILTER_DEFAULT) ?>> <?= filter_var($suku, FILTER_DEFAULT) ?></td>;
              <td <?= filter_var($tmt_jab_td, FILTER_DEFAULT) ?>> <?= filter_var($tmt_jab, FILTER_DEFAULT) ?></td>;
              <td <?= filter_var($id_bagian_td, FILTER_DEFAULT) ?>> <?= filter_var($id_bagian, FILTER_DEFAULT) ?></td>;
            </tr>;
        <?php
          }

          $numrow++; // Tambah 1 setiap kali looping
        } ?>

      </table>
      <?php
      // Cek apakah variabel kosong lebih dari 0
      // Jika lebih dari 0, berarti ada data yang masih kosong
      if ($kosong > 0) {
      ?>
        <script>
          $(document).ready(function() {
            // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
            $("#jumlah_kosong").html("<?= filter_var($kosong, FILTER_DEFAULT); ?>");

            $("#kosong").show(); // Munculkan alert validasi kosong
          });
        </script>
      <?php
      } else { // Jika semua data sudah diisi
      ?>
        <hr>

        <!-- Buat sebuah tombol untuk mengimport data ke database -->
        <button type='submit' name='import'>Kirim</button>
        <a href="<?= filter_var(base_url("urmin/personel_polrestabes"), FILTER_DEFAULT) ?>"> Batalkan</a>
      <?php
      }
      ?>
    </form>
  <?php
  }
  ?>
</body>

</html>