@extends('templates.main')

@section('container')
    <header class="header-area header-style-3 header-height-2">
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative main-nav pb-10">
                    <div class="header-right">
                        <div class="search-style-2">
                        </div>
                        <div class="header-action-right d-md-none d-sm-none d-lg-block">
                            <div class="header-action-2">

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
    <title>Tentang Kami</title>
    <style>
        h1 {
            text-align: center;
            color: red;
            margin-top: 50px;
        }

        p.description {
            margin-bottom: 50px;
        }
    </style>

    <body>
        <h1 class="text-4xl font-semibold mb-2">Tentang Kami</h1>
        <p class="description">Student Service Center (SSC) adalah pusat layanan untuk mahasiswa di IT Telkom Surabaya.
            Kami menyediakan berbagai layanan pendukung kegiatan akademik dan non-akademik, termasuk layanan
            logistik.
            Layanan logistik kami mencakup peminjaman peralatan, pengelolaan inventaris, dan pemeliharaan fasilitas.
            Kami bertujuan untuk memberikan pengalaman terbaik bagi mahasiswa dalam menjalani kehidupan kampus
            mereka.</p>
    </body>
    <section class="">
        <div class="pt-15 pb-20">
            <div class="row ">
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
@endsection
