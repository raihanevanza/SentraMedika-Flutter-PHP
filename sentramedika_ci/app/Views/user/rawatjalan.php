<?= $this->extend('layout/template_user') ?>

<?= $this->section('content') ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Rawat Jalan</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Rawat Jalan</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">

        <section id="departments" class="departments">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Jantung</a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-4">Anak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-5">Mata</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Jantung</h3>
                                        <p>Dokter spesialis jantung dan pembuluh darah adalah dokter yang memiliki keahlian spesifik dalam mengobati penyakit yang berkaitan dengan jantung dan pembuluh darah, atau kardiovaskuler. Latar belakang pendidikannya adalah dokter umum yang sudah menyelesaikan pendidikan spesialis jantung dan pembuluh darah.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Anak</h3>
                                        <p>Dokter Spesialis Anak atau ahli pediatri adalah dokter yang memiliki fokus pada kesehatan fisik, mental, emosional, tumbuh kembang, dan sosial anak-anak, sejak mereka dilahirkan hingga menjadi remaja, yakni pada sampai usia 18 tahun.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Mata</h3>
                                        <p>Dokter spesialis mata adalah dokter yang memiliki keahlian spesifik dalam memberikan pemeriksaan, perawatan, serta diagnosis yang berhubungan dengan penyakit mata dan gangguan penglihatan. Bukan hanya itu, dokter spesialis mata juga memiliki kompetensi dalam menangani operasi mata.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->

    </section>

</main><!-- End #main -->


<?= $this->endSection() ?>