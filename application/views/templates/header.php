<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Logo -->
  <link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/') ?>bootstrap.min.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <title><?php echo $judul; ?></title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <!-- <a class="navbar-brand" href="#">Sistem Informasi Bag-Sumda Polrestabes Semarang</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="<?= base_url(); ?>"> <img src="<?= base_url('assets/img/home.png') ?>" style="width: 30px">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= base_url('#info') ?>"><img src="<?= base_url('assets/img/info.png') ?>" style="width: 30px">Informasi Lebih Lanjut</a></a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->