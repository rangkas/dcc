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
                            <h4>Tambah Data Kendaraan
                            </h4>

                            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('pesan'); ?>
                                </div>
                        </div>
                    <?php endif; ?>
                    </div>


                    <form action="/kendaraan" method="POST" enctype='multipart/form-data'>
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


                                <table width="100%">
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Nomor Registrasi / Nomor Polisi</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="no_registrasi" placeholder="Nomor Registrasi / Nomor Polisi">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Nama Pemilik</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="nama_pemilik" placeholder="Nama Pemilik">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Alamat</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="alamat" placeholder="Alamat">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Merk</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="merk" placeholder="Merk">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Tipe</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="tipe" placeholder="Tipe">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Jenis</label>
                                                <input class="form-control" type="text" name="jenis" id="tanpa-rupiah" placeholder="Jenis">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Model</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="model" placeholder="Model">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Tahun Pembuatan</label>
                                                <input class="form-control" type="text" name="tahun_pembuatan" placeholder="Tahun Pembuatan">

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Isi Silinder</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="isi_silinder" placeholder="Isi Silinder">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nomor Rangka</label>
                                                <input class="form-control" type="text" name="no_rangka" placeholder="Nomor Rangka">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Nomor Mesin</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="no_mesin" placeholder="Nomor Mesin">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Warna</label>
                                                <input class="form-control" type="text" name="warna" placeholder="Warna">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Bahan Bakar</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="bahan_bakar" placeholder="Bahan Bakar">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Warna TNKB</label>
                                                <input class="form-control" type="text" name="warna_tnkb" placeholder="Warna TNKB">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Nomor BPKB</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="no_bpkb" placeholder="Nomor BPKB">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Kode Lokasi</label>
                                                <input class="form-control" type="text" name="kode_lokasi" placeholder="Kode Lokasi">
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Foto Pajak</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input name="foto_stnk" type="file" id="foto_stnk">

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Foto Kendaraan</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input name="foto_kendaraan" type="file" id="foto_kendaraan">

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="checkbox">

                                                        <label for="first-name-vertical">Pinjam Pakai</label>
                                                        <input class="form-control" type="text" name="pinjam_pakai" placeholder="Kendaraan Pinjam Pakai">


                                                        <!-- <input name="pinjam_pakai" value="1" type="checkbox" id="checkbox1" class="form-check-input">
                                                        <label for="checkbox1">Pinjam Pakai</label> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>

                                </table>



                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger">Submit</button>
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