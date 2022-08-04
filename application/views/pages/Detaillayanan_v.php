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
          <li><a href="<?php echo site_url('Home') ?>"><?php echo get_phrase('Beranda') ?></a></li>
          <li><a href="<?php echo site_url('About-us') ?>"><?php echo get_phrase('Tentang Kami') ?></a></li>
          <li><a class="active" href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
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
</header>
<!-- End Header -->

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo get_phrase('Produk Kami') ?></h2>
          <ol>
            <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
            <li><a href="<?php echo site_url('Layanan_c') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
			<li><?php echo get_phrase('Produk Detail') ?></li>
          </ol>
        </div>

      </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
    <div class="container">

        <div class="row no-gutters">
        <!-- foreach -->
          <div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
          <a href="#">
                <img src="<?php echo base_url('assets/'); ?>img/<?php echo $detail->foto_layanan ?>" alt="" style="width: 500px; margin-top:100px;">
            </a>
          </div>

          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
                <a href="">
                    <h3 data-aos="fade-up"><?php echo str_replace('-', ' ', $nama) ?></h3>
                </a>
                <p data-aos="fade-up">
                <?php if ($this->session->userdata('current_language') == 'English') { ?>
                  <?php echo $detail->deskripsi_layanan_en ?>
                <?php } else { ?>
                  <?php echo $detail->deskripsi_layanan ?>
                <?php } ?>
                </p>
            </div><!-- End .content-->
          </div>
        <!-- end-->
        </div>
    </div>
</section>
<!-- End About Us Section -->