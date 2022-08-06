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
                            <h4> Sertifikasi TOEFL

                                <?php $this->session = session(); ?>
                                <?php if ($this->session->get('status') != "prodi") { ?>
                                    <a href="/toefl/new" class="btn btn-primary">+ Daftar</a>
                                <?php } else { ?>
                                    <a href="/rekap" class="btn btn-primary">Rekap Nilai</a>
                                <?php
                                }
                                ?>

                            </h4>

                            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo session()->getFlashdata('pesan'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">

                            <section class="section">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>NPM</th>
                                                    <th>Prodi</th>
                                                    <th>Nilai Listening</th>
                                                    <th>Nilai Structure</th>
                                                    <th>Nilai Reading</th>
                                                    <th width="20%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $i = 1; ?>
                                                <?php foreach ($produk as $product) : ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $product->nama; ?></td>
                                                        <td>
                                                            <?= $product->npm; ?>
                                                        </td>
                                                        <td><?= $product->prodi; ?></td>
                                                        <td><?= $product->nilai_listening; ?></td>
                                                        <td><?= $product->nilai_struktur; ?></td>
                                                        <td><?= $product->nilai_reading; ?></td>
                                                        <td>

                                                            <?php $this->session = session(); ?>
                                                            <?php if ($this->session->get('status') != "prodi") { ?>
                                                                <div class="row">
                                                                    <div class="col-auto px-0">
                                                                        <a href="/toefl/<?= $product->id_toefl; ?>/show" class="btn btn-success mr-2">Lihat</a>
                                                                    </div> &nbsp;
                                                                    <?php
                                                                    if ($product->nilai_listening == 0) {
                                                                    ?>

                                                                        <div class="col-auto px-0">
                                                                            <a href="/toefl/<?= $product->id_toefl; ?>/edit" class="btn btn-warning mr-2">Edit</a>
                                                                        </div>&nbsp;
                                                                        <div class="col-auto px-0">
                                                                            <form action="/toefl/<?= $product->id_toefl; ?>" method="POST">
                                                                                <input type="hidden" name="_method" value="DELETE">
                                                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?') ">Delete</button>
                                                                            </form>
                                                                        </div>

                                                                    <?php }
                                                                    ?>
                                                                </div>

                                                            <?php
                                                            } else {
                                                            ?>
                                                                <div class="row">
                                                                    <div class="col-auto px-0">
                                                                        <?php
                                                                        if ($product->nilai_listening == 0) {
                                                                        ?>
                                                                            <a href="/toefl/<?= $product->id_toefl; ?>/edit" class="btn btn-primary mr-2">Isi Nilai</a>
                                                                        <?php } else { ?>
                                                                            <a href="/download/<?= $product->id_toefl; ?>" class="btn btn-success mr-2">Download Sertifikat</a>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div> &nbsp;

                                                                </div>
                                                            <?php
                                                            }
                                                            ?>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                            </section>

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