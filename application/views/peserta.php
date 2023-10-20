<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/') ?>assets/" data-template="vertical-menu-template">

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
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/@form-validation/umd/styles/index.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/quill/katex.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url('assets/') ?>assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= base_url('assets/') ?>assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/') ?>assets/js/config.js"></script>

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php
            include('./application/views/template/menu.php');
            ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->


                <?php include('./application/views/template/navbar.php') ?>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">



                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <!-- Users List Table -->
                        <div class="card">
                            <div class="card-header border-bottom" style="text-align: right;">
                                <a href="<?= base_url('dashboard/bibliotherapy') ?>" class="btn btn-sm btn-danger"><i class="ti ti-arrow-narrow-left"></i> Kembali</a>
                            </div>
                            <div class="card-datatable table-responsive">
                                <table id="table-peserta" class="table">
                                    <thead class="border-top">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Fakultas</th>
                                            <th>Jurusan</th>
                                            <th>Email</th>
                                            <th>Handphone</th>
                                            <th>Date Register</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->




                    <!-- Footer -->
                    <?php include('./application/views/template/footer.php') ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->


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

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/moment/moment.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/select2/select2.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/quill/katex.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('assets/') ?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url('assets/') ?>assets/js/app-user-list.js"></script>
    <script src="<?= base_url('assets/') ?>assets/js/forms-editors.js"></script>




</body>

</html>

<script>
    <?php $target = 0; ?>
    $(function() {
        $("#table-peserta").DataTable({
            "responsive": false,
            "lengthChange": true,
            "autoWidth": false,
            'serverSide': true,
            'processing': true,
            "order": [
                [0, "desc"]
            ],
            'ajax': {
                'dataType': 'json',
                'url': '<?= base_url() ?>dashboard/ajax_table_peserta',
                'type': 'post',
                'data': {
                    id: '<?= $this->uri->segment('3') ?>'
                }
            },
            'columns': [{
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.no",
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.nama"
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.nik",
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.fakultas",
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.jurusan",
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.email",
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.handphone",
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.date_created",
                },
                {
                    "target": [<?= $target ?>],
                    "className": 'py-1',
                    "data": "data",
                    "render": function(data) {
                        return `<div class="d-flex align-items-center">
                                    <a href="javascript:;" class="text-body delete-record" onclick="delete_data('` + data.id + `')"><i class="ti ti-trash ti-sm mx-2"></i></a>
                                    
                                </div>`
                    }
                }
            ],
            "dom": '<"row" <"col-md-6" l><"col-md-6" f>>rt<"row" <"col-md-6" i><"col-md-6" p>>',
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });

    });

    function reload_table() {
        $('#table-peserta').DataTable().ajax.reload(null, false);
    }

    function delete_data(id) {
        Swal.fire({
            title: 'Apakah Anda Yakin ?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!',
            customClass: {
                confirmButton: 'btn btn-primary me-1',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?= base_url() ?>dashboard/delete_data',
                        data: {
                            id: id,
                            table: "tbl_peserta"
                        },
                        type: 'post',
                        dataType: 'json',
                        success: function(result) {
                            if (result.status == "success") {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Terhapus!',
                                    text: 'Data berhasil dihapus',
                                    customClass: {
                                        confirmButton: 'btn btn-success'
                                    }
                                });
                                reload_table()
                            } else
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Gagal hapus data',
                                    customClass: {
                                        confirmButton: 'btn btn-primary'
                                    },
                                    buttonsStyling: false
                                })
                        }
                    })
                }
            }
        });
    }
</script>