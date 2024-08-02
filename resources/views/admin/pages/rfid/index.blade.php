@extends('admin.layouts.app')

@section('content')
<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Kartu RFID</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="index-2.html">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Kartu RFID</li>
                    </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="text-center mb-n5">
                    <img src="{{ asset('admin_assets/dist/images/breadcrumb/ChatBc.png') }}" alt="" class="img-fluid mb-n4">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="">
    <span class="mb-1 badge font-medium bg-light-success text-success me-2">Digunakan: {{ $usedRfids->count() }}</span>
    <span class="mb-1 badge font-medium bg-light-danger text-danger">Belum Digunakan:
        {{ $notUsedRfids->count() }}</span>
</div>

<div class="mt-4 d-flex justify-content-between">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs gap-2" role="tablist">
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
    </ul>
</div>

<div class="ps-4 pe-4 mb-5">
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
