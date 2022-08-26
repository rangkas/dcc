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
                            <h4>Edit Data Pendaftaran PKL
                            </h4>
                        </div>

                        <div class="card-body">

                            <div class="card-body">


                                <form action="/judulta/<?= $product->id_judul_ta; ?>" method="POST" enctype='multipart/form-data'>
                                    <?php csrf_field() ?>
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" value="<?= $product->acc_judul; ?>" name="acc_judul">
                                    <input type="hidden" value="<?= $product->file_pengajuan; ?>" name="file_pengajuan">
                                    <input type="hidden" value="<?= $product->transkrip; ?>" name="transkrip">



                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-vertical"><b>Identitas Mahasiswa</b></label>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
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
                                                        <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->prodi; ?>" name="prodi" placeholder="Prodi">
                                                    </div>
                                                </div>
                                            </td>


                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical"><b>Judul TA dan Pembimbing </b></label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Judul 1</label>
                                                        <input required class="form-control" type="text" value="<?= $product->judul1; ?>" name="judul1" placeholder="Judul Tugas Akhir 1">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical">Judul 2</label>
                                                        <input required class="form-control" type="text" value="<?= $product->judul2; ?>" name="judul2" placeholder="Judul Tugas Akhir 2">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <label for="contact-info-vertical">Nama Dosen Pembimbing</label>

                                                    <div class="form-group">
                                                        <input required class="form-control" type="text" value="<?= $product->dosen_pembimbing; ?>" name="dosen_pembimbing" placeholder="Judul Tugas Akhir 2">

                                                    </div>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical"><b>Berkas Pengajuan Judul</b></label>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Berkas Acc Judul</label>
                                                    <div class="form-group">
                                                        <input name="acc_judul" type="file">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">File Pengajuan Judul TA</label>
                                                    <div class="form-group">
                                                        <input name="file_pengajuan" type="file">
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Transkrip Nilai</label>
                                                    <div class="form-group">
                                                        <input name="transkrip" type="file">
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>



                                    </table>




                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-danger">Edit</button>
                                    </div>

                                </form>

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