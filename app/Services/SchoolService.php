<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\StoreSchoolRequest;
use App\Traits\UploadTrait;
use App\Http\Requests\UpdateSchoolRequest;
use App\Models\School;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SchoolService
{
    use UploadTrait;

    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        // Hapus file lama jika ada.
        if ($old_file) $this->remove($old_file);
        // Unggah file baru dan kembalikan path-nya.
        return $this->upload($disk, $file);
    }

    public function store(StoreSchoolRequest $request): array|bool
    {
        // Validasi data request.
        $data = $request->validated();
        // Hash password.
        $data['password'] = Hash::make($data['password']);
        // Buat slug dari nama sekolah.
        $data['slug'] = Str::slug($data['name']);

        // Jika ada file logo yang valid, simpan file tersebut.
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            // $compressedImage = $this->compressImage($data['slug'], $request->hasFile('logo'));
            $data['logo'] = $request->file('logo')->store(UploadDiskEnum::SCHOOL->value, 'public');
            // $data['logo'] = $this->upload(UploadDiskEnum::SCHOOL->value, $compressedImage);
        }
        return $data;
    }

    public function update(School $school, UpdateSchoolRequest $request): array|bool
    {
        // Validasi data request.
        $data = $request->validated();
        // Hash password baru.
        $data['password'] = Hash::make($data['password']);
        // Buat slug baru dari nama sekolah.
        $data['slug'] = Str::slug($data['name']);

        // Jika ada file logo baru yang valid, simpan file tersebut.
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            // Hapus file logo lama.
            $this->remove($school->logo);
            $compressedImage = $this->compressImage($data['slug'], $request->hasFile('logo'));
            // $data['logo'] = $request->file('logo')->store(UploadDiskEnum::SCHOOL->value, 'public');
            $data['logo'] = $this->upload(UploadDiskEnum::SCHOOL->value, $compressedImage);
        } else {
            // Pertahankan logo lama jika tidak ada file baru.
            $data['logo'] = $school->logo;
        }

        return $data;
    }

    public function delete(School $school)
    {
        // Hapus file logo jika ada.
        if ($school->logo != null) {
            $this->remove($school->logo);
        }
    }
}
