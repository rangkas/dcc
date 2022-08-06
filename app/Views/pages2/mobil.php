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
                            <h4>Data Kendaraan
                                <a href="/kendaraan/new" class="btn btn-primary">+ Tambah</a>
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
                                                    <th>No Registrasi/Polisi</th>
                                                    <th>Foto Kendaraan</th>
                                                    <th>Pemilik</th>
                                                    <th>Merk</th>
                                                    <th>Jenis</th>
                                                    <th width="10%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $i = 1; ?>
                                                <?php foreach ($produk as $product) : ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $product->no_registrasi; ?></td>
                                                        <td>
                                                            <center>

                                                                <a href="<?php base_url(); ?>/uploads/kendaraan/<?= $product->foto_kendaraan; ?>" target="blank"><img src=" <?php base_url(); ?>/uploads/kendaraan/<?= $product->foto_kendaraan; ?>" style="width:50px;hight:50px;" alt=""></a>
                                                            </center>
                                                        </td>
                                                        <td><?= $product->nama_jabatan; ?></td>
                                                        <td><?= $product->merk; ?></td>
                                                        <td><?= $product->jenis; ?></td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-auto px-0">
                                                                    <a href="/kendaraan/<?= $product->id_kendaraan; ?>/show" class="btn btn-success mr-2">Lihat</a>
                                                                </div> &nbsp;
                                                                <!--   <div class="col-auto px-0">
                                                                    <a href="/kendaraan/<?= $product->id_kendaraan; ?>/edit" class="btn btn-warning mr-2">Edit</a>
                                                                </div>&nbsp;
                                                                <div class="col-auto px-0">
                                                                    <form action="/kendaraan/<?= $product->id_kendaraan; ?>" method="POST">
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?') ">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td> -->

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