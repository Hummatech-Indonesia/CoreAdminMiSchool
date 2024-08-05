@extends('layouts.landing.layouts-landing')
@section('style')
<style>
    .banner_section .banner_text {
        color: var(--text-white);
        text-align: center;
        padding: 250px 100px 0 0;
    }

    .banner_section .banner_text {
        color: var(--text-white);
        text-align: center;
        padding: 120px 50px 50px 50px;
    }

    .btn_main {
        background: linear-gradient(45deg, #79C7FF, #0042FF);
        /* Gradasi biru */
        color: white;
        /* Warna teks putih */
        border: none;
        /* Hilangkan border */
        padding: 10px 20px;
        /* Padding untuk ukuran tombol */
        font-size: 16px;
        /* Ukuran font */
        cursor: pointer;
        /* Ubah cursor menjadi pointer */
        transition: background 0.3s;
        /* Animasi transisi saat hover */
    }

    .btn_main:hover {
        background: linear-gradient(45deg, #0042FF, #79C7FF);
        /* Ubah gradasi saat hover */
    }

    .analyze_section .analyze_image img {
        box-shadow: none;
        max-width: 100%;
        border-radius: none;
    }

    a.btn-stroke-gradient {
        border: 2px solid #5D87FF;
        border-radius: 9px;
        color: #5D87FF;
        transition: 0.3s ease-in-out;
    }

    a.btn-stroke-gradient:hover {
        background: linear-gradient(45deg, #79C7FF, #0042FF);
        color: #fff;
        transition: 0.3s ease-in-out;
    }

    .navbar-expand-lg .navbar-nav .nav-link.dark_btn {
        color: var(--text-white);
        background-image: var(#5D87FF);
        font-size: 15px;
        padding: 9px 38px;
        border-radius: 25px;
        margin-left: 20px;
        position: relative;
        overflow: hidden;
        transition: 0.4s all;
        font-weight: 700;
    }

    .company_logos .logo img {
        display: block;
        margin: 0 auto;
        width: 100%;
        transition: transform 0.3s ease-in-out;
        filter: none;
        opacity: 1;
        max-width: 150px;
    }

    .what_coustomer_says .coustomer_slide_box .avtar_profil {
        margin-top: 0px;
    }

    .faq_section .faq_panel .card-header .btn.active {
        color: var(--primary);
    }

    .text-primary {
        color: #0042FF;
    }

    .analyze_section .analyze_image {
        background-position: center;
    }

    .analyze_section .analyze_text .section_title {
        text-align: left;
        margin: 15px 0 40px 30px;
    }

</style>

<style>
    @media screen and (max-width: 767px) {
        .analyze_section .section_title h2 {
            padding-left: 0px;
        }
    }

</style>
@endsection

@section('content')
<!-- Unique features Start -->
<section class="row_am unique_section">
    <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <h2>Fitur - Fitur </h2>
            <p>Mischool dilengkapi dengan fitur - fitur penting untuk management sekolah, dibawah ini adalah fitur -
                fitur dari Mischool</p>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature_card bg-light p-5 text-start">
                        <img src="{{ asset('landing_assets/images/landing/feature-1.png') }}" style="width: 70px" alt="image" class="img-fluid">
                        <h3 class="pt-3 text-primary">E - Learning</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus felis non odio
                            convallis interdum. Cras id diam rhoncus,</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature_card bg-light p-5 text-start">
                        <!-- Repeat card content -->
                        <img src="{{ asset('landing_assets/images/landing/feature-2.png') }}" style="width: 70px" alt="image" class="img-fluid">
                        <h3 class="pt-3 text-primary">Pelanggaran</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus felis non odio
                            convallis interdum. Cras id diam rhoncus,</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature_card bg-light p-5 text-start">
                        <!-- Repeat card content -->
                        <img src="{{ asset('landing_assets/images/landing/feature-3.png') }}" style="width: 70px" alt="image" class="img-fluid">
                        <h3 class="pt-3 text-primary">Absensi</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus felis non odio
                            convallis interdum. Cras id diam rhoncus,</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature_card bg-light p-5 text-start">
                        <img src="{{ asset('landing_assets/images/landing/feature-4.png') }}" style="width: 70px" alt="image" class="img-fluid">
                        <h3 class="pt-3 text-primary">Rapot</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus felis non odio
                            convallis interdum. Cras id diam rhoncus,</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature_card bg-light p-5 text-start">
                        <!-- Repeat card content -->
                        <img src="{{ asset('landing_assets/images/landing/feature-5.png') }}" style="width: 70px" alt="image" class="img-fluid">
                        <h3 class="pt-3 text-primary">Ujian</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus felis non odio
                            convallis interdum. Cras id diam rhoncus,</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature_card bg-light p-5 text-start">
                        <!-- Repeat card content -->
                        <img src="{{ asset('landing_assets/images/landing/feature-6.png') }}" style="width: 70px" alt="image" class="img-fluid">
                        <h3 class="pt-3 text-primary">Buku Tamu</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus felis non odio
                            convallis interdum. Cras id diam rhoncus,</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Unique features End -->

<!-- Analyze Section Strat -->
<section class="row_am analyze_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <div class="analyze_image d-flex justify-content-center" data-aos="fade-in" data-aos-duration="1000">
                        <img data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100" class="" src="{{ asset('landing_assets/images/landing/about.png') }}" width="400px" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center ms-3">
                <div class="analyze_text" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                    <div class="section_title align-center">
                        <h2>Tentang Mischool</h2>
                        <p>Mischool merupakan website untuk mempermudahkan berbagai Sekolah-sekolah. Mischool adalah web
                            management sekolah yang menyediakan Fitur Absensi, Pelanggaran, E-learning, Raport, Ujian,
                            Buku Tamu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Analyze Section End -->

<!-- Interface overview-Section start -->
<section class="row_am interface_section mb-5 pb-5">
    <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <h2>Preview Fitur MISCHOOL</h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typese tting indus
            orem Ipsum has beenthe standard dummy text ever since.
        </p>
    </div>
    <!-- screen slider start -->
    <div class="screen_slider" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
        <div id="screen_slider" class="owl-carousel owl-theme">
            <div class="item">
                <div class="screen_frame_img">
                    <img src="{{ asset('landing_assets/images/new/Interface-overview-01.png') }}" alt="image">
                    <h3 class="caption">Report Page</h3>
                </div>
            </div>
            <div class="item">
                <div class="screen_frame_img">
                    <img src="{{ asset('landing_assets/images/new/Interface-overview-02.png') }}" alt="image">
                    <h3 class="caption">Dashboard</h3>
                </div>
            </div>
            <div class="item">
                <div class="screen_frame_img">
                    <img src="{{ asset('landing_assets/images/new/Interface-overview-03.png') }}" alt="image">
                    <h3 class="caption">Report Page</h3>
                </div>
            </div>
            <div class="item">
                <div class="screen_frame_img">
                    <img src="{{ asset('landing_assets/images/new/Interface-overview-02.png') }}" alt="image">
                    <h3 class="caption">Dashboard</h3>
                </div>
            </div>
            <div class="item">
                <div class="screen_frame_img">
                    <img src="{{ asset('landing_assets/images/new/Interface-overview-01.png') }}" alt="image">
                    <h3 class="caption">Report Page</h3>
                </div>
            </div>
            <div class="item">
                <div class="screen_frame_img">
                    <img src="{{ asset('landing_assets/images/new/Interface-overview-02.png') }}" alt="image">
                    <h3 class="caption">Report Page</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- screen slider end -->
</section>
<!-- Interface overview-Section end -->

<!-- feature package start -->
<section class="row_am pricing_section my-5 pt-5 pb-2" id="pricing" data-aos="fade-in" data-aos-duration="1000">
    <!-- container start -->
    <div class="container">
        <div class="section_title px-5 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <div>
                <h2>Paket Fitur MISCHOOL</h2>
                <p>Lihat berbagai paket harga yang ditawarkan oleh Mischool dan temukan yang <br>
                    paling sesuai dengan kebutuhan sekolah Anda di bagian Pricing List.
                </p>
            </div>
        </div>
        <!-- toggle button -->
        <div class="toggle_block" data-aos="fade-up" data-aos-duration="1500">
            <span class="month active">Bulanan</span>
            <div class="tog_block">
                <span class="tog_btn"></span>
            </div>
            <span class="years">Tahunan</span>
            <span class="offer">50% off</span>
        </div>

        <!-- pricing box  monthly start -->
        <div class="pricing_pannel monthly_plan active" data-aos="fade-up" data-aos-duration="1500">
            <!-- row start -->
            <div class="row">
                @forelse (range(1, 3) as $item)
                <div class="col-md-4">
                    <div class="pricing_block blockwhite" style="padding: 40px 30px">
                        <div class="pkg_name">
                            <h3 class="mb-3 text-primary">E-Learning</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula lacus massa, a finibus urna hendrerit fringilla.</span>
                        </div>
                        <span class="price mt-1 text-primary" style="font-size: 32px">Rp. 450.000<span>/bulan</span></span>
                        <a href="#" class="w-100 btn btn-stroke-gradient mb-4">Beli Sekarang</a>
                        <h5 class="fw-bold mb-4">Daftar Fitur paket</h5>
                        <ul>
                            <li class="border-bottom mb-3 pb-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C4.71036 0 0 4.71036 0 10.5C0 16.2896 4.71036 21 10.5 21C16.2896 21 21 16.2896 21 10.5C21 4.71036 16.2896 0 10.5 0ZM15.9645 6.98099L9.17993 15.0579C9.1055 15.1466 9.0129 15.2182 8.90838 15.2679C8.80387 15.3176 8.68989 15.3443 8.57416 15.3462H8.56053C8.44732 15.3461 8.33538 15.3223 8.23198 15.2762C8.12858 15.2301 8.03602 15.1628 7.96031 15.0786L5.05262 11.8478C4.97878 11.7695 4.92133 11.6772 4.88366 11.5764C4.846 11.4755 4.82887 11.3682 4.83328 11.2606C4.8377 11.1531 4.86357 11.0475 4.90937 10.9501C4.95518 10.8527 5.01999 10.7654 5.10001 10.6934C5.18002 10.6214 5.27362 10.5661 5.37531 10.5308C5.477 10.4955 5.58472 10.4808 5.69214 10.4877C5.79957 10.4946 5.90452 10.523 6.00085 10.571C6.09717 10.6191 6.18292 10.6859 6.25305 10.7675L8.53933 13.3077L14.7278 5.94209C14.8666 5.7816 15.063 5.68219 15.2745 5.66533C15.486 5.64848 15.6957 5.71554 15.8582 5.85202C16.0206 5.9885 16.1229 6.18343 16.1428 6.39469C16.1627 6.60595 16.0987 6.81655 15.9645 6.98099Z" fill="#1EBB9E" />
                                </svg>
                                <span class="ps-5">Classroom</span>
                            </li>
                            <li class="border-bottom mb-3 pb-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C4.71036 0 0 4.71036 0 10.5C0 16.2896 4.71036 21 10.5 21C16.2896 21 21 16.2896 21 10.5C21 4.71036 16.2896 0 10.5 0ZM15.9645 6.98099L9.17993 15.0579C9.1055 15.1466 9.0129 15.2182 8.90838 15.2679C8.80387 15.3176 8.68989 15.3443 8.57416 15.3462H8.56053C8.44732 15.3461 8.33538 15.3223 8.23198 15.2762C8.12858 15.2301 8.03602 15.1628 7.96031 15.0786L5.05262 11.8478C4.97878 11.7695 4.92133 11.6772 4.88366 11.5764C4.846 11.4755 4.82887 11.3682 4.83328 11.2606C4.8377 11.1531 4.86357 11.0475 4.90937 10.9501C4.95518 10.8527 5.01999 10.7654 5.10001 10.6934C5.18002 10.6214 5.27362 10.5661 5.37531 10.5308C5.477 10.4955 5.58472 10.4808 5.69214 10.4877C5.79957 10.4946 5.90452 10.523 6.00085 10.571C6.09717 10.6191 6.18292 10.6859 6.25305 10.7675L8.53933 13.3077L14.7278 5.94209C14.8666 5.7816 15.063 5.68219 15.2745 5.66533C15.486 5.64848 15.6957 5.71554 15.8582 5.85202C16.0206 5.9885 16.1229 6.18343 16.1428 6.39469C16.1627 6.60595 16.0987 6.81655 15.9645 6.98099Z" fill="#1EBB9E" />
                                </svg>
                                <span class="ps-5">Daftar Tugas</span>
                            </li>
                            <li class="border-bottom mb-3 pb-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C4.71036 0 0 4.71036 0 10.5C0 16.2896 4.71036 21 10.5 21C16.2896 21 21 16.2896 21 10.5C21 4.71036 16.2896 0 10.5 0ZM15.9645 6.98099L9.17993 15.0579C9.1055 15.1466 9.0129 15.2182 8.90838 15.2679C8.80387 15.3176 8.68989 15.3443 8.57416 15.3462H8.56053C8.44732 15.3461 8.33538 15.3223 8.23198 15.2762C8.12858 15.2301 8.03602 15.1628 7.96031 15.0786L5.05262 11.8478C4.97878 11.7695 4.92133 11.6772 4.88366 11.5764C4.846 11.4755 4.82887 11.3682 4.83328 11.2606C4.8377 11.1531 4.86357 11.0475 4.90937 10.9501C4.95518 10.8527 5.01999 10.7654 5.10001 10.6934C5.18002 10.6214 5.27362 10.5661 5.37531 10.5308C5.477 10.4955 5.58472 10.4808 5.69214 10.4877C5.79957 10.4946 5.90452 10.523 6.00085 10.571C6.09717 10.6191 6.18292 10.6859 6.25305 10.7675L8.53933 13.3077L14.7278 5.94209C14.8666 5.7816 15.063 5.68219 15.2745 5.66533C15.486 5.64848 15.6957 5.71554 15.8582 5.85202C16.0206 5.9885 16.1229 6.18343 16.1428 6.39469C16.1627 6.60595 16.0987 6.81655 15.9645 6.98099Z" fill="#1EBB9E" />
                                </svg>
                                <span class="ps-5">Bisa menambahkan Materi dan Tugas Lorem Ipsum dolor sit ahmet</span>
                            </li>
                        </ul>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
            <!-- row end -->
        </div>
        <!-- pricing box monthly end -->

        <!-- pricing box yearly start -->
        <div class="pricing_pannel yearly_plan" data-aos="fade-up" data-aos-duration="1500">
            <div class="row">
                @forelse (range(1, 3) as $item)
                <div class="col-md-4">
                    <div class="pricing_block blockwhite" style="padding: 40px 30px">
                        <div class="pkg_name">
                            <h3 class="mb-3 text-primary">E-Learning</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula lacus massa, a finibus urna hendrerit fringilla.</span>
                        </div>
                        <span class="price mt-1 text-primary" style="font-size: 32px">Rp. 3.000.000<span>/tahun</span></span>
                        <a href="#" class="w-100 btn btn-stroke-gradient mb-4">Beli Sekarang</a>
                        <h5 class="fw-bold mb-4">Daftar Fitur paket</h5>
                        <ul>
                            <li class="border-bottom mb-3 pb-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C4.71036 0 0 4.71036 0 10.5C0 16.2896 4.71036 21 10.5 21C16.2896 21 21 16.2896 21 10.5C21 4.71036 16.2896 0 10.5 0ZM15.9645 6.98099L9.17993 15.0579C9.1055 15.1466 9.0129 15.2182 8.90838 15.2679C8.80387 15.3176 8.68989 15.3443 8.57416 15.3462H8.56053C8.44732 15.3461 8.33538 15.3223 8.23198 15.2762C8.12858 15.2301 8.03602 15.1628 7.96031 15.0786L5.05262 11.8478C4.97878 11.7695 4.92133 11.6772 4.88366 11.5764C4.846 11.4755 4.82887 11.3682 4.83328 11.2606C4.8377 11.1531 4.86357 11.0475 4.90937 10.9501C4.95518 10.8527 5.01999 10.7654 5.10001 10.6934C5.18002 10.6214 5.27362 10.5661 5.37531 10.5308C5.477 10.4955 5.58472 10.4808 5.69214 10.4877C5.79957 10.4946 5.90452 10.523 6.00085 10.571C6.09717 10.6191 6.18292 10.6859 6.25305 10.7675L8.53933 13.3077L14.7278 5.94209C14.8666 5.7816 15.063 5.68219 15.2745 5.66533C15.486 5.64848 15.6957 5.71554 15.8582 5.85202C16.0206 5.9885 16.1229 6.18343 16.1428 6.39469C16.1627 6.60595 16.0987 6.81655 15.9645 6.98099Z" fill="#1EBB9E" />
                                </svg>
                                <span class="ps-5">Classroom</span>
                            </li>
                            <li class="border-bottom mb-3 pb-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C4.71036 0 0 4.71036 0 10.5C0 16.2896 4.71036 21 10.5 21C16.2896 21 21 16.2896 21 10.5C21 4.71036 16.2896 0 10.5 0ZM15.9645 6.98099L9.17993 15.0579C9.1055 15.1466 9.0129 15.2182 8.90838 15.2679C8.80387 15.3176 8.68989 15.3443 8.57416 15.3462H8.56053C8.44732 15.3461 8.33538 15.3223 8.23198 15.2762C8.12858 15.2301 8.03602 15.1628 7.96031 15.0786L5.05262 11.8478C4.97878 11.7695 4.92133 11.6772 4.88366 11.5764C4.846 11.4755 4.82887 11.3682 4.83328 11.2606C4.8377 11.1531 4.86357 11.0475 4.90937 10.9501C4.95518 10.8527 5.01999 10.7654 5.10001 10.6934C5.18002 10.6214 5.27362 10.5661 5.37531 10.5308C5.477 10.4955 5.58472 10.4808 5.69214 10.4877C5.79957 10.4946 5.90452 10.523 6.00085 10.571C6.09717 10.6191 6.18292 10.6859 6.25305 10.7675L8.53933 13.3077L14.7278 5.94209C14.8666 5.7816 15.063 5.68219 15.2745 5.66533C15.486 5.64848 15.6957 5.71554 15.8582 5.85202C16.0206 5.9885 16.1229 6.18343 16.1428 6.39469C16.1627 6.60595 16.0987 6.81655 15.9645 6.98099Z" fill="#1EBB9E" />
                                </svg>
                                <span class="ps-5">Daftar Tugas</span>
                            </li>
                            <li class="border-bottom mb-3 pb-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 0C4.71036 0 0 4.71036 0 10.5C0 16.2896 4.71036 21 10.5 21C16.2896 21 21 16.2896 21 10.5C21 4.71036 16.2896 0 10.5 0ZM15.9645 6.98099L9.17993 15.0579C9.1055 15.1466 9.0129 15.2182 8.90838 15.2679C8.80387 15.3176 8.68989 15.3443 8.57416 15.3462H8.56053C8.44732 15.3461 8.33538 15.3223 8.23198 15.2762C8.12858 15.2301 8.03602 15.1628 7.96031 15.0786L5.05262 11.8478C4.97878 11.7695 4.92133 11.6772 4.88366 11.5764C4.846 11.4755 4.82887 11.3682 4.83328 11.2606C4.8377 11.1531 4.86357 11.0475 4.90937 10.9501C4.95518 10.8527 5.01999 10.7654 5.10001 10.6934C5.18002 10.6214 5.27362 10.5661 5.37531 10.5308C5.477 10.4955 5.58472 10.4808 5.69214 10.4877C5.79957 10.4946 5.90452 10.523 6.00085 10.571C6.09717 10.6191 6.18292 10.6859 6.25305 10.7675L8.53933 13.3077L14.7278 5.94209C14.8666 5.7816 15.063 5.68219 15.2745 5.66533C15.486 5.64848 15.6957 5.71554 15.8582 5.85202C16.0206 5.9885 16.1229 6.18343 16.1428 6.39469C16.1627 6.60595 16.0987 6.81655 15.9645 6.98099Z" fill="#1EBB9E" />
                                </svg>
                                <span class="ps-5">Bisa menambahkan Materi dan Tugas Lorem Ipsum dolor sit ahmet</span>
                            </li>
                        </ul>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
    <!-- container start end -->
</section>
<!-- feature package start -->

<!-- Powerful solution for your business Section Start -->
<section class="powerful_solution" data-aos="fade-in" data-aos-duration="1000">
    <section class="row_am unique_section">
        <div class="container">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <!-- h2 -->
                <h2>Pengguna MISCHOOL</h2>
                <!-- p -->
                <p>Lorem Ipsum is simply dummy text of the printing and typese tting indus orem Ipsum
                    has beenthe standard dummy text ever since.</p>
            </div>
            <div class="features_inner" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
                <!-- card -->
                <div class="feature_card">
                    <div class="icons">
                        <img src="{{ asset('landing_assets/images/new/features_icon_01.svg') }}" alt="image">
                        <div class="dot_block">
                            <span class="dot_anim"></span>
                            <span class="dot_anim"></span>
                            <span class="dot_anim"></span>
                        </div>
                    </div>
                    <div class="inner_text">
                        <h3>Sekolah</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus felis non odio
                            convallis interdum. Cras id diam rhoncus,
                        </p>
                    </div>
                </div>
                <!-- card -->
                <div class="feature_card">
                    <div class="icons">
                        <img src="{{ asset('landing_assets/images/new/features_icon_01.svg') }}" alt="image">
                        <div class="dot_block">
                            <span class="dot_anim"></span>
                            <span class="dot_anim"></span>
                            <span class="dot_anim"></span>
                        </div>
                    </div>
                    <div class="inner_text">
                        <h3>Guru</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus felis non odio
                            convallis interdum. Cras id diam rhoncus,
                        </p>
                    </div>
                </div>
                <!-- card -->
                <div class="feature_card">
                    <div class="icons">
                        <img src="{{ asset('landing_assets/images/new/features_icon_01.svg') }}" alt="image">
                        <div class="dot_block">
                            <span class="dot_anim"></span>
                            <span class="dot_anim"></span>
                            <span class="dot_anim"></span>
                        </div>
                    </div>
                    <div class="inner_text">
                        <h3>Siswa</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus felis non odio
                            convallis interdum. Cras id diam rhoncus,
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- Powerful solution for your business Section End -->

<!-- Trusted Section start -->
<section class="row_am trusted_section">
    <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <h2>Mitra Mischool</h2>
            <p>Daftar - daftar sekolah yang telah bekerja sama dan menggunakan Mischool untuk management sekolah</p>
        </div>
        <!-- logos slider start -->
        <div class="company_logos" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <div id="company_slider" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="logo">
                        <img src="{{ asset('landing_assets/images/logo/logo-kanesa.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="logo">
                        <img src="{{ asset('landing_assets/images/logo/logo-kanesa.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="logo">
                        <img src="{{ asset('landing_assets/images/logo/logo-kanesa.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="logo">
                        <img src="{{ asset('landing_assets/images/logo/logo-kanesa.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="logo">
                        <img src="{{ asset('landing_assets/images/logo/logo-kanesa.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="logo">
                        <img src="{{ asset('landing_assets/images/logo/logo-kanesa.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="logo">
                        <img src="{{ asset('landing_assets/images/logo/logo-kanesa.png') }}" alt="image">
                    </div>
                </div>
                <div class="item">
                    <div class="logo">
                        <img src="{{ asset('landing_assets/images/logo/logo-kanesa.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- logos slider end -->
    </div>
    <!-- container end -->
</section>
<!-- Trusted Section ends -->

<!-- What Our Coustomer Section Start-->
<section class="what_coustomer_says">
    <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
            <h2>Apa yang dikatakan mereka</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting indus <br> orem Ipsum has beenthe
                standard dummy text ever since.</p>
        </div>
        <div id="coustomer_slider_white" class="owl-carousel owl-theme" data-aos="fade-in" data-aos-duration="1500">
            <div class="item">
                <div class="coustomer_slide_box">
                    <div class="row pb-4">
                        <div class="col-lg-8">
                            <div class="avtar_profil">
                                <div class="avatr">
                                    <img src="{{ asset('landing_assets/images/new/testi_01.png') }}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Shayna john</h3>
                                    <span>Careative inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="rating">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the print ing and typese tting us orem Ipsum has been.</p>
                </div>
            </div>
            <div class="item">
                <div class="coustomer_slide_box">
                    <div class="row pb-4">
                        <div class="col-lg-8">
                            <div class="avtar_profil">
                                <div class="avatr">
                                    <img src="{{ asset('landing_assets/images/new/testi_02.png') }}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Mark </h3>
                                    <span>Careative inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="rating">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Simply dummy text of the print ing and typese tting us orem Ipsum has been lorem Ipsum.</p>
                </div>
            </div>
            <div class="item">
                <div class="coustomer_slide_box">
                    <div class="row pb-4">
                        <div class="col-lg-8">
                            <div class="avtar_profil">
                                <div class="avatr">
                                    <img src="{{ asset('landing_assets/images/new/testi_01.png') }}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Willium Joe</h3>
                                    <span>Careative inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="rating">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the print ing and typese tting us orem Ipsum has been.</p>
                </div>
            </div>
            <div class="item">
                <div class="coustomer_slide_box">
                    <div class="row pb-4">
                        <div class="col-lg-8">
                            <div class="avtar_profil">
                                <div class="avatr">
                                    <img src="{{ asset('landing_assets/images/new/testi_03.png') }}" alt="image">
                                </div>
                                <div class="text">
                                    <h3>Shayna john</h3>
                                    <span>Careative inc.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="rating">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the print ing and typese tting us orem Ipsum has been.</p>
                </div>
            </div>
        </div>
        <div class="review_summery">
            <div class="rating">
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
                <span><i class="icofont-star"></i></span>
            </div>
            <p><span>5.0 / 5.0 -</span> <a href="testimonial.html">3689 Total User Reviews <i class="icofont-arrow-right"></i></a></p>
        </div>
    </div>
</section>
<!-- What Our Coustomer Section End-->

<!-- Story-Section-Start -->
<section class="row_am latest_story" id="blog">
    <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <h2>Berita Terbaru</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
                standard dummy.</p>
        </div>
        <!-- row start -->
        <div class="row">
            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                        <img src="{{ asset('landing_assets/images/empty/empty-news.png') }}" alt="image">
                        <span class="bg-primary text-white"><span>23</span> AUG</span>
                    </div>
                    <div class="story_text">
                        <div class="statstic text-primary">
                            <span><i class="icofont-user-suited text-primary"></i> Admin</span>
                            <span><i class="icofont-speech-comments text-primary"></i> 36 Comments</span>
                        </div>
                        <h3>Powerfull features makes
                            software awesome !</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has
                            been.</p>
                        <a href="blog-detail.html" class="btn text_btn text-primary">READ MORE <i class="icofont-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                        <img src="{{ asset('landing_assets/images/empty/empty-news.png') }}" alt="image">
                        <span class="bg-primary text-white"><span>18</span> AUG</span>
                    </div>
                    <div class="story_text">
                        <div class="statstic text-primary">
                            <span><i class="icofont-user-suited text-primary"></i> Admin</span>
                            <span><i class="icofont-speech-comments text-primary"></i> 36 Comments</span>
                        </div>
                        <h3>Why software is globally used as best software</h3>
                        <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.
                        </p>
                        <a href="blog-detail.html" class="btn text_btn text-primary">READ MORE <i class="icofont-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                        <img src="{{ asset('landing_assets/images/empty/empty-news.png') }}" alt="image">
                        <span class="bg-primary text-white"><span>9</span> AUG</span>
                    </div>
                    <div class="story_text">
                        <div class="statstic text-primary">
                            <span><i class="icofont-user-suited text-primary"></i> Admin</span>
                            <span><i class="icofont-speech-comments text-primary"></i> 36 Comments</span>
                        </div>
                        <h3>Beautiful user interface with bug free code.</h3>
                        <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                        <a href="blog-detail.html" class="btn text_btn  text-primary">READ MORE <i class="icofont-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- Story-Section-end -->

<!-- FAQ-Section start -->
<section id="faqBlock" class="row_am faq_section" style="margin-bottom: 80px;">
    <!-- container start -->
    <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2><span>FAQ</span> - Frequently Asked Questions</h2>
            <!-- p -->
            <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe
                standard dummy.</p>
        </div>
        <!-- faq data -->
        <div class="faq_panel">
            <div class="accordion" id="accordionExample">
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                                <i class="icon_faq icofont-plus"></i> How can i pay ?</button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum
                                has. been the
                                industrys standard dummy text ever since the when an unknown printer took a galley of
                                type and
                                scrambled it to make a type specimen book. It has survived not only five cen turies but
                                also the
                                leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i> How to setup account
                                ?</button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum
                                has. been the
                                industrys standard dummy text ever since the when an unknown printer took a galley of
                                type and
                                scrambled it to make a type specimen book. It has survived not only five cen turies but
                                also the
                                leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="icon_faq icofont-plus"></i>What is process to
                                get refund
                                ?</button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum
                                has. been the
                                industrys standard dummy text ever since the when an unknown printer took a galley of
                                type and
                                scrambled it to make a type specimen book. It has survived not only five cen turies but
                                also the
                                leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"><i class="icon_faq icofont-plus"></i>What is process to
                                get refund
                                ?</button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum
                                has. been the
                                industrys standard dummy text ever since the when an unknown printer took a galley of
                                type and
                                scrambled it to make a type specimen book. It has survived not only five cen turies but
                                also the
                                leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!-- FAQ-Section end -->
@endsection
