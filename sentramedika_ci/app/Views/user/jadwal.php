<?= $this->extend('layout/template_user') ?>

<?= $this->section('content') ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Jadwal Dokter</h2>
                <ol>
                    <li>Jadwal Dokter</li>
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
                                <th scope="col">Foto Dokter</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Spesialis</th>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">Kamis</th>
                                <th scope="col">Jumat</th>
                                <th scope="col">Sabtu</th>
                                <th scope="col">Minggu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($jadwal as $j) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><img src="/img/<?= $j['fotodokter']; ?>" alt="" class="fotodokter"></td>
                                    <td><?= $j['namadokter']; ?></td>
                                    <td><?= $j['spesialis']; ?></td>
                                    <td><?= $j['senin']; ?></td>
                                    <td><?= $j['selasa']; ?></td>
                                    <td><?= $j['rabu']; ?></td>
                                    <td><?= $j['kamis']; ?></td>
                                    <td><?= $j['jumat']; ?></td>
                                    <td><?= $j['sabtu']; ?></td>
                                    <td><?= $j['minggu']; ?></td>
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