<?php
$senin = explode(' - ', $jadwal['senin']);
$selasa = explode(' - ', $jadwal['selasa']);
$rabu = explode(' - ', $jadwal['rabu']);
$kamis = explode(' - ', $jadwal['kamis']);
$jumat = explode(' - ', $jadwal['jumat']);
$sabtu = explode(' - ', $jadwal['sabtu']);
$minggu = explode(' - ', $jadwal['minggu']);
?>

<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">Edit Jadwal Dokter</h1>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Edit Data Jadwal Dokter</h2>
                <form action="/jadwal/update/<?= $jadwal['id']; ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="fotodokterLama" value="<?= $jadwal['fotodokter']; ?>">
                    <div class="form-group row">
                        <label for="namadokter" class="col-sm-2 col-form-label">Nama Dokter</label>
                        <div class="col-sm-10">
                            <input type="namadokter" class="form-control <?= ($validation->hasError('namadokter')) ? 'is-invalid' : ''; ?>" id="namadokter" placeholder="Nama Dokter" name="namadokter" autofocus value="<?= (old('namadokter')) ? old('namadokter') : $jadwal['namadokter'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namadokter'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="spesialis" class="col-sm-2 col-form-label">Spesialis</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="spesialis" name="spesialis">
                                <option selected>Open this select menu</option>
                                <option value="Mata" <?php if ($jadwal["spesialis"] == "Mata") echo "selected"; ?>>Mata</option>
                                <option value="Jantung" <?php if ($jadwal["spesialis"] == "Jantung") echo "selected"; ?>>Jantung</option>
                                <option value="Anak" <?php if ($jadwal["spesialis"] == "Anak") echo "selected"; ?>>Anak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hari" class="col-sm-2 col-form-label">Hari Praktek</label>
                        <div class="col-sm-10">
                            <select class="form-control" aria-label="Default select example" id="hari">
                                <option selected>Pilih Hari</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="minggu">Minggu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" id="seninDiv">
                        <label for="senin" class="col-sm-2 col-form-label">Senin</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" name="senin[]" id="senin" value="<?= (old('senin')) ? old('senin') : $senin[0] ?>">
                            <input type="time" class="form-control" name="senin[]" id="senin" value="<?= (old('senin')) ? old('senin') : $senin[1] ?>">
                        </div>
                    </div>
                    <div class="form-group row" id="selasaDiv">
                        <label for="selasa" class="col-sm-2 col-form-label">Selasa</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" name="selasa[]" id="selasa" value="<?= (old('selasa')) ? old('selasa') : $selasa[0] ?>">
                            <input type="time" class="form-control" name="selasa[]" id="selasa" value="<?= (old('selasa')) ? old('selasa') : $selasa[1] ?>">
                        </div>
                    </div>
                    <div class="form-group row" id="rabuDiv">
                        <label for="rabu" class="col-sm-2 col-form-label">Rabu</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" name="rabu[]" id="rabu" value="<?= (old('rabu')) ? old('rabu') : $rabu[0] ?>">
                            <input type="time" class="form-control" name="rabu[]" id="rabu" value="<?= (old('rabu')) ? old('rabu') : $rabu[1] ?>">
                        </div>
                    </div>
                    <div class="form-group row" id="kamisDiv">
                        <label for="kamis" class="col-sm-2 col-form-label">Kamis</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" name="kamis[]" id="kamis" value="<?= (old('kamis')) ? old('kamis') : $kamis[0] ?>">
                            <input type="time" class="form-control" name="kamis[]" id="kamis" value="<?= (old('kamis')) ? old('kamis') : $kamis[1] ?>">
                        </div>
                    </div>
                    <div class="form-group row" id="jumatDiv">
                        <label for="jumat" class="col-sm-2 col-form-label">Jumat</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" name="jumat[]" id="jumat" value="<?= (old('jumat')) ? old('jumat') : $jumat[0] ?>">
                            <input type="time" class="form-control" name="jumat[]" id="jumat" value="<?= (old('jumat')) ? old('jumat') : $jumat[1] ?>">
                        </div>
                    </div>
                    <div class="form-group row" id="sabtuDiv">
                        <label for="sabtu" class="col-sm-2 col-form-label">Sabtu</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" name="sabtu[]" id="sabtu" value="<?= (old('sabtu')) ? old('sabtu') : $sabtu[0] ?>">
                            <input type="time" class="form-control" name="sabtu[]" id="sabtu" value="<?= (old('sabtu')) ? old('sabtu') : $sabtu[1] ?>">
                        </div>
                    </div>
                    <div class="form-group row" id="mingguDiv">
                        <label for="minggu" class="col-sm-2 col-form-label">Minggu</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" name="minggu[]" id="minggu" value="<?= (old('minggu')) ? old('minggu') : $minggu[0] ?>">
                            <input type="time" class="form-control" name="minggu[]" id="minggu" value="<?= (old('minggu')) ? old('minggu') : $minggu[1] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fotodokter" class="col-sm-2 col-form-label">Foto Dokter</label>
                        <div class="col-sm-2">
                            <img src="/img/<?= $jadwal['fotodokter']; ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <label for="fotodokter" class="custom-file-label"><?= $jadwal['fotodokter']; ?></label>
                                <input type="file" class="custom-file-input <?= ($validation->hasError('fotodokter')) ? 'is-invalid' : ''; ?>" id="fotodokter" name="fotodokter" onchange="previewImg()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('fotodokter'); ?>
                                </div>
                            </div>
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