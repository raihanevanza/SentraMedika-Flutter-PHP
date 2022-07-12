<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/rslogo.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@sentramedika.com</a>
                <i class="icofont-phone"></i> (021) 8791 1212
                <i class="icofont-google-map"></i> Jl. Raya Mayor Oking Jaya Atmaja No.9, Cirimekar, Cibinong, Bogor, Jawa Barat 16917
            </div>

        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <img src="/img/sentra-cibinong.png" alt="" style="width: 120px;"><a href="index.html"></a></img>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/jadwaluser">Jadwal Dokter</a></li>
                    <li><a href="/obatuser">Data Obat</a></li>
                    <li><a href="/antrianuser">Antrian</a></li>
                    <!-- <li class="drop-down"><a href="">Servis dan Fasilitas</a>
                        <ul>
                            <li><a href="#">Servis dan Fasilitas</a></li>
                            <li class="drop-down"><a href="#">Deep Drop Down</a>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a href="">Tentang Kami</a></li> -->
                    <li><a href="/contactususer">Kontak Kami</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->


    <?= $this->renderSection('content') ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Sentra Medika</h3>
                        <p>
                            Jl. Raya Mayor Oking Jaya Atmaja No.9 <br>
                            Cirimekar, Cibinong, Bogor<br>
                            Jawa Barat 16917 <br><br>
                            <strong>Phone:</strong> (021) 8791 1212<br>
                            <strong>Email:</strong> info@sentramedika.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Sentra Medika</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Jadwal Dokter</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Data Obat</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li> -->
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak Kami</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Layanan dan Fasilitas</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Waspada Covid 19</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan Unggulan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">UGD</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Rawat Jalan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Rawat Inap</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Panduan Rawat Inap</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Penunjang Medis</a></li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Sentra Medika</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/venobox/venobox.min.js"></script>
    <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/counterup/counterup.min.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <script>
        $("#hari").change(function() {
            if ($(this).val() == "senin") {
                $('#seninDiv').show();
                $('#senin').attr('required', '');
                $('#senin').attr('data-error', 'This field is required.');
            } else if ($(this).val() == "selasa") {
                $('#selasaDiv').show();
                $('#selasa').attr('required', '');
                $('#selasa').attr('data-error', 'This field is required.');
            } else if ($(this).val() == "rabu") {
                $('#rabuDiv').show();
                $('#rabu').attr('required', '');
                $('#rabu').attr('data-error', 'This field is required.');
            } else if ($(this).val() == "kamis") {
                $('#kamisDiv').show();
                $('#kamis').attr('required', '');
                $('#kamis').attr('data-error', 'This field is required.');
            } else if ($(this).val() == "jumat") {
                $('#jumatDiv').show();
                $('#jumat').attr('required', '');
                $('#jumat').attr('data-error', 'This field is required.');
            } else if ($(this).val() == "sabtu") {
                $('#sabtuDiv').show();
                $('#sabtu').attr('required', '');
                $('#sabtu').attr('data-error', 'This field is required.');
            } else if ($(this).val() == "minggu") {
                $('#mingguDiv').show();
                $('#minggu').attr('required', '');
                $('#minggu').attr('data-error', 'This field is required.');
            } else {
                $('#seninDiv').hide();
                $('#senin').removeAttr('required');
                $('#senin').removeAttr('data-error');
                $('#selasaDiv').hide();
                $('#selasa').removeAttr('required');
                $('#selasa').removeAttr('data-error');
                $('#rabuDiv').hide();
                $('#rabu').removeAttr('required');
                $('#rabu').removeAttr('data-error');
                $('#kamisDiv').hide();
                $('#kamis').removeAttr('required');
                $('#kamis').removeAttr('data-error');
                $('#jumatDiv').hide();
                $('#jumat').removeAttr('required');
                $('#jumat').removeAttr('data-error');
                $('#sabtuDiv').hide();
                $('#sabtu').removeAttr('required');
                $('#sabtu').removeAttr('data-error');
                $('#mingguDiv').hide();
                $('#minggu').removeAttr('required');
                $('#minggu').removeAttr('data-error');
            }
        });
        $("#hari").trigger("change");
    </script>
    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>