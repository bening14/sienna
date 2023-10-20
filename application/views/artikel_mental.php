<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/assets/') ?>" data-template="front-pages">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>E-Bibliotheraphy | Media Literasi Kesehatan Mental</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>assets/img/sienna.png" />
    <!-- <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>assets/img/favicon/favicon.ico" /> -->

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
                            <!-- <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
                            </svg> -->
                            <img src="<?= base_url('assets/assets/img/sienna.png') ?>" alt="logo" class="img-fluid">
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


        <!-- Pricing plans: Start -->
        <section id="artikel" class="section-py landing-pricing">
            <div class="container">
                <!-- <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">Artikel</span>
                </div> -->
                <h1 class="text-center mb-1 mt-5"><span class="section-title">Artikel</span> Kesehatan Mental</h1>
                <p class="text-center mb-5 pb-3">
                    Tips & Trik dan story yang dapat membantu Anda untuk menjaga kesehatan mental.
                </p>
                <div class="row gy-4 pt-lg-3">


                    <!-- <div class="col-xl-8 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Hasil Pencarian</h4>
                            </div>
                            <div class="card-body">
                                <p style="text-align: center;font-style:italic;">Tidak ada artikel yang ditemukan!</p>
                            </div>
                        </div>
                    </div> -->



                    <!-- artikel -->
                    <div class="col-xl-8 col-lg-8">
                        <div class="card">
                            <div id="kolomartikel">
                                <div class="card-header">
                                    <div class="text-left">
                                        <img src="<?= base_url('assets/assets/img/artikel/' . $artikel['cover']) ?>" alt="artikel kesehatan mental" class="mb-4 pb-2 img-fluid" />
                                        <small>Posted : <?= date('d-M-Y H:i:s', strtotime($artikel['date_created'])) ?></small><br>
                                        <small>Oleh : <?= $artikel['posting_oleh'] ?></small>
                                        <h3 class="mb-3 mt-2"><?= $artikel['judul'] ?></h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p><?= $artikel['uraian'] ?></p>
                                    <div style="text-align: center;" class="mt-5">
                                        <a href="<?= base_url('#artikel') ?>" class="btn btn-success text-center">Kembali ke Beranda</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- artikel -->

                    <!-- artikel -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Artikel Terkait</h4>
                                <form id="form-search" class="row g-3">
                                    <div class="input-wrapper my-3 input-group input-group-lg input-group-merge position-relative mx-auto">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti ti-search"></i></span>
                                        <input type="text" id="cari" name="cari" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" />
                                    </div>
                                    <div style="display: none;">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <?php
                                foreach ($child as $key => $value) {
                                ?>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4">
                                            <img src="<?= base_url('assets/assets/img/artikel/' . $value['cover']) ?>" alt="artikel kesehatan mental" class="mb-4 pb-2 img-fluid" />
                                        </div>
                                        <div class="col-xl-8 col-lg-8">
                                            <a href="<?= base_url('front/artikel/' . $value['id']) ?>">
                                                <h6 class="mb-1"><?= $value['judul'] ?></h6>
                                            </a>
                                            <small>Posted : <?= date('d-M-Y H:i:s', strtotime($value['date_created'])) ?></small>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                                <small style="font-style: italic;">Tags : Kesehatan Mental, Bibliotherapy</small>
                            </div>
                        </div>
                    </div>
                    <!-- artikel -->



                </div>
            </div>
        </section>
        <!-- Pricing plans: End -->
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
                                <!-- <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                  <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
                </svg> -->
                                <img src="<?= base_url('assets/assets/img/sienna.png') ?>" alt="logo" class="img-fluid">
                            </span>
                            <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Sienna</span>
                        </a>
                        <p class="footer-text footer-logo-description mb-4">
                            Model aplikasi E-bibliotheraphy system berbasis web, sebagai media literasi kesehatan mental mahasiswa
                        </p>
                        <!-- <form class="footer-form">
              <label for="footer-email" class="small">Subscribe to newsletter</label>
              <div class="d-flex mt-1">
                <input type="email" class="form-control rounded-0 rounded-start-bottom rounded-start-top" id="footer-email" placeholder="Your email" />
                <button type="submit" class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                  Subscribe
                </button>
              </div>
            </form> -->
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="footer-title mb-4">Halaman</h6>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="<?= base_url() ?>" class="footer-link">Home</a>
                            </li>
                            <li class="mb-3">
                                <a href="<?= base_url('front/#ebook') ?>" class="footer-link">E-Book</a>
                            </li>
                            <li class="mb-3">
                                <a href="<?= base_url('front/#bibliotherapist') ?>" class="footer-link">Therapist</a>
                            </li>
                            <li class="mb-3">
                                <a href="<?= base_url('front/#selftasessment') ?>" class="footer-link">Self Asessment</a>
                            </li>
                            <li class="mb-3">
                                <a href="<?= base_url('front/#artikel') ?>" class="footer-link">Artikel</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-6">
                        <h6 class="footer-title mb-4">Hubungi Kami</h6>
                        <h6 class="text-white">FIP Universitas Negeri Malang</h6>
                        <div class="text-white">Jl. Semarang 5 Malang, 65145<br><br>CP. Khairul Bariyyah<br>
                            +62 819 3798 1282</div>
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
                    <a href="<?= base_url() ?>" target="_blank" class="fw-medium text-white footer-link">Khairul Bariyyah,</a>
                    <span class="footer-text"> Made with ❤️</span>
                </div>
                <!-- <div>
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
        </div> -->
            </div>
        </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/jquery/jquery.js"></script>
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

<script>
    $("#form-search").submit(function(e) {
        var a = ''
        var b = ''
        e.preventDefault()

        var form_data = new FormData();
        form_data.append('table', 'tbl_artikel');
        form_data.append('cari', $("#cari").val());

        var url_ajax = '<?= base_url() ?>front/cari_artikel'

        $.ajax({
            url: url_ajax,
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            dataType: "json",
            success: function(result) {
                if (result.status == "success") {
                    result.data.forEach(d => {
                        b = `<div class="card-header">
                                <h4>Hasil Pencarian</h4>
                            </div>`
                        a += ` 
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4">
                                            <img src="<?= base_url('assets/assets/img/artikel/') ?>` + d['cover'] + `" alt="artikel kesehatan mental" class="mb-4 pb-2 img-fluid" />
                                        </div>
                                        <div class="col-xl-8 col-lg-8">
                                            <a href="<?= base_url('front/artikel/') ?>` + d['id'] + `">
                                                <h6 class="mb-1">` + d['judul'] + `</h6>
                                            </a>
                                            <small>Posted : ` + d['date_created'] + `</small><br>
                                            <small>Oleh : ` + d['posting_oleh'] + `</small>
                                            <p class="mt-3">` + d['uraian'].substring(0, 200) + `</p>
                                        </div>
                                    </div>
                            </div>`
                    });

                    $('#kolomartikel').html(b + a)
                } else {
                    b = `<div class="card-header">
                                <h4>Hasil Pencarian</h4>
                            </div>`
                    a = `<div class="card-body">
                                <p style="text-align: center;font-style:italic;">Tidak ada artikel yang ditemukan!</p>
                            </div>`

                    $('#kolomartikel').html(b + a)
                }

            }
        })
    })
</script>