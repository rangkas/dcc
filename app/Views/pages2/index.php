<?php

$servername = "localhost";
$database = "kendaraan";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$roda_dua = mysqli_query($conn, "select count(jenis) as roda_dua from kendaraan where jenis='Roda Dua'");
$hasil_roda_dua = mysqli_fetch_array($roda_dua);
$hasil_roda2 = $hasil_roda_dua['roda_dua'];

$roda_tiga = mysqli_query($conn, "select count(jenis) as roda_tiga from kendaraan where jenis='Roda Tiga'");
$hasil_roda_tiga = mysqli_fetch_array($roda_tiga);
$hasil_roda3 = $hasil_roda_tiga['roda_tiga'];

$roda_empat = mysqli_query($conn, "select count(jenis) as roda_empat from kendaraan where jenis='Roda Empat'");
$hasil_roda_empat = mysqli_fetch_array($roda_empat);
$hasil_roda4 = $hasil_roda_empat['roda_empat'];

$bus = mysqli_query($conn, "select count(jenis) as bus from kendaraan where jenis='Bus'");
$hasil_bus = mysqli_fetch_array($bus);
$hasil_buss = $hasil_bus['bus'];


?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">

                            <div class="col-12 col-lg-12">
                                <div class="row">
                                    <div class=" col-6 col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-3 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="stats-icon purple">
                                                            <i class="iconly-boldShow"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="text-muted font-semibold">Roda Dua</h6>
                                                        <h6 class="font-extrabold mb-0"><?php echo $hasil_roda2; ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-3 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="stats-icon blue">
                                                            <i class="iconly-boldProfile"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="text-muted font-semibold">Roda Tiga</h6>
                                                        <h6 class="font-extrabold mb-0"><?php echo $hasil_roda3; ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-3 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="stats-icon green">
                                                            <i class="iconly-boldAdd-User"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="text-muted font-semibold">Roda Empat</h6>
                                                        <h6 class="font-extrabold mb-0"><?php echo $hasil_roda4; ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-3 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="stats-icon red">
                                                            <i class="iconly-boldBookmark"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="text-muted font-semibold">Bus</h6>
                                                        <h6 class="font-extrabold mb-0"><?php echo $hasil_buss; ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <img src="<?php base_url(); ?>/assets/images/bg.jpg" width="100%">


                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
</div>

<?= $this->endSection(); ?>