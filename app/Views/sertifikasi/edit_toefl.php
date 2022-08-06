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
                            <h4>Edit Data Pendaftaran Sertifikasi TOEFL
                            </h4>

                        </div>

                        <?php $this->session = session(); ?>
                        <?php if ($this->session->get('status') != "prodi") { ?>

                            <form action="/toefl/<?= $product->id_toefl; ?>" method="POST" enctype='multipart/form-data'>
                                <?php csrf_field() ?>
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" value="<?= $product->foto; ?>" name="foto_lama">
                                <input type="hidden" value="<?= $product->ijazah; ?>" name="ijazah_lama">
                                <input type="hidden" value="<?= $product->skhu; ?>" name="skhu_lama">
                                <input type="hidden" value="<?= $product->spp; ?>" name="spp_lama">
                                <input type="hidden" required readonly id="email-id-vertical" class="form-control" value="0" name="nilai_listening">
                                <input type="hidden" required readonly id="email-id-vertical" class="form-control" value="0" name="nilai_struktur">
                                <input type="hidden" required readonly id="email-id-vertical" class="form-control" value="0" name="nilai_reading">

                                <div class="card-body">
                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-vertical">Nama</label>
                                                        <input type="text" id="email-id-vertical" class="form-control" value="<?= $product->nama; ?>" name="nama" placeholder="Nama">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-vertical">NPM</label>
                                                        <input type="text" id="email-id-vertical" class="form-control" value="<?= $product->npm; ?>" name="npm" placeholder="NPM">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-vertical">Program Studi</label>
                                                        <input type="text" id="email-id-vertical" class="form-control" name="prodi" value="<?= $product->prodi; ?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Semester</label>
                                                        <input type="text" id="email-id-vertical" class="form-control" name="semester" value="<?= $product->semester; ?>">

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Nilai Mata Kuliah Prasyarat</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="nilai_prasyarat" value="<?= $product->nilai_prasyarat; ?>">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-12">
                                                    <label for="contact-info-vertical">Email</label>

                                                    <div class="form-group">
                                                        <input type="text" id="email-id-vertical" class="form-control" name="email" value="<?= $product->email; ?>">

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">No Hp Aktif (WA)</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="no_hp" value="<?= $product->no_hp; ?>">

                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <label for="contact-info-vertical">Foto Formal 3x4 Terbaru</label>

                                                    <div class="form-group">
                                                        <input name="foto" type="file" id="foto">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Asli Ijazah</label>
                                                    <div class="form-group">
                                                        <input name="ijazah" type="file" id="foto">
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Asli SKHU</label>
                                                    <div class="form-group">
                                                        <input name="skhu" type="file" id="foto">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Upload Bukti Pembayaran (SPP)</label>
                                                    <div class="form-group">
                                                        <input name="spp" type="file" id="foto">
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>

                                            </td>
                                        </tr>

                                    </table>


                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-danger">Edit</button>
                                    </div>


                                </div>



                    </div>
                    <!-- /.card-body -->


                </div>
                </form>

            <?php
                        } else {
            ?>




                <form action="/toefl/<?= $product->id_toefl; ?>" method="POST" enctype='multipart/form-data'>
                    <?php csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" value="1" name="isi_nilai">


                    <div class="card-body">
                        <table width="100%">
                            <tr>
                                <td>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-vertical">Nama</label>
                                            <input type="text" readonly id="email-id-vertical" class="form-control" value="<?= $product->nama; ?>" name="nama" placeholder="Nama">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-vertical">NPM</label>
                                            <input type="text" readonly id="email-id-vertical" class="form-control" value="<?= $product->npm; ?>" name="npm" placeholder="NPM">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-vertical">Nilai Listening Comprehension</label>
                                            <input type="text" id="email-id-vertical" class="form-control" name="nilai_listening">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-info-vertical">Nilai Strucuter and Written Expression</label>
                                            <input type="text" id="email-id-vertical" class="form-control" name="nilai_struktur">

                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-vertical">Nilai Reading Comprehension</label>
                                            <input type="text" id="email-id-vertical" class="form-control" name="nilai_reading">
                                        </div>
                                    </div>
                                </td>

                            </tr>


                        </table>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Isi Nilai</button>
                        </div>


                    </div>



            </div>
            <!-- /.card-body -->


        </div>
        </form>




    <?php
                        }
    ?>


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