<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">Edit Obat</h1>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Edit Data Obat</h2>
                <form action="/obat/update/<?= $obat['id']; ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="namaobat" class="col-sm-2 col-form-label">Nama Obat</label>
                        <div class="col-sm-10">
                            <input type="namaobat" class="form-control <?= ($validation->hasError('namaobat')) ? 'is-invalid' : ''; ?>" id="namaobat" placeholder="Nama Obat" name="namaobat" autofocus value="<?= (old('namaobat')) ? old('namaobat') : $obat['namaobat'] ?>">
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
                                <option value="Obat Bebas" <?php if ($obat["kategori"] == "Obat Bebas") echo "selected"; ?>>Obat Bebas</option>
                                <option value="Obat Bebas Terbatas" <?php if ($obat["kategori"] == "Obat Bebas Terbatas") echo "selected"; ?>>Obat Bebas Terbatas</option>
                                <option value="Obat Keras" <?php if ($obat["kategori"] == "Obat Keras") echo "selected"; ?>>Obat Keras</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" class="form-control" id="stok" placeholder="Stok" name="stok" value="<?= (old('stok')) ? old('stok') : $obat['stok'] ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fotoobat" class="col-sm-2 col-form-label">Foto Obat</label>
                        <div class="col-sm-2">
                            <img src="/img/<?= $obat['fotoobat']; ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <label for="fotoobat" class="custom-file-label"><?= $obat['fotoobat']; ?></label>
                                <input type="file" class="custom-file-input <?= ($validation->hasError('fotoobat')) ? 'is-invalid' : ''; ?>" id="fotoobat" name="fotoobat" onchange="previewImgObat()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('fotoobat'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Edit Data</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection() ?>