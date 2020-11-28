<div class="hero">
  <div class="hero__inner">
    <div class="container">
      <div class="hero__row">
        <h1 class="hero__header">Profil Atlet</h1>
        <div class="hero__breadcrumbs">
          <ul>
            <li><a>Home</a></li>
            <li><a>Profil Atlet</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="layout">
  <div class="container layout__services">
    <div class="row">
      <aside class="col-xs-12 col-md-3 col-md-push-9">
        <div class="js-aside-menu">
          <h2 class="u-mb-25">Cabang Olahrga</h2>
          <div class="sorting-panel t-aside-panel">
            <ul>
              <li class="sorting-panel__item"><a class="sorting-panel__link sorting-panel--active" href="<?php echo base_url(); ?>home/cabangolahraga">Lihat Semua</a><span></span></li>
              <!-- View data cabor -->
              <?php
              foreach ($cabor as $view_cabor) {
              ?>

                <li class="sorting-panel__item"><a class="sorting-panel__link" href=<?php echo base_url(); ?>home/cabor?id=<?php echo $view_cabor->id_cabor ?>><?php echo $view_cabor->nama_cabor ?> </a> <span></span></li>

              <?php  }  ?>
              <!-- End View data cabor -->

            </ul>
          </div>
        </div>
      </aside>
      <div class="col-xs-12 col-md-9 col-md-pull-3">
        <div class="card  t-small">
          <!-- View atlet -->
          <?php
          foreach ($atlet as $view_atlet) {
          ?>
            <a href="<?php echo base_url(); ?>home/atlet?id=<?= $view_atlet->id_atlet ?>" class="card__item">
              <figure class="card__image">
                <img src="<?php echo base_url('assets/uploads/files/atlet/') ?><?php echo $view_atlet->foto ?>">
              </figure>
              <div class="card__info">
                <h3 class="card__header"><?php echo $view_atlet->nama ?></h3>
                <!-- <mark class="card__marked">$99.00 - $399.00</mark> -->
                <p class="card__text"><?php echo $view_atlet->biodata ?></p>
              </div>
            </a>
          <?php  }  ?>
          <!-- end View atlet -->
        </div>
      </div>
    </div>

  </div>
</main>

<div class="row">
  <div class="col-md-12 text-center">
    <?php echo $pagination; ?>
  </div>
</div>