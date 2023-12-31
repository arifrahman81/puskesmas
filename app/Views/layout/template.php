<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporKES</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/logo2.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/lib/animate/animate.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?> " rel="stylesheet" />
    <link href="<?= base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">
                <img src="<?= base_url('/assets/img/logo2.png') ?> " alt="Logo" height="45">
                <span>LaporKES</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('/'); ?>">Beranda</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Auth/login'); ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="text-center">
                    <h1 class="display-5 text-white animated slideInDown">Lapor Data Kesehatan</h1>
                    <br>
                    <h4 class="text-primary animated slideInDown">Media Komunikasi Kesehatan Antara Pihak Terkait</h4>
                </div>
            </div>
        </div>
    </div>

    <?= $this->renderSection('content'); ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5 d-flex justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Title</h4>
                    <a class="btn btn-link" href="<?= base_url('/') ?> ">Beranda</a>
                    <!-- <a class="btn btn-link" href="<?= base_url('Pages/index') ?> ">Tentang Kami</a>
                    <a class="btn btn-link" href="<?= base_url('Pages/index') ?> ">Layanan</a> -->
                    <a class="btn btn-link" href="<?= base_url('/') ?> ">Kontak</a>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>JL. Jend Urip Sumoharjo, No. 269, Makasar,
                        Sinrijala, Panakkukang, Makassar City, South Sulawesi 90232</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>085756266076</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>wwwlcfcom8@gmail.com</p>
                </div> -->
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">Monday - Saturday</h5>
                    <p>08AM - 04PM</p>
                </div> -->
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 text-center mb-3 mb-md-0">&copy; <a class="border-bottom" href="#">LaporKES
                            2023</a>, All Right Reserved.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/lib/wow/wow.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/counterup/counterup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?= base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>

    <script>
    function togglePasswordVisibility() {
        const passwordField = document.getElementById('passwordField');
        const eyeIcon = document.getElementById('eyeIcon');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.remove('bi-eye');
            eyeIcon.classList.add('bi-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.remove('bi-eye-slash');
            eyeIcon.classList.add('bi-eye');
        }
    }
    </script>


</body>

</html>