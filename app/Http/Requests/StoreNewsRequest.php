<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'news_category_id' => 'required|exists:news_categories,id',
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpeg,png,jpg',
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'news_category_id.required' => 'Kategori berita harus diisi',
            'news_category_id.exists' => 'Kategori berita tidak ditemukan',
            'title.required' => 'Judul berita harus diisi',
            'title.max' => 'Judul berita tidak boleh lebih dari :max karakter',
            'image.required' => 'Gambar berita harus diisi',
            'image.mimes' => 'Gambar berita harus berekstensi jpeg, png, atau jpg',
            'description.required' => 'Deskripsi berita harus diisi',
        ];
    }
}
