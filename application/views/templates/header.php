<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Logo -->
  <link href="<?= filter_var(base_url(), FILTER_DEFAULT); ?>assets/img/favicon.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= filter_var(base_url('assets/css/'), FILTER_DEFAULT) ?>bootstrap.min.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= filter_var(base_url(), FILTER_DEFAULT); ?>assets/css/style.css">
  <title><?= filter_var($judul, FILTER_DEFAULT); ?></title>
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
          <a class="nav-item nav-link active" href="<?= filter_var(base_url(), FILTER_DEFAULT); ?>"> <img src="<?= filter_var(base_url('assets/img/home.png'), FILTER_DEFAULT) ?>" style="width: 30px">Home<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= filter_var(base_url('#info'), FILTER_DEFAULT) ?>"><img src="<?= filter_var(base_url('assets/img/info.png'), FILTER_DEFAULT) ?>" style="width: 30px">Informasi Lebih Lanjut</a></a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->