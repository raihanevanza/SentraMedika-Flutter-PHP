<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">Detail Jadwal Dokter</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2">Detail Jadwal</h2>
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="/img/<?= $jadwal['fotodokter']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $jadwal['namadokter']; ?></h5>
                        <p class="card-text"><b>Spesialis : </b> <?= $jadwal['spesialis']; ?></p>
                        <p class="card-text"><b>Senin : </b> <?= $jadwal['senin']; ?></p>
                        <p class="card-text"><b>Selasa : </b> <?= $jadwal['selasa']; ?></p>
                        <p class="card-text"><b>Rabu : </b> <?= $jadwal['rabu']; ?></p>
                        <p class="card-text"><b>Kamis : </b> <?= $jadwal['kamis']; ?></p>
                        <p class="card-text"><b>Jumat : </b> <?= $jadwal['jumat']; ?></p>
                        <p class="card-text"><b>Sabtu : </b> <?= $jadwal['sabtu']; ?></p>
                        <p class="card-text"><b>Minggu : </b> <?= $jadwal['minggu']; ?></p>

                        <a href="/jadwal/edit/<?= $jadwal['id']; ?>" class="btn btn-warning">Edit</a>

                        <form action="/jadwal/<?= $jadwal['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?');">Delete</button>
                        </form>
                        <br><br>
                        <a href="/jadwal">Kembali ke Daftar Jadwal Dokter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection() ?>