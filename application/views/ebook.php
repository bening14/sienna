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
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/quill/editor.css" />

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
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4>Data E-Book</h4>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-danger" onclick="tambaho()"><i class="ti ti-plus"></i> Tambah E-Book</button>
                                    </div>
                                </div>

                            </div>
                            <div class="card-datatable table-responsive">
                                <table id="table-buku" class="table">
                                    <thead class="border-top">
                                        <tr>
                                            <th>#</th>
                                            <th>Judul E-book</th>
                                            <th>Penulis</th>
                                            <th>Cover</th>
                                            <th>Deskripsi</th>
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

    <!-- Tambah User Modal -->
    <div class="modal fade" id="tambahbuku" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">Tambah Buku</h3>
                    </div>
                    <form id="form-data" class="row g-3">
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="judul_buku">Judul Buku</label>
                            <input type="text" id="judul_buku" name="judul_buku" class="form-control" />
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="penulis">Penulis</label>
                            <input type="text" id="penulis" name="penulis" class="form-control" />
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="gambar" class="form-label">Gambar (Ukuran Max 1Mb)</label>
                            <input class="form-control" type="file" id="file" name="file">
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="deskripsi">Deskripsi</label>
                            <input type="hidden" name="deskripsi" id="deskripsi">
                            <div id="editor-1" style="min-height: 160px;">
                                <!-- <textarea name="deskripsi" id="full-editor" cols="30" rows="10" class="form-control"></textarea> -->
                            </div>
                        </div>


                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Tambah</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Tambah User Modal -->

    <!-- Tambah User Modal -->
    <div class="modal fade" id="editbuku" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">Edit Buku</h3>
                    </div>
                    <form id="form-data-edit" class="row g-3">
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="judul_buku_e">Judul Buku</label>
                            <input type="text" id="judul_buku_e" name="judul_buku_e" class="form-control" />
                            <input type="hidden" id="id_e" name="id_e" class="form-control" />
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="penulis_e">Penulis</label>
                            <input type="text" id="penulis_e" name="penulis_e" class="form-control" />
                        </div>
                        <div class="col-12 col-md-12">
                            <label class="form-label" for="deskripsi_e">Deskripsi</label>
                            <input type="hidden" name="deskripsi_e" id="deskripsi_e">
                            <div id="editor-2">
                            </div>
                        </div>



                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Simpan</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Tambah User Modal -->

    <!-- Ubah Cover buku Modal -->
    <div class="modal fade" id="ubahcover" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-simple modal-edit-user modal-dialog-centered">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">Ubah Cover Buku</h3>
                    </div>
                    <form id="form-data-cover" class="row g-3">
                        <div class="col-12 col-md-12">
                            <label for="file_cover" class="form-label">Gambar (Ukuran Max 1Mb)</label>
                            <input class="form-control" type="file" id="file_cover" name="file_cover">
                            <input type="hidden" id="id_book" name="id_book" class="form-control" />
                        </div>



                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Ubah</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Ubah Cover Modal -->



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
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/quill/quill.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('assets/') ?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url('assets/') ?>assets/js/app-user-list.js"></script>
    <script src="<?= base_url('assets/') ?>assets/js/forms-editors.js"></script>

    <script>
        var quill = new Quill('#editor-1', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                            font: []
                        },
                        {
                            size: []
                        }
                    ],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                            color: []
                        },
                        {
                            background: []
                        }
                    ],
                    [{
                            script: 'super'
                        },
                        {
                            script: 'sub'
                        }
                    ],
                    [{
                            header: '1'
                        },
                        {
                            header: '2'
                        },
                        'blockquote',
                        'code-block'
                    ],
                    [{
                            list: 'ordered'
                        },
                        {
                            list: 'bullet'
                        },
                        {
                            indent: '-1'
                        },
                        {
                            indent: '+1'
                        }
                    ],
                    [
                        'direction',
                        {
                            align: []
                        }
                    ],
                    ['link', 'image', 'video', 'formula'],
                    ['clean']
                ]
            },
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.querySelector("input[name='deskripsi']").value = quill.root.innerHTML;
        });
    </script>

    <script>
        var quill2 = new Quill('#editor-2', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                            font: []
                        },
                        {
                            size: []
                        }
                    ],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                            color: []
                        },
                        {
                            background: []
                        }
                    ],
                    [{
                            script: 'super'
                        },
                        {
                            script: 'sub'
                        }
                    ],
                    [{
                            header: '1'
                        },
                        {
                            header: '2'
                        },
                        'blockquote',
                        'code-block'
                    ],
                    [{
                            list: 'ordered'
                        },
                        {
                            list: 'bullet'
                        },
                        {
                            indent: '-1'
                        },
                        {
                            indent: '+1'
                        }
                    ],
                    [
                        'direction',
                        {
                            align: []
                        }
                    ],
                    ['link', 'image', 'video', 'formula'],
                    ['clean']
                ]
            },
        });
        quill2.on('text-change', function(delta, oldDelta, source) {
            document.querySelector("input[name='deskripsi_e']").value = quill2.root.innerHTML;
        });
    </script>
</body>

</html>

<script>
    <?php $target = 0; ?>
    $(function() {
        $("#table-buku").DataTable({
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
                'url': '<?= base_url() ?>dashboard/ajax_table_book',
                'type': 'post'
            },
            'columns': [{
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.no",
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.judul_buku"
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.penulis",
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    // "data": "data.cover",
                    "data": "data",
                    "render": function(data) {
                        return `<img src="<?= base_url('assets/ebook/') ?>` + data.cover + `" alt="Ebook" class="img-fluid" style="max-width: 80px;margin-bottom: 10px;"><br>
                                    <button type="button" class="btn btn-sm btn-success waves-effect waves-light" onclick="ubah_cover(` + data.id + `)">Ubah</button>`
                    }
                }, {
                    "target": [<?= $target ?>],
                    "className": 'text-center py-1',
                    "data": "data.deskripsi",
                },
                {
                    "target": [<?= $target ?>],
                    "className": 'py-1',
                    "data": "data",
                    "render": function(data) {
                        return `<div class="d-flex align-items-center">
                                    <a href="javascript:;" class="text-body" onclick="edito('` + data.id + `','` + data.judul_buku + `','` + data.penulis + `','` + data.deskripsi + `')"><i class="ti ti-edit ti-sm me-2"></i></a>
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
        $('#table-buku').DataTable().ajax.reload(null, false);
    }

    $("#form-data").submit(function(e) {
        e.preventDefault()

        if ($('#judul_buku').val() == '' || $('#penulis').val() == '' || $('#deskripsi').val() == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Tidak boleh ada kolom kosong!',
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                buttonsStyling: false
            })
            return
        }

        var form_data = new FormData();
        form_data.append('table', 'tbl_book');
        form_data.append('judul_buku', $("#judul_buku").val());
        form_data.append('penulis', $("#penulis").val());
        form_data.append('deskripsi', $("#deskripsi").val());

        if ($('#file').val() !== "") {
            var file_data = $('#file').prop('files')[0];
            form_data.append('file', file_data);
        }

        var url_ajax = '<?= base_url() ?>dashboard/insert_data_buku'

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
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'berhasil tambah data',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    })
                    $('#judul_buku').val('')
                    $('#penulis').val('')
                    $('#tambahbuku').modal('hide');
                    reload_table()

                } else if (result.status == "double") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Judul E-Book sudah pernah di daftarkan',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal tambah data',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    })
                }
            },
            error: function(err) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Telah terjadi kesalahan, silahkan contact CS',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                })
            }
        })
    })


    function tambaho(id) {
        $('#tambahbuku').modal('show')
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
                            table: "tbl_book"
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

    function edito(id, judul_buku, penulis, deskripsi) {
        $('#editbuku').modal('show')

        $('#id_e').val(id)
        $('#judul_buku_e').val(judul_buku)
        $('#penulis_e').val(penulis)
        $('#deskripsi_e').val(deskripsi)

        var a = deskripsi
        //taruh data dalam quill dari table
        quill2.root.innerHTML = a

    }

    $("#form-data-edit").submit(function(e) {
        e.preventDefault()

        if ($('#judul_buku_e').val() == '' || $('#penulis_e').val() == '' || $('#deskripsi_e').val() == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Tidak boleh ada kolom kosong!',
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                buttonsStyling: false
            })
            return
        }

        var form_data = new FormData();
        form_data.append('table', 'tbl_book');
        form_data.append('id', $("#id_e").val());
        form_data.append('judul_buku', $("#judul_buku_e").val());
        form_data.append('penulis', $("#penulis_e").val());
        form_data.append('deskripsi', $("#deskripsi_e").val());

        var url_ajax = '<?= base_url() ?>dashboard/edit_data_buku'

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
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'berhasil ubah data',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    })
                    $('#editbuku').modal('hide');
                    reload_table()

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal ubah data',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    })
                }
            },
            error: function(err) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Telah terjadi kesalahan, silahkan contact CS',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                })
            }
        })
    })

    $("#form-data-cover").submit(function(e) {
        e.preventDefault()

        var form_data = new FormData();
        form_data.append('table', 'tbl_book');
        form_data.append('id', $("#id_book").val());

        if ($('#file_cover').val() !== "") {
            var file_data = $('#file_cover').prop('files')[0];
            form_data.append('file', file_data);
        }

        var url_ajax = '<?= base_url() ?>dashboard/ubah_cover_buku'

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
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'berhasil ubah cover buku',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    })
                    $('#ubahcover').modal('hide');
                    reload_table()

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal tambah data',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        },
                        buttonsStyling: false
                    })
                }
            },
            error: function(err) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Telah terjadi kesalahan, silahkan contact CS',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                })
            }
        })
    })

    function ubah_cover(id) {
        $('#ubahcover').modal('show')
        $('#id_book').val(id)
    }
</script>