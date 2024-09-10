@extends('admin.layouts.app')

@section('content')
    <div class="card bg-primary shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8 text-light">Kartu RFID</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-light" aria-current="page">Daftar - daftar RFID Mischool.id</li>
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

    {{-- <div class="">
        <span class="mb-1 badge font-medium bg-light-success text-success me-2">Digunakan: {{ $usedRfids->count() }}</span>
        <span class="mb-1 badge font-medium bg-light-danger text-danger">Belum Digunakan:
            {{ $notUsedRfids->count() }}</span>
    </div> --}}

    <div class="row">
        <div class="col-sm-6 col-xl-4">
            <div class="card bg-light-primary shadow-none">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('admin_assets/dist/images/ilustrations/file1.png') }}" alt="" class="img-fluid w-20">
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0" style="font-size: 16px;"><b>Total Kartu RFID</b></h6>
                            <h6 class="mt-2 text-primary" style="font-size: 28px;">56</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card bg-light-success shadow-none">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('admin_assets/dist/images/ilustrations/file2.png') }}" alt="" class="img-fluid w-20">
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0" style="font-size: 16px;"><b>Kartu Digunakan</b></h6>
                            <h6 class="mt-2 text-success" style="font-size: 28px;">{{ $usedRfids->count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card bg-light-danger shadow-none">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('admin_assets/dist/images/ilustrations/file3.png') }}" alt="" class="img-fluid w-20">
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0" style="font-size: 16px;"><b>Kartu Belum Digunakan</b></h6>
                            <h6 class="mt-2 text-danger" style="font-size: 28px;">{{ $notUsedRfids->count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center">
        <!-- Nav tabs -->
        <ul class="nav nav-pills p-3 mb-3 rounded card flex-row border shadow gap-3 w-100" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#all" id="btn-all">
                    <span>Semua</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#digunakan" id="btn-used">
                    <span>Digunakan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#belum-digunakan" id="btn-unused">
                    <span>Belum Digunakan</span>
                </a>
            </li>
            <!-- Form moved inside an item aligned to the right -->
            <li class="nav-item ms-auto">
                <form action="{{ route('rfid.store') }}" method="post" class="d-flex align-items-center gap-3">
                    <span>Tambah RFID: </span>
                    @csrf
                    <input type="number" name="rfid" class="form-control w-auto rfid-input" id="rfid-input">
                    @error('rfid')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="btn btn-rounded btn-primary">Tambah</button>
                </form>
            </li>
        </ul>
    </div>



    <div class="mb-5">
        <div class="tab-content">
            <div class="tab-pane active" id="all" role="tabpanel">
                @include('admin.pages.rfid.panes.tab-rfid-all')
            </div>
            <div class="tab-pane" id="digunakan" role="tabpanel">
                @include('admin.pages.rfid.panes.tab-rfid-used')
            </div>
            <div class="tab-pane" id="belum-digunakan" role="tabpanel">
                @include('admin.pages.rfid.panes.tab-rfid-notinused')
            </div>
        </div>
    </div>

    <x-delete-modal-component />
@endsection
@section('script')
    @include('admin.pages.rfid.script.index')
@endsection
