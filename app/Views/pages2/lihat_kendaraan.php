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
                            <h4>Lihat Data Kendaraan
                            </h4>

                            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('pesan'); ?>
                                </div>
                        </div>
                    <?php endif; ?>
                    </div>


                    <input type="hidden" name="_method" value="PUT">
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
                                                <input type="text" readonly id="email-id-vertical" class="form-control" name="no_registrasi" value="<?= $product->no_registrasi; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Nama Pemilik</label>
                                                <input type="text" readonly id="email-id-vertical" class="form-control" name="nama_pemilik" value="<?= $product->nama_pemilik; ?>">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Alamat</label>
                                                <input type="text" readonly id="email-id-vertical" class="form-control" name="alamat" value="<?= $product->alamat; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Merk</label>
                                                <input type="text" readonly id="email-id-vertical" class="form-control" name="merk" value="<?= $product->merk; ?>">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <label for="contact-info-vertical">Tipe</label>

                                            <div class="form-group">
                                                <input class="form-control" type="text" readonly name="tipe" value="<?= $product->tipe; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Jenis</label>
                                            <input class="form-control" type="text" readonly name="jenis" value="<?= $product->jenis; ?>" id="tanpa-rupiah">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <label for="contact-info-vertical">Model</label>

                                            <div class="form-group">
                                                <input class="form-control" type="text" readonly name="model" value="<?= $product->model; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Tahun Pembuatan</label>
                                            <input class="form-control" type="text" readonly name="tahun_pembuatan" value="<?= $product->tahun_pembuatan; ?>">

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <label for="contact-info-vertical">Isi Silinder</label>

                                            <div class="form-group">
                                                <input class="form-control" type="text" readonly name="isi_silinder" value="<?= $product->isi_silinder; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nomor Rangka</label>
                                            <input class="form-control" type="text" readonly name="no_rangka" value="<?= $product->no_rangka; ?>">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <label for="contact-info-vertical">Nomor Mesin</label>

                                            <div class="form-group">
                                                <input class="form-control" type="text" readonly name="no_mesin" value="<?= $product->no_mesin; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Warna</label>
                                            <input class="form-control" type="text" readonly name="warna" value="<?= $product->warna; ?>">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <label for="contact-info-vertical">Bahan Bakar</label>

                                            <div class="form-group">
                                                <input class="form-control" type="text" readonly name="bahan_bakar" value="<?= $product->bahan_bakar; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Warna TNKB</label>
                                            <input class="form-control" type="text" readonly name="warna_tnkb" value="<?= $product->warna_tnkb; ?>">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="col-12">
                                            <label for="contact-info-vertical">Nomor BPKB</label>

                                            <div class="form-group">
                                                <input class="form-control" type="text" readonly name="no_bpkb" value="<?= $product->no_bpkb; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Kode Lokasi</label>
                                            <input class="form-control" type="text" readonly name="kode_lokasi" value="<?= $product->kode_lokasi; ?>">
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto Pajak</label>
                                            <div class="input-group">
                                                <div class="custom-file">

                                                    <a href="<?php base_url(); ?>/uploads/stnk/<?= $product->foto_stnk; ?>" target="blank"> <img src=" <?php base_url(); ?>/uploads/stnk/<?= $product->foto_stnk; ?>" style="width:200px;hight:300px;" alt=""> </a>

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
                                        <a href="<?php base_url(); ?>/uploads/kendaraan/<?= $product->foto_kendaraan; ?>" target="blank"> <img src=" <?php base_url(); ?>/uploads/kendaraan/<?= $product->foto_kendaraan; ?>" style="width:200px;hight:300px;" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <?php if ($product->pinjam_pakai != NULL) {
                                    ?>
                                        <br><br>

                                        <label for="first-name-vertical">Pinjam Pakai</label>
                                        <input class="form-control" type="text" readonly name="pinjam_pakai" value="<?= $product->pinjam_pakai; ?>">

                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>

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