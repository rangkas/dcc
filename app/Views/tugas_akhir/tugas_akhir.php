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
                            <h4> Pendaftaran Tugas Akhir

                                <?php $this->session = session(); ?>
                                <?php if ($this->session->get('status') != "prodi") { ?>
                                    <a href="/judulta/new" class="btn btn-primary">+ Daftar</a>
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
                                                    <th>Judul 1 </th>
                                                    <th>Judul 2</th>
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
                                                        <td><?= $product->judul1; ?></td>
                                                        <td>
                                                            <?= $product->judul2; ?>
                                                        </td>

                                                        <td>


                                                            <div class="row">
                                                                <div class="col-auto px-0">
                                                                    <a href="/judulta/<?= $product->id_judul_ta; ?>/show" class="btn btn-success mr-2">Lihat</a>
                                                                </div> &nbsp;


                                                                <div class="col-auto px-0">
                                                                    <a href="/judulta/<?= $product->id_judul_ta; ?>/edit" class="btn btn-warning mr-2">Edit</a>
                                                                </div>&nbsp;
                                                                <div class="col-auto px-0">
                                                                    <form action="/judulta/<?= $product->id_judul_ta; ?>" method="POST">
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