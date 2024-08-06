@extends('admin.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/summernote/dist/summernote-lite.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@if ($errors->any())
@dd($errors)
@endif

@section('content')
    <div class="card bg-primary shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold text-white mb-8">Berita</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-white text-decoration-none"
                                    href="javascript:void(0)">Daftar - daftar berita Mischool.id</a>
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
            <div class="col-12 col-md-6 col-lg-6 mb-3 me-3">
                <form action="" class="position-relative">
                    <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Cari...">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                </form>
            </div>
            <div class="col-12 col-md-6 col-lg-5 mb-3">
                <select id="status-activity" class="form-select">
                    <option value="">Terbaru</option>
                    <option value="">Terlama</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-auto mb-3">
            <button type="button" class="btn mb-1 btn-primary btn-lg px-4 fs-4 font-medium" data-bs-toggle="modal"
                data-bs-target="#modal-import">
                Tambah Berita
            </button>
        </div>
    </div>

    <div class="table-responsive rounded-2 mb-4">
        <table class="table border text-nowrap customize-table mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr class="">
                    <th class="fs-4 fw-semibold mb-0">Thumbnail</th>
                    <th class="fs-4 fw-semibold mb-0">Kategori</th>
                    <th class="fs-4 fw-semibold mb-0">Judul</th>
                    <th class="fs-4 fw-semibold mb-0">Isi Berita</th>
                    <th class="fs-4 fw-semibold mb-0">Tanggal Upload</th>
                    <th class="fs-4 fw-semibold mb-0">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($newses as $news)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/'. $news->image) }}" style="width: 150px; height: auto;">
                        </td>
                        <td>
                            <div class="badge bg-light-primary text-primary">{{ $news->newsCategory->name }}</div>
                        </td>
                        <td>
                            {{ Str::limit($news->title, 100) }}
                        </td>
                        <td>
                            {!! Str::limit($news->description, 150) !!}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($news->date)->locale('id_ID')->isoFormat('D MMMM Y') }}
                        </td>
                        <td>
                            <a href="/admin/news-detail" type="button" class="btn mb-1 btn-primary btn-sm fs-2 font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5">
                                        <path d="M3 13c3.6-8 14.4-8 18 0" />
                                        <path d="M12 17a3 3 0 1 1 0-6a3 3 0 0 1 0 6" />
                                    </g>
                                </svg>
                            </a>

                            <button type="button" class="btn mb-1 btn-warning btn-sm fs-2 font-medium btn-edit"
                                data-id="{{ $news->id }}"
                                data-title="{{ $news->title }}"
                                data-news_category_id="{{ $news->news_category_id }}"
                                data-image="{{ asset('storage/'. $news->image) }}"
                                data-description="{{ $news->description }}"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path stroke="currentColor"
                                            d="m5.93 19.283l.021-.006l2.633-.658l.045-.01c.223-.056.42-.105.599-.207c.179-.101.322-.245.484-.407l.033-.033l7.194-7.194l.024-.024c.313-.313.583-.583.77-.828c.2-.263.353-.556.353-.916s-.152-.653-.353-.916c-.187-.245-.457-.515-.77-.828l-.024-.024l-.353.354l.353-.354l-.171-.171l-.024-.024c-.313-.313-.583-.583-.828-.77c-.263-.2-.556-.353-.916-.353s-.653.152-.916.353c-.245.187-.515.457-.828.77l-.024.024l-7.194 7.194a7.24 7.24 0 0 1-.033.032c-.162.163-.306.306-.407.485c-.102.18-.15.376-.206.6l-.011.044l-.664 2.654a12.99 12.99 0 0 0-.007.027a3.72 3.72 0 0 0-.095.464c-.015.155-.011.416.198.626c.21.21.47.213.625.197a3.43 3.43 0 0 0 .492-.101Z" />
                                        <path fill="currentColor" d="m12.5 7.5l3-2l3 3l-2 3z" />
                                    </g>
                                </svg>
                            </button>


                            <button type="button" class="btn mb-1 btn-danger btn-sm fs-2 font-medium"
                                data-bs-toggle="modal" data-bs-target="#modal-edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1M20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2M10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            <span>Tidak ada data!</span>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="pagination justify-content-end mb-0">
            {{-- <x-paginate-component :paginator="$rfids" /> --}}
        </div>
    </div>

    <!-- modal tambah -->
    @include('admin.pages.news.widgets.modal-create')
    <!-- modal edit -->
    @include('admin.pages.news.widgets.modal-update')
    <x-delete-modal-component />
@endsection

@section('script')
    @include('admin.pages.news.script.index')
    @include('admin.pages.news.script.edit')
    @include('admin.pages.news.script.delete')
@endsection
