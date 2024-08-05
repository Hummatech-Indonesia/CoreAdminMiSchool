<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Traits\UploadTrait;
use Carbon\Carbon;
use Illuminate\Support\Str;

class NewsService
{
    use UploadTrait;

    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        // Hapus file lama jika ada.
        if ($old_file) $this->remove($old_file);
        // Unggah file baru dan kembalikan path-nya.
        return $this->upload($disk, $file);
    }

    public function store(StoreNewsRequest $request): array|bool
    {
        // Validasi data request.
        $data = $request->validated();
        // Buat slug dari judul berita.
        $data['slug'] = Str::slug($data['title']);
        $data['date'] = Carbon::now()->format('Y-m-d');

        // Jika ada file foto yang valid, simpan file tersebut.
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store(UploadDiskEnum::NEWS->value, 'public');
        }
        return $data;
    }

    public function update(News $newses, UpdateNewsRequest $request): array|bool
    {
        // Validasi data request.
        $data = $request->validated();
        // Buat slug baru dari judul berita.
        $data['slug'] = Str::slug($data['title']);
        $data['date'] = Carbon::now()->format('Y-m-d');

        // Jika ada file foto baru yang valid, simpan file tersebut.
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Hapus file image lama.
            $this->remove($newses->image);
            $data['image'] = $request->file('image')->store(UploadDiskEnum::NEWS->value, 'public');
        } else {
            // Pertahankan image lama jika tidak ada file baru.
            $data['image'] = $newses->image;
        }

        return $data;
    }

    public function delete(News $newses)
    {
        // Hapus file foto jika ada.
        if ($newses->image != null) {
            $this->remove($newses->image);
        }
    }
}