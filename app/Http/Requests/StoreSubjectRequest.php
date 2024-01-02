<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
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
            'title' => 'required|string|max:80',
            'lecturer_id' => 'required|string',
            'lecturer_name' => 'required|string',        
            'semester' => 'string|max:80',
            'sks' => 'integer',
            'academic_year' => 'string|max:9',
            'code' => 'required|string|max:8',
            'description' => 'string'
        ];
    }
}
