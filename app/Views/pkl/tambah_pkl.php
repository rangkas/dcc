<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<?php
$session = session();
$npm = $session->get('npm');
$nama = $session->get('nama');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script type='text/javascript'>
    $(window).load(function() {
        $("#bekerja").change(function() {
            console.log($("#bekerja option:selected").val());
            if ($("#bekerja option:selected").val() != 'bekerja') {
                $('#jabatan').prop('hidden', 'true');
                $('#bidang').prop('hidden', 'true');
                $('#lama_bekerja').prop('hidden', 'true');

            } else {

                $('#jabatan').prop('hidden', false);
                $('#bidang').prop('hidden', false);
                $('#lama_bekerja').prop('hidden', false);
            }
        });
    });
</script>


<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Pendaftaran PKL
                            </h4>

                            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('pesan'); ?>
                                </div>
                        </div>
                    <?php endif; ?>
                    </div>


                    <form action="/pkl" method="POST" enctype='multipart/form-data'>
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

                                <input type="hidden" value="0" name="disetujui">
                                <input type="hidden" value="0" name="alasan">
                                <input type="hidden" value="0" name="dosen_pembimbing">
                                <input type="hidden" value="0" name="nilai_dosen_pembimbing">
                                <input type="hidden" value="0" name="nilai_pembimbing_instansi">


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
                                            <div class="form-group">
                                                <label for="first-name-vertical">No Hp Aktif (WA)</label>
                                                <input required class="form-control" type="text" name="no_hp" placeholder="No Hp Aktif (WA)">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical"><b>Status Bekerja</b></label>
                                                    <select required class="form-select" id="bekerja" name="semester">
                                                        <option value="bekerja">Sudah Bekerja</option>
                                                        <option value="belum">Belum Bekerja</option>
                                                    </select>
                                                </div>
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
                                                    <input required class="form-control" type="text" name="nama_instansi" placeholder="Nama Instansi">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Alamat Instansi</label>
                                                <input required class="form-control" type="text" name="alamat_instansi" placeholder="Alamat Instansi">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr id="jabatan">
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Jabatan</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="email" name="jabatan" placeholder="Jabatan" id="jabatan">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Bidang</label>
                                                <input class="form-control" type="text" name="bidang" placeholder="Bidang" id="bidang">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td id="lama_bekerja">
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Lama Bekerja [Tahun] [Bulan]</label>

                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="lama_bekerja" placeholder="Lama Bekerja [Tahun] [Bulan]" id="lama_bekerja">

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">No HP Instansi</label>
                                                <input required class="form-control" type="text" name="no_instansi" placeholder="No HP Instansi">
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
                                                    <input required name="persyaratan" type="file">
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Transkrip Nilai</label>
                                                <div class="form-group">
                                                    <input required name="transkrip" type="file">
                                                </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Sertifikat Ujian Kompetensi Dasar (Office)</label>
                                                <div class="form-group">
                                                    <input required name="sertifikat" type="file">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">FRS Pengambilan MK PKL</label>
                                                <div class="form-group">
                                                    <input required name="frs" type="file">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Scan Bukti Pembayaran PKL</label>
                                                <div class="form-group">
                                                    <input required name="pembayaran_pkl" type="file">
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
                                                    <input required name="surat_bekerja" type="file">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Scan Slip Gaji 2 Bulan Terakhir</label>
                                                <div class="form-group">
                                                    <input required name="slip_gaji" type="file">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                </table>
                                <div class="form-group">

                                    <div class="form-group">
                                        <input required type="checkbox" id="checkbox1" class="form-check-input" name="kesanggupan" value="1">
                                        <label for="checkbox1">Kesanggupan Pengumpulan Berkas Fotocopy Persyaratan PKL yang dimasukkan kedalam map buffalo warna merah</label>
                                    </div>
                                </div>


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