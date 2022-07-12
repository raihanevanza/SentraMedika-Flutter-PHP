<?= $this->extend('layout/template_user') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <a href="/antrianuser/create" class="btn btn-primary mb-3">Daftar Antrian</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-primary" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <!--  -->
        <div class="form-group row">
        </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Antrian</th>
                    <th scope="col">Nama Pendaftar</th>
                    <th scope="col">Spesialis</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($antrian as $a) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $a['no_antrian']; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['spesialis']; ?></td>
                        <td><?= $a['hari']; ?></td>
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