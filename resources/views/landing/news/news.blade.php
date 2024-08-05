@extends('layouts.landing.layouts.app')
@section('style')
    <style>
        .custom_recent_post_block .custom_img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        @media (min-width: 768px) {
            .custom_recent_post_block .custom_d-flex {
                flex-direction: row;
            }

            .custom_recent_post_block .custom_text {
                margin-left: 20px;
            }

            .custom_recent_post_block .custom_img img {
                width: 350px;
                height: 145px;
                object-fit: cover;
            }
        }
    </style>
@endsection
@section('banner')
    <!-- Bread Crumb -->
    <div class="bread_crumb" data-aos="fade-in" data-aos-duration="2000" data-aos-delay="100">


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

        <div class="container">
            <div class="bred_text">
                <h1 class="text-primary">Berita</h1>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><span>»</span></li>
                    <li><a href="news">Berita</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <!-- Main Blog List Section Start-->
    <section class="blog_list_section" style="padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <h2>Berita Trending</h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="border-bottom" style="margin-top: 30px"></div>
                        </div>
                    </div>
                    <!-- Blog Left Side -->
                    <div class="blog_left_side">
                        <div class="blog_panel" data-aos="fade-up" data-aos-duration="1500">
                            <div class="main_img">
                                <a href="/news-detail"><img src="{{ asset('landing_assets/images/new/blog-list_01.png') }}"
                                        alt="image"></a>
                            </div>
                            <div class="blog_info">
                                <span class="date">12 Dec, 2022</span>
                                <h2><a href="/news-detail">Providing IT solution that diverse business verticals lorem
                                        ipsum</a></h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and types etting industry lorem Ipsum
                                    has been the
                                    indu has been the industrys standard dummy text ever since the when an unknown printer
                                    took a galley
                                    of type and.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <h2>Berita Lainnya</h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="border-bottom" style="margin-top: 30px"></div>
                        </div>
                    </div>

                    @foreach (range(1, 3) as $item)
                    <div class="custom_recent_post_block bg_box mb-3" data-aos="fade-up" data-aos-duration="1500">
                        <ul class="recent_blog_list">
                            <li>
                                <a href="/news-detail">
                                    <div class="custom_d-flex flex-column flex-md-row d-flex">
                                        <div class="custom_img">
                                            <img src="{{ asset('landing_assets/images/new/error-bg.png') }}"
                                                alt="image" class="img-fluid" />
                                        </div>
                                        <div class="custom_text mt-3 mt-md-0 ms-md-3">
                                            <span class="text-muted" style="font-size: 12px;">12 Desember 2024</span>
                                            <h4 style="font-size: 18px;">Questions business owner must be able to answer.</h4>
                                            <p style="font-size: 13px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endforeach

                </div>
                <div class="col-lg-4">
                    <!-- blog Right Side -->
                    <div class="blog_right_side">
                        <!-- Search Blog -->
                        <div class="blog_search_block bg_box" data-aos="fade-up" data-aos-duration="1500">
                            <form
                                action="https://kalanidhithemes.com/live-preview/landing-page/codely/all-demo/06-codely-landing-page-get-started-hero/submit">
                                <div class="form-group">
                                    <h3>Search post</h3>
                                    <div class="form_inner">
                                        <input type="text" class="form-control">
                                        <button><i class="icofont-search-1"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Recent Post -->
                        <div class="recent_post_block bg_box" data-aos="fade-up" data-aos-duration="1500">
                            <h3>Recent Post</h3>
                            <ul class="recent_blog_list">
                                <li>
                                    <a href="blog-detail.html">
                                        <div class="img">
                                            <img src="{{ asset('landing_assets/images/new/blog-side_01.png') }}"
                                                alt="image">
                                        </div>
                                        <div class="text">
                                            <h4>Questions business owner must be able to answer.</h4>
                                            <span>2 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-detail.html">
                                        <div class="img">
                                            <img src="{{ asset('landing_assets/images/new/blog-side_02.png') }}"
                                                alt="image">
                                        </div>
                                        <div class="text">
                                            <h4>How is Technology Working With New Things?</h4>
                                            <span>2 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-detail.html">
                                        <div class="img">
                                            <img src="{{ asset('landing_assets/images/new/blog-side_03.png') }}"
                                                alt="image">
                                        </div>
                                        <div class="text">
                                            <h4>Two tried and true frameworks for achieving..</h4>
                                            <span>3 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-detail.html">
                                        <div class="img">
                                            <img src="{{ asset('landing_assets/images/new/blog-side_04.png') }}"
                                                alt="image">
                                        </div>
                                        <div class="text">
                                            <h4>Why communities help you build better...</h4>
                                            <span>4 days ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Categories List -->
                        <div class="categories_block bg_box" data-aos="fade-up" data-aos-duration="1500">
                            <h3>Categories</h3>
                            <ul>
                                <li>
                                    <a href="#" class="cat"><i class="icofont-folder-open"></i> Software</a>
                                    <span>(15)</span>
                                </li>
                                <li>
                                    <a href="#" class="cat"><i class="icofont-folder-open"></i> Technology</a>
                                    <span>(12)</span>
                                </li>
                                <li>
                                    <a href="#" class="cat"><i class="icofont-folder-open"></i> Business</a>
                                    <span>(09)</span>
                                </li>
                                <li>
                                    <a href="#" class="cat"><i class="icofont-folder-open"></i> Web
                                        Development</a>
                                    <span>(25)</span>
                                </li>
                                <li>
                                    <a href="#" class="cat"><i class="icofont-folder-open"></i> Android</a>
                                    <span>(19)</span>
                                </li>
                                <li>
                                    <a href="#" class="cat"><i class="icofont-folder-open"></i> iOS</a>
                                    <span>(08)</span>
                                </li>
                                <li>
                                    <a href="#" class="cat"><i class="icofont-folder-open"></i> Watch</a>
                                    <span>(13)</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Tags Block -->
                        <div class="tags_block bg_box" data-aos="fade-up" data-aos-duration="1500">
                            <h3>Tags</h3>
                            <ul>
                                <li><a href="#">Software</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Android</a></li>
                                <li><a href="#">iOS</a></li>
                                <li><a href="#">Watch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination Block Start -->
            <div class="pagination_block" data-aos="fade-up" data-aos-duration="1500">
                <div class="row">
                    <div class="col-lg-8">
                        <ul>
                            <li><a href="#" class="prev"><i class="icofont-double-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#" class="next"><i class="icofont-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Pagination Block End -->
        </div>
    </section>
    <!-- Main Service Section End-->
@endsection
