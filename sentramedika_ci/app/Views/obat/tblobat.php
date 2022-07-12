<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">Data Obat</h1>


    <form action="" method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukan keyword pencarian.." name="keyword">
            <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-search fa-sm"></i></button>
        </div>
    </form>

    <a href="/obat/create" class="btn btn-primary mb-3">Tambah Data</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-primary" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Obat</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Foto Obat</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (2 * ($currentPage - 1)); ?>
                        <?php foreach ($obat as $o) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $o['namaobat']; ?></td>
                                <td><img src="/img/<?= $o['fotoobat']; ?>" alt="" class="fotodokter"></td>
                                <td><?= $o['kategori']; ?></td>
                                <td><?= $o['stok']; ?></td>
                                <td><a href="/obat/<?= $o['id']; ?>" class="btn btn-success">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $pager->links('obat', 'obat_pagination'); ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?= $this->endSection() ?>