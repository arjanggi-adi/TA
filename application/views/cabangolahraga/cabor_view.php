<div class="hero">
  <div class="hero__inner   hero__inner--service-item">
    <div class="container">
      <div class="hero__row">
        <h1 class="hero__header">Detail Cabang Olahraga</h1>
        <div class="hero__breadcrumbs">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a>Detail Cabang Olahraga</a></li>
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

        </aside>
        <div class="text-page col-xs-12 col-md-9 col-md-pull-3">
          <!-- View atlet -->
          <?php
          foreach ($detail_cabor as $view_cabor) {
          ?>
          <h2><?php echo $view_cabor->nama_cabor ?></h2>
          <div class="card u-mb-25">
            <mark class="card__marked"><?php echo $view_cabor->nama_cabor ?></mark>
          </div>
          <figure>
            <img src="<?php echo base_url('assets/uploads/files/cabor/')?><?php echo $view_cabor->image ?>" >
          </figure>
          <h2>Cabang Olahraga <?php echo $view_cabor->nama_cabor?></h2>
          <p><?php echo $view_cabor->keterangan ?></p>

          <?php  }  ?>
          <!-- end View atlet -->
        </div>
      </div>
    </div>
  </div>
</main>
