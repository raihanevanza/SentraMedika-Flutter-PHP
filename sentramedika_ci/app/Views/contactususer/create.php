<?= $this->extend('layout/template_user') ?>

<?= $this->section('content') ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Data Obat</h2>
                <ol>
                    <li>Data Obat</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">



                <div>
                    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.323256350244!2d106.86265031448613!3d-6.480681195311832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1d263df61b3%3A0x2a0e106f07de739!2sSentra%20Medika%20Hospital%20-%20Cibinong!5e0!3m2!1sid!2sid!4v1620273980293!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="container">
                    <div class="row mt-5">

                        <div class="col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="icofont-google-map"></i>
                                    <h4>Alamat:</h4>
                                    <p>Jl. Raya Mayor Oking Jaya Atmaja No.9, Cirimekar, Cibinong, Bogor, Jawa Barat 16917</p>
                                </div>

                                <div class="email">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@sentramedika.com</p>
                                </div>

                                <div class="phone">
                                    <i class="icofont-phone"></i>
                                    <h4>Kontak WA:</h4>
                                    <a href="https://wa.me/6282111828461">(+62)82111828461</a>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0">

                            <form action="/contactususer/save" method="POST" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" name="nama" id="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" placeholder="Nama Anda" value="<?= old('namaobat'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" />

                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="pesan" id="pesan" rows="5" placeholder="Pesan"></textarea>
                                </div>


                                <div class="text-center"> <button type="submit" class="btn btn-primary">Kirim Pesan</button></div>

                            </form>

                        </div>

                    </div>

                </div>
        </section><!-- End Contact Section -->

    </section>

</main><!-- End #main -->


<?= $this->endSection() ?>