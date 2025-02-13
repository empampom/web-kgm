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
                <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <h4 class="text-primary">Console CT Scan</h4>
                    <p>
                        Berikut persyaratan yang diperlukan peserta tender :
                    </p>
                    <h5>Dokumen Penawaran</h5>
                    <h6>Dokumen Penawaran terdiri atas :</h6>
                    <ol>
                        <li>Dokumen Administrasi, yang berisi :</li>
                        <ul>
                            <li>Surat Pengantar Penawaran (Kop Perusahaan) bermaterai cukup, ditandatangani oleh Direktur beserta Cap Stempel Perusahaan (Sesuai contoh terlampir).</li>
                            <li>Surat Pernyataan (Kop Perusahaan) bermaterai cukup, ditandatangani oleh Direktur beserta Cap Stempel Perusahaan (Sesuai contoh terlampir).</li>
                            <li>Pakta Integritas (Kop Perusahaan) bermaterai cukup, ditandatangani oleh Direktur beserta Cap Stempel Perusahaan (Sesuai contoh terlampir).</li>
                        </ul>
                        <li>Dokumen Usulan Teknis, yang berisi :</li>
                        <ul>
                            <li>Surat kuasa bermaterai Rp. 10.000, -jika mewakili pimpinan perusahaan.</li>
                            <li>Foto copy KTP Direktur/Pimpinan.</li>
                            <li>Foto copy KTP koresponden.</li>
                            <li>Foto copy NPWP.</li>
                            <li>Foto copy NIB/SIUP.</li>
                            <li>Foto copy CDAKB yang masih berlaku.</li>
                            <li>Surat Jaminan keaslian produk (LOA).</li>
                            <li>Foto copy keterangan domisili perusahaan.</li>
                            <li>Foto copy Tanda Daftar Perusahaan (TDP).</li>
                            <li>Foto copy Surat Pengukuhan Perusahaan Kena Pajak (SPPKP).</li>
                            <li>Foto copy surat keterangan menteri hukum dan HAM.</li>
                            <li>Foto copy Akta Pendirian Perusahaan & Perubahan Terakhir.</li>
                            <li>Foto copy IDAK.</li>
                            <li>Foto copy pembayaran pajak tahun terakhir (SPT).</li>
                            <li>Surat asli pakta integritas yang ditandatangani oleh pimpinan perusahaan.</li>
                            <li>Denah/tampak depan Perusahaan/gambar di google maps.</li>
                            <li>Laporan Keuangan 3 tahun terakhir (laba rugi dan posisi keuangan).</li>
                            <li>Pengalaman Kerja dalam bentuk daftar referensi atau populasi RS.</li>
                            <li>Dokumen-dokumen quality perusahaan (ISO, sertifikasi dll. ).</li>
                            <li>Mempunyai Surat Ijin Impor alat console CT scan.</li>
                            <li>Surat Ijin edar/AKL.</li>
                        </ul>
                        <li>Dokumen Usulan Biaya, yang berisi :</li>
                        <ul>
                            <li>Surat Penawaran Harga.</li>
                            <li>Brosur atau spesifikasi barang yang ditawarkan.</li>
                        </ul>
                    </ol>
                    <h5>Tenaga Ahli (bersertifikasi) Pelaksana Pekerjaan</h5>
                    <ol>
                        <li>Untuk melaksanakan pekerjaan ini dibutuhkan tenaga ahli profesional di bidangnya yang berpengalaman dan dengan jumlah yang cukup (sesuai dengan dokumen teknis) dengan melampirkan :</li>
                        <ul>
                            <li>Curriculum Vitae (seperti contoh dalam lampiran).</li>
                            <li>Copy Ijazah Terakhir Tenaga Ahli.</li>
                            <li>Copy KTP Tenaga Ahli yang masih berlaku.</li>
                            <li>Copy Sertifikasi Tenaga Ahli.</li>
                            <li>Copy NPWP Tenaga Ahli.</li>
                        </ul>
                        <li>Tenaga Ahli tersebut di atas tidak diperbolehkan merangkap jabatan dengan pihak ketiga (baik klasifikasi pekerjaan yang berbeda) di wilayah usaha PT KBN Graha Medika.</li>
                        <li>Dokumen Pribadi Tenaga Ahli pada saat proses tender harus yang masih berlaku seperti/contohnya : KTP, Sertifikat yang ada masa berlakunya dan lain sebagainya.</li>
                        <li>Masing-masing Penyedia Jasa wajib menyampaikan Tenaga Ahli di bidangnya sesuai dengan yang dipersyaratkan.</li>
                    </ol>
                    <p>
                        Untuk informasi lebih lanjut silahkan klik tombol dibawah
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0" download href="{{ asset('assets/doc/RKS-CONSOLE-CT-SCAN.pdf') }}">Download</a>
                        </div>
                    </div>
                    <p class="mt-3">
                        Seluruh dokumen penawaran dan dokumen persyaratan dapat dikirim melalui email berikut : <a href="mailto:timtender.rsup@gmail.com">timtender.rsup@gmail.com</a>
                    </p>
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
                <div class="col-md-6 text-center text-md-start mb-md-0">
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
