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
                            <h4>Input Nilai PKL
                            </h4>
                        </div>

                        <div class="card-body">
                            <div class="card-body">
                                <table width="100%">

                                    <?php
                                    if ($product->nilai_dosen_pembimbing == "0") {
                                    ?>

                                        <form action="/nilaipkl/<?= $product->id_pkl; ?>" method="POST" enctype='multipart/form-data'>
                                            <?php csrf_field() ?>
                                            <input type="hidden" name="_method" value="PUT">
                                            <tr>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Nilai Dosen Pembimbing</label>

                                                            <input type="text" required id="email-id-vertical" name="nilai_dosen_pembimbing" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Nilai Pembimbing Instansi</label>

                                                            <input type="text" required id="email-id-vertical" name="nilai_pembimbing_instansi" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <button type="submit" class="btn btn-primary">Submit</button></td>
                                            </tr>
                                        </form>
                                </table>
                            <?php } else {
                            ?>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Nilai Dosen Pembimbing</label>
                                        <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->nilai_dosen_pembimbing; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email-id-vertical">Nilai Pembimbing Instansi</label>
                                        <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->nilai_pembimbing_instansi; ?>">
                                    </div>
                                </div>
                            <?php
                                    }
                            ?>

                            <br><br><br>
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
                                                <input type="text" required readonly readonly id="email-id-vertical" class="form-control" value="<?= $product->nama; ?>" name="nama">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">NPM</label>
                                                <input type="text" required readonly readonly id="email-id-vertical" class="form-control" value="<?= $product->npm; ?>" name="npm" placeholder="NPM">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Program Studi</label>
                                                <input type="text" required readonly readonly id="email-id-vertical" class="form-control" value="<?= $product->prodi; ?>" name="prodi" placeholder="Prodi">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">No Hp Aktif (WA)</label>
                                            <input required readonly class="form-control" type="text" value="<?= $product->no_hp; ?>" name="no_hp" placeholder="No Hp Aktif (WA)">
                                        </div>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-info-vertical"><b>Lokasi PKL </b></label>

                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <label for="contact-info-vertical">Nama Instansi</label>

                                            <div class="form-group">
                                                <input required readonly class="form-control" type="text" value="<?= $product->nama_instansi; ?>" name="nama_instansi" placeholder="Nama Instansi">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Alamat Instansi</label>
                                            <input required readonly class="form-control" type="text" value="<?= $product->alamat_instansi; ?>" name="alamat_instansi" placeholder="Alamat Instansi">
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