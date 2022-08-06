<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<?php
$session = session();
$npm = $session->get('npm');
$nama = $session->get('nama');
?>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar Sertifikasi TOEFL
                            </h4>

                            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('pesan'); ?>
                                </div>
                        </div>
                    <?php endif; ?>
                    </div>


                    <form action="/toefl" method="POST" enctype='multipart/form-data'>
                        <?php csrf_field(); ?>
                        <div class="card-body">
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <h4>Periksa Entrian Form</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="card-body">

                                <input type="hidden" required readonly id="email-id-vertical" class="form-control" value="0" name="nilai_listening">
                                <input type="hidden" required readonly id="email-id-vertical" class="form-control" value="0" name="nilai_struktur">
                                <input type="hidden" required readonly id="email-id-vertical" class="form-control" value="0" name="nilai_reading">


                                <table width="100%">
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Nama</label>
                                                    <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?php echo $nama; ?>" name="nama" placeholder="Nama">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">NPM</label>
                                                    <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?php echo $npm; ?>" name="npm" placeholder="NPM">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Program Studi</label>
                                                    <input type="text" required readonly id="email-id-vertical" class="form-control" value="Manajemen Informatika" name="prodi" placeholder="Prodi">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">Semester</label>
                                                    <select required class="form-select" id="basicSelect" name="semester">
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Nilai Mata Kuliah Prasyarat</label>
                                                    <select required class="form-select" id="basicSelect" name="nilai_prasyarat">
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Email</label>

                                                <div class="form-group">
                                                    <input required class="form-control" type="email" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>

                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">No Hp Aktif (WA)</label>
                                                <input required class="form-control" type="text" name="no_hp" placeholder="No Hp Aktif (WA)">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Foto Formal 3x4 Terbaru</label>

                                                <div class="form-group">
                                                    <input required name="foto" type="file" id="foto">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Scan Asli Ijazah</label>
                                                <div class="form-group">
                                                    <input required name="ijazah" type="file" id="foto">
                                                </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Scan Asli SKHU</label>
                                                <div class="form-group">
                                                    <input required name="skhu" type="file" id="foto">
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Upload Bukti Pembayaran (SPP)</label>
                                                <div class="form-group">
                                                    <input required name="spp" type="file" id="foto">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </table>



                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
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