<?= $this->extend('layout/template_user') ?>

<?= $this->section('content') ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Data Obat</h2>
                <ol>
                    <li>Data Obat</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">

        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Foto Obat</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($obat as $o) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $o['namaobat']; ?></td>
                                    <td><img src="/img/<?= $o['fotoobat']; ?>" alt="" class="fotodokter"></td>
                                    <td><?= $o['kategori']; ?></td>
                                    <td><?= $o['stok']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

</main><!-- End #main -->


<?= $this->endSection() ?>