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
                            <h4>Lihat Data Pendaftaran PKL
                            </h4>
                        </div>

                        <div class="card-body">

                            <div class="card-body">


                                <form action="/pkl/<?= $product->id_pkl; ?>" method="POST" enctype='multipart/form-data'>
                                    <?php csrf_field() ?>
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" value="<?= $product->persyaratan; ?>" name="persyaratan_lama">
                                    <input type="hidden" value="<?= $product->transkrip; ?>" name="transkrip_lama">
                                    <input type="hidden" value="<?= $product->sertifikat; ?>" name="sertifikat_lama">
                                    <input type="hidden" value="<?= $product->frs; ?>" name="frs_lama">
                                    <input type="hidden" value="<?= $product->pembayaran_pkl; ?>" name="pembayaran_pkl_lama">
                                    <input type="hidden" value="<?= $product->surat_bekerja; ?>" name="surat_bekerja_lama">
                                    <input type="hidden" value="<?= $product->slip_gaji; ?>" name="slip_gaji_lama">

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
                                                        <input type="text" readonly required id="email-id-vertical" class="form-control" value="<?= $product->nama; ?>" name="nama">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-vertical">NPM</label>
                                                        <input type="text" readonly required id="email-id-vertical" class="form-control" value="<?= $product->npm; ?>" name="npm" placeholder="NPM">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-vertical">Program Studi</label>
                                                        <input type="text" readonly required id="email-id-vertical" class="form-control" value="<?= $product->prodi; ?>" name="prodi" placeholder="Prodi">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">No Hp Aktif (WA)</label>
                                                    <input required class="form-control" type="text" value="<?= $product->no_hp; ?>" name="no_hp" placeholder="No Hp Aktif (WA)">
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
                                                        <input required class="form-control" type="text" value="<?= $product->nama_instansi; ?>" name="nama_instansi" placeholder="Nama Instansi">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Alamat Instansi</label>
                                                    <input required class="form-control" type="text" value="<?= $product->alamat_instansi; ?>" name="alamat_instansi" placeholder="Alamat Instansi">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr id="jabatan">
                                            <td>
                                                <div class="col-12">
                                                    <label for="contact-info-vertical">Jabatan</label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" value="<?= $product->jabatan; ?>" name="jabatan" placeholder="Jabatan" id="jabatan">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Bidang</label>
                                                    <input class="form-control " type="text" value="<?= $product->bidang; ?>" name="bidang" placeholder="Bidang" id="bidang">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td id="lama_bekerja">
                                                <div class="col-12">
                                                    <label for="contact-info-vertical">Lama Bekerja [Tahun] [Bulan]</label>

                                                    <div class="form-group">
                                                        <input class="form-control" type="text" value="<?= $product->lama_bekerja; ?>" name="lama_bekerja" placeholder="Lama Bekerja [Tahun] [Bulan]" id="lama_bekerja">

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">No HP Instansi</label>
                                                    <input required class="form-control" type="text" value="<?= $product->no_instansi; ?>" name="no_instansi" placeholder="No HP Instansi">
                                                </div>
                                            </td>


                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical"><b>Berkas Persyaratan PKL </b></label>

                                                    </div>
                                                </div>
                                            </td>

                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Berkas Persyaratan PKL</label>
                                                    <div class="form-group">
                                                        <input name="persyaratan" type="file">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Transkrip Nilai</label>
                                                    <div class="form-group">
                                                        <input name="transkrip" type="file">
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Sertifikat Ujian Kompetensi Dasar (Office)</label>
                                                    <div class="form-group">
                                                        <input name="sertifikat" type="file">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">FRS Pengambilan MK PKL</label>
                                                    <div class="form-group">
                                                        <input name="frs" type="file">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Bukti Pembayaran PKL</label>
                                                    <div class="form-group">
                                                        <input name="pembayaran_pkl" type="file">
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="contact-info-vertical"><b>Upload File Scan Berkas Pendukung</b></label>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Surat Keterangan Bekerja Bermatrai Rp 10.000</label>
                                                    <div class="form-group">
                                                        <input name="surat_bekerja" type="file">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Slip Gaji 2 Bulan Terakhir</label>
                                                    <div class="form-group">
                                                        <input name="slip_gaji" type="file">
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