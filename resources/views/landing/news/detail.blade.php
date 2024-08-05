@extends('layouts.landing.layouts.app')
@section('banner')
    <div class="bread_crumb" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">

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


        <div class="container">
            <div class="bred_text">
                <h1>Detail Berita</h1>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><span>»</span></li>
                    <li><a href="service-list-1.html">Berita</a></li>
                    <li><span>»</span></li>
                    <li><a href="/news-detail">Detail</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="service_detail_section" style="margin-bottom: 200px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Service Left Side -->
                    <div class="service_left_side">
                        <div class="section_title" data-aos="fade-up" data-aos-duration="2000">
                            <p style="font-size: 22px">12 Mei 2023</p>
                            <h2>Bug free software development
                                services provider</h2>
                        </div>
                        <div class="img" data-aos="fade-up" data-aos-duration="2000">
                            <img src="{{ asset('landing_assets/images/new/service-img.png') }}" alt="image">
                        </div>
                        <p data-aos="fade-up" data-aos-duration="1500">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry lorem Ipsum has been the
                            industrys standard dummy text ever since the when an utext ever since the when an unknown
                            printer took a
                            galley of type and. scrambled it to make a type speci
                            men book It has survived not only five centuries, but also the leap into electronic type
                            setting, remaining essentially unchanged.
                        </p>
                        <h3 data-aos="fade-up" data-aos-duration="1500">How we build your software</h3>
                        <p data-aos="fade-up" data-aos-duration="1500">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry lorem Ipsum has been the
                            industrys standard dummy text ever since the when an utext ever since the when an unknown
                            printer took a
                            galley of type and.</p>
                        <h3 data-aos="fade-up" data-aos-duration="1500">How we build your software</h3>
                        <p data-aos="fade-up" data-aos-duration="1500">typesetting industry lorem Ipsum has been the
                            industrys standard dummy text ever since the when an utext ever since the when an unknown
                            printer took a
                            galley of type and. scrambled it to make a type speci
                            men book It has survived not only five centuries, but also the leap into electronic type
                            setting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Service Right Side -->
                    <div class="service_right_side">
                        <div class="service_list_panel" data-aos="fade-up" data-aos-duration="1500">
                            <h3>Services</h3>
                            <ul class="service_list">
                                <li><a href="service-detail.html" class="active">Software Development</a></li>
                                <li><a href="service-detail.html">Web Development</a></li>
                                <li><a href="service-detail.html">Mobile Application</a></li>
                                <li><a href="service-detail.html">Web Design</a></li>
                                <li><a href="service-detail.html">Logo Design</a></li>
                                <li><a href="service-detail.html">Print Design</a></li>
                            </ul>
                        </div>
                        <!-- Contact Block -->
                        <div class="side_contact_block" data-aos="fade-up" data-aos-duration="1500">
                            <div class="icon"><i class="icofont-live-support"></i></div>
                            <h3>Let’s work together</h3>
                            <a href="contact-us.html" class="btn btn_main">CONTACT US <i
                                    class="icofont-arrow-right"></i></a>
                            <p><a href="tel:1234567899"><i class="icofont-phone-circle"></i> +1 123 456 7890</a></p>
                        </div>
                        <div class="action_btn">
                            <a href="images/pdf-brochure.pdf" target="blank" class="btn" data-aos="fade-up"
                                data-aos-duration="1500">
                                <span><i class="icofont-file-pdf"></i> </span>
                                <p>Company Profile</p>
                            </a>
                            <a href="images/pdf-brochure.pdf" target="blank" class="btn" data-aos="fade-up"
                                data-aos-duration="1500">
                                <span><i class="icofont-file-powerpoint"></i> </span>
                                <p>Download PPT</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
