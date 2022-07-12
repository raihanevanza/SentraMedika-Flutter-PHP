<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">Detail Obat</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2">Detail Obat</h2>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/img/<?= $obat['fotoobat']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $obat['namaobat']; ?></h5>
                        <p class="card-text"><b>Kategori : </b> <?= $obat['kategori']; ?></p>
                        <p class="card-text"><b>Stok : </b> <?= $obat['stok']; ?></p>

                        <a href="/obat/edit/<?= $obat['id']; ?>" class="btn btn-warning">Edit</a>

                        <form action="/obat/<?= $obat['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?');">Delete</button>
                        </form>
                        <br><br>
                        <a href="/obat">Kembali ke Daftar Obat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection() ?>