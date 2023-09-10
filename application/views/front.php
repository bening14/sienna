<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= base_url('assets/assets/') ?>"
  data-template="front-pages">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>E-Bibliotheraphy | Media Literasi Kesehatan Mental</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

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
            <button
              class="navbar-toggler border-0 px-0 me-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="ti ti-menu-2 ti-sm align-middle"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="landing-page.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                    fill="#7367F0" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                    fill="#161616" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                    fill="#161616" />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                    fill="#7367F0" />
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Sienna</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="ti ti-x ti-sm"></i>
            </button>
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#apaitusienna">Apa itu Sienna ?</a>
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
                <a class="nav-link fw-medium" href="#bibliotheraphysessions">Bibliotheraphy Sessions</a>
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
              <a href="../vertical-menu-template/auth-login-cover.html" class="btn btn-primary" target="_blank"
                ><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span
                ><span class="d-none d-md-block">Login/Register</span></a
              >
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
                <span class="hero-btn-item position-absolute d-none d-md-flex text-heading"
                  >Join community
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/icons/Join-community-arrow.png"
                    alt="Join community arrow"
                    class="scaleX-n1-rtl"
                /></span>
                <a href="#landingPricing" class="btn btn-primary btn-lg">Get early access</a>
              </div>
            </div>
            <div id="heroDashboardAnimation" class="hero-animation-img">
              <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/hero-dashboard-light.png"
                    alt="hero dashboard"
                    class="animation-img"
                    data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                    data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/hero-elements-light.png"
                    alt="hero elements"
                    class="position-absolute hero-elements-img animation-img top-0 start-0"
                    data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                    data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
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
                <img
                  src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/faq-boy-with-logos.png"
                  alt="faq boy with logos"
                  class="faq-image" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="accordion" id="accordionExample">
                <div class="card accordion-item active">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      type="button"
                      class="accordion-button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionOne"
                      aria-expanded="true"
                      aria-controls="accordionOne">
                      Do you charge for each upgrade?
                    </button>
                  </h2>

                  <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                      marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                      soufflé. Wafer gummi bears marshmallow pastry pie.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionTwo"
                      aria-expanded="false"
                      aria-controls="accordionTwo">
                      Do I need to purchase a license for each website?
                    </button>
                  </h2>
                  <div
                    id="accordionTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                      dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly
                      beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionThree"
                      aria-expanded="false"
                      aria-controls="accordionThree">
                      What is regular license?
                    </button>
                  </h2>
                  <div
                    id="accordionThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Regular license can be used for end products that do not charge users for access or service(access
                      is free and there will be no monthly subscription fee). Single regular license can be used for
                      single end product and end product can be used by you or your client. If you want to sell end
                      product to multiple clients then you will need to purchase separate license for each client. The
                      same rule applies if you want to use the same end product on multiple domains(unique setup). For
                      more info on regular license you can check official description.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFour"
                      aria-expanded="false"
                      aria-controls="accordionFour">
                      What is extended license?
                    </button>
                  </h2>
                  <div
                    id="accordionFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat possimus maxime!
                      Mollitia reprehenderit neque repellat deleniti delectus architecto dolorum maxime, blanditiis
                      earum ea, incidunt quam possimus cumque.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFive"
                      aria-expanded="false"
                      aria-controls="accordionFive">
                      Which license is applicable for SASS application?
                    </button>
                  </h2>
                  <div
                    id="accordionFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem ab cum
                      nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam quasi
                      labore enim architecto non!
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
                <button
                  id="reviews-previous-btn"
                  class="btn btn-label-primary reviews-btn me-3 scaleX-n1-rtl"
                  type="button">
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
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book1.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book2.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book3.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book4.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book5.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book6.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book7.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book8.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book9.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card h-100">
                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                          <div class="mb-3">
                            <img
                              src="<?= base_url('assets/') ?>ebook/book10.jpg"
                              alt="ebook"
                              class="img-fluid" />
                          </div>
                          <div class="d-flex align-items-center">
                            <div>
                              <h6 class="mb-0">The Ink Black Heart</h6>
                              <p class="small text-muted mb-0">Robert Galbraith</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-primary position-relative team-image-box">
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/team-member-1.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-primary text-center">
                  <h5 class="card-title mb-0">Dr. Khairul Bariyyah M.Pd, Kons</h5>
                  <p class="text-muted mb-0">Konselor</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-info position-relative team-image-box">
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/team-member-2.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-info text-center">
                  <h5 class="card-title mb-0">Paul Miles</h5>
                  <p class="text-muted mb-0">UI Designer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-danger position-relative team-image-box">
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/team-member-3.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-danger text-center">
                  <h5 class="card-title mb-0">Nannie Ford</h5>
                  <p class="text-muted mb-0">Development Lead</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-success position-relative team-image-box">
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/team-member-4.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-success text-center">
                  <h5 class="card-title mb-0">Chris Watkins</h5>
                  <p class="text-muted mb-0">Marketing Manager</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 pt-3">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-primary position-relative team-image-box">
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/team-member-1.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-primary text-center">
                  <h5 class="card-title mb-0">Dr. Khairul Bariyyah M.Pd, Kons</h5>
                  <p class="text-muted mb-0">Konselor</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 pt-3">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-info position-relative team-image-box">
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/team-member-2.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-info text-center">
                  <h5 class="card-title mb-0">Paul Miles</h5>
                  <p class="text-muted mb-0">UI Designer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 pt-3">
              <div class="card mt-3 mt-lg-0 shadow-none">
                <div class="bg-label-danger position-relative team-image-box">
                  <img
                    src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/team-member-3.png"
                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                    alt="human image" />
                </div>
                <div class="card-body border border-top-0 border-label-danger text-center">
                  <h5 class="card-title mb-0">Nannie Ford</h5>
                  <p class="text-muted mb-0">Development Lead</p>
                </div>
              </div>
            </div>
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
              <img
                src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/cta-dashboard.png"
                alt="cta dashboard"
                class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <!-- CTA: End -->

      <!-- Pricing plans: Start -->
      <section id="artikel" class="section-py landing-pricing">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Pricing Plans</span>
          </div>
          <h3 class="text-center mb-1"><span class="section-title">Tailored pricing plans</span> designed for you</h3>
          <p class="text-center mb-4 pb-3">
            All plans include 40+ advanced tools and features to boost your product.<br />Choose the best plan to fit
            your needs.
          </p>
          <div class="text-center mb-5">
            <div class="position-relative d-inline-block pt-3 pt-md-0">
              <label class="switch switch-primary me-0">
                <span class="switch-label">Pay Monthly</span>
                <input type="checkbox" class="switch-input price-duration-toggler" checked />
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label">Pay Annual</span>
              </label>
              <div class="pricing-plans-item position-absolute d-flex">
                <img
                  src="<?= base_url('assets/') ?>assets/img/front-pages/icons/pricing-plans-arrow.png"
                  alt="pricing plans arrow"
                  class="scaleX-n1-rtl" />
                <span class="fw-semibold mt-2 ms-1"> Save 25%</span>
              </div>
            </div>
          </div>
          <div class="row gy-4 pt-lg-3">
            <!-- Basic Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="<?= base_url('assets/') ?>assets/img/front-pages/icons/paper-airplane.png"
                      alt="paper airplane icon"
                      class="mb-4 pb-2" />
                    <h4 class="mb-1">Basic</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h1 text-primary fw-bold mb-0">$19</span>
                      <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$14</span>
                      <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">$ 168 / year</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Timeline
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Basic search
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Live chat widget
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Email marketing
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Custom Forms
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Traffic analytics
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Basic Support
                      </h5>
                    </li>
                  </ul>
                  <div class="d-grid mt-4 pt-3">
                    <a href="payment-page.html" class="btn btn-label-primary">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Basic Plan: End -->

            <!-- Favourite Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card border border-primary shadow-lg">
                <div class="card-header">
                  <div class="text-center">
                    <img src="<?= base_url('assets/') ?>assets/img/front-pages/icons/plane.png" alt="plane icon" class="mb-4 pb-2" />
                    <h4 class="mb-1">Team</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h1 text-primary fw-bold mb-0">$29</span>
                      <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$22</span>
                      <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">$ 264 / year</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Everything in basic
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Timeline with database
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Advanced search
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Marketing automation
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Advanced chatbot
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Campaign management
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Collaboration tools
                      </h5>
                    </li>
                  </ul>
                  <div class="d-grid mt-4 pt-3">
                    <a href="payment-page.html" class="btn btn-primary">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Favourite Plan: End -->

            <!-- Standard Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img
                      src="<?= base_url('assets/') ?>assets/img/front-pages/icons/shuttle-rocket.png"
                      alt="shuttle rocket icon"
                      class="mb-4 pb-2" />
                    <h4 class="mb-1">Enterprise</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h1 text-primary fw-bold mb-0">$49</span>
                      <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$37</span>
                      <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-muted price-yearly-toggle d-none">$ 444 / year</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Everything in premium
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Timeline with database
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Fuzzy search
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        A/B testing sanbox
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Custom permissions
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Social media automation
                      </h5>
                    </li>
                    <li>
                      <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                          ><i class="ti ti-check ti-xs"></i
                        ></span>
                        Sales automation tools
                      </h5>
                    </li>
                  </ul>
                  <div class="d-grid mt-4 pt-3">
                    <a href="payment-page.html" class="btn btn-label-primary">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Standard Plan: End -->
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
                <img
                  src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/contact-customer-service.png"
                  alt="contact customer service"
                  class="contact-img w-100 scaleX-n1-rtl" />
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
                    If you would like to discuss anything related to payment, account, licensing,<br
                      class="d-none d-lg-block" />
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
                        <input
                          type="text"
                          id="contact-form-email"
                          class="form-control"
                          placeholder="johndoe@gmail.com" />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="contact-form-message">Message</label>
                        <textarea
                          id="contact-form-message"
                          class="form-control"
                          rows="8"
                          placeholder="Write a message"></textarea>
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
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="#7367F0" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="#7367F0" />
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
                  <input
                    type="email"
                    class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                    id="footer-email"
                    placeholder="Your email" />
                  <button
                    type="submit"
                    class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
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
                  <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link"
                    >Semi Dark Layout</a
                  >
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
                  <a href="payment-page.html" class="footer-link"
                    >Payment<span class="badge rounded bg-primary ms-2">New</span></a
                  >
                </li>
                <li class="mb-3">
                  <a href="checkout-page.html" class="footer-link">Checkout</a>
                </li>
                <li class="mb-3">
                  <a href="help-center-landing.html" class="footer-link">Help Center</a>
                </li>
                <li class="mb-3">
                  <a href="../vertical-menu-template/auth-login-cover.html" target="_blank" class="footer-link"
                    >Login/Register</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-4">
              <h6 class="footer-title mb-4">Download our app</h6>
              <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2"
                ><img src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon"
              /></a>
              <a href="javascript:void(0);" class="d-block footer-link"
                ><img src="<?= base_url('assets/') ?>assets/img/front-pages/landing-page/google-play-icon.png" alt="google play icon"
              /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom py-3">
        <div
          class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
          <div class="mb-2 mb-md-0">
            <span class="footer-text"
              >©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
            <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white footer-link">Khairul Bariyyah,</a>
            <span class="footer-text"> Made with ❤️.</span>
          </div>
          <div>
            <a href="https://github.com/sienna" class="footer-link me-3" target="_blank">
              <img
                src="<?= base_url('assets/') ?>assets/img/front-pages/icons/github-light.png"
                alt="github icon"
                data-app-light-img="front-pages/icons/github-light.png"
                data-app-dark-img="front-pages/icons/github-dark.png" />
            </a>
            <a href="https://www.facebook.com/sienna/" class="footer-link me-3" target="_blank">
              <img
                src="<?= base_url('assets/') ?>assets/img/front-pages/icons/facebook-light.png"
                alt="facebook icon"
                data-app-light-img="front-pages/icons/facebook-light.png"
                data-app-dark-img="front-pages/icons/facebook-dark.png" />
            </a>
            <a href="https://twitter.com/sienna" class="footer-link me-3" target="_blank">
              <img
                src="<?= base_url('assets/') ?>assets/img/front-pages/icons/twitter-light.png"
                alt="twitter icon"
                data-app-light-img="front-pages/icons/twitter-light.png"
                data-app-dark-img="front-pages/icons/twitter-dark.png" />
            </a>
            <a href="https://www.instagram.com/sienna/" class="footer-link" target="_blank">
              <img
                src="<?= base_url('assets/') ?>assets/img/front-pages/icons/instagram-light.png"
                alt="google icon"
                data-app-light-img="front-pages/icons/instagram-light.png"
                data-app-dark-img="front-pages/icons/instagram-dark.png" />
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