@extends('admin.layouts.app')

@section('content')
    <div class="row mb-3 align-items-center">
        <div class="col-12 col-md-6 col-lg-6 mb-3">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true" href="#all">
                        <span>Semua</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#active" role="tab" aria-selected="false">
                        <span>Aktif</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#nonactive" role="tab" aria-selected="false">
                        <span>Tidak Aktif</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane active show" id="all" role="tabpanel">
            @include('admin.pages.school.panes.all')
        </div>

        <div class="tab-pane" id="active" role="tabpanel">
            @include('admin.pages.school.panes.active')
        </div>

        <div class="tab-pane" id="nonactive" role="tabpanel">
            @include('admin.pages.school.panes.nonactive')
        </div>
    </div>
    <x-delete-modal-component />
    <x-active-confirmation-modal-component />
    <x-nonactive-confirmation-modal-component />
@endsection

@section('script')
    <script>
        $('.btn-delete').click(function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/school/' + id);
            $('#modal-delete').modal('show');
        });

        $('.btn-enable').click(function() {
            var id = $(this).data('id');
            $('#form-enable').attr('action', '/school/' + id + '/enable');
            $('#modal-enable').modal('show');
        });

        $('.btn-disable').click(function() {
            var id = $(this).data('id');
            $('#form-disable').attr('action', '/school/' + id + '/disable');
            $('#modal-disable').modal('show');
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var activeTab = localStorage.getItem('activeTab');

            if (activeTab) {
                var tabToActivate = document.querySelector('.nav-tabs a[href="' + activeTab + '"]');
                var bootstrapTab = new bootstrap.Tab(tabToActivate);
                bootstrapTab.show();
            }

            var tabLinks = document.querySelectorAll('a[data-bs-toggle="tab"]');
            tabLinks.forEach(function(tabLink) {
                tabLink.addEventListener('shown.bs.tab', function(event) {
                    var currentTab = event.target.getAttribute('href');
                    localStorage.setItem('activeTab', currentTab);
                });
            });
        });
    </script>
@endsection
