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
          <h2><?php echo get_phrase('Kategori Produk') ?></h2>
          <ol>
            <li><a href="<?php echo site_url('Beranda_c') ?>"><?php echo get_phrase('Beranda') ?></a></li>
            <li><a href="<?php echo site_url('Layanan_c') ?>"><?php echo get_phrase('Produk Kami') ?></a></li>
			<li><?php echo get_phrase('Kategori Produk') ?></li>
          </ol>
        </div>

      </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <h3><?php echo $judul; ?></h3>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

        <?php foreach ($product->result_array() as $p) : ?>


            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="<?php echo base_url('assets/'); ?>img/<?php echo $p['foto_layanan'] ?>" alt="<?php echo $p['nama_layanan'] . ' - ' . $judul . ' - ' . $namaPerusahaan; ?>" class="img-fluid portfolio-lightbox preview-link">

                <div class="portfolio-info">
                    <?php if ($this->session->userdata('current_language') == 'English') { ?>
											<a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $p['kategori']) . '/' . str_replace(' ', '-', $p['nama_layanan_en'])) ?>">
												<h4><?php echo $p['nama_layanan_en'] ?></h4>
												<span><?php echo substr($p['deskripsi_layanan_en'], 0, 100) . " ... " ?></span>
											<?php } else { ?>
												<a href="<?php echo site_url('Our-Product/' . str_replace(' ', '-', $p['kategori']) . '/' . str_replace(' ', '-', $p['nama_layanan'])) ?>">
													<h4><?php echo $p['nama_layanan'] ?></h4>
													<span><?php echo substr($p['deskripsi_layanan'], 0, 100) . " ... " ?></span>
												<?php } ?>

												</a>
                </div>
            </div>
        <?php endforeach ?>
        
        </div>
        <div class="see-more text-center col-12" data-aos="fade-up">
			<!-- php -->
		</div>
      </div>
</section>
<!-- End Portfolio Section -->