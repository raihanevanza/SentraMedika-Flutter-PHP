<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">Contact Us</h1>




    <form action="" method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukan keyword pencarian.." name="keyword">
            <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-search fa-sm"></i></button>
        </div>
    </form>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Contact Us</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (2 * ($currentPage - 1)); ?>
                        <?php foreach ($contactus as $j) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $j['nama']; ?></td>
                                <td><?= $j['email']; ?></td>
                                <td><?= $j['pesan']; ?></td>
                                <td>
                                    <form action="/contactus/<?= $j['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $pager->links('contactus', 'contactus_pagination'); ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?= $this->endSection() ?>