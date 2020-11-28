<div class="hero">
  <div class="hero__inner   hero__inner--service-item">
    <div class="container">
      <div class="hero__row">
        <h1 class="hero__header">Detail Atlet</h1>
        <div class="hero__breadcrumbs">
          <ul>
            <li><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li><a>Detail Atlet</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="layout">
  <div class="layout__text-page">
    <div class="container">
      <div class="row">
        <aside class="col-xs-12 col-md-3 col-md-push-9">
          <div class="js-aside-menu">

            <h2 class="u-mb-25">Cabang Olahraga</h2>
            <div class="sorting-panel t-aside-panel">
              <ul>
                <li class="sorting-panel__item"><a class="sorting-panel__link sorting-panel--active" href="<?php echo base_url(); ?>home/cabangolahraga">Lihat Semua</a><span></span></li>
                <!-- View data cabor -->
                <?php
                foreach ($cabor as $view_cabor) {
                ?>
                  <li class="sorting-panel__item"><a class="sorting-panel__link" href="<?php echo base_url(); ?>home/cabor?id=<?php echo $view_cabor->id_cabor ?>"><?php echo $view_cabor->nama_cabor ?></a><span></span></li>
                <?php  }  ?>
                <!-- End View data cabor -->
              </ul>
            </div>
          </div>
        </aside>
        <div class="text-page col-xs-12 col-md-9 col-md-pull-3">
          <!-- View atlet -->
          <?php
          foreach ($detail_atlet as $view_atlet) {
          ?>
            <h2><?php echo $view_atlet->nama ?></h2>
            <div class="card u-mb-25">
              <mark class="card__marked"><?php echo $view_atlet->nama_cabor ?></mark>
            </div>
            <figure>
              <img src="<?php echo base_url('assets/uploads/files/atlet/') ?><?php echo $view_atlet->foto ?>">
            </figure>
            <h2>Biodata</h2>
            <p><?php echo $view_atlet->biodata ?></p>
            <ul>
              <li><b>Nama :</b> <?php echo $view_atlet->nama ?></li>
              <li><b>Tanggal Lahir :</b> <?php echo $view_atlet->tgl_lahir ?></li>
              <li><b>Tempat Lahir :</b> <?php echo $view_atlet->tempat_lahir ?></li>
              <li><b>Jenis Kelamin :</b> <?php echo $view_atlet->jenis_kelamin ?></li>
              <li><b>Tinggi :</b> <?php echo $view_atlet->tinggi ?></li>
              <li><b>Berat :</b> <?php echo $view_atlet->berat ?></li>
            </ul>
            <h2>Cabang Olahraga <?php echo $view_atlet->nama_cabor ?></h2>
            <p><?php echo $view_atlet->keterangan ?></p>

            <h2>Prestasi Atlet</h2>
            <ul>
              <li><?php echo $view_atlet->tahun ?> <b>:</b> <?php echo $view_atlet->nama_prestasi ?> Nama Turnamen <?php echo $view_atlet->nama_turnamen ?></li>
            </ul>

          <?php  }  ?>
          <!-- end View atlet -->
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card t-small row u-mb-30">
      <div class="col-xs-12">
        <h2 class="u-mb-30">Related Atlet</h2>
      </div>
      <!-- View gallery atlet -->
      <?php
      foreach ($atlet as $view_atlet) {
      ?>
        <div class="col-xs-12 col-sm-3">
          <a href="<?php echo base_url(); ?>home/atlet?id=<?= $view_atlet->id_atlet ?>" class="card__item">
            <figure class="card__image">
              <img src="<?php echo base_url('assets/uploads/files/atlet/') ?><?php echo $view_atlet->foto ?>">
            </figure>
            <div class="card__info">
              <h3 class="card__header"><?php echo $view_atlet->nama ?></h3>
              <mark class="card__marked"><?php echo $view_atlet->nama_cabor ?></mark>
              <p class="card__text"><?php echo $view_atlet->biodata; ?></p>
            </div>
          </a>
        </div>
      <?php  }  ?>
      <!-- End View gallery atlet -->
    </div>
  </div>
</main>