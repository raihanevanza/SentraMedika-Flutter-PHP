<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">Tambah Obat</h1>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="/obat/save" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="namaobat" class="col-sm-2 col-form-label">Nama Obat</label>
                        <div class="col-sm-10">
                            <input type="namaobat" class="form-control <?= ($validation->hasError('namaobat')) ? 'is-invalid' : ''; ?>" id="namaobat" placeholder="Nama Obat" name="namaobat" autofocus value="<?= old('namaobat'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namaobat'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                                <option selected>Open this select menu</option>
                                <option value="Obat Bebas">Obat Bebas</option>
                                <option value="Obat Bebas Terbatas">Obat Bebas Terbatas</option>
                                <option value="Obat Keras">Obat Keras</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" class="form-control" id="stok" placeholder="Stok" name="stok" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fotoobat" class="col-sm-2 col-form-label">Foto Obat</label>
                        <div class="col-sm-2">
                            <img src="/img/default.png" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <label for="fotoobat" class="custom-file-label">Choose File</label>
                                <input type="file" class="custom-file-input <?= ($validation->hasError('fotoobat')) ? 'is-invalid' : ''; ?>" id="fotoobat" name="fotoobat" onchange="previewImgObat()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('fotoobat'); ?>
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