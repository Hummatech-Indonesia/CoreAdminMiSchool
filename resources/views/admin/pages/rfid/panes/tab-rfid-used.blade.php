<div class="row mt-5 mb-4">
    <div class="col-lg-6 mb-3">
        <form class="d-flex gap-2">
            <div class="position-relative">
                <div class="">
                    <input type="text" name="search" class="form-control search-chat py-2 px-5 ps-5" id="search-name" placeholder="Cari">
                    <i class="ti ti-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
                </div>
            </div>

            <div class="d-flex gap-2">
                <select name="filter" class="form-select" id="search-status">
                    <option value="">Tampilkan semua</option>
                    <option value="terbaru">Terbaru</option>
                    <option value="terlama">Terlama</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-md">filter</button>
            </div>
        </form>
    </div>
    <div class="col-lg-6 mb-3 d-flex justify-content-end">
        <form action="{{ route('rfid.store') }}" method="post" class="d-flex align-items-center gap-3">
            <span class="">Tambah RFID: </span>
            @csrf
            <input type="text" name="rfid" class="form-control w-auto rfid-input" id="rfid-input">
            @error('rfid')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <button type="submit" class="btn btn-rounded btn-primary">Tambah</button>
        </form>
    </div>
</div>

<div class="mt-2">
    <div class="table-responsive rounded-2">
        <table class="table border text-nowrap customize-table mb-0 align-middle text-center">
            <thead>
                <tr>
                    <th>Nomor RFID</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($usedRfids as $rfid)
                <tr>
                    <td>{{ $rfid->rfid }}</td>
                    <td>
                        <span class="mb-1 badge px-4 font-medium bg-light-{{ $rfid->status->color() }} text-{{ $rfid->status->color() }}">{{ $rfid->status->label() }}</span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center align-middle">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('admin_assets/dist/images/empty/no-data.png') }}" alt="" width="300px">
                            <p class="fs-5 text-dark text-center mt-2">
                                Belum ada RFID
                            </p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="pagination justify-content-end mb-0">
    <x-paginate-component :paginator="$usedRfids" />
</div>
