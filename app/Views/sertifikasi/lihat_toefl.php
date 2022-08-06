<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Lihat Data Pendaftaran Sertifikasi TOEFL
                            </h4>
                        </div>

                        <div class="card-body">

                            <div class="card-body">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Nama</label>
                                                    <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->nama; ?>" name="nama" placeholder="Nama">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">NPM</label>
                                                    <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->npm; ?>" name="npm" placeholder="NPM">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Program Studi</label>
                                                    <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->prodi; ?>">
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">Semester</label>
                                                    <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->semester; ?>">

                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nilai Mata Kuliah Prasyarat</label>
                                                <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->nilai_prasyarat; ?>">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Email</label>

                                                <div class="form-group">
                                                    <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->email; ?>">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>

                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">No Hp Aktif (WA)</label>
                                                <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->no_hp; ?>">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nilai Listening Comprehension</label>
                                                <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->nilai_listening; ?>">

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nilai Strucuter and Written Expression</label>
                                                <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->nilai_struktur; ?>">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nilai Reading Comprehension</label>
                                                <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->nilai_reading; ?>">

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Foto Formal 3x4 Terbaru</label>

                                                <div class="form-group">
                                                    <a href="<?php base_url(); ?>/uploads/foto/<?= $product->foto; ?>" target="blank"> <img src=" <?php base_url(); ?>/uploads/foto/<?= $product->foto; ?>" style="width:100px;hight:100px;" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Scan Asli Ijazah</label>
                                                <div class="form-group">
                                                    <a href="<?php base_url(); ?>/uploads/ijazah/<?= $product->ijazah; ?>" target="blank"> <img src=" <?php base_url(); ?>/uploads/ijazah/<?= $product->ijazah; ?>" style="width:100px;hight:100px;" alt="">
                                                    </a>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Scan Asli SKHU</label>
                                                <div class="form-group">
                                                    <a href="<?php base_url(); ?>/uploads/skhu/<?= $product->skhu; ?>" target="blank"> <img src=" <?php base_url(); ?>/uploads/skhu/<?= $product->skhu; ?>" style="width:100px;hight:100px;" alt="">
                                                    </a>
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Upload Bukti Pembayaran (SPP)</label>
                                                <div class="form-group">
                                                    <a href="<?php base_url(); ?>/uploads/spp/<?= $product->spp; ?>" target="blank"> <img src=" <?php base_url(); ?>/uploads/spp/<?= $product->spp; ?>" style="width:100px;hight:100px;" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>

                                </table>




                            </div>
                            <!-- /.card-body -->


                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 1000);
</script>

<?= $this->endSection(); ?>