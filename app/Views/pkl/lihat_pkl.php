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
                                <form action="/pengesahanpkl/<?= $product->id_pkl; ?>" method="POST" enctype='multipart/form-data'>
                                    <?php csrf_field() ?>
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="disetujui" value="1">

                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">Verifikasi Lokasi PKL</h5>
                                                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Yakin Verifikasi Lokasi PKL ?<br><br>

                                                        Nama Instansi : <?= $product->nama_instansi; ?> <br>
                                                        Alamat Instansi : <?= $product->alamat_instansi; ?> <br>
                                                        No. Telp. Instansi : <?= $product->no_instansi; ?> <br>

                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Verifikasi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                <form action="/pengesahanpkl/<?= $product->id_pkl; ?>" method="POST" enctype='multipart/form-data'>
                                    <?php csrf_field() ?>
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="disetujui" value="2">

                                    <div class="modal fade text-left" id="default2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">Tolak Lokasi PKL</h5>
                                                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Yakin Tolak Lokasi PKL ?<br><br>

                                                        Nama Instansi : <?= $product->nama_instansi; ?> <br>
                                                        Alamat Instansi : <?= $product->alamat_instansi; ?> <br>
                                                        No. Telp. Instansi : <?= $product->no_instansi; ?> <br>
                                                        <br>
                                                        Alasan: <br>
                                                        <textarea class="form-control" name="alasan" required id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                <?php
                                $this->session = session();
                                if (($this->session->get('status') == "admin" || $this->session->get('status') == "prodi") && $product->disetujui == 0) {
                                ?>
                                    <button type="button" class="btn btn-primary block" data-bs-toggle="modal" data-bs-target="#default">
                                        Verifikasi
                                    </button>
                                    <button type="button" class="btn btn-danger block" data-bs-toggle="modal" data-bs-target="#default2">
                                        Tolak
                                    </button>
                                <?php
                                }
                                ?>
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