<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSchoolRequest extends FormRequest
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
            'name' => 'required|max:255',
            'logo' => 'nullable|mimes:png,jpg,jpeg',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
            'npsn' => 'required|max:8',
            'phone_number' => 'required|max:15',
            'province_id' => 'required|exists:provinces,id',
            'city_id' => 'required|exists:cities,id',
            'sub_district_id' => 'required|exists:sub_districts,id',
            'pas_code' => 'required|max:10',
            'address' => 'required',
            'head_master' => 'required|max:255',
            'nip' => 'nullable|max:18',
            'website' => 'nullable|url|max:255',
            'description' => 'nullable',
            'active' => 'nullable',
            'type' => 'required',
            'level' => 'required',
            'accreditation' => 'nullable',
        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama sekolah wajib diisi',
            'name.max' => 'Nama sekolah maksimal :max karakter',
            'logo.mimes' => 'Hanya mendukung file ekstensi png, jpg atau jpeg',
            'email.required' => 'Email sekolah wajib diisi',
            'email.email' => 'Email sekolah tidak valid',
            'email.max' => 'Email sekolah maksimal :max karakter',
            'password.required' => 'Password sekolah wajib diisi',
            'password.min' => 'Password sekolah minimal :min karakter',
            'password.max' => 'Password sekolah maksimal :max karakter',
            'npsn.required' => 'NPSN wajib diisi',
            'npsn.max' => 'NPSN maksimal :max karakter',
            'phone_number.required' => 'Nomor telepon wajib diisi',
            'phone_number.max' => 'Nomor maksimal :max karakter',
            'province.required' => 'Provinsi wajib diisi',
            'province.exists' => 'Provinsi tidak ditemukan',
            'city.required' => 'Kabupaten atau kota wajib diisi',
            'city.exists' => 'Kabupaten atau kota tidak ditemukan',
            'sub_district_id.required' => 'Kecamatan wajib diisi',
            'sub_district_id.exists' => 'Kecamatan tidak ditemukan',
            'pas_code.required' => 'Kode pos wajib diisi',
            'pas_code.max' => 'Kode pos harus terdiri dari maximal 10 karakter',
            'address.required' => 'Alamat wajib diisi',
            'head_master.required' => 'Nama kepala sekolah wajib diisi',
            'head_master.max' => 'Nama kepala sekolah maksimal :max karakter',
            'nip.max' => 'NIP maksimal :max karakter',
            'website.uel' => 'Website harus berupa url',
            'website.max' => 'Website maksimal :max karakter',
            'type.required' => 'Tipe sekolah wajib di isi',
            'level.required' => 'Jenjang wajib di isi',
        ];
    }
}
