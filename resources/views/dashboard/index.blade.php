<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KBN Graha Medika</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" id="spinner">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container-fluid position-relative p-0 vh-100">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a class="navbar-brand p-0" href="{{ route('home') }}">
                <img alt="Logo" src="{{ asset('assets/img/logo.png') }}">
                <span class="text-primary h1">KBN Graha Medika</span>
            </a>
            <button class="navbar-toggler" data-bs-target="#navbarCollapse" data-bs-toggle="collapse" type="button">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a class="nav-item nav-link active" href="{{ route('home') }}">Home</a>
                    <a class="nav-item nav-link" href="#procurement">Procurement</a>
                </div>
            </div>
        </nav>
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img alt="Image" class="img-fluid w-100" src="{{ asset('assets/img/carousel-1.png') }}">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">KBN Graha Medika</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Teman Terbaik</h1>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/rsumumpekerja/"><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://wa.me/6285777789022"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img alt="Image" class="img-fluid w-100" src="{{ asset('assets/img/carousel-1.png') }}">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-center">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">KBN Graha Medika</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Tempat Terpercaya</h1>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/rsumumpekerja/"><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://wa.me/6285777789022"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service pb-5" id="procurement">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-2 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Procurement</h4>
                <h1 class="display-6 mb-2">List Kebutuhan Pengadaan barang & Jasa</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img alt="Image" class="img-fluid rounded-top w-100" src="assets/img/service-1.jpg">
                        </div>
                        <div class="rounded-bottom p-4">
                            <span class="h4 d-inline-block mb-4">USG Kamar Bedah & ICU</span>
                            <br>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('usg_kamar_bedah') }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img alt="Image" class="img-fluid rounded-top w-100" src="assets/img/service-2.jpg">
                        </div>
                        <div class="rounded-bottom p-4">
                            <span class="h4 d-inline-block mb-4">USG Urologi</span>
                            <br>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('usg_urologi') }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img alt="Image" class="img-fluid rounded-top w-100" src="assets/img/service-3.jpg">
                        </div>
                        <div class="rounded-bottom p-4">
                            <span class="h4 d-inline-block mb-4">Digital Radiology</span>
                            <br>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('digital_radiology') }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img alt="Image" class="img-fluid rounded-top w-100" src="assets/img/service-4.jpg">
                        </div>
                        <div class="rounded-bottom p-4">
                            <span class="h4 d-inline-block mb-4">Console CT Scan</span>
                            <br>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('console_ct_scan') }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img alt="Image" class="img-fluid rounded-top w-100" src="assets/img/service-5.jpg">
                        </div>
                        <div class="rounded-bottom p-4">
                            <span class="h4 d-inline-block mb-4">Obat & Alkes 2025</span>
                            <br>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('obat_alkes_2025') }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @foreach ($procurements as $procurement)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img alt="Image" class="img-fluid rounded-top w-100" src="assets/img/thumbnail/{{ $procurement->thumbnail }}">
                            </div>
                            <div class="rounded-bottom p-4">
                                <span class="h4 d-inline-block mb-4">{{ $procurement->title }}</span>
                                <br>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('dashboard.detail', $procurement->id) }}">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Kontak Kami</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="text-white mb-0">Jl. Tipar Cakung No.46, RT.2/RW.1, Sukapura, Cilincing, Jakarta Utara</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">14140</p>
                        </div>
                        <div class="d-flex mt-2 text-white">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="https://www.instagram.com/rsumumpekerja/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="https://wa.me/6285777789022"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-12 text-center text-md-start mb-md-0">
                    <span class="text-body"><a class="border-bottom text-white" href="#"><i class="fas fa-copyright text-light me-2"></i>KBN Graha Medika</a>, All right reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary btn-lg-square rounded-circle back-to-top" href="#"><i class="fa fa-arrow-up"></i></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
