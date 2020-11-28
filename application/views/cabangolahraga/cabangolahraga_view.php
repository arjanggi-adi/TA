<div class="hero">
  <div class="hero__inner">
    <div class="container">
      <div class="hero__row">
        <h1 class="hero__header">Cabang Olahrga</h1>
        <div class="hero__breadcrumbs">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Cabang Olahraga</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="container   js-sorting-panel">
  <div class="index-layout__services">
    <div class="index-description">
      <h2 class="index-description__header">Cabang Olahraga</h2>
      <p class="index-description__text">Berikut adalah cabang olahraga yang ada dunia tapi hanya ada beberapa yang diKompetisikan.</p>
    </div>
    <div class="sorting-panel text-center">
      <ul>
        <li><a href="#" data-sorting-btn="all" class="sorting-panel--active">
            <h4>All</h4>
          </a></li>
        <?php
        foreach ($cabor as $view_cabor) {
        ?>
          <li><a href="#" data-sorting-btn="<?php echo $view_cabor->nama_cabor ?>">
              <h4><?php echo $view_cabor->nama_cabor ?></h4>
            </a></li>
        <?php  }  ?>


        <div class="card t-small   js-sorting-panel-items">
          <?php
          foreach ($cabor as $view_cabor) {
          ?>
            <a href="<?php echo base_url(); ?>home/cabor?id=<?php echo $view_cabor->id_cabor ?>" class="card__item" data-sorting-target="<?php echo $view_cabor->nama_cabor ?>">
              <figure class="card__image">
                <img src="<?php echo base_url('assets/uploads/files/cabor/') ?><?php echo $view_cabor->image ?>">
              </figure>
              <div class="card__info">
                <h3 class="card__header"><?php echo $view_cabor->nama_cabor ?></h3>
                <!-- <mark class="card__marked">$99.00 - $399.00</mark> -->
                <p class="card__text"><?php echo $view_cabor->keterangan ?></p>
              </div>
            </a>
          <?php  }  ?>

        </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <?php echo $pagination; ?>
      </div>
    </div>

</section>