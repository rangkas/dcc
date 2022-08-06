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
                            <h4>Edit Data Pendaftaran Sertifikasi UKD
                            </h4>

                        </div>

                        <form action="/ukd/<?= $product->id_ukd; ?>" method="POST" enctype='multipart/form-data'>
                            <?php csrf_field() ?>
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" value="<?= $product->foto; ?>" name="foto_lama">
                            <input type="hidden" value="<?= $product->ijazah; ?>" name="ijazah_lama">
                            <input type="hidden" value="<?= $product->ktp; ?>" name="ktp_lama">
                            <input type="hidden" value="<?= $product->kk; ?>" name="kk_lama">
                            <input type="hidden" value="<?= $product->spp; ?>" name="spp_lama">


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
                                                    <label for="email-id-vertical">Skema / Jenis Kompetensi Keahlian</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="skema" value="<?= $product->skema; ?>">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">Semester</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="semester" value="<?= $product->semester; ?>">

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nilai Mata Kuliah Prasyarat</label>
                                                <input type="text" id="email-id-vertical" class="form-control" name="nilai_prasyarat" value="<?= $product->nilai_prasyarat; ?>">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Tempat Lahir</label>

                                                <div class="form-group">
                                                    <input type="text" id="email-id-vertical" class="form-control" name="tempat_lahir" value="<?= $product->tempat_lahir; ?>">

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Tanggal Lahir</label>
                                                <input type="date" id="email-id-vertical" class="form-control" name="tanggal_lahir" value="<?= $product->tanggal_lahir; ?>">


                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Email</label>

                                                <div class="form-group">
                                                    <input type="text" id="email-id-vertical" class="form-control" name="email" value="<?= $product->email; ?>">

                                                </div>
                                            </div>
                                        </td>
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
                                                <label for="first-name-vertical">Scan Asli KTP</label>
                                                <div class="form-group">
                                                    <input name="ktp" type="file" id="foto">
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Scan Asli KK</label>
                                                <div class="form-group">
                                                    <input name="kk" type="file" id="foto">
                                                </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Upload Bukti Pembayaran (SPP)</label>
                                                <div class="form-group">
                                                    <input name="spp" type="file" id="foto">
                                                </div>
                                            </div>
                                        </td>
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