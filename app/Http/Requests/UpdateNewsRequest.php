<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
            'category_id' => 'required|exists:news_categories,id,'.$this->id,
            'title' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
            'date' => 'required|date',
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'Kategori berita harus diisi',
            'category_id.exists' => 'Kategori berita tidak ditemukan',
            'title.required' => 'Judul berita harus diisi',
            'image.required' => 'Gambar berita harus diisi',
            'image.mimes' => 'Gambar berita harus berekstensi jpeg, png, atau jpg',
            'date.required' => 'Tanggal berita harus diisi',
            'date.date' => 'Tanggal berita harus berupa tanggal yang valid',
            'description.required' => 'Deskripsi berita harus diisi',
        ];
    }
}
