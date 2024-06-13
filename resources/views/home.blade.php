@extends('templates.main')
@section('container')
    <div class="text-center">

        <h1
            class="mb-4 text-4xl text-red-800 font-extrabold leading-none tracking-tight md:text-5xl lg:text-6xl dark:text-white">
            Student Service Center</h1>
        <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Melayani dengan
            sepenuh hati, buat tiket anda secara online dimana saja
        </p>
        <a href="#"
            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-blue-300">
            Lihat layanan
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
    <br>
    <br>
    <br>
    <p class="max-w-lg text-2xl font-semibold leading-relaxed text-gray-900 dark:text-white">Panduan pengajuan layanan</p>
    <br>
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
    <br>
    <section class="popular-categories section-padding mt-15" id="laya">
        <div class="container wow fadeIn animated">
            <h3 class="text-red-800 text-xl font-semibold"><i class="fa fa-window-restore text-brand"></i>
                Kategori<span class="text-gray-800"> Layanan</span>
            </h3>
            <br>
            <div class="carausel-4-columns-cover position-relative">
                <div class="carausel-4-columns" id="carausel-4-columns">
                    <div class="card-1" id="logistikBtn" onclick="switchLogistik()">
                        <i class="mb-4 text-9xl fa-solid fa-screwdriver-wrench"></i>
                        <h5 class="text-xl text-red-800 font-semibold"><a>Logistik</a></h5>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="row">
                    <div class="col-md-12 mb-20">
                        <div class="deal bg-white deal-cust-1">
                            <div class="deal-top">
                                <h3 class="text-red-800 text-xl font-semibold"><i
                                        class="fa fa-window-restore text-brand"></i>
                                    Layanan<span class="text-gray-800"> Logistik</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dashboard-menu">
                            <ul class="nav flex-column" role="tablist">
                                <li class="bg-gray-100 mb-3 p-3 rounded-sm">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#penas"
                                        role="tab" aria-controls="dashboard" aria-selected="true">
                                        <i class="fa-regular fa-square-check"></i>&nbsp;
                                        Peminjaman Asset
                                    </a>
                                    <br>
                                    <br>
                                    <div class="card-body">
                                        <strong>Deskripsi: </strong>
                                        Layanan peminjaman asset seperti ruangan kuliah, aula rapat, serta
                                        perlengkapan audio & video.
                                        <br>
                                        <strong>Durasi Pengerjaan:</strong> 3 - 5 Hari Kerja
                                        <br>
                                        <strong>Requirement:</strong>
                                        <ul>
                                            <li>Pastikan Anda memahami:
                                                <br>
                                                <a href="https://www.instagram.com/p/CwkIkLsPLY-/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA=="
                                                    target="_blank">https://www.instagram.com/p/CwkIkLsPLY-/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==</a>
                                                <a href="https://www.instagram.com/p/CwkIXh-PM5W/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA=="
                                                    target="_blank">https://www.instagram.com/p/CwkIXh-PM5W/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==</a>
                                                <a href="https://www.instagram.com/p/CwkIMidP8Xc/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA=="
                                                    target="_blank">https://www.instagram.com/p/CwkIMidP8Xc/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==</a>
                                            </li>
                                            <li>Dokumen F01 dan F02
                                                <br>
                                                <a href="https://drive.google.com/drive/folders/1CLtpLY5py6s6Cdt07myRYBHrztEG79E0"
                                                    target="_blank">https://drive.google.com/drive/folders/1CLtpLY5py6s6Cdt07myRYBHrztEG79E0</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bg-gray-100 mb-3 p-3 rounded-sm">
                                    <a class="nav-link" id="maintenance-tab" data-bs-toggle="tab" href="#pemas"
                                        role="tab" aria-controls="maintenance" aria-selected="false">
                                        <i class="fa-regular fa-square-check"></i>&nbsp;
                                        Pemeliharaan Asset Rusak / Hilang
                                    </a>
                                    <br>
                                    <br>
                                    <div class="card-body">
                                        <strong>Deskripsi: </strong>
                                        Layanan pemeliharaan asset mengenai kelistrikan, air, gedung, audio &
                                        video yang rusak atau hilang.
                                        <br>
                                        <strong>Durasi Pengerjaan:</strong> - Hari Kerja
                                        <br>
                                        <strong>Requirement:</strong> -
                                    </div>
                                </li>
                                <li class="bg-gray-100 mb-3 p-3 rounded-sm">
                                    <a class="nav-link" id="online-loan-tab" data-bs-toggle="tab" href="#online-loan"
                                        role="tab" aria-controls="online-loan" aria-selected="false">
                                        <i class="fa-regular fa-square-check"></i>&nbsp;
                                        Peminjaman Secara Online
                                    </a>
                                    <br>
                                    <br>
                                    <strong>Deskripsi: </strong>
                                    Layanan peminjaman logistik untuk keperluan mahasiswa secara online.
                                    <br>
                                    <strong>Durasi Pengerjaan:</strong> Sesuai dengan kebutuhan peminjaman.
                                    <br>
                                    <strong>Requirement:</strong>
                                    <ul>
                                        <li>Mahasiswa terdaftar</li>
                                        <li>Mengisi formulir peminjaman</li>
                                        <li>Upload dokumen pendukung (jika diperlukan)</li>
                                    </ul>
                                    <br>
                                    <strong>Panduan Peminjaman Logistik Secara Online:</strong>
                                    <ol>
                                        <li><strong>Akses Halaman Peminjaman Logistik:</strong> Kunjungi
                                            situs resmi layanan peminjaman logistik di <a
                                                href="https://ssc.ittelkom-sby.ac.id/">https://ssc.ittelkom-sby.ac.id/</a>.
                                        </li>
                                        <li><strong>Login ke Akun Anda:</strong> Masukkan username dan
                                            password Anda, atau daftar jika belum memiliki akun.</li>
                                        <li><strong>Isi Formulir Peminjaman:</strong> Lengkapi formulir
                                            dengan data yang diperlukan seperti nama, NIM, program studi,
                                            jenis logistik, jumlah, tanggal mulai, tanggal pengembalian, dan
                                            keperluan peminjaman.</li>
                                        <li><strong>Unggah Dokumen Pendukung (Jika Diperlukan):</strong>
                                            Unggah dokumen seperti surat izin atau proposal kegiatan.</li>
                                        <li><strong>Kirim Formulir:</strong> Klik tombol "Kirim" atau
                                            "Submit" untuk mengirim permintaan peminjaman Anda.</li>
                                        <li><strong>Tunggu Persetujuan:</strong> Permintaan Anda akan
                                            diproses. Anda akan menerima notifikasi melalui email atau
                                            sistem.</li>
                                        <li><strong>Ambil Logistik:</strong> Ikuti instruksi untuk mengambil
                                            logistik setelah permintaan disetujui.</li>
                                        <li><strong>Kembalikan Logistik:</strong> Kembalikan logistik sesuai
                                            dengan tanggal pengembalian yang ditentukan dalam kondisi baik.
                                        </li>
                                    </ol>
                                    <p>Jika ada pertanyaan atau memerlukan bantuan, silakan hubungi bagian
                                        logistik.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
    <a href="/peminjaman/asset" class="p-3 bg-red-700 text-white rounded-lg">Peminjaman asset</a>
@endsection

{{-- <!DOCTYPE html>

<
<body>
    
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
                            <a class="animated btn btn-brand" href="{{ route('login') }}" tabindex="0"> Lihat Layanan
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
                                                aria-selected="true">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Peminjaman Asset
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="maintenance-tab" data-bs-toggle="tab"
                                                href="#pemas" role="tab" aria-controls="maintenance"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Pemeliharaan Asset Rusak / Hilang
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="online-loan-tab" data-bs-toggle="tab"
                                                href="#online-loan" role="tab" aria-controls="online-loan"
                                                aria-selected="false">
                                                <i class="fa-regular fa-square-check"></i>&nbsp;
                                                Peminjaman Secara Online
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
                                                <strong>Durasi Pengerjaan:</strong> 3 - 5 Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong>
                                                <ul>
                                                    <li>Pastikan Anda memahami:
                                                        <br>
                                                        <a href="https://www.instagram.com/p/CwkIkLsPLY-/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA=="
                                                            target="_blank">https://www.instagram.com/p/CwkIkLsPLY-/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==</a>
                                                        <a href="https://www.instagram.com/p/CwkIXh-PM5W/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA=="
                                                            target="_blank">https://www.instagram.com/p/CwkIXh-PM5W/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==</a>
                                                        <a href="https://www.instagram.com/p/CwkIMidP8Xc/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA=="
                                                            target="_blank">https://www.instagram.com/p/CwkIMidP8Xc/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==</a>
                                                    </li>
                                                    <li>Dokumen F01 dan F02
                                                        <br>
                                                        <a href="https://drive.google.com/drive/folders/1CLtpLY5py6s6Cdt07myRYBHrztEG79E0"
                                                            target="_blank">https://drive.google.com/drive/folders/1CLtpLY5py6s6Cdt07myRYBHrztEG79E0</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pemas" role="tabpanel"
                                        aria-labelledby="maintenance-tab">
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
                                                <strong>Durasi Pengerjaan:</strong> - Hari Kerja
                                                <br>
                                                <strong>Requirement:</strong> -
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="online-loan" role="tabpanel"
                                        aria-labelledby="online-loan-tab">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <h5 class="mb-0">Peminjaman Secara Online</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img class="img-layanan"
                                                        src="assets-home/imgs/page/logistik/pemeliharaan.png"
                                                        alt="Peminjaman Logistik">
                                                </div>
                                                <strong>Deskripsi: </strong>
                                                Layanan peminjaman logistik untuk keperluan mahasiswa secara online.
                                                <br>
                                                <strong>Durasi Pengerjaan:</strong> Sesuai dengan kebutuhan peminjaman.
                                                <br>
                                                <strong>Requirement:</strong>
                                                <ul>
                                                    <li>Mahasiswa terdaftar</li>
                                                    <li>Mengisi formulir peminjaman</li>
                                                    <li>Upload dokumen pendukung (jika diperlukan)</li>
                                                </ul>
                                                <br>
                                                <strong>Panduan Peminjaman Logistik Secara Online:</strong>
                                                <ol>
                                                    <li><strong>Akses Halaman Peminjaman Logistik:</strong> Kunjungi
                                                        situs resmi layanan peminjaman logistik di <a
                                                            href="https://ssc.ittelkom-sby.ac.id/">https://ssc.ittelkom-sby.ac.id/</a>.
                                                    </li>
                                                    <li><strong>Login ke Akun Anda:</strong> Masukkan username dan
                                                        password Anda, atau daftar jika belum memiliki akun.</li>
                                                    <li><strong>Isi Formulir Peminjaman:</strong> Lengkapi formulir
                                                        dengan data yang diperlukan seperti nama, NIM, program studi,
                                                        jenis logistik, jumlah, tanggal mulai, tanggal pengembalian, dan
                                                        keperluan peminjaman.</li>
                                                    <li><strong>Unggah Dokumen Pendukung (Jika Diperlukan):</strong>
                                                        Unggah dokumen seperti surat izin atau proposal kegiatan.</li>
                                                    <li><strong>Kirim Formulir:</strong> Klik tombol "Kirim" atau
                                                        "Submit" untuk mengirim permintaan peminjaman Anda.</li>
                                                    <li><strong>Tunggu Persetujuan:</strong> Permintaan Anda akan
                                                        diproses. Anda akan menerima notifikasi melalui email atau
                                                        sistem.</li>
                                                    <li><strong>Ambil Logistik:</strong> Ikuti instruksi untuk mengambil
                                                        logistik setelah permintaan disetujui.</li>
                                                    <li><strong>Kembalikan Logistik:</strong> Kembalikan logistik sesuai
                                                        dengan tanggal pengembalian yang ditentukan dalam kondisi baik.
                                                    </li>
                                                </ol>
                                                <p>Jika ada pertanyaan atau memerlukan bantuan, silakan hubungi bagian
                                                    logistik.</p>
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





</html> --}}
