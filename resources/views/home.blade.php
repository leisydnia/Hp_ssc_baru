<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Student Service Center</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content>
    <meta property="og:type" content>
    <meta property="og:url" content>
    <meta property="og:image" content>

    <link rel="shortcut icon" type="image/x-icon"
        href="https://ssc.ittelkom-sby.ac.id/assets-home/imgs/theme/favicon.ico">

    <link href="https://ssc.ittelkom-sby.ac.id/assets-home/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    @vite('resources/css/style.css')
</head>

<body>
    <header class="header-area header-style-3 header-height-2">
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative main-nav pt-20 pb-10">
                    <div class="logo logo-width-1 d-sm-none d-md-none d-lg-block">
                        <a href="https://ssc.ittelkom-sby.ac.id/">
                            <img src="{{ asset('images/logo.png') }}" alt="SSC Logo">
                        </a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                        </div>
                        <div class="header-action-right d-md-none d-sm-none d-lg-block">
                            <div class="header-action-2">
                                <div class="me-4 fs-5">
                                    <a href="https://ssc.ittelkom-sby.ac.id/" class="me-4">Home</a>
                                    <a href="https://ssc.ittelkom-sby.ac.id/about">About</a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a href="#">
                                    </a>
                                    <div class="cart-dropdown-wrap">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="https://ssc.ittelkom-sby.ac.id/">
                        <img src="assets-home/imgs/icon/logo-basic.png" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-menu-wrap mobile-header-border">

                    <nav>
                        <ul class="mobile-menu">
                            <li><a href="https://ssc.ittelkom-sby.ac.id/">Home</a></li>
                            <li><a href="https://ssc.ittelkom-sby.ac.id/about">About</a></li>
                            <li><a href="https://ssc.ittelkom-sby.ac.id/dashboard"> Admin Page</a></li>
                            <li><a href="https://ssc.ittelkom-sby.ac.id/list"> Services List</a></li>
                            <li><a href="https://ssc.ittelkom-sby.ac.id/log-ticket"> Log Ticket</a></li>
                        </ul>
                    </nav>

                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                </div>
                <div class="fixed-bottom" id="social-bottom">
                    <div class="mobile-social-icon">
                        <h5 class="mb-15 text-grey-4">Follow Us</h5>
                        <a href="#"><img
                                src="https://ssc.ittelkom-sby.ac.id/assets-home/imgs/theme/icons/icon-facebook-white.png"
                                alt></a>
                        <a href="#"><img
                                src="https://ssc.ittelkom-sby.ac.id/assets-home/imgs/theme/icons/icon-twitter-white.png"
                                alt></a>
                        <a href="#"><img
                                src="https://ssc.ittelkom-sby.ac.id/assets-home/imgs/theme/icons/icon-instagram-white.png"
                                alt></a>
                        <a href="#"><img
                                src="https://ssc.ittelkom-sby.ac.id/assets-home/imgs/theme/icons/icon-pinterest-white.png"
                                alt></a>
                        <a href="#"><img
                                src="https://ssc.ittelkom-sby.ac.id/assets-home/imgs/theme/icons/icon-youtube-white.png"
                                alt></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <section class="home-slider position-relative mb-10">
            <div class="container">
                <div class="row align-items-center slider-animated-1 bg-grey-10 mt-30 mb-95">
                    <div class="col-lg-5 col-md-6">
                        <div class="hero-slider-content-2 text-center">
                            <h2 class="animated fw-900"><b class="text-brand fw-bold">S</b>tudent</h2>
                            <h2 class="animated fw-900"><b class="text-brand fw-bold">S</b>ervice</h2>
                            <h2 class="animated fw-900"><b class="text-brand fw-bold">C</b>enter</h2>
                            <span class="my-4">Datang. Buat Tiket. Proses.</span>
                            <a class="animated btn btn-brand" href="#laya" tabindex="0"> Lihat Layanan
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <img class="animated" src="assets-home/imgs/page/banner-home.png" alt>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-30 pb-30 " id="panduanlay">
            <div class="container">
                <h3 class="section-title mb-20"><i class="fa fa-window-restore text-brand"></i>
                    <span>Panduan</span> Pengajuan Layanan
                </h3>
                <div class="mt-30">
                    <div class="tab">
                        <button class="tablinks " data-tab="tab2">
                            <i class="fa-regular fa-square-check"></i>&nbsp;
                            Online
                        </button>
                    </div>
                    <div id="tab1" class="tabcontent card shadow active">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Panduan untuk Layanan SSC Online </h5>
                        </div>
                        <div class="card-body">
                            <strong>Kirimkan e-mail dengan menggunakan format dibawah ini</strong>
                            <br>
                            <Strong>Penerima:</Strong> <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="ee9d9d8dae879a9a8b82858183c39d8c97c08f8dc0878a">[email&#160;protected]</a>
                            <br>
                            <strong>Subjek:</strong> KODE UNIT_Permintaan (LAYANAN) Mahasiswa IT Telkom
                            Surabaya
                            <br>
                            <ul>
                                <li>NIM : </li>
                                <li>Nama : </li>
                                <li>Prodi : </li>
                                <li>Fakultas : </li>
                                <li>Angkatan : </li>
                                <li>Email Kampus : </li>
                                <li>No. Hp (WA*) : </li>
                                <li>Tanggal Kebutuhan : </li>
                                <li>Deskripsi Kebutuhan : </li>
                            </ul>
                            <br>
                            <strong>NB</strong>
                            <ul>
                                <li>*Sertakan lampiran berkas sesuai dengan syarat requirement yang telah
                                    tercantum di website SSC</li>
                                <li>**Pastikan No. WA sudah sesuai dengan igracias</li>
                                <li>***Keterangan Kode Unit</li>
                            </ul>
                            <div class="row">
                                <div class="col">
                                    <strong>AKA</strong>: Akademik
                                </div>
                                <div class="col">
                                    <strong>KEU</strong>: Keuangan
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <strong>PUT</strong>: PuTI
                                </div>
                                <div class="col">
                                    <strong>FTIB</strong>: Fakultas Teknologi Informasi & Bisnis
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <strong>KEM</strong>: Kemahasiswaan
                                </div>
                                <div class="col">
                                    <strong>FTEIC</strong>: Fakultas Elektro & Industri Cerdas
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <strong>LOG</strong>: Logistik
                                </div>
                                <div class="col">
                                    <strong>PBP</strong>: Pusat Bahasa & Perpustakaan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15" id="laya">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><i class="fa fa-window-restore text-brand"></i>
                    <span>Kategori</span>Layanan
                </h3>
                <div class="carausel-4-columns-cover position-relative">
                    <div class="carausel-4-columns" id="carausel-4-columns">
                        <div class="card-1" id="logistikBtn" onclick="switchLogistik()">
                            <figure class=" img-hover-scale overflow-hidden">
                                <lord-icon id="imglog" src="https://cdn.lordicon.com/sbiheqdr.json"
                                    trigger="hover" colors="primary:#121331,secondary:#aa0000"> </lord-icon>
                            </figure>
                            <h5><a>Logistik</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-30 pb-150 hide-later" id="akademik-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-md-12 mb-20">
                                <div class="deal bg-white deal-cust-1">
                                    <div class="deal-top">
                                        <div class="deal-header">
                                            <div class="brand-box"></div>
                                            <h2 class="text-brand">Layanan Akademik</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                                href="#cuti" role="tab" aria-controls="dashboard"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Cuti Akademik
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab"
                                                href="#undurdiri" role="tab" aria-controls="orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Undur Diri
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#ska" role="tab" aria-controls="track-orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Surat Keterangan Aktif
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#pddikti" role="tab" aria-controls="track-orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                PDDIKTI
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#fri" role="tab" aria-controls="track-orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Fakultas Rekayasa Industri
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#fte" role="tab" aria-controls="track-orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Fakultas Teknik Elektro
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#fif" role="tab" aria-controls="track-orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Fakultas Informatika
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#feb" role="tab" aria-controls="track-orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Fakultas Ekonomi dan Bisnis
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade active show" id="cuti" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Cuti Akademik</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/akademik/registrasi-krs.png"
                                                        alt="cuti">
                                                </div>
                                                <strong>Deskripsi: </strong> Cuti adalah istilah yang merujuk pada
                                                periode waktu dimana seseorang
                                                tidak hadir dari pekerjaan atau kuliah karena alasan tertentu, seperti
                                                liburan, sakit, atau urusan
                                                pribadi
                                                <br>
                                                <strong>Requirement:</strong>
                                                <li>Mahasiswa mengajukan cuti akademik dengan cara login di iGracias
                                                    Telkom
                                                    University pada menu Registrasi > Pengajuan Cuti > Input Mahasiswa
                                                    Cuti, lalu mahasiswa melengkapi
                                                    form tersebut dengan mengunduh dokumen form cuti <a
                                                        href="https://akademik.ittelkom-sby.ac.id/cuti-undur-diri-pindah-prodi/	"
                                                        target="_blank">di
                                                        sini</a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="undurdiri" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Undur Diri</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/akademik/uts-uas.png"
                                                        alt="undurdiri">
                                                </div>
                                                <strong>Deskripsi: </strong> Layanan undur diri yaitu layanan yang
                                                mengurus pengunduran diri
                                                mahasiswa dari kampus
                                                <br>
                                                <strong>Requirement:</strong>
                                                <li>Mahasiswa mengajukan Pengunduran diri dengan cara login di iGracias
                                                    Telkom
                                                    University pada menu Registrasi > Undur Diri mahasiswa > Input
                                                    Mahasiswa Undur Diri, lalu mahasiswa
                                                    melengkapi form tersebut dengan mengunduh dokumen form cuti <a
                                                        href="https://akademik.ittelkom-sby.ac.id/cuti-undur-diri-pindah-prodi/"
                                                        target="_blank">di
                                                        sini</a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ska" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Surat Keterangan Aktif </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/akademik/surat-keterangan-aktif.png"
                                                        alt="ska">
                                                </div>
                                                <strong> Deskripsi:</strong>
                                                <span>
                                                    Terkait pengajuan surat keterangan aktif, pengajuan sudah dilakukan
                                                    di web TOSS Telkom
                                                    University yang bisa di akses mandiri oleh mahasiswa.
                                                    Silahkan untuk mengajukan surat yang anda butuhkan dengan mengakses
                                                    TOSS Telkom university
                                                    pada link berikut
                                                    <a href="https://toss.telkomuniversity.ac.id/login"
                                                        target="_blank">https://toss.telkomuniversity.ac.id/login</a>
                                                    lalu login dengan username dan
                                                    password sesuai SSO.
                                                    Dengan mengikuti panduan pada link berikut
                                                    <a href="https://www.instagram.com/p/C4cgHk7JbiU/?igsh=MW1weTMxd2g1ODN2cQ=="
                                                        target="_blank">
                                                        https://www.instagram.com/p/C4cgHk7JbiU/?igsh=MW1weTMxd2g1ODN2cQ==</a>
                                                    Jika sudah mengajukan, silahkan menunggu dan mengecek secara berkala
                                                    di website Toss Telkom
                                                    University.
                                                </span>
                                                <br>
                                                <br>
                                                <strong>FAQ</strong>
                                                <li>Apakah surat ini bisa digunakan untuk berbagai keperluan?</li>
                                                Ya, bisa. Karena di dalam surat tidak terdapat tulisan yang menunjukkan
                                                surat tersebut dibuat untuk
                                                suatu tujuan tertentu, jadi bisa digunakan untuk berbeagai keperluan
                                                <li>Berapa lama masa berlaku surat ini?</li>
                                                Surat Keterangan Aktif berlaku untuk 1 semester saja
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pddikti" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">PDDIKTI</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/akademik/surat-keterangan-aktif.png"
                                                        alt="pddikti">
                                                </div>
                                                <strong> Deskripsi:</strong> Layanan insiden terkait perubahan data pada
                                                PDDIKTI yang berhubungan
                                                dengan data pergantian semester, IPK, dan Data lainnya
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 3-5 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                Menyiapkan data yang ingin diadukan mengenai data diri yang ada di
                                                PDDIKTI dengan iGracias
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fri" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Dokumen terkait Fakultas Rekayasa Industri </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/fakultas/Surat_Pengantar_dari_Kampus.png"
                                                        alt="KRS">
                                                </div>
                                                <div class="col-12 list-inside">
                                                    <div class="row">
                                                        <button class="btn btn-primary btn-inside-outlined"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample1" aria-expanded="false"
                                                            aria-controls="collapseExample">
                                                            Dokumen Buku Pedoman KP FRI TUS
                                                        </button>
                                                        <div class="collapse" id="collapseExample1">
                                                            <div class="card card-body">
                                                                <Strong>Link Dokumen:</Strong>
                                                                <a href="https://akademik.ittelkom-sby.ac.id/wp-content/uploads/2024/04/Buku-Pedoman-Kerja-Praktek-FRI-TUS.pdf"
                                                                    target="_blank">https://akademik.ittelkom-sby.ac.id/wp-content/uploads/2024/04/Buku-Pedoman-Kerja-Praktek-FRI-TUS.pdf</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fte" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Dokumen terkait Fakultas Teknik Elektro </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/fakultas/Surat_Pengantar_dari_Kampus.png"
                                                        alt="KRS">
                                                </div>
                                                <div class="col-12 list-inside">
                                                    <div class="row">
                                                        <button class="btn btn-primary btn-inside-outlined"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample2" aria-expanded="false"
                                                            aria-controls="collapseExample">
                                                            Dokumen Fakultas Teknik Elektro
                                                        </button>
                                                        <div class="collapse" id="collapseExample2">
                                                            <div class="card card-body">
                                                                <Strong>Kerja Praktek:</Strong>
                                                                <span>
                                                                    mahasiswa melakukan pengajuan mandiri melalui
                                                                    website <a href="https://kepokape.id/"
                                                                        target="_blank">https://kepokape.id/</a> login
                                                                    dengan akun SSO
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fif" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Dokumen terkait Fakultas Informatika </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/fakultas/Surat_Pengantar_dari_Kampus.png"
                                                        alt="KRS">
                                                </div>
                                                <div class="col-12 list-inside">
                                                    <div class="row">
                                                        <button class="btn btn-primary btn-inside-outlined"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample2" aria-expanded="false"
                                                            aria-controls="collapseExample">
                                                            Dokumen Fakultas Informatika
                                                        </button>
                                                        <div class="collapse" id="collapseExample2">
                                                            <div class="card card-body">
                                                                <Strong>Kerja Praktek:</Strong>
                                                                <span>
                                                                    mahasiswa harap gabung dengan grup Telegram LAA FIF
                                                                    terkait info pada link <a
                                                                        href="https://t.me/LAAKFIF/3343"
                                                                        target="_blank">https://t.me/LAAKFIF/3343</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="feb" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Dokumen terkait Fakultas Ekonomi dan Bisnis </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/fakultas/Surat_Pengantar_dari_Kampus.png"
                                                        alt="KRS">
                                                </div>
                                                <div class="col-12 list-inside">
                                                    <div class="row">
                                                        <button class="btn btn-primary btn-inside-outlined"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample2" aria-expanded="false"
                                                            aria-controls="collapseExample">
                                                            Dokumen Fakultas Ekonomi dan Bisnis
                                                        </button>
                                                        <div class="collapse" id="collapseExample2">
                                                            <div class="card card-body">
                                                                <Strong>Kerja Praktek:</Strong>
                                                                <span>
                                                                    Mahasiswa koordinasi langsung dengan prodi dengan
                                                                    cara menghubungi Dosen Wali
                                                                    atau Kaprodi
                                                                </span>
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
                    </div>
                </div>
        </section>
        <section class="deals section-padding mt-20 hide-later" id="akademik-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0 bg-white">
                            <div class="deal-top">
                                <div class="deal-header mb-20">
                                    <div class="brand-box"></div>
                                    <h2 class="text-brand">Informasi Akademik</h2>
                                </div>
                                <p>Merupakan unit yang bertugas mengelola administrasi akademik yang mencakup kegiatan
                                    layanan
                                    administrasi akademik, pusat bahasa, dan perpustakaan. Informasi lengkap mengenai
                                    Unit
                                    Akademik, silakan kunjungi:</p>
                                <div class="col-md-12 mt-50">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa-brands fa-instagram"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://www.instagram.com/akademikitts/" target="_blank">
                                                <h5 class="link-social">akademikitts</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa fa-globe"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://akademik.ittelkom-sby.ac.id/" target="_blank">
                                                <h5 class="link-social">https://akademik.ittelkom-sby.ac.id/</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated bg-white"
                            style="background-image: url('assets-home/imgs/banner/device-academic.png');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-30 pb-150 hide-first hide-later" id="puti-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-md-12 mb-20">
                                <div class="deal bg-white deal-cust-1">
                                    <div class="deal-top">
                                        <div class="deal-header">
                                            <div class="brand-box"></div>
                                            <h2 class="text-brand">Layanan PuTi</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                                href="#pinjamperjar" role="tab" aria-controls="dashboard"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Peminjaman Perangkat Jaringan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#data"
                                                role="tab" aria-controls="orders" aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Permintaan Data
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#insiden" role="tab" aria-controls="track-orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Laporan Insiden Aplikasi
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#akun"
                                                role="tab" aria-controls="address" aria-selected="true">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Manajemen Akun
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade active show" id="pinjamperjar" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Peminjaman perangkat jaringan</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/puti/manajemen-akun.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Peminjaman perangkat jaringan meliputi Mifi Orbit, Kabel LAN, dan
                                                perangkat dan penunjang kebutuhan perangkat jaringan
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 1 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                Membawa surat peminjaman perangkat jaringan, dapat diunduh <a
                                                    href="https://puti.ittelkom-sby.ac.id/dokumen-peminjaman-barang-hosting/"
                                                    target="_blank">disini </a>
                                                <br>
                                                <br>
                                                <strong>FAQ</strong>
                                                <li>Apakah peminjaman perangkat jaringan Orbit sudah termasuk paket
                                                    data?</li>
                                                Ya, sudah termasuk
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="data" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Permintaan Data</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/puti/internet.png" alt="data">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Permintaan data terkait unit untuk keperluan tugas kuliah
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 3-5 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                <li>Mengirim data yang ingin diminta (format excel) atau list pertanyaan
                                                    untuk wawancara ke email SSC</li>
                                                <li>Sudah punya Surat Pengantar Pengambilan Data dari Fakultas</li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="insiden" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Laporan Insiden Aplikasi </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/puti/layanan-aplikasi.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Laporan insiden aplikasi (igracias, elearning, dll)
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 3 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                Menyiapkan bukti insiden
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="akun" role="tabpanel"
                                        aria-labelledby="address-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Manajemen Akun</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/puti/layanan-hosting.png"
                                                        alt="akun">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Permintaan Reset Password akun (igracias, wifi, office 365, email) atau
                                                Permintaan pembuatan akun baru institusi
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 3 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                <li>Pembuatan email UKM : Siapkan alamat email yang diinginkan</li>
                                                <li>Reset password igracias, wifi, office 365, email kampus : Siapkan
                                                    username/email yang akan di reset password</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deals section-padding mt-20 hide-first hide-later" id="puti-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0 bg-white">
                            <div class="deal-top">
                                <div class="deal-header mb-20">
                                    <div class="brand-box"></div>
                                    <h2 class="text-brand">Informasi PuTi</h2>
                                </div>
                                <p>Merupakan unit yang bertugas mengelola administrasi puti yang mencakup kegiatan
                                    layanan
                                    administrasi puti, pusat bahasa, dan perpustakaan. Informasi lengkap mengenai Unit
                                    PuTi, silakan kunjungi:</p>
                                <div class="col-md-12 mt-50">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa-brands fa-instagram"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://www.instagram.com/puti.ittelkomsby/" target="_blank">
                                                <h5 class="link-social">puti.ittelkomsby</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa fa-globe"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://puti.ittelkom-sby.ac.id/" target="_blank">
                                                <h5 class="link-social">https://puti.ittelkom-sby.ac.id/</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated bg-white"
                            style="background-image: url('assets-home/imgs/banner/device-puti.png');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-30 pb-150 hide-first hide-later" id="kemahasiswaan-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-md-12 mb-20">
                                <div class="deal bg-white deal-cust-1">
                                    <div class="deal-top">
                                        <div class="deal-header">
                                            <div class="brand-box"></div>
                                            <h2 class="text-brand">Layanan Kemahasiswaan</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                                href="#proposal" role="tab" aria-controls="dashboard"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Pengajuan Proposal dan LPJ Kegiatan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab"
                                                href="#approvetak" role="tab" aria-controls="orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Validasi dan Approval TAK
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                                href="#hilangktm" role="tab" aria-controls="account-detail"
                                                aria-selected="true">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Hilang, cetak ulang, dan ambil KTM baru
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#surdel" role="tab" aria-controls="track-orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Surat Rekomendasi / Delegasi Lomba
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#skb"
                                                role="tab" aria-controls="address" aria-selected="true">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Surat Keterangan Beasiswa
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                                href="#asuran" role="tab" aria-controls="account-detail"
                                                aria-selected="true">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Asuransi dan Layanan Kesehatan Telkomedika
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade active show" id="proposal" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Pengajuan Proposal dan LPJ Kegiatan</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/kemahasiswaan/tak.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Layanan terkait pelaksanaan pengusulan & pendanaan program kegiatan
                                                ormawa dan UKM
                                                <br>
                                                <strong>Requirement:</strong>
                                                Mahasiswa mengisi link berikut: <a
                                                    href="https://forms.office.com/Pages/ResponsePage.aspx?id=D_6vkKPCCEG7mGzrTpTvFTHIF-ZDAX9KuealjfgWcqtUQ1Q2VDc0SzA4RDRDVDBYNlA5SlRNTDc4Vy4u">https://forms.office.com/Pages/ResponsePage.aspx?id=D_6vkKPCCEG7mGzrTpTvFTHIF-ZDAX9KuealjfgWcqtUQ1Q2VDc0SzA4RDRDVDBYNlA5SlRNTDc4Vy4u</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="approvetak" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Validasi dan Approval TAK </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/kemahasiswaan/surat-dispen.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Layanan approval sertifikat TAK sebagai syarat untuk mengikuti sidang
                                                tugas akhir/skripsi/proyek
                                                akhir, mendapatkan beasiswa, dan mengikuti seleksi mahasiswa
                                                berprestasi.
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 5 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                <li>Mengirimkan bukti permasalahan TAK ke email SSC dengan format
                                                    pengajuan layanan online</li>
                                                <li>Pertanyaan tentang jumlah poin TAK bisa cek <a
                                                        href="https://student.ittelkom-sby.ac.id/transkrip-aktivitas-kemahasiswaan/"
                                                        target="_blank">disini </a></li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hilangktm" role="tabpanel"
                                        aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Hilang, cetak ulang, dan ambil KTM baru</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/kemahasiswaan/ktm.png"
                                                        alt="hilangktm">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Layanan hilang, cetak ulang, dan ambil KTM baru
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 1-3 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                <li>Jika belum dapat KTM: Silahkan tanyakan kepada dosen wali atau
                                                    kaprodi terlebih dahulu. Jika
                                                    tidak ada silahkan ke SSC</li>
                                                <li>Jika hilang KTM atau ingin cetak lagi silahkan:</li>
                                                1. Membawa surat kehilangan dari kepolisian <br>
                                                2. Membawa uang denda Rp 50.000
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="surdel" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Surat Rekomendasi / Delegasi Lomba </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/kemahasiswaan/surat-lomba.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Layanan pengajuan surat rekomendasi atau surat pengantar lomba.
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> - Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                -
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="skb" role="tabpanel"
                                        aria-labelledby="address-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Surat Keterangan Tidak Menerima Beasiswa Dari Kampus
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/kemahasiswaan/surat-beasiswa.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Layanan pembuatan surat keterangan tidak menerima beasiswa dari kampus
                                                untuk keperluan tertentu.
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> - Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                -
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="asuran" role="tabpanel"
                                        aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Asuransi dan Layanan Kesehatan Telkomedika</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/kemahasiswaan/asuransi.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Layanan terkait pelaksanaan pengajuan klaim & asuransi kesehatan
                                                mahasiswa.
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> - Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                -
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deals section-padding mt-20 hide-first hide-later" id="kemahasiswaan-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0 bg-white">
                            <div class="deal-top">
                                <div class="deal-header mb-20">
                                    <div class="brand-box"></div>
                                    <h2 class="text-brand">Informasi Kemahasiswaan</h2>
                                </div>
                                <p>Merupakan unit yang bertugas mengelola administrasi kemahasiswaan yang mencakup
                                    kegiatan layanan
                                    administrasi kemahasiswaan, pusat bahasa, dan perpustakaan. Informasi lengkap
                                    mengenai Unit
                                    Kemahasiswaan, silakan kunjungi:</p>
                                <div class="col-md-12 mt-50">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa-brands fa-instagram"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://www.instagram.com/kemahasiswaanitts/" target="_blank">
                                                <h5 class="link-social">kemahasiswaanitts</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa fa-globe"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://www.instagram.com/kemahasiswaan.ittelkomsby/"
                                                target="_blank">
                                                <h5 class="link-social">https://kemahasiswaan.ittelkom-sby.ac.id/</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated bg-white"
                            style="background-image: url('assets-home/imgs/banner/device-kemahasiswaan.png');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-30 pb-150 hide-first hide-later" id="logistik-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-md-12 mb-20">
                                <div class="deal bg-white deal-cust-1">
                                    <div class="deal-top">
                                        <div class="deal-header">
                                            <div class="brand-box"></div>
                                            <h2 class="text-brand">Layanan Logistik</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                                href="#penas" role="tab" aria-controls="dashboard"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Peminjaman Asset
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#pemas"
                                                role="tab" aria-controls="orders" aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Pemeliharaan Asset Rusak / Hilang
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade active show" id="penas" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Peminjaman Asset </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/logistik/peminjaman.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Layanan peminjaman asset seperti ruangan kuliah, aula rapat, serta
                                                perlengkapan audio & video.
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 3 - 5 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                <li>Pastikan Anda memahami:
                                                    <br>
                                                    <a href="https://www.instagram.com/p/CwkIkLsPLY-/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
                                                        target="_blank">https://www.instagram.com/p/CwkIkLsPLY-/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==</a>
                                                    <a href="https://www.instagram.com/p/CwkIXh-PM5W/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
                                                        target="_blank">https://www.instagram.com/p/CwkIXh-PM5W/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==</a>
                                                    <a href="https://www.instagram.com/p/CwkIMidP8Xc/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
                                                        target="_blank">https://www.instagram.com/p/CwkIMidP8Xc/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==</a>
                                                </li>
                                                <br>
                                                <li>Dokumen F01 dan F02
                                                    <br>
                                                    <a href="https://drive.google.com/drive/folders/1CLtpLY5py6s6Cdt07myRYBHrztEG79E0"
                                                        target="_blank">https://drive.google.com/drive/folders/1CLtpLY5py6s6Cdt07myRYBHrztEG79E0</a>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pemas" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Pemeliharaan Asset Rusak/Hilang </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/logistik/pemeliharaan.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Layanan pemeliharaan asset mengenai kelistrikan, air, gedung, audio &
                                                video yang rusak atau hilang.
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> - Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                -
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deals section-padding mt-20 hide-first hide-later" id="logistik-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0 bg-white">
                            <div class="deal-top">
                                <div class="deal-header mb-20">
                                    <div class="brand-box"></div>
                                    <h2 class="text-brand">Informasi Logistik</h2>
                                </div>
                                <p>Merupakan unit yang bertugas mengelola administrasi logistik yang mencakup kegiatan
                                    layanan
                                    administrasi logistik, pusat bahasa, dan perpustakaan. Informasi lengkap mengenai
                                    Unit
                                    Logistik, silakan kunjungi:</p>
                                <div class="col-md-12 mt-50">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa-brands fa-instagram"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://www.instagram.com/logistik.ittelkomsby/" target="_blank">
                                                <h5 class="link-social">logistik.ittelkomsby</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa fa-globe"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://logistik.ittelkom-sby.ac.id/" target="_blank">
                                                <h5 class="link-social">https://logistik.ittelkom-sby.ac.id/</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated bg-white"
                            style="background-image: url('assets-home/imgs/banner/device-academic.png');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-30 pb-150 hide-first hide-later" id="keuangan-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-md-12 mb-20">
                                <div class="deal bg-white deal-cust-1">
                                    <div class="deal-top">
                                        <div class="deal-header">
                                            <div class="brand-box"></div>
                                            <h2 class="text-brand">Layanan Keuangan</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                                href="#bppsem" role="tab" aria-controls="dashboard"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Pembayarann BPP lebih dari 1 Semester
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#angsur"
                                                role="tab" aria-controls="orders" aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Pengajuan Angsuran BPP
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab"
                                                href="#kuitan" role="tab" aria-controls="track-orders"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Permintaan Bukti Pembayaran/Kuitansi Pembayaran Biaya Pendidikan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#invoi"
                                                role="tab" aria-controls="address" aria-selected="true">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Permintaan Surat Tagihan/ Invoice Biaya Pendidikan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab"
                                                href="#bebasadm" role="tab" aria-controls="account-detail"
                                                aria-selected="true">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Permintaan Surat Keterangan Bebas Administrasi Keuangan
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade active show" id="bppsem" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Pembayarann BPP lebih dari 1 Semester</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/keuangan/Pembayaran_BPP_Semester.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Panduan pembayaran Biaya Penyelenggaraan Pendidikan setiap semester.
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 3 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                -
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="angsur" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Pengajuan Angsuran BPP</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/keuangan/Pengajuan_Angsuran.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Pengajuan keringanan bagi mahasiswa yang belum dapat melakukan pelunasan
                                                pembayaran BPP
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 3 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                Bawa berkas Surat Permohonan Angsuran (bisa di download di web utama
                                                kampus atau dari dosen wali)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kuitan" role="tabpanel"
                                        aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Permintaan Bukti Pembayaran/Kuitansi Pembayaran
                                                    Biaya Pendidikan </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/keuangan/Permintaan_Bukti_Pembayaran.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Permintaan bukti pembayaran biaya pendidikan dari mahasiswa atau orang
                                                tua/wali mahasiswa
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 1 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                -
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="invoi" role="tabpanel"
                                        aria-labelledby="address-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Permintaan Surat Tagihan/ Invoice Biaya Pendidikan
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/keuangan/Permintaan_Surat_Tagihan.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Permintaan surat tagihan atau invoice biaya pendidikan dari mahasiswa
                                                atau orang tua/wali mahasiswa
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 1 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                -
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="bebasadm" role="tabpanel"
                                        aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Permintaan Surat Keterangan Bebas Administrasi
                                                    Keuangan </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/keuangan/Permintaan_Surat_Keterangan.png"
                                                        alt="KRS">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Permintaan surat keterangan yang menyatakan bahwa mahasiswa sudah tidak
                                                memiliki piutang biaya pendidikan. Surat tersebut digunakan untuk
                                                keperluan mengurus proses kelulusan dan proses undur diri
                                                <br>
                                                <Strong>Durasi Pengerjaan:</Strong> 1 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                -
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deals section-padding mt-20 hide-first hide-later" id="keuangan-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0 bg-white">
                            <div class="deal-top">
                                <div class="deal-header mb-20">
                                    <div class="brand-box"></div>
                                    <h2 class="text-brand">Informasi Keuangan</h2>
                                </div>
                                <p>Merupakan unit yang bertugas mengelola administrasi keuangan yang mencakup kegiatan
                                    layanan
                                    administrasi keuangan, pusat bahasa, dan perpustakaan. Informasi lengkap mengenai
                                    Unit
                                    Keuangan, silakan kunjungi:</p>
                                <div class="col-md-12 mt-50">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa-brands fa-instagram"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://www.instagram.com/keuangan.ittelkomsby/" target="_blank">
                                                <h5 class="link-social">keuangan.ittelkomsby</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa fa-globe"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://keuangan.ittelkom-sby.ac.id/" target="_blank">
                                                <h5 class="link-social">https://keuangan.ittelkom-sby.ac.id/</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated bg-white"
                            style="background-image: url('assets-home/imgs/banner/device-keuangan.png');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-30 pb-150 hide-first hide-later" id="perpus-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-md-12 mb-20">
                                <div class="deal bg-white deal-cust-1">
                                    <div class="deal-top">
                                        <div class="deal-header">
                                            <div class="brand-box"></div>
                                            <h2 class="text-brand">Layanan Perpustakaan</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                                href="#bebaspus" role="tab" aria-controls="dashboard"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Permintaan surat bebas pustaka
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade active show" id="bebaspus" role="tabpanel"
                                        aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Permintaan surat bebas pustaka</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/akademik/registrasi-krs.png"
                                                        alt="bebaspus">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                <br>
                                                Layanan panduan pengajuan surat yang menjelaskan bahwa mahasiswa
                                                sebagaimana termaktub pada surat
                                                tersebut tidak memiliki tanggungan administrasi dan peminjaman di
                                                perpustakaan
                                                <Strong>Durasi Pengerjaan:</Strong> 3-5 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                - Mahasiswa membawa surat keterangan bebas pustaka unduh di <a
                                                    href="https://ittsby.id/SuratKeteranganBebasPustaka">
                                                    https://ittsby.id/SuratKeteranganBebasPustaka</a>
                                                - Isi form <a
                                                    href="https://bit.ly/https://bit.ly/ PermintaanSuratBebasPustaka">
                                                    https://bit.ly/https://bit.ly/ PermintaanSuratBebasPustaka</a>jika
                                                tidak ada tunggakan (peminjaman
                                                buku ataupun denda)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deals section-padding mt-20 hide-first hide-later" id="perpus-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0 bg-white">
                            <div class="deal-top">
                                <div class="deal-header mb-20">
                                    <div class="brand-box"></div>
                                    <h2 class="text-brand">Informasi Pusat Bahasa <br>& Perpustakaan</h2>
                                </div>
                                <p>Merupakan unit yang bertugas mengelola administrasi perpus yang mencakup kegiatan
                                    layanan
                                    administrasi perpus, pusat bahasa, dan perpustakaan. Informasi lengkap mengenai Unit
                                    Pusat Bahasa & Perpustakaan, silakan kunjungi:</p>
                                <div class="col-md-12 mt-50">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa-brands fa-instagram"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://www.instagram.com/akademikitts/" target="_blank">
                                                <h5 class="link-social">akademikitts</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="text-brand text-right">
                                                <i class="fa fa-globe"></i>
                                            </h4>
                                        </div>
                                        <div class="col-md-11">
                                            <a href="https://perpus.ittelkom-sby.ac.id/" target="_blank">
                                                <h5 class="link-social">https://perpus.ittelkom-sby.ac.id/</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated bg-white"
                            style="background-image: url('assets-home/imgs/banner/device-perpus.png');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <h3>Student <b>Service Center</b></h3>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 h6 wow fadeIn animated">Contact</h5>
                        <p class="wow fadeIn animated">
                            <strong>Address: </strong>Jl. Ketintang No.156, Gayungan, Surabaya, Jawa Timur 60231
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Phone: </strong>(+6231) 8280800
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Email: </strong><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="37444454775e4343525b5c585a1a44554e195654195e53">[email&#160;protected]</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h5 class="widget-title wow fadeIn animated">Aplikasi Student Service Center</h5>
                    <p class="fst-italic">Ditunjukkan untuk mempermudah perangkat kerja serta mahasiswa
                        Institut Teknologi Telkom Surabaya
                        untuk melakukan pelaporan pemintaan bantuan, demi terciptanya lingkungan kerja serta perkuliahan
                        yang lebih baik
                        dan efisien.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">&copy; 2024, <strong class="text-brand">IT
                        Telkom Surabaya</strong> Student Service Center</p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    <a href="https://ittelkom-sby.ac.id/" target="_blank">IT Telkom Surabaya</a>. All rights
                    reserved
                </p>
            </div>
        </div>
    </div>
    </footer>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/slick.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/jquery.syotimer.min.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/wow.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/jquery-ui.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/perfect-scrollbar.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/magnific-popup.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/select2.min.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/waypoints.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/counterup.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/jquery.countdown.min.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/images-loaded.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/isotope.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/scrollup.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/jquery.vticker-min.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/jquery.theia.sticky.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/plugins/jquery.elevatezoom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/main.js"></script>
    <script src="https://ssc.ittelkom-sby.ac.id/assets-home/js/shop.js"></script>
    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    <script>
        $(document).ready(function() {
            $('.hide-first').hide(500);
            $('#imgaka').attr("colors", "primary:#ffffff,secondary:#ffffff");
        });

        function switchAkademik() {
            $('.card-1').removeClass('active');
            $('#akademikBtn').addClass('active');

            $('.hide-later').hide(500);
            $('#akademik-1').show(500);
            $('#akademik-2').show(500);

            $('lord-icon').attr("colors", "primary:#121331,secondary:#aa0000");
            $('#imgaka').attr("colors", "primary:#ffffff,secondary:#ffffff");
        }

        function switchPuti() {
            $('.card-1').removeClass('active');
            $('#putiBtn').addClass('active');

            $('.hide-later').hide(500);
            $('#puti-1').show(500);
            $('#puti-2').show(500);

            $('lord-icon').attr("colors", "primary:#121331,secondary:#aa0000");
            $('#imgaka').attr("colors", "primary:#aa0000,secondary:#121331");
            $('#imgputi').attr("colors", "primary:#ffffff,secondary:#ffffff");
        }

        function switchKemahasiswaan() {
            $('.card-1').removeClass('active');
            $('#kemahasiswaanBtn').addClass('active');

            $('.hide-later').hide(500);
            $('#kemahasiswaan-1').show(500);
            $('#kemahasiswaan-2').show(500);

            $('lord-icon').attr("colors", "primary:#121331,secondary:#aa0000");
            $('#imgaka').attr("colors", "primary:#aa0000,secondary:#121331");
            $('#imgkema').attr("colors", "primary:#ffffff,secondary:#ffffff");
        }

        function switchLogistik() {
            $('.card-1').removeClass('active');
            $('#logistikBtn').addClass('active');

            $('.hide-later').hide(500);
            $('#logistik-1').show(500);
            $('#logistik-2').show(500);

            $('lord-icon').attr("colors", "primary:#121331,secondary:#aa0000");
            $('#imgaka').attr("colors", "primary:#aa0000,secondary:#121331");
            $('#imglog').attr("colors", "primary:#ffffff,secondary:#ffffff");
        }

        function switchKeuangan() {
            $('.card-1').removeClass('active');
            $('#keuanganBtn').addClass('active');

            $('.hide-later').hide(500);
            $('#keuangan-1').show(500);
            $('#keuangan-2').show(500);

            $('lord-icon').attr("colors", "primary:#121331,secondary:#aa0000");
            $('#imgaka').attr("colors", "primary:#aa0000,secondary:#121331");
            $('#imgkeu').attr("colors", "primary:#ffffff,secondary:#ffffff");
        }

        function switchPerpus() {
            $('.card-1').removeClass('active');
            $('#perpusBtn').addClass('active');

            $('.hide-later').hide(500);
            $('#perpus-1').show(500);
            $('#perpus-2').show(500);

            $('lord-icon').attr("colors", "primary:#121331,secondary:#aa0000");
            $('#imgaka').attr("colors", "primary:#aa0000,secondary:#121331");
            $('#imgperpus').attr("colors", "primary:#ffffff,secondary:#ffffff");
        }

        // function switchFtib() {
        //     $('.card-1').removeClass('active');
        //     $('#ftibBtn').addClass('active');

        //     $('.hide-later').hide(500);
        //     $('#ftib-1').show(500);
        //     $('#ftib-2').show(500);

        //     $('lord-icon').attr("colors", "primary:#121331,secondary:#aa0000");
        //     $('#imgaka').attr("colors", "primary:#aa0000,secondary:#121331");
        //     $('#imgftib').attr("colors", "primary:#ffffff,secondary:#ffffff");
        // }

        // function switchFteic() {
        //     $('.card-1').removeClass('active');
        //     $('#fteicBtn').addClass('active');

        //     $('.hide-later').hide(500);
        //     $('#fteic-1').show(500);
        //     $('#fteic-2').show(500);

        //     $('lord-icon').attr("colors", "primary:#121331,secondary:#aa0000");
        //     $('#imgaka').attr("colors", "primary:#aa0000,secondary:#121331");
        //     $('#imgfteic').attr("colors", "primary:#ffffff,secondary:#ffffff");
        // }

        $(document).ready(function() {
            $(".tablinks").click(function() {
                var tabName = $(this).data("tab");
                $(".tabcontent").removeClass("active");
                $("#" + tabName).addClass("active");
                $(".tablinks").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DQKR17FFW0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DQKR17FFW0');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387"
        integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ=="
        data-cf-beacon='{"rayId":"8840ff6fbc375de7","r":1,"version":"2024.4.1","token":"50234156d30d44129c40e202cd5b6918"}'
        crossorigin="anonymous"></script>
</body>





</html>
