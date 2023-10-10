<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/assets/') ?>" data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>E-Bibliotheraphy | Media Literasi Kesehatan Mental</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/fonts/tabler-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/css/demo.css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/pages/front-page.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/node-waves/node-waves.css" />

  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/nouislider/nouislider.css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/swiper/swiper.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/pages/front-page-landing.css" />

  <!-- Helpers -->
  <script src="<?= base_url('assets/') ?>assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="<?= base_url('assets/') ?>assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= base_url('assets/') ?>assets/js/front-config.js"></script>
</head>

<body>
  <script src="<?= base_url('assets/') ?>assets/vendor/js/dropdown-hover.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/js/mega-dropdown.js"></script>

  <!-- Navbar: Start -->
  <nav class="layout-navbar shadow-none py-0">
    <div class="container">
      <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
        <!-- Menu logo wrapper: Start -->
        <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
          <!-- Mobile menu toggle: Start-->
          <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-menu-2 ti-sm align-middle"></i>
          </button>
          <!-- Mobile menu toggle: End-->
          <a href="landing-page.html" class="app-brand-link">
            <span class="app-brand-logo demo">
              <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
              </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Sienna</span>
          </a>
        </div>
        <!-- Menu logo wrapper: End -->
        <!-- Menu wrapper: Start -->
        <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
          <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-x ti-sm"></i>
          </button>
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#apaitusienna">Apa itu ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#ebook">E-Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#bibliotherapist">Bibliotherapist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#selftasessment">Self Asessment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="#bibliotheraphysessions">Bibliother</a>
            </li>
          </ul>
        </div>
        <div class="landing-menu-overlay d-lg-none"></div>
        <!-- Menu wrapper: End -->
        <!-- Toolbar: Start -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class="ti ti-sm"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->

          <!-- navbar button: Start -->
          <li>
            <a href="<?= base_url('auth') ?>" class="btn btn-primary" target="_blank"><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span><span class="d-none d-md-block">Login/Register</span></a>
          </li>
          <!-- navbar button: End -->
        </ul>
        <!-- Toolbar: End -->
      </div>
    </div>
  </nav>
  <!-- Navbar: End -->

  <!-- Sections:Start -->

  <div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <section id="hero-animation">
      <div id="landingHero" class="section-py landing-hero position-relative">
        <div class="container">
          <div class="hero-text-box text-center">
            <h1 class="text-primary hero-title display-6 fw-bold">SIENNA</h1>
            <h2 class="hero-sub-title h6 mb-4 pb-1">
              Model Aplikasi E-Bibliotherapy System Berbasis Web<br class="d-none d-lg-block" />
              Sebagai Media Literasi Kesehatan Mental Mahasiswa.
            </h2>
            <div class="landing-hero-btn d-inline-block position-relative">
              <span class="hero-btn-item position-absolute d-none d-md-flex text-heading">Join community
                <img src="<?= base_url('assets/') ?>assets/img/front-pages/icons/Join-community-arrow.png" alt="Join community arrow" class="scaleX-n1-rtl" /></span>
              <a href="#landingPricing" class="btn btn-primary btn-lg">Get early access</a>
            </div>
          </div>
          <div id="heroDashboardAnimation" class="hero-animation-img">
            <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
              <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                <img src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/hero-dashboard-light.png" alt="hero dashboard" class="animation-img" data-app-light-img="front-pages/landing-page/hero-dashboard-light.png" data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                <img src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/hero-elements-light.png" alt="hero elements" class="position-absolute hero-elements-img animation-img top-0 start-0" data-app-light-img="front-pages/landing-page/hero-elements-light.png" data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="landing-hero-blank"></div>
    </section>
    <!-- Hero: End -->

    <!-- FAQ: Start -->
    <section id="apaitusienna" class="section-py landing-faq">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-primary">FAQ</span>
        </div>
        <h3 class="text-center mb-1">Apa itu <span class="section-title">Sienna ?</span></h3>
        <p class="text-center mb-5 pb-3">Dapatkan informasi dan fitur Sienna yang dapat membantu.</p>
        <div class="row gy-5">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="<?= base_url('assets/') ?>assets/img/illustrations/auth-register-multisteps-illustration.png" alt="what is sienna" class="" style="max-width: 220px;" />
            </div>
          </div>
          <div class="col-lg-7">
            <div class="accordion" id="accordionExample">
              <div class="card accordion-item active">
                <h2 class="accordion-header" id="headingOne">
                  <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                    <strong>Apa itu Sienna</strong>
                  </button>
                </h2>

                <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>SIENNA</strong> merupakan Model Aplikasi E-Bibliotherapy System Berbasis Website Sebagai Media Literasi Kesehatan Mental Mahasiswa. Sienna merupakan situs web yang menyediakan sumber daya, rekomendasi buku, artikel, dan informasi terkait literatur yang dapat digunakan untuk tujuan terapeutik. Sienna merupakan sumber informasi online yang membantu individu menemukan buku-buku yang sesuai dengan masalah atau tantangan emosional, mental, atau psikologis yang mereka hadapi.
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                    <strong>Apa itu bibliotherapy?</strong>
                  </button>
                </h2>
                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Bibliotherapy</strong> adalah bentuk terapi yang menggunakan buku dan literatur sebagai alat untuk membantu individu mengatasi masalah emosional, psikologis, atau mental mereka.
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                    <strong>Bagaimana bibliotherapy dapat membantu seseorang mengatasi masalah kesehatan mental?</strong>
                  </button>
                </h2>
                <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Bibliotherapy dapat membantu seseorang mengatasi masalah kesehatan mental dengan menyediakan buku-buku yang menggambarkan pengalaman dan perjuangan yang serupa. Melalui membaca cerita-cerita ini, individu dapat merasa lebih terhubung dan dipahami. Selain itu, buku-buku ini juga dapat memberikan wawasan, strategi, dan inspirasi untuk mengatasi depresi dan memperbaiki kesejahteraan mental.
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                    <strong>Apa jenis buku yang biasanya direkomendasikan dalam bibliotherapy untuk mengatasi masalah kesehatan mental?</strong>
                  </button>
                </h2>
                <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Dalam bibliotherapy untuk mengatasi masalah kesehatan mental, jenis buku yang direkomendasikan dapat beragam. Buku-buku yang berfokus pada manajemen stres, relaksasi, meditasi, atau pengembangan keterampilan koping emosional seringkali direkomendasikan. Selain itu, fiksi yang menghibur dan buku-buku motivasi juga dapat membantu meredakan stres dengan mengalihkan perhatian dan meningkatkan perasaan kesejahteraan.
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                    <strong>Bagaimana seseorang dapat memulai sesi bibliotherapy sendiri di rumah?</strong>
                  </button>
                </h2>
                <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Seseorang dapat memulai sesi bibliotherapy sendiri di rumah dengan langkah-langkah berikut:<br><br>
                    <ul>
                      <li>Identifikasi masalah atau tantangan yang ingin Anda atasi</li>
                      <li>Cari buku yang relevan dengan masalah tersebut atau berkonsultasi dengan seorang ahli perpustakaan atau terapis.</li>
                      <li>Tetapkan jadwal waktu khusus untuk membaca buku dan beri diri Anda lingkungan yang tenang.</li>
                      <li>Baca dengan saksama, refleksikan tentang bagaimana cerita tersebut relevan dengan pengalaman Anda, dan catat pemikiran Anda.</li>
                      <li>Terapkan pelajaran atau wawasan yang Anda dapatkan dari buku dalam kehidupan sehari-hari Anda.</li>
                      <li>Evaluasi perkembangan Anda seiring waktu.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionSix" aria-expanded="false" aria-controls="accordionSix">
                    <strong>Apakah bibliotherapy dapat digunakan sebagai pengganti terapi psikologis profesional?</strong>
                  </button>
                </h2>
                <div id="accordionSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Bibliotherapy bisa menjadi tambahan yang bermanfaat untuk terapi psikologis profesional, tetapi tidak selalu dapat menggantikannya. Terapi psikologis profesional melibatkan interaksi langsung dengan seorang terapis yang dapat memberikan panduan, dukungan, dan penilaian yang lebih mendalam. Bibliotherapy dapat menjadi alat yang efektif untuk mendukung terapi tersebut atau sebagai langkah pertama bagi seseorang yang mencari cara untuk memahami dan mengatasi masalah mereka, tetapi dalam beberapa kasus, terapi profesional mungkin tetap diperlukan.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ: End -->

    <!-- Real customers reviews: Start -->
    <section id="ebook" class="section-py bg-body landing-reviews pb-0">
      <!-- What people say slider: Start -->
      <div class="container">
        <div class="row align-items-center gx-0 gy-4 g-lg-5">
          <div class="col-md-6 col-lg-5 col-xl-3">
            <div class="mb-3 pb-1">
              <span class="badge bg-label-primary">E-Book</span>
            </div>
            <h3 class="mb-1"><span class="section-title">Kesehatan Mental</span></h3>
            <p class="mb-3 mb-md-5">
              Rekomendasi Buku-buku Literasi<br class="d-none d-xl-block" />
              Kesehatan Mental.
            </p>
            <div class="landing-reviews-btns">
              <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn me-3 scaleX-n1-rtl" type="button">
                <i class="ti ti-chevron-left ti-sm"></i>
              </button>
              <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn scaleX-n1-rtl" type="button">
                <i class="ti ti-chevron-right ti-sm"></i>
              </button>
            </div>
          </div>
          <div class="col-md-6 col-lg-7 col-xl-9">
            <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
              <div class="swiper" id="swiper-reviews">
                <div class="swiper-wrapper">
                  <?php
                  foreach ($book as $key => $value) {
                  ?>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img src="<?= base_url('assets/ebook/' . $value['cover']) ?>" alt="ebook" class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0"><?= $value['judul_buku'] ?></h6>
                              <p class="small text-muted mb-0"><?= $value['penulis'] ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- What people say slider: End -->
    </section>

    <!-- Our great team: Start -->
    <section id="bibliotherapist" class="section-py landing-team">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-primary">Konselor Bibliotherapist</span>
        </div>
        <h3 class="text-center mb-1"><span class="section-title">Didukung</span> Oleh Therapist Ahli</h3>
        <p class="text-center mb-md-5 pb-3">Tim Therapist ahli dan berpengalaman akan membantu dalam sesi konseling</p>
        <div class="row gy-5 mt-2">
          <?php
          foreach ($konselor as $row => $val) {
          ?>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-primary position-relative team-image-box">
                  <img src="<?= base_url('assets/assets/img/front-pages/landing-page/' . $val['gambar']) ?>" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="konselor" />
                </div>
                <div class="card-body border border-top-0 border-label-primary text-center">
                  <h5 class="card-title mb-0"><?= $val['nama'] ?></h5>
                  <p class="text-muted mb-0"><?= $val['profesi'] ?></p>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <!-- Our great team: End -->

    <!-- CTA: Start -->
    <section id="selftasessment" class="section-py landing-cta p-lg-0 pb-0">
      <div class="container">
        <div class="row align-items-center gy-5 gy-lg-0">
          <div class="col-lg-6 text-center text-lg-start">
            <h6 class="h2 text-primary fw-bold mb-1">Self Asessment Kesehatan Mental</h6>
            <p class="fw-medium mb-4">Chek status kesehatan mental Anda</p>
            <a href="payment-page.html" class="btn btn-lg btn-primary">Mulai Sekarang</a>
          </div>
          <div class="col-lg-6 pt-lg-5 text-center text-lg-end">
            <img src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/cta-dashboard.png" alt="cta dashboard" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!-- CTA: End -->

    <!-- Pricing plans: Start -->
    <section id="artikel" class="section-py landing-pricing">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-primary">Artikel</span>
        </div>
        <h3 class="text-center mb-1"><span class="section-title">Artikel</span> Kesehatan Mental</h3>
        <p class="text-center mb-4 pb-3">
          Tips & Trik dan story yang dapat membantu Anda untuk menjaga kesehatan mental.
        </p>
        <div class="row gy-4 pt-lg-3">
          <?php
          foreach ($artikel as $a => $d) {
          ?>
            <!-- artikel -->
            <div class="col-xl-4 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <div class="text-left">
                    <img src="<?= base_url('assets/assets/img/artikel/' . $d['cover']) ?>" alt="artikel kesehatan mental" class="mb-4 pb-2 img-fluid" />
                    <small>Posted : <?= date('d-M-Y H:i:s', strtotime($d['date_created'])) ?></small><br>
                    <small>Oleh : <?= $d['posting_oleh'] ?></small>
                    <h5 class="mb-3 mt-2"><?= $d['judul'] ?></h5>
                    <p><?= $d['uraian'] ?></p>
                    <div>
                      <a href="<?= base_url('front/artikel/' . $d['id']) ?>" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                </div>
              </div>
            </div>
            <!-- artikel -->
          <?php
          }
          ?>


        </div>
      </div>
    </section>
    <!-- Pricing plans: End -->

    <!-- Contact Us: Start -->
    <section id="bibliotheraphysessions" class="section-py bg-body landing-contact">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-primary">Contact US</span>
        </div>
        <h3 class="text-center mb-1"><span class="section-title">Let's work</span> together</h3>
        <p class="text-center mb-4 mb-lg-5 pb-md-3">Any question or remark? just write us a message</p>
        <div class="row gy-4">
          <div class="col-lg-5">
            <div class="contact-img-box position-relative border p-2 h-100">
              <img src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/contact-customer-service.png" alt="contact customer service" class="contact-img w-100 scaleX-n1-rtl" />
              <div class="pt-3 px-4 pb-1">
                <div class="row gy-3 gx-md-4">
                  <div class="col-md-6 col-lg-12 col-xl-6">
                    <div class="d-flex align-items-center">
                      <div class="badge bg-label-primary rounded p-2 me-2"><i class="ti ti-mail ti-sm"></i></div>
                      <div>
                        <p class="mb-0">Email</p>
                        <h5 class="mb-0">
                          <a href="mailto:example@gmail.com" class="text-heading">example@gmail.com</a>
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-12 col-xl-6">
                    <div class="d-flex align-items-center">
                      <div class="badge bg-label-success rounded p-2 me-2">
                        <i class="ti ti-phone-call ti-sm"></i>
                      </div>
                      <div>
                        <p class="mb-0">Phone</p>
                        <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+1234 568 963</a></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-1">Send a message</h4>
                <p class="mb-4">
                  If you would like to discuss anything related to payment, account, licensing,<br class="d-none d-lg-block" />
                  partnerships, or have pre-sales questions, you’re at the right place.
                </p>
                <form>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label" for="contact-form-fullname">Full Name</label>
                      <input type="text" class="form-control" id="contact-form-fullname" placeholder="john" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="contact-form-email">Email</label>
                      <input type="text" id="contact-form-email" class="form-control" placeholder="johndoe@gmail.com" />
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="contact-form-message">Message</label>
                      <textarea id="contact-form-message" class="form-control" rows="8" placeholder="Write a message"></textarea>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Send inquiry</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us: End -->
  </div>

  <!-- / Sections:End -->

  <!-- Footer: Start -->
  <footer class="landing-footer bg-body footer-text">
    <div class="footer-top">
      <div class="container">
        <div class="row gx-0 gy-4 g-md-5">
          <div class="col-lg-5">
            <a href="landing-page.html" class="app-brand-link mb-4">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
                </svg>
              </span>
              <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Sienna</span>
            </a>
            <p class="footer-text footer-logo-description mb-4">
              Most developer friendly & highly customisable Admin Dashboard Template.
            </p>
            <form class="footer-form">
              <label for="footer-email" class="small">Subscribe to newsletter</label>
              <div class="d-flex mt-1">
                <input type="email" class="form-control rounded-0 rounded-start-bottom rounded-start-top" id="footer-email" placeholder="Your email" />
                <button type="submit" class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                  Subscribe
                </button>
              </div>
            </form>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <h6 class="footer-title mb-4">Demos</h6>
            <ul class="list-unstyled">
              <li class="mb-3">
                <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical Layout</a>
              </li>
              <li class="mb-3">
                <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal Layout</a>
              </li>
              <li class="mb-3">
                <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Bordered Layout</a>
              </li>
              <li class="mb-3">
                <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link">Semi Dark Layout</a>
              </li>
              <li class="mb-3">
                <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark Layout</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <h6 class="footer-title mb-4">Pages</h6>
            <ul class="list-unstyled">
              <li class="mb-3">
                <a href="pricing-page.html" class="footer-link">Pricing</a>
              </li>
              <li class="mb-3">
                <a href="payment-page.html" class="footer-link">Payment<span class="badge rounded bg-primary ms-2">New</span></a>
              </li>
              <li class="mb-3">
                <a href="checkout-page.html" class="footer-link">Checkout</a>
              </li>
              <li class="mb-3">
                <a href="help-center-landing.html" class="footer-link">Help Center</a>
              </li>
              <li class="mb-3">
                <a href="../vertical-menu-template/auth-login-cover.html" target="_blank" class="footer-link">Login/Register</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4">
            <h6 class="footer-title mb-4">Download our app</h6>
            <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2"><img src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon" /></a>
            <a href="javascript:void(0);" class="d-block footer-link"><img src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/google-play-icon.png" alt="google play icon" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom py-3">
      <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
        <div class="mb-2 mb-md-0">
          <span class="footer-text">©
            <script>
              document.write(new Date().getFullYear());
            </script>
          </span>
          <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white footer-link">Khairul Bariyyah,</a>
          <span class="footer-text"> Made with ❤️.</span>
        </div>
        <div>
          <a href="https://github.com/sienna" class="footer-link me-3" target="_blank">
            <img src="<?= base_url('assets/') ?>assets/img/front-pages/icons/github-light.png" alt="github icon" data-app-light-img="front-pages/icons/github-light.png" data-app-dark-img="front-pages/icons/github-dark.png" />
          </a>
          <a href="https://www.facebook.com/sienna/" class="footer-link me-3" target="_blank">
            <img src="<?= base_url('assets/') ?>assets/img/front-pages/icons/facebook-light.png" alt="facebook icon" data-app-light-img="front-pages/icons/facebook-light.png" data-app-dark-img="front-pages/icons/facebook-dark.png" />
          </a>
          <a href="https://twitter.com/sienna" class="footer-link me-3" target="_blank">
            <img src="<?= base_url('assets/') ?>assets/img/front-pages/icons/twitter-light.png" alt="twitter icon" data-app-light-img="front-pages/icons/twitter-light.png" data-app-dark-img="front-pages/icons/twitter-dark.png" />
          </a>
          <a href="https://www.instagram.com/sienna/" class="footer-link" target="_blank">
            <img src="<?= base_url('assets/') ?>assets/img/front-pages/icons/instagram-light.png" alt="google icon" data-app-light-img="front-pages/icons/instagram-light.png" data-app-dark-img="front-pages/icons/instagram-dark.png" />
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer: End -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?= base_url('assets/') ?>assets/vendor/libs/popper/popper.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/js/bootstrap.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/libs/node-waves/node-waves.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?= base_url('assets/') ?>assets/vendor/libs/nouislider/nouislider.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/libs/swiper/swiper.js"></script>

  <!-- Main JS -->
  <script src="<?= base_url('assets/') ?>assets/js/front-main.js"></script>

  <!-- Page JS -->
  <script src="<?= base_url('assets/') ?>assets/js/front-page-landing.js"></script>
</body>

</html>