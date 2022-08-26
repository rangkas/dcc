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
                            <h4>Form Pendaftaran Judul TA
                            </h4>

                            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('pesan'); ?>
                                </div>
                        </div>
                    <?php endif; ?>
                    </div>


                    <form action="/judulta" method="POST" enctype='multipart/form-data'>
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

                                <input type="hidden" value="0" name="judul_disetujui">
                                <input type="hidden" value="0" name="alasan">


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
                                                    <input required class="form-control" type="text" name="judul1" placeholder="Judul Tugas Akhir 1">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">Judul 2</label>
                                                    <input required class="form-control" type="text" name="judul2" placeholder="Judul Tugas Akhir 2">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="col-12">
                                                <label for="contact-info-vertical">Nama Dosen Pembimbing</label>
                                                <div class="form-group">
                                                    <select required class="form-select" name="dosen_pembimbing">
                                                        <?php foreach ($dosen as $dos) { ?>
                                                            <option value=" <?= $dos['id_dosen']; ?>">
                                                                <?= $dos['nama']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>


                                    <!-- <tr>
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

                                    </tr> -->

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
                                                    <input required name="file_pengajuan" type="file">
                                                </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Transkrip Nilai</label>
                                                <div class="form-group">
                                                    <input required name="transkrip" type="file">
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