<!DOCTYPE html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/') ?>assets/" data-template="vertical-menu-template">

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

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/@form-validation/umd/styles/index.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="<?= base_url('assets/') ?>assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= base_url('assets/') ?>assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/') ?>assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y" id="identitas">
            <!-- <div class="authentication-inner py-4"> -->
            <div class="py-4">
                <!-- Login -->
                <div class="card">
                    <div class="card-body">

                        <h4 class="mb-1 pt-2 text-center">CEK STATUS KESEHATAN MENTAL</h4>
                        <p class="mb-4 text-center mt-2">Silahkan isi biodata Anda terlebih dahulu</p>
                        <p style="color: red; text-align: center; display: none;" id="notice">Tidak boleh ada kolom kosong</p>

                        <form class="mb-3" action="<?= base_url('auth') ?>" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Anda" />
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                                    <option value="PEREMPUAN">PEREMPUAN</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" />
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="button" name="mulai" id="mulai">Mulai</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <!-- <span>Kembali ke Beranda ?</span> -->
                            <a href="<?= base_url('front') ?>">
                                <span>Kembali ke Beranda</span>
                            </a>
                        </p>


                    </div>
                </div>

            </div>
        </div>


        <!-- kolom kuisioner -->
        <div class="col-12 mb-4 mt-4" id="kuisioner" style="display: none">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-1 pt-2 text-center">Jawablah pertanyaan-pertanyaan berikut tentang apa yang Anda rasakan selama sebulan terakhir. Jawaban yang Anda berikan mewakili seberapa sering Anda mengalami atau merasakan hal berikut</h5>
                </div>
                <div class="card-body">
                    <h6 class="mt-4 text-center"><strong>Selama sebulan terakhir, seberapa sering Anda merasa…</strong></h6>

                    <span class="badge rounded-pill bg-info bg-glow mb-4" style="font-size:16px;">Emotional Well-Being</span>
                    <h5>1. Saya merasa bahagia</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q1" class="form-check-input" type="radio" value="1" id="q1_radio1">
                            <label class="form-check-label" for="q1_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q1" class="form-check-input" type="radio" value="2" id="q1_radio2">
                            <label class="form-check-label" for="q1_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q1" class="form-check-input" type="radio" value="3" id="q1_radio3">
                            <label class="form-check-label" for="q1_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q1" class="form-check-input" type="radio" value="4" id="q1_radio4">
                            <label class="form-check-label" for="q1_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q1" class="form-check-input" type="radio" value="5" id="q1_radio5">
                            <label class="form-check-label" for="q1_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q1" class="form-check-input" type="radio" value="6" id="q1_radio6">
                            <label class="form-check-label" for="q1_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <h5 class="mt-4">2. Menyukai kehidupan yang sedang saya jalani</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q2" class="form-check-input" type="radio" value="1" id="q2_radio1">
                            <label class="form-check-label" for="q2_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q2" class="form-check-input" type="radio" value="2" id="q2_radio2">
                            <label class="form-check-label" for="q2_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q2" class="form-check-input" type="radio" value="3" id="q2_radio3">
                            <label class="form-check-label" for="q2_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q2" class="form-check-input" type="radio" value="4" id="q2_radio4">
                            <label class="form-check-label" for="q2_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q2" class="form-check-input" type="radio" value="5" id="q2_radio5">
                            <label class="form-check-label" for="q2_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q2" class="form-check-input" type="radio" value="6" id="q2_radio6">
                            <label class="form-check-label" for="q2_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <h5 class="mt-4">3. Merasa puas dengan kehidupan saya sekarang</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q3" class="form-check-input" type="radio" value="1" id="q3_radio1">
                            <label class="form-check-label" for="q3_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q3" class="form-check-input" type="radio" value="2" id="q3_radio2">
                            <label class="form-check-label" for="q3_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q3" class="form-check-input" type="radio" value="3" id="q3_radio3">
                            <label class="form-check-label" for="q3_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q3" class="form-check-input" type="radio" value="4" id="q3_radio4">
                            <label class="form-check-label" for="q3_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q3" class="form-check-input" type="radio" value="5" id="q3_radio5">
                            <label class="form-check-label" for="q3_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q3" class="form-check-input" type="radio" value="6" id="q3_radio6">
                            <label class="form-check-label" for="q3_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <span class="badge rounded-pill bg-info bg-glow mb-4 mt-4" style="font-size:16px;">Social Well-Being</span>
                    <h5>4. Berkontribusi dengan baik untuk komunitas atau masyarakat</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q4" class="form-check-input" type="radio" value="1" id="q4_radio1">
                            <label class="form-check-label" for="q4_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q4" class="form-check-input" type="radio" value="2" id="q4_radio2">
                            <label class="form-check-label" for="q4_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q4" class="form-check-input" type="radio" value="3" id="q4_radio3">
                            <label class="form-check-label" for="q4_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q4" class="form-check-input" type="radio" value="4" id="q4_radio4">
                            <label class="form-check-label" for="q4_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q4" class="form-check-input" type="radio" value="5" id="q4_radio5">
                            <label class="form-check-label" for="q4_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q4" class="form-check-input" type="radio" value="6" id="q4_radio6">
                            <label class="form-check-label" for="q4_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <h5 class="mt-4">5. Menjadi bagian dari suatu komunitas (bagian dari tema-teman, kampus, tetangga)</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q5" class="form-check-input" type="radio" value="1" id="q5_radio1">
                            <label class="form-check-label" for="q5_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q5" class="form-check-input" type="radio" value="2" id="q5_radio2">
                            <label class="form-check-label" for="q5_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q5" class="form-check-input" type="radio" value="3" id="q5_radio3">
                            <label class="form-check-label" for="q5_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q5" class="form-check-input" type="radio" value="4" id="q5_radio4">
                            <label class="form-check-label" for="q5_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q5" class="form-check-input" type="radio" value="5" id="q5_radio5">
                            <label class="form-check-label" for="q5_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q5" class="form-check-input" type="radio" value="6" id="q5_radio6">
                            <label class="form-check-label" for="q5_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>

                    <h5 class="mt-4">6. Merasa lingkungan saya adalah lingkungan yang baik</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q6" class="form-check-input" type="radio" value="1" id="q6_radio1">
                            <label class="form-check-label" for="q6_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q6" class="form-check-input" type="radio" value="2" id="q6_radio2">
                            <label class="form-check-label" for="q6_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q6" class="form-check-input" type="radio" value="3" id="q6_radio3">
                            <label class="form-check-label" for="q6_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q6" class="form-check-input" type="radio" value="4" id="q6_radio4">
                            <label class="form-check-label" for="q6_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q6" class="form-check-input" type="radio" value="5" id="q6_radio5">
                            <label class="form-check-label" for="q6_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q6" class="form-check-input" type="radio" value="6" id="q6_radio6">
                            <label class="form-check-label" for="q6_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <h5 class="mt-4">7. Orang-orang disekitar saya baik</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q7" class="form-check-input" type="radio" value="1" id="q7_radio1">
                            <label class="form-check-label" for="q7_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q7" class="form-check-input" type="radio" value="2" id="q7_radio2">
                            <label class="form-check-label" for="q7_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q7" class="form-check-input" type="radio" value="3" id="q7_radio3">
                            <label class="form-check-label" for="q7_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q7" class="form-check-input" type="radio" value="4" id="q7_radio4">
                            <label class="form-check-label" for="q7_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q7" class="form-check-input" type="radio" value="5" id="q7_radio5">
                            <label class="form-check-label" for="q7_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q7" class="form-check-input" type="radio" value="6" id="q7_radio6">
                            <label class="form-check-label" for="q7_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>

                    <h5 class="mt-4">8. Merasa lingkungan saya mendukung kehidupan saya</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q8" class="form-check-input" type="radio" value="1" id="q8_radio1">
                            <label class="form-check-label" for="q8_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q8" class="form-check-input" type="radio" value="2" id="q8_radio2">
                            <label class="form-check-label" for="q8_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q8" class="form-check-input" type="radio" value="3" id="q8_radio3">
                            <label class="form-check-label" for="q8_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q8" class="form-check-input" type="radio" value="4" id="q8_radio4">
                            <label class="form-check-label" for="q8_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q8" class="form-check-input" type="radio" value="5" id="q8_radio5">
                            <label class="form-check-label" for="q8_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q8" class="form-check-input" type="radio" value="6" id="q8_radio6">
                            <label class="form-check-label" for="q8_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <span class="badge rounded-pill bg-info bg-glow mb-4 mt-4" style="font-size:16px;">Psychological Well-Being</span>
                    <h5>9. Menyukai sebagian besar dari kepribadian saya</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q9" class="form-check-input" type="radio" value="1" id="q9_radio1">
                            <label class="form-check-label" for="q9_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q9" class="form-check-input" type="radio" value="2" id="q9_radio2">
                            <label class="form-check-label" for="q9_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q9" class="form-check-input" type="radio" value="3" id="q9_radio3">
                            <label class="form-check-label" for="q9_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q9" class="form-check-input" type="radio" value="4" id="q9_radio4">
                            <label class="form-check-label" for="q9_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q9" class="form-check-input" type="radio" value="5" id="q9_radio5">
                            <label class="form-check-label" for="q9_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q9" class="form-check-input" type="radio" value="6" id="q9_radio6">
                            <label class="form-check-label" for="q9_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <h5 class="mt-4">10. Dapat mengatur tanggung jawab dalam kehidupan sehari-hari dengan baik</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q10" class="form-check-input" type="radio" value="1" id="q10_radio1">
                            <label class="form-check-label" for="q10_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q10" class="form-check-input" type="radio" value="2" id="q10_radio2">
                            <label class="form-check-label" for="q10_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q10" class="form-check-input" type="radio" value="3" id="q10_radio3">
                            <label class="form-check-label" for="q10_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q10" class="form-check-input" type="radio" value="4" id="q10_radio4">
                            <label class="form-check-label" for="q10_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q10" class="form-check-input" type="radio" value="5" id="q10_radio5">
                            <label class="form-check-label" for="q10_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q10" class="form-check-input" type="radio" value="6" id="q10_radio6">
                            <label class="form-check-label" for="q10_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <h5 class="mt-4">11. Merasakan kehangatan dan kepercayaan hubungan dengan orang lain</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q11" class="form-check-input" type="radio" value="1" id="q11_radio1">
                            <label class="form-check-label" for="q11_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q11" class="form-check-input" type="radio" value="2" id="q11_radio2">
                            <label class="form-check-label" for="q11_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q11" class="form-check-input" type="radio" value="3" id="q11_radio3">
                            <label class="form-check-label" for="q11_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q11" class="form-check-input" type="radio" value="4" id="q11_radio4">
                            <label class="form-check-label" for="q11_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q11" class="form-check-input" type="radio" value="5" id="q11_radio5">
                            <label class="form-check-label" for="q11_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q11" class="form-check-input" type="radio" value="6" id="q11_radio6">
                            <label class="form-check-label" for="q11_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <h5 class="mt-4">12. Memiliki Pengalaman menantang yang membuat saya berkembang dan menjadi pribadi yang baik</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q12" class="form-check-input" type="radio" value="1" id="q12_radio1">
                            <label class="form-check-label" for="q12_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q12" class="form-check-input" type="radio" value="2" id="q12_radio2">
                            <label class="form-check-label" for="q12_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q12" class="form-check-input" type="radio" value="3" id="q12_radio3">
                            <label class="form-check-label" for="q12_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q12" class="form-check-input" type="radio" value="4" id="q12_radio4">
                            <label class="form-check-label" for="q12_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q12" class="form-check-input" type="radio" value="5" id="q12_radio5">
                            <label class="form-check-label" for="q12_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q12" class="form-check-input" type="radio" value="6" id="q12_radio6">
                            <label class="form-check-label" for="q12_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>

                    <h5 class="mt-4">13. Percaya diri dalam mengekspresikan ide dan pendapat</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q13" class="form-check-input" type="radio" value="1" id="q13_radio1">
                            <label class="form-check-label" for="q13_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q13" class="form-check-input" type="radio" value="2" id="q13_radio2">
                            <label class="form-check-label" for="q13_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q13" class="form-check-input" type="radio" value="3" id="q13_radio3">
                            <label class="form-check-label" for="q13_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q13" class="form-check-input" type="radio" value="4" id="q13_radio4">
                            <label class="form-check-label" for="q13_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q13" class="form-check-input" type="radio" value="5" id="q13_radio5">
                            <label class="form-check-label" for="q13_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q13" class="form-check-input" type="radio" value="6" id="q13_radio6">
                            <label class="form-check-label" for="q13_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>


                    <h5 class="mt-4">14. Hidup saya memiliki arah dan makna di setiap perjalanannya</h5>
                    <div class="col-md py-0 px-4">
                        <div class="form-check">
                            <input name="q14" class="form-check-input" type="radio" value="1" id="q14_radio1">
                            <label class="form-check-label" for="q14_radio1">
                                Tidak Pernah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q14" class="form-check-input" type="radio" value="2" id="q14_radio2">
                            <label class="form-check-label" for="q14_radio2">
                                Satu atau dua kali
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q14" class="form-check-input" type="radio" value="3" id="q14_radio3">
                            <label class="form-check-label" for="q14_radio3">
                                Sekitar sekali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q14" class="form-check-input" type="radio" value="4" id="q14_radio4">
                            <label class="form-check-label" for="q14_radio4">
                                Sekitar dua atau tiga kali seminggu
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q14" class="form-check-input" type="radio" value="5" id="q14_radio5">
                            <label class="form-check-label" for="q14_radio5">
                                Hampir setiap hari
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input name="q14" class="form-check-input" type="radio" value="6" id="q14_radio6">
                            <label class="form-check-label" for="q14_radio6">
                                Setiap hari
                            </label>
                        </div>
                    </div>



                    <div>
                        <div class="d-grid gap-2 col-lg-12 mt-4">
                            <button class="btn btn-primary btn-lg waves-effect waves-light" type="button" id="simpan_q">Simpan</button>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="<?= base_url('assets/') ?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/js/menu.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('assets/') ?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url('assets/') ?>assets/js/pages-auth.js"></script>
</body>

</html>

<script>
    $('#mulai').on('click', function() {

        if ($('#nama').val() == '' || $('#tanggal_lahir').val() == '' || $('#email').val() == '') {
            $('#notice').show('500')
            return

        } else {
            $('#identitas').hide('500')
            $('#kuisioner').show('500')

        }
    })

    $('#simpan_q').on('click', function() {
        $.ajax({
            url: '<?= base_url() ?>front/simpan_kuesioner',
            data: {
                email: $('#email').val(),
                nama: $('#nama').val(),
                jenis_kelamin: $('#jenis_kelamin').val(),
                tanggal_lahir: $('#tanggal_lahir').val(),
                q1: $('input[name="q1"]:checked').val(),
                q2: $('input[name="q2"]:checked').val(),
                q3: $('input[name="q3"]:checked').val(),
                q4: $('input[name="q4"]:checked').val(),
                q5: $('input[name="q5"]:checked').val(),
                q6: $('input[name="q6"]:checked').val(),
                q7: $('input[name="q7"]:checked').val(),
                q8: $('input[name="q8"]:checked').val(),
                q9: $('input[name="q9"]:checked').val(),
                q10: $('input[name="q10"]:checked').val(),
                q11: $('input[name="q11"]:checked').val(),
                q12: $('input[name="q12"]:checked').val(),
                q13: $('input[name="q13"]:checked').val(),
                q14: $('input[name="q14"]:checked').val()
            },
            type: 'post',
            dataType: 'json',
            success: function(result) {
                if (result.status == "success") {


                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses!',
                        text: 'Anda berhasil melakukan pengecekan kesehatan mental, Kami akan mengirimkan hasil melalui email, silahkan cek secara berkala email Anda.',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    }).then(function(result) {
                        if (result.value) {
                            if (result.isConfirmed) {
                                window.location.replace("<?= base_url() ?>");
                            }
                        }
                    });

                } else
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal submit data, Silahkan cek kembali apakah masih ada pertanyaan yang belum diberi jawaban ?',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    })
            }
        })

    })
</script>