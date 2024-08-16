@extends('admin.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/summernote/dist/summernote-lite.min.css') }}">
@endsection

@section('content')
    <div class="card bg-primary shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold text-white mb-8">Kategori</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-white text-decoration-none"
                                    href="javascript:void(0)">Daftar kategori yang dipakai untuk menulis berita di
                                    mischool</a>
                            </li>
                        </ol>
                    </nav>
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

    <div class="d-flex flex-wrap justify-content-between align-items-center">
        <div class="d-flex flex-wrap">
            <div class="col-12 col-md-6 col-lg-12 mb-3 me-3">
                <form action="" method="GET" class="d-flex position-relative">
                    <input type="text" class="form-control product-search ps-5" name="name"
                        value="{{ old('name', request()->name) }}" id="input-search" placeholder="Cari...">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    <select id="status-activity" name="sort_by" class="form-select ms-3">
                        <option value="newest" {{ request()->sort_by == 'newest' ? 'selected' : '' }}>Terbaru</option>
                        <option value="oldest" {{ request()->sort_by == 'oldest' ? 'selected' : '' }}>Terlama</option>
                    </select>
                    <button type="submit" class="btn btn-primary ms-3">Filter</button>
                </form>
            </div>
        </div>


        <div class="col-12 col-md-auto mb-3">
            <button type="button" class="btn mb-1 btn-primary btn-lg px-4 fs-4 font-medium" data-bs-toggle="modal"
                data-bs-target="#modal-create-category">
                Tambah Kategori
            </button>
        </div>
    </div>

    <div class="row">
        @forelse ($newsCategories as $newsCategory)
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text mb-0">Kategori:</p>
                        <h5 class="card-title pt-2 mb-3"><b>{{ $newsCategory->name }}</b></h5>
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Jumlah Digunakan:</h6>
                            <h6>{{ $newsCategory->news->count() }}X Digunakan</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-warning w-100 btn-edit" data-id="{{ $newsCategory->id }}"
                                data-name="{{ $newsCategory->name }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="me-1">
                                    <path fill="currentColor"
                                        d="m7 17.013l4.413-.015l9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583zM18.045 4.458l1.589 1.583l-1.597 1.582l-1.586-1.585zM9 13.417l6.03-5.973l1.586 1.586l-6.029 5.971L9 15.006z" />
                                    <path fill="currentColor"
                                        d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2" />
                                </svg>
                                Edit</button>
                            <button type="button" class="btn btn-danger w-100 ms-2 btn-delete"
                                data-id="{{ $newsCategory->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" class="me-1">
                                    <path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        d="M9.5 14.5v-3m5 3v-3M3 6.5h18v0c-1.404 0-2.107 0-2.611.337a2 2 0 0 0-.552.552C17.5 7.893 17.5 8.596 17.5 10v5.5c0 1.886 0 2.828-.586 3.414s-1.528.586-3.414.586h-3c-1.886 0-2.828 0-3.414-.586S6.5 17.386 6.5 15.5V10c0-1.404 0-2.107-.337-2.611a2 2 0 0 0-.552-.552C5.107 6.5 4.404 6.5 3 6.5zm6.5-3s.5-1 2.5-1s2.5 1 2.5 1" />
                                </svg>

                                Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('admin_assets/dist/images/empty/no-data.png') }}" alt="" width="300px">
                <p class="fs-5 text-dark text-center mt-2">
                    Kategori belum ditambahkan
                </p>
            </div>
        @endforelse
    </div>


    <!-- modal tambah -->
    @include('admin.pages.news.category.widgets.modal-create')
    <!-- modal edit -->
    @include('admin.pages.news.category.widgets.modal-update')
    <x-delete-modal-component />
@endsection

@section('script')
    @include('admin.pages.news.script.index')
    @include('admin.pages.news.category.scripts.edit')
    @include('admin.pages.news.category.scripts.delete')
@endsection
