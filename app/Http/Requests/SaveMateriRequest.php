<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveMateriRequest extends FormRequest
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
            'kursus_id' => 'required|exists:kursus,id',
            'judul' => 'required|max:100',
            'deskripsi' => 'nullable|min:3',
            'link_embed' => 'required'
            
        ];
    }
}
