<?php

namespace App\Services;

use App\Http\Requests\StoreNewsCategoryRequest;
use App\Http\Requests\UpdateNewsCategoryRequest;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Str;

class NewsCategoryService
{
    public function store(StoreNewsCategoryRequest $request): array|bool
    {
        // Validasi data request.
        $data = $request->validated();
        // Buat slug dari nama kategori.
        $data['slug'] = Str::slug($data['name']);
        return $data;
    }

    public function update(NewsCategory $news_category, UpdateNewsCategoryRequest $request): array|bool
    {
        // Validasi data request.
        $data = $request->validated();
        // Buat slug baru dari nama kategori.
        $data['slug'] = Str::slug($data['name']);

        return $data;
    }

    public function delete(NewsCategory $newsCategory)
    {
        //
    }
}