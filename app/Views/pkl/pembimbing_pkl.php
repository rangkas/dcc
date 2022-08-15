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
                            <h4> Penentuan Pembimbing PKL



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
                                                    <th>Alamat Instansi</th>
                                                    <th>Dosen Pembimbing</th>
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
                                                        <td><?= $product->alamat_instansi; ?></td>
                                                        <td><?= $product->dosen_pembimbing; ?></td>
                                                        <td>

                                                            <div class="row">

                                                                <div class="col-auto px-0">
                                                                    <?php
                                                                    if ($product->dosen_pembimbing == "0") {
                                                                    ?>
                                                                        <a href="/pembimbingpkl/<?= $product->id_pkl; ?>/show" class="btn btn-primary mr-2">Isi Pembimbing</a>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <a href="/pembimbingpkl/<?= $product->id_pkl; ?>/show" class="btn btn-success mr-2">Lihat</a>

                                                                    <?php
                                                                    }
                                                                    ?>

                                                                </div>
                                                            </div>

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