<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiPostRequest extends FormRequest
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
            //
            'nama' => 'required|min:3|max:60',
            'alamat' => 'required',
            'umur' => 'required|numeric',
            'gaji' => 'nullable|numeric',
            'phone' => 'nullable|numeric|unique:pegawais,phone',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama harus diisi',
            'nama.min' => 'Nama minimal 3 karakter',
            'nama.max' => 'Nama maximal 60 karakter',
            'alamat.required' => 'Alamat harus diisi',
            'gaji.numeric' => 'Gaji harus berupa angka',
            'umur.required' => 'Umur harus diisi',
            'umur.numeric' => 'Umur harus berupa angka',
            'phone.numeric' => 'No phone harus berupa angka',
            'phone.unique' => 'No phone telah terdaftar'
        ];
    }
}
