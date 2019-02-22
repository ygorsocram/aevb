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

    <style>
        .sweet-alert{
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.21);
        }
        input .uppercase{
            text-transform: uppercase;
        }
        .destaque{ /*Função para destacar linha da tabela quando o mouse passar por ela*/
            color:#2196f3; /*Coloca uma cor azul nos textos.*/
            cursor:pointer; /*Mouse com icone de Hand.*/
        }
        .widget-simple-sm{
            cursor:pointer; /*Mouse com icone de Hand.*/
        }
        
        .flex-container { 
            list-style: none;           
            -ms-box-orient: horizontal;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -moz-flex;
            display: -webkit-flex;
            display: flex;
            float: left;
        }
        .center { 
            -webkit-align-items: center; 
            align-items: center; }
         
         html{
                 list-style: none;
         }
         
        .expira-cert {
            margin: -.40rem;
            background-color:#FF748F
        }

    </style>
	
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
          <a class="nav-link dropdown-toggle" href="<?= base_url('login/logout/') ?>">Sair
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
          <a class="nav-link" href="<?= base_url('instituicoes'); ?>">
            <i class="fa fa-home"></i>
            <span>Instituições</span>
          </a>
        </li>
        <!--li class="nav-item active">
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
        </li-->
      </ul>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb" id="faixa-principal">
            <li class="breadcrumb-item">
              <a href="<?= base_url(); ?>">Tela Inicial</a>
            </li>
