<div class="hero">
  <div class="carousel">
    <div class="carousel__caption">
      <h1 class="carousel__caption-header">Atlet Buleleng</h1>

    </div>
    <div id="carousel-index-hero" class="owl-carousel">
      <div class="carousel__item">
        <img class="carousel__image" src="<?php echo base_url(); ?>assets/img/swimmers-79592_960_720.jpg">
      </div>
      <div class="carousel__item">
        <img class="carousel__image" src="<?php echo base_url(); ?>assets/img/lompat.jpg">
      </div>
      <div class="carousel__item">
        <img class="carousel__image" src="<?php echo base_url(); ?>assets/img/bulutangkis.jpg">
      </div>
    </div>
  </div>
</div>

<main class="index-layout">
  <section class="container">
    <div class="index-layout__features">
      <div class="index-description">
        <h2 class="index-description__header">Proses Menggunakan Website</h2>
        <p class="index-description__text">Dapatkan Kemudahan dalam Berprestasi Bagi Atlet Kabupaten Buleleng Melalui Website</p>
        <!-- <p class="index-description__text"><h3>Hemat Waktu, Hemat Kertas.</h3></p> -->
      </div>
      <div class="feature">
        <div class="feature__item  text-center">
          <div class="feature__icon">
            <img src="<?php echo base_url(); ?>/assets/img/proses/File-edit-icon.png">
          </div>
          <dl class="feature__list">
            <dt>Isi Formulir</dt>
            <dd>Datang bersama pelatih ke kantor KONI terdekat di kotamu membawa kartu keluarga & kartu tanda pengenal</dd>
            </ul>
        </div>
        <div class="feature__item  text-center">
          <div class="feature__icon">
            <img src="<?php echo base_url(); ?>/assets/img/proses/evaluations-icon.png">
          </div>
          <dl class="feature__list">
            <dt>Validasi Data</dt>
            <dd>Data akan ke validasi oleh KONI untuk mengecek form formulir dan berkas yang diserahkan</dd>
            </ul>
        </div>
        <div class="feature__item  text-center">
          <div class="feature__icon">
            <img src="<?php echo base_url(); ?>/assets/img/proses/Billboard-icon.png">
          </div>
          <dl class="feature__list">
            <dt>Publish</dt>
            <dd>Data yang valid akan diarsipkan dan dipublish ke website moniatlet.com</dd>
            </ul>
        </div>
        <div class="feature__item  text-center">
          <div class="feature__icon">
            <img src="<?php echo base_url(); ?>/assets/img/proses/Computer-icon.png">
          </div>
          <dl class="feature__list">
            <dt>Selesai</dt>
            <dd>Ikuti Kejuaraan Olahraga Kapanpun Cukup Dengan Menggunakan Kartu Tanda Atlet (KIA) tanpa perlu repot lagi mengisi formulir saat akan mengikuti kejuaraan.</dd>
            </ul>
        </div>
      </div>
    </div>
  </section>

  <hr>
  <section class="container">
    <div class="index-layout__services">
      <div class="index-description">
        <h2 class="index-description__header">Atlet</h2>
        <p class="index-description__text">Adalah seseorang yang mahir dalam olahraga dan bentuk lain dari latihan fisik. Menurut Kamus Besar Bahasa Indonesia, atlet adalah olahragawan, terutama yang mengikuti perlombaan atau pertandingan (kekuatan, ketangkasan, dan kecepatan).</p>
      </div>
      <div class="text-center">
        <div class="card t-small">

          <!-- View atlet -->
          <?php
          foreach ($atlet as $view_atlet) {
          ?>
            <a href="<?php echo base_url(); ?>home/atlet?id=<?php echo $view_atlet->id_atlet ?>" class="card__item">
              <figure class="card__image">
                <img src="<?php echo base_url('assets/uploads/files/atlet/') ?><?php echo $view_atlet->foto ?>">
              </figure>
              <div class="card__info">
                <!-- <h3 class="card__header">How to Polish a Black Car at Home Like a Pro?</h3> -->
                <h3 class="card__header"><?php echo $view_atlet->nama ?></h3>
                <p class="card__text">
                  <p>
                    <h4>Biodata: </h4>
                  </p><?php echo $view_atlet->biodata ?>
                </p>
              </div>
            </a>
          <?php  }  ?>
          <!-- end View atlet -->

        </div>
        <div class="index-layout__button">
          <a href="<?php echo base_url(); ?>home/profil" class="button button__primary button__primary--mod"><span>show all</span></a>
        </div>
      </div>
      </dev>
  </section>

  <hr>
  <section class="container   js-sorting-panel">
    <div class="index-layout__services">
      <div class="index-description">
        <h2 class="index-description__header">Cabang Olahraga</h2>
        <p class="index-description__text">Berikut adalah cabang olahraga yang ada dunia tapi hanya ada beberapa yang diKompetisikan.</p>

      </div>
      <div class="text-center">
        <div class="card t-small">

          <!-- View data cabor -->
          <?php
          foreach ($cabor as $view_cabor) {
          ?>

            <a href="<?php echo base_url(); ?>home/cabor?id=<?php echo $view_cabor->id_cabor ?>" class="card__item" data-sorting-target="<?php echo $view_cabor->nama_cabor ?>">
              <figure class="card__image">
                <img src="<?php echo base_url('assets/uploads/files/cabor/') ?><?php echo $view_cabor->image ?>">
              </figure>
              <div class="card__info">
                <h3 class="card__header"><?php echo $view_cabor->nama_cabor ?></h3>
                <p class="card__text"><?php echo $view_cabor->keterangan ?></p>
              </div>
            </a>

          <?php  }  ?>
          <!-- End View data cabor -->

        </div>
        <div class="index-layout__button">
          <a href="<?php echo base_url(); ?>home/cabangolahraga" class="button button__primary button__primary--mod"><span>show all</span></a>
        </div>
      </div>
  </section>

  <hr>
  <section class="gallery js-sorting-panel">
    <div class="index-description">
      <h2 class="index-description__header">Gallery</h2>
      <p class="index-description__text">Check out our latest work and appreciate the quality of our services. Take a look behind the scenes of our clean and well-equipped garage where work only professionals.</p>
    </div>

    <div id="lightgallery" class="owl-carousel gallery carousel-index-gallery">
      <!-- View gallery atlet -->
      <?php
      foreach ($atlet as $gallery) {
      ?>
        <figure data-src="<?php echo base_url('assets/uploads/files/atlet/') ?><?php echo $gallery->foto ?>" class="gallery__item">
          <span></span>
          <img src="<?php echo base_url('assets/uploads/files/atlet/') ?><?php echo $gallery->foto ?>">
        </figure>
      <?php  }  ?>
      <!-- End View gallery atlet -->
    </div>
    <div class="index-layout__button">
      <a href="<?php echo base_url() ?>/home/gallery" class="button button__primary button__primary--mod"><span>show all</span></a>
    </div>
  </section>

  <hr>