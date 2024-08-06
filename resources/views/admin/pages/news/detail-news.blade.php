@extends('admin.layouts.app')

@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Berita</h4>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin_assets/dist/images/breadcrumb/ChatBc.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between mb-3">
        <h5>Detail Berita</h5>
        <a href="{{ route('news.index') }}" type="button"
            class="justify-content-center btn mb-1 btn-light text-dark font-medium d-flex text-dark align-items-center"
            style="background-color: #E8E8E8">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l14 0" />
                <path d="M5 12l6 6" />
                <path d="M5 12l6 -6" />
            </svg>
            Kembali
        </a>
    </div>

    <div class="card shadow-none border">
        <div class="card-body">
            <img src="{{ asset('admin_assets/dist/images/backgrounds/profilebg.jpg') }}" alt="Profile Background"
                class="img-fluid rounded">
            <h4 class="mt-3">{{ $news->title }}</h4>
            <div class="d-flex no-block align-items-center pt-3">
                <span class="d-flex align-items-center ms-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="18" height="18"
                        viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M8 2v4m8-4v4" />
                            <rect width="18" height="18" x="3" y="4" rx="2" />
                            <path d="M3 10h18" />
                        </g>
                    </svg>
                    {{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}
                </span>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <h4 class="mb-3">Title of the paragraph</h4>
            <p class="mb-5">But you cannot figure out what it is or what it can do. MTA web directory is the simplest way
                in which one
                can bid on a link, or a few links if they wish to do so. The link
                directory on MTA displays all of the links it currently has, and does so in alphabetical order, which makes
                it much easier for someone to find what they are looking for if it is
                something specific and they do not want to go through all the other sites and links as well. It allows you
                to start your bid at the bottom and slowly work your way to the top
                of the list.
            </p>
            <div class="row mb-5">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <img src="{{ asset('admin_assets/dist/images/backgrounds/sd.png') }}" alt="Profile Background"
                        class="img-fluid rounded" style="max-width: 100%;">
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{ asset('admin_assets/dist/images/backgrounds/sd.png') }}" alt="Profile Background"
                        class="img-fluid rounded" style="max-width: 100%;">
                </div>
            </div>

            <p>
                Gigure out what it is or what it can do. MTA web directory is the simplest way in which one can bid on a
                link, or a few links if they wish to do so. The link directory on MTA
                displays all of the links it currently has, and does so in alphabetical order, which makes it much easier
                for someone to find what they are looking for if it is something
                specific and they do not want to go through all the other sites and links as well. It allows you to start
                your bid at the bottom and slowly work your way to the top of the
            </p>
        </div>
    </div>
@endsection
