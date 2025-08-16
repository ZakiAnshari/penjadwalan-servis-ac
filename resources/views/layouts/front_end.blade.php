<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow-sm py-lg-0 px-lg-5 wow fadeIn">

        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h3 class="text-primary m-0">BRITANIA</h3>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">
                    <i class="bi bi-house-door-fill me-2"></i> Home
                </a>
                <a href="/tentangkami" class="nav-item nav-link {{ Request::is('tentangkami') ? 'active' : '' }}">
                    <i class="bi bi-info-circle-fill me-2"></i> Tentang Kami
                </a>
                <a href="/layanan" class="nav-item nav-link {{ Request::is('layanan') ? 'active' : '' }}">
                    <i class="bi bi-tools me-2"></i> Layanan
                </a>
                <a href="/kontak" class="nav-item nav-link {{ Request::is('kontak') ? 'active' : '' }}">
                    <i class="bi bi-envelope-fill me-2"></i> Kontak
                </a>
                <a href="/login" class="nav-item nav-link {{ Request::is('login') ? 'active' : '' }}">
                    <i class="bi bi-box-arrow-in-right me-2"></i> Login
                </a>
            </div>

            <div class="d-none d-lg-flex ms-2">
                <a href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20bertanya%20tentang%20layanan%20Anda"
                    target="_blank" class="btn btn-outline-success d-flex align-items-center ms-3 whatsapp-btn">
                    <i class="fab fa-whatsapp me-2"></i>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->


    @yield('content')







    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Kontak Kantor -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kantor Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Subarangkotobaru asamjao, Solok,
                        Indonesia, 27361</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0813-7830-9251</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>marwinjambak2017@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#"><i
                                class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Layanan -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Layanan Kami</h4>
                    <a class="btn btn-link" href="#">Service AC Berkala</a>
                    <a class="btn btn-link" href="#">Perbaikan AC</a>
                    <a class="btn btn-link" href="#">Isi Ulang Freon</a>
                    <a class="btn btn-link" href="#">Pemasangan AC Baru</a>
                    <a class="btn btn-link" href="#">Pembersihan AC</a>
                </div>

                <!-- Link Cepat -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Link Cepat</h4>
                    <a class="btn btn-link" href="#">Tentang Kami</a>
                    <a class="btn btn-link" href="#">Hubungi Kami</a>
                    <a class="btn btn-link" href="#">Galeri Pekerjaan</a>
                    <a class="btn btn-link" href="#">Harga Layanan</a>
                    <a class="btn btn-link" href="#">Kebijakan Privasi</a>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Berlangganan Info</h4>
                    <p>Dapatkan promo & tips merawat AC langsung di email Anda.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="email"
                            placeholder="Email Anda">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Jasa Service AC</a>, All Rights Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed by <a class="border-bottom" href="#">Tim Jasa AC</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
</body>

</html>
