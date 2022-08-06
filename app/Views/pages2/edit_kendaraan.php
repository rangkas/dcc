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
                            <h4>Edit Data Kendaraan
                            </h4>

                        </div>



                        <form action="/kendaraan/<?= $product->id_kendaraan; ?>" method="POST" enctype='multipart/form-data'>
                            <?php csrf_field() ?>
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" value="<?= $product->foto_stnk; ?>" name="foto_stnk_lama">
                            <input type="hidden" value="<?= $product->foto_kendaraan; ?>" name="foto_kendaraan_lama">




                            <div class="card-body">


                                <table width="100%">
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Nomor Registrasi / Nomor Polisi</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="no_registrasi" value="<?= $product->no_registrasi; ?>" placeholder="Nomor Registrasi / Nomor Polisi">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Nama Pemilik</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="nama_pemilik" value="<?= $product->nama_pemilik; ?>" placeholder="Nama Pemilik">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Alamat</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="alamat" value="<?= $product->alamat; ?>" placeholder="Alamat">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Merk</label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="merk" value="<?= $product->merk; ?>" placeholder="Merk">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Tipe</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="tipe" value="<?= $product->tipe; ?>" placeholder="Tipe">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Jenis</label>
                                                <input class="form-control" type="text" name="jenis" value="<?= $product->jenis; ?>" id="tanpa-rupiah" placeholder="Jenis">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Model</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="model" value="<?= $product->model; ?>" placeholder="Model">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Tahun Pembuatan</label>
                                                <input class="form-control" type="text" name="tahun_pembuatan" value="<?= $product->tahun_pembuatan; ?>" placeholder="Tahun Pembuatan">

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Isi Silinder</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="isi_silinder" value="<?= $product->isi_silinder; ?>" placeholder="Isi Silinder">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nomor Rangka</label>
                                                <input class="form-control" type="text" name="no_rangka" value="<?= $product->no_rangka; ?>" placeholder="Nomor Rangka">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Nomor Mesin</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="no_mesin" value="<?= $product->no_mesin; ?>" placeholder="Nomor Mesin">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Warna</label>
                                                <input class="form-control" type="text" name="warna" value="<?= $product->warna; ?>" placeholder="Warna">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Bahan Bakar</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="bahan_bakar" value="<?= $product->bahan_bakar; ?>" placeholder="Bahan Bakar">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Warna TNKB</label>
                                                <input class="form-control" type="text" name="warna_tnkb" value="<?= $product->warna_tnkb; ?>" placeholder="Warna TNKB">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Nomor BPKB</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="no_bpkb" value="<?= $product->no_bpkb; ?>" placeholder="Nomor BPKB">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Kode Lokasi</label>
                                                <input class="form-control" type="text" name="kode_lokasi" value="<?= $product->kode_lokasi; ?>" placeholder="Kode Lokasi">
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
                                    </tr>
                                </table>

                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Kendaraan</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="foto_kendaraan" type="file" id="foto_kendaraan">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">



                                        <label for="first-name-vertical">Pinjam Pakai</label>
                                        <input class="form-control" type="text" name="pinjam_pakai" value="<?= $product->pinjam_pakai; ?>" placeholder="Pinjam Pakai">


                                        <!-- <div class="checkbox">


                                            <input name="pinjam_pakai" value="1" type="checkbox" id="checkbox1" <?php if ($product->pinjam_pakai == 1) {
                                                                                                                    echo "checked";
                                                                                                                } ?> class="form-check-input">
                                            <label for="checkbox1">Pinjam Pakai</label>
                                        </div> -->

                                    </div>
                                </div>


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