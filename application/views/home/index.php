<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h4 class="display-4">Sistem Informasi Data Personel<br><span>Polrestabes Semarang</span></h4>
  </div>
</div>
<!-- akhir jumbotron -->

<!-- container -->
<div class="container">

  <!-- info panel -->
  <div class="row justify-content-center">
    <!-- lg untuk large -->
    <div class="col-10 info-panel">
      <div class="row">
        <div class="col-lg">
          <a href="<?= filter_var(base_url('panduan'), FILTER_DEFAULT); ?>">
            <img src="<?= filter_var(base_url(), FILTER_DEFAULT); ?>assets/img/user.png" alt="petunjuk" class="float-left">
          </a>
          <h4>Panduan Penggunaan Sistem</h4>
          <a href="<?= filter_var(base_url('panduan'), FILTER_DEFAULT); ?>">
            <button class="btn-warning tombol"><small>Baca Lebih Lanjut</small></button>
          </a>
        </div>
        <div class="col-lg">
          <a href="<?= filter_var(base_url(), FILTER_DEFAULT); ?>login">
            <img src="<?= filter_var(base_url(), FILTER_DEFAULT); ?>assets/img/login.png" alt="login" class="float-left">
          </a>
          <h4>Login SIPODA</h4>
          <!-- <p>Masuk untuk Informasi Lebih Lanjut Personel</p> -->
          <a href="<?= filter_var(base_url(), FILTER_DEFAULT); ?>login/index">
            <button class="btn-warning tombol"><small>Masuk</small> </button>
          </a>
        </div>
        <div class="col-lg">
          <a href="<?= filter_var(base_url('sium/daftar_polsek'), FILTER_DEFAULT); ?>">
            <img src="<?= filter_var(base_url(), FILTER_DEFAULT); ?>assets/img/polisi2.png" alt="personel" class="float-left">
          </a>
          <h4>Lihat Data Personel</h4>
          <!-- <p>Daftar instansi dan Data Personel</p> -->
          <a href="<?= filter_var(base_url(), FILTER_DEFAULT); ?>sium/daftar_polsek">
            <button class="btn-warning tombol"><small>Data Personel</small></button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir info panel -->

  <!-- workingspace -->
  <div class="row workingspace">
    <div class="col-lg-6">
      <img src="<?= filter_var(base_url('assets/img/jumbotron-ky.jpg'), FILTER_DEFAULT) ?>" alt="workingspace" class="img-fluid">
    </div>
    <div class="col-lg-6">
      <h3><span>Polrestabes Semarang</span></h3>
      <p class="mt-3">Jalan DR. Sutomo No.19, Barusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50245</p>
    </div>
  </div>
  <!-- akhir working space -->

  <!-- Tentang Bag-Sumda -->
  <div class="card mt-5">
    <div class="card-body" id="info">
      <h4>Sistem<b> Informasi Data Personel</b> Polrestabes Semarang </h4>
      <br>
      <p>Sistem Informasi Data Personel Polrestabes Semarang (SIPODA POLRESTABES) adalah sebuah sistem informasi berbasis web yang digunakan untuk mengolah data Pesonel Kepolisian Kesatuan Polrestabes Semarang yang dikelola oleh Bagian Sumber Daya (Bag Sumda) Polrestabes Semarang.</p>
      <p>SIPODA POLRESTABES adalah sistem yang dapat digunakan oleh seluruh Instansi Kepolisian Kesatuan Polrestabes Semarang, meliputi Polrestabes Semarang dan 17 Polsek dibawahnya, yaitu: Polsek Genuk, Polsek Pedurungan, Polsek Gayamsari, Polsek Semarang Tengah, Polsek Semarang Selatan, Polsek Semarang Barat, Polsek Semarang Utara, Polsek Semarang Timur, Polsek Ngaliyan, Polsek Tugu, Polsek Mijen, Polsek Gunungpati, Polsek Gajahmungkur, Polsek Banyumanik, Polsek Tembalang, Polsek Candisari, Polsek KPPP Tanjung Mas. </p>
    </div>
  </div>
  <div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" style="color: black" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Bag-Sumda Polrestabes Semarang
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <p>Bag-Sumda (Bagian Sumber Daya) merupakan unsur pengawas dan pembantu pimpinan yang berada dibawah Kapolres. Bag-Sumda melaksanakan pembinaan administrasi personel, sarana dan prasarana, pelatihan fungsi, pelayanan kesehatan, bantuan dan penerapan hukum.</p>
          <p>A. Pembinaan dan administrasi personel, meliputi:</p>
          <p> &nbsp; 1. Pembinaan karier personel Polrestabes antara lain Usulan Kenaikan Pangkat (UKP), Kenaikan Gaji Berkala (KGB), mutasi, pengangkatan, dan pemberhentian dalam jabatan yang menjadi lingkup kewenangan Polrestabes.</p>
          <p> &nbsp; 2. Perawatan personel antara lain pembinaan kesejahteraan rohani, mental, jasmani, moril, dan materiil, mengusulkan tanda kehormatan.</p>
          <p> &nbsp; 3. Pembinaan psikologi personel, antara lain kesehatan jiwa personel dan pemeriksaan psikologi bagi pemegang senjata api.</p>
          <p> &nbsp; 4. Pelatihan fungsi, antara lain fungsi teknis kepolisian, keterpaduan antar fungsi teknis kepolisian dan fungsi pendukung. </p>
          <p> &nbsp; 5. Pelayanan kesehatan bagi anggota Polri, dan PNS Polri beserta keluarganya.</p>
          <p>B. Pembinaan administrasi sarana dan prasarana (sarpras), antara lain:</p>
          <p> &nbsp; 1. Menginvertarisir, merawat, dan menyalurkan perbekalan umum, peralatan khusus, senjata api, dan angkutan.</p>
          <p> &nbsp; 2. Melaksanakan Sistem Informasi Manajemen Akuntansi Barang Milik Negara (SIMAK BMN).</p>
          <p>C. Pelayanan bantuan dan penerapan hukum, antara lain:</p>
          <p> &nbsp; 1. Memberikan pelayanan bantuan hukum kepada institusi dan personel Polrestabes beserta keluarganya.</p>
          <p> &nbsp; 2. Memberikan pendapat dan sarana hukum.</p>
          <p> &nbsp; 3. Melaksanakan penyuluhan hukum kepada personel Polrestabes beserta keluarga dan masyarakat.</p>
          <p> &nbsp; 4. Menganalisis sistem dan metoda terkait dengan ketentuan peraturan perundang-udangan di lingkungan Polrestabes.</p>
          <p> &nbsp; 5. Berperan serta dalam pembinaan hukum yang berkaitan dengan penyusunan Peraturan Daerah. </p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTri">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" style="color: black" data-toggle="collapse" data-target="#collapseTri" aria-expanded="false" aria-controls="collapseTri">
            Cara Menggunakan SIPODA [?]
          </button>
        </h5>
      </div>
      <div id="collapseTri" class="collapse" aria-labelledby="headingTri" data-parent="#accordion">
        <div class="card-body">
          <p>1. Masukkan nrp sebagai username</p>
          <p>2. Masukkan password default (misal nrp = 12345, password = 54321)</p>
          <br>
          <p style="color: red">Catatan : Ganti Password setelah masuk sistem untuk pertama kali!</p>
          <p>Lebih lengkapnya silakan masuk ke sistem. Klik <a target="_blank" href="<?= filter_var(base_url(), FILTER_DEFAULT) ?>login">Masuk</a></p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFour">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" style="color: black" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Bantuan Penggunaan Sistem
          </button>
        </h5>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body">
          <p>Hubungi bagian admin sistem di Polrestabes/Polsek Anda.</p>
          <p>1. Polrestabes -> Hubungi Bagian Urmin</p>
          <p>2. Polsek -> Hubungi Bagian Sium</p>
        </div>
      </div>
    </div>
  </div>
</div>