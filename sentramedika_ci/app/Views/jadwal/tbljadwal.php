<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">Jadwal Dokter</h1>




    <form action="" method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukan keyword pencarian.." name="keyword">
            <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-search fa-sm"></i></button>
        </div>
    </form>
    <a href="/jadwal/create" class="btn btn-primary mb-3">Tambah Data</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-primary" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Jadwal Dokter</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (2 * ($currentPage - 1)); ?>
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
                                <td><a href="/jadwal/<?= $j['id']; ?>" class="btn btn-success">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $pager->links('jadwal', 'jadwal_pagination'); ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?= $this->endSection() ?>