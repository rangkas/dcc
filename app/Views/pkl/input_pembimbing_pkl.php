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
                            <h4>Input Pembimbing PKL
                            </h4>
                            <?php
                            if ($product->disetujui == 2) {
                            ?>
                                Alasan Penolakan : <br>
                                <font color="red"> <?= $product->alasan; ?></font>

                            <?php
                            }
                            ?>

                        </div>

                        <div class="card-body">
                            <div class="card-body">
                                <table width="100%">

                                    <?php
                                    if ($product->dosen_pembimbing == "0") {
                                    ?>

                                        <form action="/pembimbingpkl/<?= $product->id_pkl; ?>" method="POST" enctype='multipart/form-data'>
                                            <?php csrf_field() ?>
                                            <input type="hidden" name="_method" value="PUT">
                                            <tr>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Nama Dosen Pembimbing</label>


                                                            <select required class="form-select" name="dosen_pembimbing">
                                                                <?php foreach ($dosen as $dos) { ?>
                                                                    <option value=" <?= $dos['nama']; ?>">
                                                                        <?= $dos['nama']; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>




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
                                        <label for="email-id-vertical">Nama Dosen Pembimbing</label>


                                        <input type="text" required readonly id="email-id-vertical" class="form-control" value="<?= $product->dosen_pembimbing; ?>">
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

                                <tr id="jabatan">
                                    <td>
                                        <div class="col-12">
                                            <label for="contact-info-vertical">Jabatan</label>
                                            <div class="form-group">
                                                <input class="form-control" readonly type="text" value="<?= $product->jabatan; ?>" name="jabatan" placeholder="Jabatan" id="jabatan">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Bidang</label>
                                            <input class="form-control " readonly type="text" value="<?= $product->bidang; ?>" name="bidang" placeholder="Bidang" id="bidang">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td id="lama_bekerja">
                                        <div class="col-12">
                                            <label for="contact-info-vertical">Lama Bekerja [Tahun] [Bulan]</label>

                                            <div class="form-group">
                                                <input class="form-control" readonly type="text" value="<?= $product->lama_bekerja; ?>" name="lama_bekerja" placeholder="Lama Bekerja [Tahun] [Bulan]" id="lama_bekerja">

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">No HP Instansi</label>
                                            <input required readonly class="form-control" type="text" value="<?= $product->no_instansi; ?>" name="no_instansi" placeholder="No HP Instansi">
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

                                                <a href="<?php base_url(); ?>/uploads/pkl/persyaratan/<?= $product->persyaratan; ?>"> Download </a>
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Transkrip Nilai</label>
                                            <div class="form-group">

                                                <a href="<?php base_url(); ?>/uploads/pkl/transkrip/<?= $product->transkrip; ?>"> Download </a>

                                            </div>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Sertifikat Ujian Kompetensi Dasar (Office)</label>
                                            <div class="form-group">

                                                <a href="<?php base_url(); ?>/uploads/pkl/sertifikat/<?= $product->sertifikat; ?>"> Download </a>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">FRS Pengambilan MK PKL</label>
                                            <div class="form-group">
                                                <a href="<?php base_url(); ?>/uploads/pkl/frs/<?= $product->frs; ?>"> Download </a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Scan Bukti Pembayaran PKL</label>
                                            <div class="form-group">

                                                <a href="<?php base_url(); ?>/uploads/pkl/pembayaran_pkl/<?= $product->pembayaran_pkl; ?>"> Download </a>

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

                                                <a href="<?php base_url(); ?>/uploads/pkl/surat_bekerja/<?= $product->surat_bekerja; ?>"> Download </a>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="first-name-vertical">Scan Slip Gaji 2 Bulan Terakhir</label>
                                            <div class="form-group">

                                                <a href="<?php base_url(); ?>/uploads/pkl/slip_gaji/<?= $product->slip_gaji; ?>"> Download </a>

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