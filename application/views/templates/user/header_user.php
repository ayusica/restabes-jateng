<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= filter_var($judul, FILTER_DEFAULT); ?></title>

    <!-- Logo -->
    <link href="<?= filter_var(base_url("assets/img/favicon.png"), FILTER_DEFAULT); ?>" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="<?= filter_var(base_url("assets/vendor/fontawesome-free/css/all.min.css"), FILTER_DEFAULT); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= filter_var(base_url("assets/css/sb-admin-2.css"), FILTER_DEFAULT); ?>" rel="stylesheet">

    <!-- Table -->
    <link rel="stylesheet" href="<?= filter_var(base_url("assets/vendor/datatables/dataTables.bootstrap4.css"), FILTER_DEFAULT) ?>">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">