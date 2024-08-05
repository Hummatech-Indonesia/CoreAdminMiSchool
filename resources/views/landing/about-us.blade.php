@extends('layouts.landing.layouts.app')
@section('banner')
    <!-- Bread Crumb -->
    <div class="bread_crumb" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">

        <div class="container">

            <!-- vertical line animation -->
            <div class="anim_line dark_bg">
                <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
                <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
                <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
                <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
                <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
                <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
                <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
                <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
                <span><img src="{{ asset('landing_assets/images/anim_line.png') }}" alt="anim_line"></span>
            </div>


            <div class="bred_text">
                <h1 style="color: #5D87FF">About us</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><span>»</span></li>
                    <li><a href="/about-us">About us</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="about_us_page_section">
        <div class="dotes_anim_bloack">
            <div class="dots dotes_1"></div>
            <div class="dots dotes_2"></div>
            <div class="dots dotes_3"></div>
            <div class="dots dotes_4"></div>
            <div class="dots dotes_5"></div>
            <div class="dots dotes_6"></div>
            <div class="dots dotes_7"></div>
            <div class="dots dotes_8"></div>
        </div>
        <div class="container">
            <div class="about_block">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section_title" data-aos="fade-in" data-aos-duration="1500">
                            <h2>Tentang Mischool</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typese tting indus
                                orem Ipsum has beenthe standard dummybeenthe standard dummy
                                text ever since when an own Ipsums.</p>
                            <p>Simply dummy text of the printing and typese tting indus orem Ipsum has beenthe standard
                                dummy text
                                ever since when an own Lorem Ipsums dummy text of the printing and typesetting indus orem
                                Ipsum
                                simply.</p>
                        </div>
                    </div>
                    <!-- image -->
                    <div class="col-md-6">
                        <div class="sl_two_colom_image" data-aos="fade-in" data-aos-duration="1000">
                            <img src="{{ asset('landing_assets/images/landing/about-2.png') }}" alt="image"
                                style="height: 587px">
                        </div>
                    </div>
                </div>
            </div>
            <div id="counter">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="counter_outer" data-aos="fade-up" data-aos-duration="1500">
                            <div class="counter_box">
                                <p><span class="counter-value" data-count="450">0</span><span>+</span></p>
                                <p style="font-size: 20px">Sekolah</p>
                                <p style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                                    tempus felis non odio convallis interdum. Cras id diam rhoncus,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="counter_outer" data-aos="fade-up" data-aos-duration="1500">
                            <div class="counter_box">
                                <p><span class="counter-value" data-count="120">0</span><span>+</span></p>
                                <p style="font-size: 20px">Guru</p>
                                <p style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                                    tempus felis non odio convallis interdum. Cras id diam rhoncus,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="counter_outer" data-aos="fade-up" data-aos-duration="1500">
                            <div class="counter_box">
                                <p><span class="counter-value" data-count="135">0</span><span>+</span></p>
                                <p style="font-size: 20px">Siswa</p>
                                <p style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                                    tempus felis non odio convallis interdum. Cras id diam rhoncus,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row_am service_list_two_colom">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="sl_two_colom_image" data-aos="fade-in" data-aos-duration="1000">
                        <img src="{{ asset('landing_assets/images/landing/about-3.png') }}" alt="image">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="sl_two_colom_text" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">
                        <div class="section_title">
                            <h2>Kenapa Memilih Mischool </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and types etting
                                industry lorem Ipsum has been the indu has been the industrys
                                Mischool adalah solusi manajemen sekolah terdepan untuk memajukan pendidikan! Ada begitu
                                banyak alasan mengapa Mischool menjadi pilihan utama bagi sekolah dan lembaga pendidikan.
                                Berikut adalah beberapa alasan yang membuat Mischool unggul
                                galley of type and.</p>
                        </div>

                        <div class="service_list_point">
                            <ul data-aos="fade-up" data-aos-duration="2000">
                                <li> <i class="icofont-check-circled" style="color: #13DEB9; font-size: 23px; margin-right: 10px"></i> Kemudahan Pengelolaan </li>
                                <li> <i class="icofont-check-circled" style="color: #13DEB9; font-size: 23px; margin-right: 10px"></i> Pemantauan Akademis yang Akurat dan Komprehensif
                                </li>
                                <li> <i class="icofont-check-circled" style="color: #13DEB9; font-size: 23px; margin-right: 10px"></i>Keamanan Data Terdepan </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
