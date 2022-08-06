<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPP</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?php base_url(); ?>/assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="<?php base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/css/app.css">
    <link rel="shortcut icon" href="<?php base_url(); ?>/assets/images/favicon.svg" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">

            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php base_url(); ?>/home/home.php"><img src="<?php base_url(); ?>/assets/images/logo3.png" style="width:100%; height:100%;"></a>
                        </div>

                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">
                            <?php $this->session = session(); ?>
                            <?php echo " " . $this->session->get('nama') . " ";
                            ?>
                        </li>
                        <br>

                        <li class="sidebar-item ">
                            <a href="/home" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="/sertifikasi" class='sidebar-link'>


                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#bookmarks-fill"></use>
                                </svg>
                                <span>Sertifikasi</span>
                            </a>

                            <ul class="submenu ">

                                <?php $this->session = session(); ?>
                                <?php if ($this->session->get('status') == "admin" || $this->session->get('status') == "mahasiswa") {
                                    $this->session = session();
                                ?>
                                    <li class="submenu-item ">
                                        <a href="/ukd">UKD</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/sertifikasi/toefl">TOEFL</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/sertifikasi/jadwal">Informasi Jadwal</a>
                                    </li>
                                <?php } ?>

                                <?php if ($this->session->get('status') == "admin" || $this->session->get('status') == "prodi") {
                                    $this->session = session();
                                ?>
                                    <li class="submenu-item ">
                                        <a href="/sertifikasi/nilai">Nilai</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/sertifikasi/rekap_nilai">Rekap Nilai</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/sertifikasi/sertifikat">Sertifikat</a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </li>



                        <li class="sidebar-item  has-sub">
                            <a href="/pkl" class='sidebar-link'>
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#file-earmark-medical-fill"></use>
                                </svg>
                                <span>PKL</span>
                            </a>

                            <ul class="submenu ">

                                <?php $this->session = session(); ?>
                                <?php if ($this->session->get('status') == "admin" || $this->session->get('status') == "mahasiswa") {
                                    $this->session = session();
                                ?>
                                    <li class="submenu-item ">
                                        <a href="/pkl/daftar">Pendaftaran</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/pkl/bukti">Bukti Persetujuan Tempat PKL</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/pkl/download">Download Form</a>
                                    </li>
                                <?php } ?>

                                <?php if ($this->session->get('status') == "admin" || $this->session->get('status') == "prodi") {
                                    $this->session = session();
                                ?>
                                    <li class="submenu-item ">
                                        <a href="/pkl/pengesahan">Pengesahan Tempat PKL</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/pkl/pembimbing">Penentuan Pembimbing PKL</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/pkl/nilai">Input Nilai</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/pkl/rekap">Rekap Nilai</a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </li>


                        <li class="sidebar-item  has-sub">
                            <a href="/pkl" class='sidebar-link'>
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#check-square-fill"></use>
                                </svg>
                                <span>Tugas Akhir</span>
                            </a>

                            <ul class="submenu ">

                                <?php $this->session = session(); ?>
                                <?php if ($this->session->get('status') == "admin" || $this->session->get('status') == "mahasiswa") {
                                    $this->session = session();
                                ?>
                                    <li class="submenu-item ">
                                        <a href="/tugasakhir/judul">Pengajuan Judul</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/tugasakhir/bukti">Bukti Pengajuan</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/tugasakhir/proposal">Pengajuan Seminar Proposal</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/tugasakhir/ta">Pengajuan Sidang Tugas Akhir</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/tugasakhir/download">Download</a>
                                    </li>
                                <?php } ?>

                                <?php if ($this->session->get('status') == "admin" || $this->session->get('status') == "prodi") {
                                    $this->session = session();
                                ?>
                                    <li class="submenu-item ">
                                        <a href="/tugasakhir/pengesahan">Pengesahan Judul TA</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/tugasakhir/pembimbing">Penentuan Pembimbing PKL</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/tugasakhir/nilai_proposal">Input Nilai Proposal</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="/tugasakhir/nilai_ta">Input Nilai Sidang TA</a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </li>


                        <li class="sidebar-item ">
                            <a href="/auth/logout" class='sidebar-link'>
                                <svg class="bi" width="1em" height="1em" fill="currentColor">
                                    <use xlink:href="<?php base_url(); ?>/assets/vendors/bootstrap-icons/bootstrap-icons.svg#arrow-bar-left"></use>
                                </svg>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>

        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Sistem Informasi Penunjang Prodi (SIPP)</h3>
            </div>

            <?= $this->renderSection('content') ?>


            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">

                    </div>
                    <div class="float-end">
                        <p>AMIK DCC Pringsewu
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php base_url(); ?>/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?php base_url(); ?>/assets/js/pages/dashboard.js"></script>

    <script src="<?php base_url(); ?>/assets/js/main.js"></script>


    <script src="<?php base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


    <script src="<?php base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php base_url(); ?>/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="<?php base_url(); ?>/assets/js/main.js"></script>

</body>

</html>