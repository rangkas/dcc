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
                            <h4> Sertifikasi UKD
                                <a href="/ukd/new" class="btn btn-primary">+ Daftar</a>
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
                                                    <th>Skema</th>
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
                                                        <td><?= $product->skema; ?></td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-auto px-0">
                                                                    <a href="/ukd/<?= $product->id_ukd; ?>/show" class="btn btn-success mr-2">Lihat</a>
                                                                </div> &nbsp;
                                                                <div class="col-auto px-0">
                                                                    <a href="/ukd/<?= $product->id_ukd; ?>/edit" class="btn btn-warning mr-2">Edit</a>
                                                                </div>&nbsp;
                                                                <div class="col-auto px-0">
                                                                    <form action="/ukd/<?= $product->id_ukd; ?>" method="POST">
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?') ">Delete</button>
                                                                    </form>
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