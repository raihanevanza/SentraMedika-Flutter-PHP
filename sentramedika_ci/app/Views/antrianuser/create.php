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

    <a href="/antrianuser" class="btn btn-primary mb-3">Daftar Antrian</a>

    <div class="container">
        <!--  -->
        <form action="/AntrianUser/save" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="no_antrian" class="col-sm-2 col-form-label">No Antrian</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control <?= ($validation->hasError('no_antrian')) ? 'is-invalid' : ''; ?>" id="no_antrian" placeholder="No Antrian" name="no_antrian" autofocus value="<?= old('no_antrian'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('no_antrian'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" placeholder="Nama" name="nama" autofocus value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-2 col-form-label">no_hp</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="no_hp" placeholder="Nomor HP" name="no_hp" autofocus value="<?= old('no_hp'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('no_hp'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="spesialis" class="col-sm-2 col-form-label">Spesialis</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="spesialis" name="spesialis">
                        <option selected>Open this select menu</option>
                        <option value="Mata">Mata</option>
                        <option value="Jantung">Jantung</option>
                        <option value="Anak">Anak</option>
                        <option value="THT">THT</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="hari" class="col-sm-2 col-form-label">hari</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control <?= ($validation->hasError('hari')) ? 'is-invalid' : ''; ?>" id="hari" placeholder="Nomor HP" name="hari" autofocus value="<?= old('hari'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('hari'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection() ?>