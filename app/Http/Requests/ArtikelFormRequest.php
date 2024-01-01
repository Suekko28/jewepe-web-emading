<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtikelFormRequest extends FormRequest
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
            'image' => ['required','image','mimes:jpeg,png,jpg','max:2048'],
            'judul_artikel'=>['required','string','max:100'],
            'isi_artikel' => ['required','string','max:100'],
            'status_publish' => ['required', 'string', 'in:publish,draft'],
            
        ];
    }
}
