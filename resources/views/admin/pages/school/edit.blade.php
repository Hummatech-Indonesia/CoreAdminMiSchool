@extends('admin.layouts.app')

@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Ubah Data Sekolah</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                    href="#">Tambahkan kerjasama mischool dengan sekolah</a>
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

    <div class="container mt-5">
        <div class="checkout">
            <div class="card shadow-none border">
                <div class="card-body p-4">
                    <h4><b>Data Sekolah</b></h4>
                    <h6>Perbarui</h6>
                    <div class="wizard-content">
                        <form action="{{ route('school.update', $school->id) }}" class="tab-wizard wizard-circle wizard clearfix"
                            role="application" id="steps-uid-0" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="steps clearfix">
                                <ul role="tablist">
                                    <li role="tab" class="first current" aria-disabled="false" aria-selected="true">
                                        <a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0">
                                            <span class="current-info audible">current step: </span>
                                            <span class="step">1</span>
                                            Info Umum
                                        </a>
                                    </li>
                                    <li role="tab" class="disabled" aria-disabled="true">
                                        <a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1">
                                            <span class="step">2</span>
                                            Alamat
                                        </a>
                                    </li>
                                    <li role="tab" class="disabled" aria-disabled="true">
                                        <a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2">
                                            <span class="step">3</span>
                                            Lainnya
                                        </a>
                                    </li>
                                    {{-- <li role="tab" class="disabled last" aria-disabled="true">
                                        <a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3">
                                            <span class="step">4</span>
                                            Password
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>

                            <!-- Step 1 -->
                            {{-- <h6>Informasi Umum</h6> --}}
                            <section>
                                <div class="row mx-3 pt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Nama Sekolah<span class="text-danger">*</span></h6>
                                            <input type="text" name="name" class="form-control mb-3"
                                                value="{{ old('name', $school->name) }}" placeholder="Masukkan nama sekolah">
                                            @error('name')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>NPSN<span class="text-danger">*</span></h6>
                                            <input type="number" name="npsn" class="form-control mb-3"
                                                value="{{ old('npsn', $school->npsn) }}" placeholder="Masukkan NPSN sekolah">
                                            @error('npsn')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Email<span class="text-danger">*</span></h6>
                                            <input type="email" name="email" class="form-control mb-3"
                                                value="{{ old('email', $school->email) }}" placeholder="Masukkan email sekolah">
                                            @error('email')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Password</h6>
                                            <input type="password" name="password" class="form-control mb-3"
                                                value="{{ old('password') }}" placeholder="Masukkan password sekolah">
                                            @error('password')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Logo<span class="text-danger">*</span></h6>
                                            <input class="form-control mb-3" name="logo" type="file" id="imageInput"
                                                onchange="previewFile()" value="{{ old('logo') }}">
                                            <div id="imagePreview" class="mt-2 mb-2">
                                                <img id="previewImg" alt="" src="{{ asset('storage/'.$school->logo) }}"
                                                    style="width: 200px; height: auto; object-fit: cover;" />
                                            </div>
                                            @error('logo')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Nomor Telepon<span class="text-danger">*</span></h6>
                                            <input type="number" name="phone_number" class="form-control mb-3"
                                                value="{{ old('phone_number', $school->phone_number) }}"
                                                placeholder="Masukkan nomor telepon sekolah">
                                            @error('phone_number')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3 mx-4">
                                    <button type="button" class="btn btn-primary next-step">Berikutnya</button>
                                </div>
                            </section>

                            <!-- Step 2 -->
                            {{-- <h6>Billing & Address</h6> --}}
                            <section>

                                <div class="row mx-3 pt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Provinsi<span class="text-danger">*</span></h6>
                                            <select class="form-select mr-sm-2 mb-4 province select2 select2-province" name="province_id">
                                                <option>Pilih provinsi</option>
                                                @forelse ($provinces as $province)
                                                    <option value="{{ $province->id }}" {{ $school->province_id == $province->id ? 'selected' : '' }}>{{ $province->name }}</option>
                                                @empty
                                                    <option disabled>Data tidak ditemukan</option>
                                                @endforelse
                                            </select>
                                            @error('province_id')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Kota/Kabupaten<span class="text-danger">*</span></h6>
                                            <select class="form-select mr-sm-2 mb-4 select2 select2-regency city" name="city_id">
                                                <option selected value="{{ $school->city->id }}">{{ $school->city->name }}</option>
                                            </select>
                                            @error('city_id')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <h6>Kecamatan<span class="text-danger">*</span></h6>
                                            <select class="form-select mr-sm-2 mb-4 select2 select2-subdistrict sub-district" name="sub_district_id">
                                                <option selected value="{{ $school->subDistrict->id }}">{{ $school->subDistrict->name }}</option>
                                            </select>
                                            @error('sub_district_id')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                            <h6>Kode Pos<span class="text-danger">*</span></h6>
                                            <input type="number" name="pas_code" value="{{ old('pas_code', $school->pas_code) }}"
                                                class="form-control mb-3" placeholder="Masukkan kode pos">
                                            @error('pas_code')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h6>Alamat<span class="text-danger">*</span></h6>
                                            <textarea name="address" class="form-control mb-4" rows="3" placeholder="Masukkan alamat sekolah">{{ old('address', $school->address) }}</textarea>
                                            @error('address')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h6 class="mb-3">Tingkatan<span class="text-danger">*</span></h6>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    id="customControlValidation2" name="level" value="sd/mi" {{ $school->level == 'sd/mi' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="customControlValidation2">
                                                    <img src="{{ asset('admin_assets/dist/images/backgrounds/sd.png') }}"
                                                        alt="SD/MI" style="width: 250px; height: auto;"
                                                        class="mb-3">
                                                    <h6>SD/MI</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    id="customControlValidation3" name="level" value="smp/mts" {{ $school->level == 'smp/mts' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="customControlValidation3">
                                                    <img src="{{ asset('admin_assets/dist/images/backgrounds/smp.png') }}"
                                                        alt="SMP/MTS" style="width: 250px; height: auto;"
                                                        class="mb-3">
                                                    <h6>SMP/MTS</h6>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    id="customControlValidation4" name="level" value="sma/smk/ma" {{ $school->level == 'sma/smk/ma' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="customControlValidation4">
                                                    <img src="{{ asset('admin_assets/dist/images/backgrounds/sma.png') }}"
                                                        alt="SMA/SMK/MA" style="width: 250px; height: auto;"
                                                        class="mb-3">
                                                    <h6>SMA/SMK/MA</h6>
                                                </label>
                                            </div>
                                        </div>
                                        @error('level')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>


                                </div>

                                <div class="d-flex justify-content-end mt-3 mx-4">
                                    <button type="button"
                                        class="btn mb-1 waves-effect waves-light btn-outline-primary prev-step">Kembali</button>
                                    <button type="button"
                                        class="btn mb-1 waves-effect waves-light btn-rounded btn-primary ms-3 next-step">Berikutnya</button>
                                </div>
                            </section>

                            <!-- Step 3 -->
                            {{-- <h6>Review Order</h6> --}}
                            <section>
                                <div class="row mx-3 pt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Kepala Sekolah<span class="text-danger">*</span></h6>
                                            <input type="text" name="head_master" value="{{ old('head_master', $school->head_master) }}"
                                                class="form-control mb-3" placeholder="Masukkan nama kepala sekolah">
                                            @error('head_master')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>NIP Kepala Sekolah (opsional)</h6>
                                            <input type="number" name="nip" value="{{ old('nip', $school->nip) }}"
                                                class="form-control mb-3" placeholder="Masukkan NIP Kepala Sekolah">
                                            @error('nip')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Web (Opsional)</h6>
                                            <input type="text" name="website" value="{{ old('website', $school->website) }}"
                                                class="form-control mb-3" placeholder="Masukkan website sekolah">
                                            @error('website')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Jenis Sekolah<span class="text-danger">*</span></h6>
                                            <select class="form-select mr-sm-2 mb-4" id="inlineFormCustomSelect"
                                                name="type">
                                                <option value="negeri" {{ $school->type == 'negeri' ? 'selected' : '' }}>Negeri</option>
                                                <option value="swasta" {{ $school->type == 'swasta' ? 'selected' : '' }}>Swasta</option>
                                            </select>
                                            @error('type')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h6>Deskripsi (Opsional)</h6>
                                            <textarea name="description" class="form-control mb-4" rows="3" placeholder="Masukkan deskripsi sekolah">{{ old('description', $school->description) }}</textarea>
                                            @error('description')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="mb-3">Akreditasi</h6>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    id="customControlValidation2" name="accreditation" value="A" {{ $school->accreditation == 'A' ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="customControlValidation2">A</label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    id="customControlValidation3" name="accreditation" value="B" {{ $school->accreditation == 'B' ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="customControlValidation3">B</label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    id="customControlValidation4" name="accreditation" value="C" {{ $school->accreditation == 'C' ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="customControlValidation4">C</label>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input"
                                                    id="customControlValidation4" name="accreditation"
                                                    value="Tidak Terakreditasi" {{ $school->accreditation == 'Tidak Terakreditasi' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="customControlValidation4">Tidak
                                                    Terakreditasi</label>
                                            </div>
                                        </div>
                                        @error('accreditation')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3 mx-4">
                                    <button type="button"
                                        class="btn mb-1 waves-effect waves-light btn-outline-primary prev-step">Kembali</button>
                                    <button type="submit"
                                        class="btn mb-1 waves-effect waves-light btn-rounded btn-primary ms-3">Simpan</button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.select2-province').select2({
                dropdownParent: $('.container')
            });

            $('.select2-regency').select2({
                dropdownParent: $('.container')
            });

            $('.select2-subdistrict').select2({
                dropdownParent: $('.container')
            });
        });
    </script>

    <script>
        $('.province').change(function() {
            var id = $(this).val();
            getCities(id);
        })

        function getCities(id) {
            $.ajax({
                url: "/get-cities",
                method: "GET",
                data: {
                    province_id: id
                },
                dataType: "JSON",
                beforeSend: function() {
                    $('.city').html('')
                },
                success: function(response) {
                    $.each(response.data, function(index, data) {
                        $('.city').append('<option value="' + data.id + '">' + data.type + ' ' + data
                            .name + '</option>')
                    });
                }
            })
        }
    </script>
    <script>
        $('.city').change(function() {
            var id = $(this).val();
            getSubDistrict(id);
        })

        function getSubDistrict(id) {
            $.ajax({
                url: "/get-sub-districts",
                method: "GET",
                data: {
                    city_id: id
                },
                dataType: "JSON",
                beforeSend: function() {
                    $('.sub-district').html('')
                },
                success: function(response) {
                    $.each(response.data, function(index, data) {
                        $('.sub-district').append('<option value="' + data.id + '">' + data.name +
                            '</option>')
                    });
                }
            })
        }
    </script>
    <script>
        $(document).ready(function() {
            var currentSection = 0;
            var sections = $("form > section");
            var steps = $(".steps li");

            sections.hide();
            sections.eq(currentSection).show();

            $(".next-step").click(function() {
                if (currentSection < sections.length - 1) {
                    sections.eq(currentSection).hide();
                    steps.eq(currentSection).removeClass("current").addClass("done");
                    currentSection++;
                    sections.eq(currentSection).show();
                    steps.eq(currentSection).removeClass("disabled").addClass("current");
                }
            });

            $(".prev-step").click(function() {
                if (currentSection > 0) {
                    sections.eq(currentSection).hide();
                    steps.eq(currentSection).removeClass("current").addClass("disabled");
                    currentSection--;
                    sections.eq(currentSection).show();
                    steps.eq(currentSection).removeClass("done").addClass("current");
                }
            });
        });
    </script>

    <script>
        function previewFile() {
            const preview = document.getElementById('previewImg');
            const file = document.getElementById('imageInput').files[0];
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                preview.src = reader.result;
                preview.style.display = 'block';
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
