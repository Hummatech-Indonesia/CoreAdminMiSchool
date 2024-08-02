@extends('admin.layouts.app')

@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">FAQ</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="index-2.html">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">FAQ</li>
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
                    <input type="text" class="form-control product-search ps-5" id="input-search"
                        placeholder="Cari tim...">
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
            <button type="button" class="btn mb-1 btn-primary"
                data-bs-toggle="modal" data-bs-target="#modal-import">
                Tambah FAQ
            </button>
        </div>
    </div>

    <div id="note-full-container" class="note-has-grid row">
        @forelse ($faqs as $faq)
            <div class="col-md-4 single-note-item all-category">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">
                        {{ $faq->question }}
                    </h5>
                    <h6 class="note-date pt-3">Jawaban :</h6>
                    <div class="note-content">
                        <p class="note-inner-content"
                            data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                            {{ $faq->answer }}
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="link me-1 text-danger btn-delete"
                            data-id="{{ $faq->id }}">
                            <i class="ti ti-trash fs-7 remove-note"></i>
                        </a>
                        <div class="ms-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <span class="more-options text-dark">
                                            <i class="ti ti-dots-vertical fs-5"></i>
                                        </span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu"
                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 23.2px, 0px);"
                                    data-popper-placement="bottom-end">
                                    <a type="button"
                                        class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center btn-edit"
                                        data-id="{{ $faq->id }}"
                                        data-question="{{ $faq->question }}"
                                        data-answer="{{ $faq->answer }}">
                                        Edit
                                    </a>
                                    <a type="button"
                                        class="note-business badge-group-item badge-business dropdown-item position-relative category-business d-flex align-items-center btn-detail"
                                        data-question="{{ $faq->question }}"
                                        data-answer="{{ $faq->answer }}">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('admin_assets/dist/images/empty/no-data.png') }}" alt=""
                    width="300px">
                <p class="fs-5 text-dark text-center mt-2">
                    FAQ belum ditambahkan
                </p>
            </div>
        @endforelse
    </div>

    <div class="pagination justify-content-end mb-0">
        <x-paginate-component :paginator="$faqs" />
    </div>

    @include('admin.pages.faq.widgets.modal-create')
    @include('admin.pages.faq.widgets.modal-edit')
    @include('admin.pages.faq.widgets.modal-detail')
    <x-delete-modal-component />
@endsection
@section('script')
    @include('admin.pages.faq.scripts.edit')
    @include('admin.pages.faq.scripts.detail')
    @include('admin.pages.faq.scripts.delete')
@endsection