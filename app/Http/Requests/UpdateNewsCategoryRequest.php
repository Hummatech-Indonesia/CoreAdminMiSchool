<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsCategoryRequest extends FormRequest
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
            'name' => 'required|max:255|unique:news_categories,name,'.$this->id,
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama kategori berita harus diisi',
            'name.max' => 'Nama kategori berita tidak boleh lebih dari :max karakter',
        ];
    }
}
