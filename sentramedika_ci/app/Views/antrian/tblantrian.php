<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">Antrian</h1>




    <form action="" method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukan keyword pencarian.." name="keyword">
            <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-search fa-sm"></i></button>
        </div>
    </form>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Antrian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Antrian</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Spesialis</th>
                            <th scope="col">Hari dan Tanggal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($antrian as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $a['no_antrian']; ?></td>
                                <td><?= $a['nama']; ?></td>
                                <td><?= $a['no_hp']; ?></td>
                                <td><?= $a['spesialis']; ?></td>
                                <td><?= $a['hari']; ?></td>
                                <td>
                                    <form action="/antrian/<?= $a['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?= $this->endSection() ?>