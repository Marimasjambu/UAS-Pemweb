<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePegawaiRequest extends FormRequest
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
            'npwp' => 'string|max:20',
            'pegawai_name' => 'required|string',
            'no_ktp' => 'required|string|max:20',        
            'alamat_ktp' => 'string',
            'ttl' => 'string',            
            'jns_kelamin' => 'string',
            'email' => 'string|max:30',
            'phone' => 'string',
            'phone_perusahaan' => 'string',
            'no_npwp' => 'string|max:20',
            'kependudukan' => 'string',
        ];
    }
}
