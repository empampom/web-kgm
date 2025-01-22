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
    <div class="container-fluid position-relative p-0">
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
                    <a class="nav-item nav-link" href="{{ route('home') }}">Home</a>
                    <a class="nav-item nav-link active" href="#procurement">Procurement</a>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Procurement</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <h4 class="text-primary">Digital Radiology</h4>
                    {{-- <h1 class="display-5 mb-4">Meet our company unless miss the opportunity</h1> --}}
                    <p>
                        Berikut kami lampirkan detail dan spesifikasi kebutuhan Digital Radiology
                        <br>
                        Silahkan klik tombol dibawah
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0" download href="{{ asset('assets/doc/KAK-DIGITAL-RADIOLOGY.pdf') }}">Download</a>
                        </div>
                    </div>
                    <p class="mt-3">
                        Seluruh dokumen penawaran dan dokumen persyaratan dapat dikirim melalui email berikut : <a href="mailto:timtender.rsup@gmail.com">timtender.rsup@gmail.com</a>
                    </p>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img alt="" class="img-fluid rounded w-100" src="{{ asset('assets/img/digital-radiology.png') }}">
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card bg-success">
                        <div class="card-body text-white">
                            <h4 class="text-white">Daftar rekanan yang lolos seleksi :</h4>
                            <ul>
                                <li>PT. Global Medika Persada</li>
                                <li>PT. Sinergy Lintas Persada</li>
                                <li>PT. Berca Niaga Medika</li>
                                <li>PT. Enseval</li>
                                <li>PT. Murti Indah Sentosa</li>
                                <li>PT. Mulya Husada Kaya (MHJ)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card bg-success">
                        <div class="card-body text-white">
                            <h4 class="text-white">Pengumuman pemenang :</h4>
                            <p>
                                Merujuk surat undangan dan negosiasi pengadaan Alat Digital Radiology RS Umum Pekerja
                                Nomor 21/EXT/RSUP.TDR.2.0/09/2024 tanggal 5 – 12 November 2024, serta berdasarkan
                                keputusanrapat Direksi RS Umum Pekerja PT KBN Graha Medika dan Tim Tender Pengadaan
                                bersama kami sampaikan pemenang Tender Alat Digital Radiology sebagai berikut:
                            </p>
                            <p class="fw-bold fs-4">
                                Nama Perusahaan : PT. Global Medik Persada
                                <br>
                                Alamat : Jl. Raya Kebon Jeruk No. 26 RT.11 RW.02, Kebon Jeruk Jakarta Barat 11530
                            </p>
                            <p>
                                Demikian pemberitahuan pemenang tender ini disampaikan, dan bagi peserta yang belum
                                mendapatkan kesempatan kami Tim Tender Pengadaan RS Umum Pekerja mengucapkan
                                Terima Kasih atas segala partisipasinya.
                            </p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0" download href="{{ asset('assets/doc/SURAT-PEMENANG-DIGITAL-RADIOLOGY.pdf') }}">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                {{-- <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a class="p-0" href="index.html">
                            <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>Stocker</h4>
                            <!-- <img alt="Logo" src="assets/img/logo.png"> -->
                        </a>
                        <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                        <div class="d-flex">
                            <a class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2" href="#">
                                <i class="fas fa-apple-alt text-white"></i>
                                <div class="ms-3">
                                    <small class="text-white">Download on the</small>
                                    <h6 class="text-white">App Store</h6>
                                </div>
                            </a>
                            <a class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2" href="#">
                                <i class="fas fa-play text-primary"></i>
                                <div class="ms-3">
                                    <small class="text-white">Get it on</small>
                                    <h6 class="text-white">Google Play</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Support</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                    </div>
                </div> --}}
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
                        {{-- <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">(+012) 3456 7890</p>
                        </div> --}}
                        <div class="d-flex mt-2">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="https://www.instagram.com/rsu_pekerja/"><i class="fab fa-instagram"></i></a>
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
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a class="border-bottom text-white" href="#"><i class="fas fa-copyright text-light me-2"></i>KBN Graha Medika</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary btn-lg-square rounded-circle back-to-top" href="#"><i class="fa fa-arrow-up"></i></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
