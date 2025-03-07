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
                    <div>
                        <h4 class="text-primary">USG Kamar Bedah & ICU</h4>
                        <ul>
                            <li>
                                KRITERIA TEKNIS
                                <ol>
                                    <li>Mempunyai surat izin edar / AKL</li>
                                    <li>Mempunyai tenaga ahli sesuai kompetensi</li>
                                    <li>Dapat melakukan uji kalibrasi</li>
                                    <li>Jaminan purna jual, termasuk di dalamnya menjamin ketersediaan sparepart minimal 5 tahun yang dituangkan dalam Surat Pernyataan</li>
                                    <li>Jaminan layanan selama masa garansi, termasuk respon time terhadap keluhan alat dan pemberian backup unit apabila unit dalam masa perbaikan</li>
                                </ol>
                            </li>
                            <li>
                                KRITERIA ADMINISTRASI
                                <ol>
                                    <li>Surat Penawaran Harga (SPH)</li>
                                    <li>KTP DIREKTUR (berlaku sampai)</li>
                                    <li>KTP KORESPONDEN (berlaku sampai)</li>
                                    <li>Npwp Perusahan</li>
                                    <li>Surat pengukuhan kena pajak</li>
                                    <li>Domisili Perusahaan</li>
                                    <li>Copy bukti pembayaran pajak tahun terakhir (SPT) sesuai ketentuan perpajakan yang berlaku</li>
                                    <li>SIUP Perusahan (NIB)</li>
                                    <li>Nomor identitas kepabeanan (nik) importir</li>
                                    <li>Asli Pakta Integritas yaang ditandatangani oleh pimpinan perusahaan</li>
                                    <li>Surat izin penyalur alat kesehatan (ipak) *alkes</li>
                                    <li>Denah/ tampak depan perusahaan/ gambar di google maps</li>
                                    <li>Cara distribusi alat kesehatan yang baik dan benar (CDAKB) *alkes</li>
                                    <li>Akta perusahaan</li>
                                    <li>Surat jaminan keaslian produk (LOA)</li>
                                    <li>Surat keterangan menteri hukum dan ham</li>
                                    <li>Akta perubahan</li>
                                    <li>Populasi</li>
                                    <li>Surat izin edar / AKL</li>
                                    <li>Laporan Keuangan 1 tahun terakhir (neraca dan laba rugi)</li>
                                </ol>
                            </li>
                        </ul>
                        <p>
                            Berikut kami lampirkan detail dan spesifikasi kebutuhan USG Kamar Bedah & ICU
                            <br>
                            Silahkan klik tombol dibawah
                        </p>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0" download href="{{ asset('assets/doc/KAK-USG-OK-ICU.pdf') }}">Download</a>
                            </div>
                        </div>
                        <p class="mt-3">
                            Seluruh dokumen penawaran dan dokumen persyaratan dapat dikirim melalui email berikut : <a href="mailto:timtender.rsup@gmail.com">timtender.rsup@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img alt="" class="img-fluid rounded w-100" src="{{ asset('assets/img/usg-kamar-bedah.png') }}">
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card bg-success">
                        <div class="card-body text-white">
                            <h4 class="text-white">Daftar rekanan yang lolos seleksi :</h4>
                            <ul>
                                <li>PT. Beyond Medical Indonesia</li>
                                <li>PT. Mulya Husada Kaya (MHJ)</li>
                                <li>PT. Nusantara Medecare Indah</li>
                                <li>PT. Arinda Mitra Sejahtera</li>
                                <li>PT. Global Medika Persada</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="card bg-success">
                        <div class="card-body text-white">
                            <h4 class="text-white">Pengumuman pemenang :</h4>
                            <p>
                                Merujuk surat undangan dan negosiasi pengadaan Alat USG OK/ICU RS Umum Pekerja Nomor
                                23/EXT/RSUP.TDR.2.0/09/2024 tanggal 7 – 13 November 2024, serta berdasarkan keputusan
                                rapat Direksi RS Umum Pekerja PT KBN Graha Medika dan Tim Tender Pengadaan bersama
                                kami sampaikan pemenang Tender Alat USG OK/ICU sebagai berikut:
                            </p>
                            <p class="fw-bold fs-4">
                                Nama Perusahaan : PT. Mulya Husada Jaya
                                <br>
                                Alamat : Ruko taman kedoya indah Blok RA-8D/F Jl. Kedoya Kembangan Raya No. 10, Jakarta Barat 11520
                            </p>
                            <p>
                                Demikian pemberitahuan pemenang tender ini disampaikan, dan bagi peserta yang belum
                                mendapatkan kesempatan kami Tim Tender Pengadaan RS Umum Pekerja mengucapkan
                                Terima Kasih atas segala partisipasinya.
                            </p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0" download href="{{ asset('assets/doc/SURAT-PEMENANG-USG-OK-ICU.pdf') }}">Download</a>
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
                <div class="col-md-12 text-center text-md-start mb-md-0">
                    <span class="text-body"><a class="border-bottom text-white" href="#"><i class="fas fa-copyright text-light me-2"></i>KBN Graha Medika</a>, All right reserved.</span>
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
