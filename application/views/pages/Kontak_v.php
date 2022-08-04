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
          <li><a href="<?php echo site_url('Our-Products') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
          <li><a href="<?php echo site_url('Photo-Gallery') ?>"><?php echo get_phrase('Galeri Foto') ?></a></li>
          <li><a class="active" href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
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

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo get_phrase('Hubungi Kamii') ?></h2>
          <ol>
            <li><a href="<?php echo site_url('Contacts') ?>"><?php echo get_phrase('Hubungi Kami') ?></a></li>
            <li><?php echo get_phrase('Hubungi Kami') ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="about-area area-padding">
            <div class="container">
            <?php foreach ($kontak->result() as $result) : ?>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
                        <div class="well-middle">
                            <div class="single-well-c">
                                <h2><span><?php echo get_phrase('Hubungi Kami') ?></span></h2>
                                <p>
                                    <?php if ($this->session->userdata('current_language') == 'English') { ?>
                                        <?php echo $result->deskripsi_kontak_us ?>
                                    <?php } else { ?>
                                        <?php echo $result->deskripsi_kontak ?>
                                    <?php } ?>
                                </p>
                                <p>Email :
                                    <?php echo $result->email_kontak ?></p>
                                    <p><?php echo get_phrase('nomor') ?> :
                                    <?php echo $result->nomor_kontak ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
                        <div class="well-left">
                            <div class="single-well">
                        <?php echo $result->script_embed_code ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section><!-- End Contact Section -->
</main>