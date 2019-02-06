<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AEVB</title>

    <!-- Bootstrap core CSS-->
	<link href="<?= base_url('include/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
	<link href="<?= base_url('include/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
	<link href="<?= base_url('include/vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
	<link href="<?= base_url('include/css/sb-admin.css') ?>" rel="stylesheet">
  <link href="<?= base_url('include/css/sistema.css') ?>" rel="stylesheet">


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html"></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="<?= base_url('index.php/login/logout') ?>" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sair
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fa fa-spinner"></i>
            <span>Tela Inicial</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('viuvas');?>">
            <i class="fa fa-female"></i>
            <span>Viuvas</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fa fa-home"></i>
            <span>Instituições</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fa fa-chart"></i>
            <span>Relatórios</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fa fa-lock"></i>
            <span>Usuarios</span>
          </a>
        </li>
      </ul>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb" id="faixa-principal">
            <li class="breadcrumb-item">
              <a href="<?= base_url(); ?>">Tela Inicial</a>
            </li>
