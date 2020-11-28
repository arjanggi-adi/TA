<div class="hero">
  <div class="hero__inner">
    <div class="container">
      <div class="hero__row">
        <h1 class="hero__header">Gallery</h1>
        <div class="hero__breadcrumbs">
          <ul>
            <li><a href="<?php echo base_url('home') ?>">Home</a></li>
            <li><a href="#">Gallery</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="layout">
  <div class="js-sorting-panel">
    <div class="layout__gallery">
      <div class="container">
        <div class="index-description">
          <h2 class="index-description__header">Gallery</h2>
          <p class="index-description__text">Check out our latest work and appreciate the quality of our services. Take a look behind the scenes of our clean and well-equipped garage where work only professionals.</p>
        </div>
      </div>
      <div class="gallery t-fullscreen-square" id="lightgallery">
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
    </div>
    <!-- <div class="index-layout__button">
      <nav aria-label="Page navigation">
        <ul class="pagination">
          <li>
            <a href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div> -->

  </div>
</main>