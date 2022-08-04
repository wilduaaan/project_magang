<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="<?php echo site_url('Home') ?>"><img src="<?php echo base_url('assets/'); ?>img/logo_h.png" style="margin: -10px -0px 0px 0px;" alt="Logo <?php echo $namaPerusahaan; ?>"></a></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
          <li><a href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
          <li><a href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
          <li><a href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
          <li><a href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
          <li class="dropdown">
            <a href="#">
                <?php echo get_phrase('Pilih Bahasa'); ?>
                <img src="<?php echo base_url('assets/') ?>flag/id.png">&nbsp;
                <img src="<?php echo base_url('assets/') ?>flag/en.png">
                <i class="bi bi-chevron-down"></i>
            </a>
            <ul>
                <?php
                $fields = $this->db->list_fields('language');
                foreach ($fields as $field) {
                if ($field == 'phrase_id' || $field == 'phrase') continue;
                ?>
                    <li>
                        <a href="<?php echo base_url(); ?>Multilanguage/select_language/<?php echo $field; ?>" style="color:black;">
                            <?php echo $field; ?>
                            <?php //selecting current language
                            if ($this->session->userdata('current_language') == $field) : ?>
                                <i class="icon-ok"></i>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
      <?php foreach ($slider->result() as $result) : ?>
        <div class="carousel-item active" style="background-image: url(<?php echo base_url('assets/') ?>img/<?php echo $result->foto_slider ?>);">
          <div class="carousel-container">
          </div>
        </div>
        <?php endforeach ?>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

<main id="main">

  <!-- ======= About Us Section ======= -->
  <section id="about-us" class="about-us">
      <div class="container">
        <div class="section-headline text-center">
            <h2><?php echo get_phrase('Tentang Kami') ?></h2>
        </div>

        <div class="row no-gutters">
        <?php foreach ($tentang->result() as $result) : ?>
          <div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
            <a href="#">
                <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_tentang ?>" alt="<?php echo $namaPerusahaan; ?>" style="width: 500px; margin-top:100px;">
            </a>
          </div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up"><?php echo $result->nama_tentang ?></h3>
              <p data-aos="fade-up">
              <?php if ($this->session->userdata('current_language') == 'English') { ?>
                    <?php echo substr($result->deskripsi_tentang_en, 0, 1000) . '...' ?>
                  <?php } else { ?>
                    <?php echo substr($result->deskripsi_tentang, 0, 1000) . '...' ?>
                  <?php } ?>
              </p>
              <br>
              <a href="<?php echo site_url('About-us') ?>" class="btn btn-danger"><?php echo get_phrase('selengkapnya') ?></a>
            </div><!-- End .content-->
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <div style="background-image: url('assetsuser/img/background/beranda.jpeg'); position: relative;">
    <section id="portfolio" class="portfolio">
      <div class="container">

      <div class="section-title" data-aos="fade-up">
          <h2><strong><?php echo get_phrase('Galeri Foto') ?></strong></h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
            <?php $a = 0;
                $b = 3;
                foreach ($galeri->result() as $result) {
                    $a++;
                    if ($a <= $b) { ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" class="img-fluid" alt="<?php echo $namaPerusahaan; ?>">
            <div class="portfolio-info">
              <a href="<?php echo base_url('assets/'); ?>img/<?php echo $result->foto_galeri ?>" data-gallery="myGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <?php }
          } ?>
        </div>

      </div>
    </section>
    </div><!-- End Portfolio Section -->

</main>