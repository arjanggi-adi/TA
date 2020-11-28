<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!doctype html>

<head>
  <meta charset="utf-8">
  <title>MONITORING ATLET</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- inject:css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/lightgallery.min.css">
  <!-- endinject -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/atlet.css">

  <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700);
    @import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700);

    .form-inline .form-group {
      margin-left: 0;
      margin-right: 0;
    }

    .control-label {
      color: #333333;
    }
  </style>

</head>

<body class="js-fixed-header" ontouchstart="">
  <header class="main-header">
    <div class="main-header__bottom-row fixed js-fixed-header-bottom">
      <div class="container">
        <div class="main-header__row">
          <nav class="navbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed   js-mobile-menu-btn" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img class="carousel__image " src="<?php echo base_url(); ?>asset/img/logo.png" style="width:50px;height:50px;">
              <a class="main-header__brand   navbar-brand" href="<?php echo base_url(); ?> " aria-label="Site name:Atlet Buleleng">Moniatlet</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse   main-header__nav" id="main-navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="main-header__link"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="main-header__link"><a href="<?php echo base_url(); ?>home/cabangolahraga">Cabang Olahraga</a></li>
                <li class="main-header__link"><a href="<?php echo base_url(); ?>home/profil">Profil Atlet</a></li>
                <li class="main-header__link"><a href="<?php echo base_url(); ?>home/gallery">Galeri</a></li>
                <li class="main-header__link"><a href="<?php echo base_url(); ?>home/contact">Kontak</a></li>
                <li class="main-header__link"><a href="<?php echo base_url(); ?>member/access">Login</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
    </div>
  </header>